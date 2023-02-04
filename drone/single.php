<?php get_header(); ?>

<div class="page-header">
    <div class="page-header__inner">
        <h2 class="page-header__title"><?php echo get_bloginfo('name'); ?></h2>
    </div>
</div>

<div class="blog-container">
    <main class="main-content">
        <h1 class="single__title"><?php the_title(); ?></h1>
        <div class="blog-meta"><span class="blog-meta__date">投稿：<?php the_time('Y年n月j日'); ?></span><?php if (get_the_time('Y年n月j日') != get_the_modified_date('Y年n月j日')) : ?><span class="blog-meta__date">更新：<?php the_modified_date('Y年n月j日'); ?></span><?php endif; ?><span class="blog-meta__category"><i class="far fa-folder-open"></i><?php the_category(' , '); ?></span></div>
        <article class="content">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
            ?>
            <?php
                    the_content();
                }
            }
            ?>
        </article>
        <?php if (!in_category('voice')) : ?>
            <div class="author-box">
                <div class="author-box__profile">
                    <?php echo get_avatar(get_the_author_meta('ID'), 300); ?>
                </div>
                <div class="author-box__introduction">
                    <p class="author-box__profile--name"><?php the_author_posts_link(); ?></p>
                    <div class="author-box__profile--text"><?php echo wpautop(get_the_author_meta('user_description')); ?></div>
                    <?php if (get_the_author_meta('user_url') != "" || get_the_author_meta('facebook') != "" || get_the_author_meta('twitter') != "" || get_the_author_meta('instagram') != "" || get_the_author_meta('youtube') != "") : ?><ul class="author-box__introduction--sns"><?php endif; ?>
                        <?php if (get_the_author_meta('user_url') != "") : ?>
                            <li class="author-box__introduction--sns-item"><a href="<?php the_author_meta('user_url'); ?>" class="author-box__introduction--sns-item-link" target="_blank" rel="noopener"><i class="fas fa-globe fa-fw"></i>ホームページ</a></li>
                        <?php endif; ?>
                        <?php if (get_the_author_meta('facebook') != "") : ?>
                            <li class="author-box__introduction--sns-item"><a href="<?php the_author_meta('facebook'); ?>" class="author-box__introduction--sns-item-link" target="_blank" rel="noopener"><i class="fab fa-facebook-f fa-fw"></i>Facebook</a></li>
                        <?php endif; ?>
                        <?php if (get_the_author_meta('line') != "") : ?>
                            <li class="author-box__introduction--sns-item"><a href="<?php the_author_meta('line'); ?>" class="author-box__introduction--sns-item-link" target="_blank" rel="noopener"><i class="fab fa-line fa-fw"></i>友達追加</a></li>
                        <?php endif; ?>
                        <?php if (get_the_author_meta('instagram') != "") : ?>
                            <li class="author-box__introduction--sns-item"><a href="<?php the_author_meta('instagram'); ?>" class="author-box__introduction--sns-item-link" target="_blank" rel="noopener"><i class="fab fa-instagram fa-fw"></i>Instagram</a></li>
                        <?php endif; ?>

                        <?php if (get_the_author_meta('twitter') != "") : ?>
                            <li class="author-box__introduction--sns-item"><a href="<?php the_author_meta('twitter'); ?>" class="author-box__introduction--sns-item-link" target="_blank" rel="noopener"><i class="fab fa-twitter fa-fw"></i>Twitter</a></li>
                        <?php endif; ?>
                        <?php if (get_the_author_meta('user_url') != "" || get_the_author_meta('facebook') != "" || get_the_author_meta('twitter') != "" || get_the_author_meta('instagram') != "" || get_the_author_meta('youtube') != "") : ?>
                        </ul><?php endif; ?>
                </div>
            </div>
        <?php endif; ?>

        <?php
        if (function_exists('related_posts')) {
            related_posts();
        }
        ?>

        <?php if (!in_category('voice')) : ?>
            <?php comments_template(); ?>
        <?php endif; ?>

        <?php
        $next_post = get_next_post();
        $prev_post = get_previous_post();

        if ($next_post || $prev_post) {

            $pagination_classes = '';

            if (!$next_post) {
                $pagination_classes = ' only-one only-prev';
            } elseif (!$prev_post) {
                $pagination_classes = ' only-one only-next';
            }

        ?>

            <div class="single-navigation <?php echo esc_attr($pagination_classes); ?>">
                <?php
                if ($prev_post) {
                ?>

                    <a class="single-navigation__item--previous" href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>">
                        <span class="title"><i class="fas fa-chevron-left"></i><span class="title-inner"><?php echo wp_kses_post(get_the_title($prev_post->ID)); ?></span></span>
                    </a>

                <?php
                }

                if ($next_post) {
                ?>

                    <a class="single-navigation__item--next" href="<?php echo esc_url(get_permalink($next_post->ID)); ?>">
                        <span class="title"><span class="title-inner"><?php echo wp_kses_post(get_the_title($next_post->ID)); ?></span><i class="fas fa-chevron-right"></i></span>
                    </a>
                <?php
                }
                ?>
            </div>
        <?php
        }
        ?>
    </main>
    <?php get_template_part('template-parts/aside'); ?>
</div>
<?php get_footer(); ?>
