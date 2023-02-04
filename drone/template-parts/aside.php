<aside class="aside">
  <div class="author-box author-box--aside">
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
  <?php dynamic_sidebar('sidebar-1'); ?>
</aside>
