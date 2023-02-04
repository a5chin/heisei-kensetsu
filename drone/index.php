<?php get_header(); ?>
<?php
$title = $page->post_title;
$cat = get_queried_object();
$cat_name = $cat->name;

$page_title    = '';

if (is_search()) {
    global $wp_query;
    if ($wp_query->found_posts) {
        $page_subtitle = sprintf(
            '%s件の記事が見つかりました',
            number_format_i18n($wp_query->found_posts)
        );
    } else {
        $page_subtitle = '記事が見つかりませんでした';
    }
    $page_title = sprintf(
        '「' . get_search_query() . '」の検索結果：'
    ) . $page_subtitle;
} elseif (is_category()) {
    $page_title    =  $cat_name;
} elseif (is_archive()) {
    if (is_year()) {
        $page_title = get_query_var('year') . '年';
    } elseif (is_month()) {
        $page_title = get_query_var('year') . '年' . get_query_var('monthnum') . '月';
    } else {
        $page_title = get_query_var('year') . '年' . get_query_var('monthnum') . '月' . get_query_var('day') . '日';
    }
} elseif (is_404()) {
    $page_title    = 'ページが見つかりません';
} elseif (is_home()) {
    $page_title    = get_bloginfo('name');
}
?>
<div class="page-header">
    <div class="page-header__inner">
        <h1 class="page-header__title"><?php echo $page_title; ?></h1>
    </div>
</div>
<div class="blog-container">
    <main class="main-content">
        <ul class="blog__list">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post(); ?>
                    <?php get_template_part('template-parts/content'); ?>
            <?php    }
            }
            ?>
        </ul>
        <nav class="page-navigation" role="navigation" aria-label="投稿">
            <?php the_posts_pagination(
                array(
                    'mid_size'      => 2, // 現在ページの左右に表示するページ番号の数
                    'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
                    'prev_text'     => __('前へ'), // 「前へ」リンクのテキスト
                    'next_text'     => __('次へ'), // 「次へ」リンクのテキスト
                    'type'          => 'list', // 戻り値の指定 (plain/list)
                )
            ); ?>
        </nav>
    </main>

    <?php get_template_part('template-parts/aside'); ?>

</div>
<?php get_footer(); ?>
