<?php get_header();?>


<div class="page-header">
    <div class="page-header__inner">
        <h1 class="page-header__title"><?php the_title(); ?></h1>
    </div>
</div>

<div class="container page-container">
    <div class="content">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                the_content();
            }
        }
        ?>
    </div>
</div>


<?php get_footer(); ?>
