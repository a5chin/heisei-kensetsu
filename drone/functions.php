<?php

//WordPressセットアップ
//--------------------------------------------------------------------
function rindou_theme_support()
{

    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(1200, 9999);
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('editor-styles');
    add_theme_support('custom-header');
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style',
        )
    );
}
add_action('after_setup_theme', 'rindou_theme_support');


//スタイルシート、JS読み込み
//--------------------------------------------------------------------
function rn_scripts()
{
    wp_enqueue_style('rn-css-ress', get_template_directory_uri() . '/assets/css/ress.min.css', array(), '20220714','');
    wp_enqueue_style('rn-css-style', get_template_directory_uri() . '/assets/css/style.css', array(), '20220714','');
    wp_enqueue_script('rn-js-fontawesome', get_template_directory_uri() . '/assets/js/all.js', array(), '20220714', true);
    wp_enqueue_script('rn-js-style', get_template_directory_uri() . '/assets/js/style.js', array(), '20220714', true);
    if (is_page('price')) {
        wp_enqueue_script('rn-scroll-hint', get_template_directory_uri() . '/assets/js/scroll-hint.min.js', array(), '20220714', true);
        wp_enqueue_style('rn-scroll-hint', get_template_directory_uri() . '/assets/css/scroll-hint.css', array(), '20220714','');
    }

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'rn_scripts');

add_editor_style(get_template_directory_uri() . '/assets/css/editor-style.css');



//抜粋
//--------------------------------------------------------------------
function rindou_change_excerpt_length($length)
{
    return 80;
}
add_filter('excerpt_length', 'rindou_change_excerpt_length', 999);

function rindou_change_excerpt_more($more)
{
    $html = '&thinsp;...&thinsp;<span class="article-list__text-more">続きを読む</span>';
    return $html;
}

add_filter('excerpt_more', 'rindou_change_excerpt_more');



// 「メールアドレスが公開されることはありません。 * が付いている欄は必須項目です」の文言を変更
//--------------------------------------------------------------------
add_filter('comment_form_defaults', 'change_comment_email_notes');

function change_comment_email_notes($defaults)
{

    $defaults['comment_notes_before'] = '<p class="comment-notes">メールアドレスが公開されることはありません。</p>';

    return $defaults;
}

// アーカイブの余計なタイトルを削除
//--------------------------------------------------------------------
add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_month()) {
        $title = single_month_title('', false);
    }
    return $title;
});

//ウィジェット
//--------------------------------------------------------------------
function rindou_sidebar_registration()
{

    $shared_args = array(
        'before_title'  => '<h3 class="widget-ttl">',
        'after_title'   => '</h3>',
        'before_widget' => '<aside class="aside__list widget %2$s">',
        'after_widget'  => '</aside>',
    );

    register_sidebar(
        array_merge(
            $shared_args,
            array(
                'name'        => __('ウィジェット'),
                'id'          => 'sidebar-1',
                'description' => __('記事の下に表示されます。'),
            )
        )
    );
}

add_action('widgets_init', 'rindou_sidebar_registration');



//著者情報のSNS追加
//--------------------------------------------------------------------
function update_profile_fields($contactmethods)
{
    //項目の追加
    $contactmethods['facebook'] = 'Facebook';
    $contactmethods['twitter'] = 'Twitter';
    $contactmethods['instagram'] = 'Instagram';
    $contactmethods['line'] = 'LINE';
    $contactmethods['contact_url'] = 'お問い合わせURL';

    return $contactmethods;
}
add_filter('user_contactmethods', 'update_profile_fields', 10, 1);

//追加した独自項目の更新
function update_user_profile_fields($user_id, $old_user_data)
{
    //テキストエリアを更新
    if (!empty($_POST['free_input'])) {
        update_user_meta($user_id, 'free_input', $_POST['free_input'], $old_user_data->t_area);
    }
}
add_action('profile_update', 'update_user_profile_fields', 10, 2);


