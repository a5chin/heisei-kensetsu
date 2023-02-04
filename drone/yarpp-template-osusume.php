<?php
/*
YARPP Template: オススメ
*/
?>
<?php if (have_posts()) : ?>
    <aside class="content-aside">
        <div class="yarpp__title">関連記事</div>
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

    </aside>
<?php else : ?>
<?php endif; ?>
