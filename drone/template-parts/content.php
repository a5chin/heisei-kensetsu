<li <?php post_class('blog__item'); ?>>
  <a href="<?php the_permalink() ?>" class="blog__link">
    <figure class="blog__figure">
      <?php if (has_post_thumbnail()) { ?>
        <?php the_post_thumbnail('large', array('class' => 'blog__image')); ?>
      <?php } else { ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/noimage.png" class="blog__image">
      <?php } ?>
    </figure>
    <div class="blog__unit">
      <p class="blog__title"><?php
                              if (mb_strlen($post->post_title) > 40) {
                                $title = mb_substr($post->post_title, 0, 40);
                                echo $title . '...';
                              } else {
                                echo $post->post_title;
                              }
                              ?></p>
      <span class="blog__date"><?php the_time('Y.n.j'); ?></span>
    </div>
  </a>
</li>