//パンくずリスト
//--------------------------------------------------------------------
function breadcrumb()
{
    if (!is_front_page()) {
        $home = '<li class="breadcrumb-item"><a href="' . get_bloginfo('url') . '" class="breadcrumb-link">HOME</a></li>';

        echo '<div class="container"><ul class="breadcrumb-list">';
    }
    if (is_front_page()) {
        // トップページの場合
    } else if (is_home()) {
        echo $home;
        the_archive_title('<li class="breadcrumb-item">', '</li>');
    } else if (is_category()) {
        // カテゴリページの場合
        $cat = get_queried_object();
        $cat_id = $cat->parent;
        $cat_list = array();
        while ($cat_id != 0) {
            $cat = get_category($cat_id);
            $cat_link = get_category_link($cat_id);
            array_unshift($cat_list, '<li class="breadcrumb-item"><a href="' . $cat_link . '" class="breadcrumb-link">' . $cat->name . '</a></li>');
            $cat_id = $cat->parent;
        }
        echo $home;
        foreach ($cat_list as $value) {
            echo $value;
        }
        the_archive_title('<li class="breadcrumb-item">', '</li>');
    } else if (is_archive()) {
        // 月別アーカイブ・タグページの場合
        echo $home;
        the_archive_title('<li class="breadcrumb-item">', '</li>');
    } else if (is_single()) {
        // 投稿ページの場合
        $cat = get_the_category();
        if (!empty($cat[0]->cat_ID)) $cat_id = $cat[0]->cat_ID;
        $cat_list = array();
        while ($cat_id != 0) {
            $cat = get_category($cat_id);
            $cat_link = get_category_link($cat_id);
            array_unshift($cat_list, '<li class="breadcrumb-item"><a href="' . $cat_link . '" class="breadcrumb-link">' . $cat->name . '</a></li>');
            $cat_id = $cat->parent;
        }
        foreach ($cat_list as $value) {
            echo $value;
        }
        the_title('<li class="breadcrumb-item">', '</li>');
    } else if (is_page()) {
        // 固定ページの場合
        echo $home;
        the_title('<li class="breadcrumb-item">', '</li>');
    } else if (is_search()) {
        // 検索ページの場合
        echo $home;
        echo '<li class="breadcrumb-item">「' . get_search_query() . '」の検索結果</li>';
    } else if (is_404()) {
        // 404ページの場合
        echo $home;
        echo '<li class="breadcrumb-item">ページが見つかりません</li>';
    }
    if (!is_front_page()) {
        echo "</ul></div>";
    }
}

//コンタクトフォームのメール確認
//--------------------------------------------------------------------
add_filter( 'wpcf7_validate_email', 'wpcf7_text_validation_filter_extend', 11, 2 );
add_filter( 'wpcf7_validate_email*', 'wpcf7_text_validation_filter_extend', 11, 2 );
function wpcf7_text_validation_filter_extend( $result, $tag ) {
    $type = $tag['type'];
    $name = $tag['name'];
    $_POST[$name] = trim( strtr( (string) $_POST[$name], "\n", " " ) );
    if ( 'email' == $type || 'email*' == $type ) {
        if (preg_match('/(.*)_confirm$/', $name, $matches)){
            $target_name = $matches[1];
            if ($_POST[$name] != $_POST[$target_name]) {
                if (method_exists($result, 'invalidate')) {
                    $result->invalidate( $tag,"確認用のメールアドレスが一致していません");
                } else {
                    $result['valid'] = false;
                    $result['reason'][$name] = '確認用のメールアドレスが一致していません';
                }
            }
        }
    }
    return $result;
}

//Jetpackを有効にした際に読み込まれるCSSとJavaScriptを無効化
//--------------------------------------------------------------------
add_filter( 'jetpack_implode_frontend_css', '__return_false' );
add_action( 'wp_enqueue_scripts', 'dequeue_devicepx', 20 );
function dequeue_devicepx() {
wp_dequeue_script( 'devicepx' );
}
