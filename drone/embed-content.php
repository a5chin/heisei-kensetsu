<?php
/**
 * Contains the post embed content template part
 *
 * When a post is embedded in an iframe, this file is used to create the content template part
 * output if the active theme does not include an embed-content.php template.
 *
 * @package WordPress
 * @subpackage Theme_Compat
 * @since 4.5.0
 */
?>
<style type="text/css">
body {
    font-size: 16px;
    line-height: 1.5;
    font-family: -apple-system, BlinkMacSystemFont, Helvetica Neue, Segoe UI, Hiragino Kaku Gothic ProN, Hiragino Sans, ヒラギノ角ゴ ProN W3, Arial, メイリオ, Meiryo, sans-serif;
    color: #222;
}

.wp-embed-share-dialog {
	display: none;
}

img.wp-embed-site-icon {
    width: 16px;
    padding-right: .3em;
}

.wp-embed-more,.screen-reader-text {
  display: none;
}

/*ブログカード
----------------------------------*/
iframe.wp-embedded-content {
  margin: 0;
  width: 100%;
}

.blogcard {
  line-height: 1;
  background-color: #ffffff;
  word-wrap: break-word;
  display: block;
  padding: 1.5em 1em;
}

.blogcard.blogcard_embed {
  margin: 0;
  padding: 0;
  border: none;
}

.blogcard_link img {
  margin: 0;
  max-width: 100%;
  height: auto;
  vertical-align: -40%;
  line-height: 1;
}

.blogcard a {
  text-decoration: none;
  opacity: 1;
  transition: all 0.3s ease;
  color: #222;
}

.blogcard a:hover {
  opacity: 0.6;
}

.blogcard_thumbnail {
  width: 250px;
  margin: 0 auto 1em;
}
.blogcard_thumbnail a {
  position: relative;
  overflow: hidden;
  padding-top: 56.25%;
  display: block;
}
.blogcard_thumbnail a img {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.blogcard_content {
  flex: 1;
}

.blogcard_title {
  font-size: 1em;
  font-weight: 600;
  line-height: 1.4;
  padding-bottom: .75em;
}

.blogcard_excerpt {
  font-size: 0.85em;
  line-height: 1.6;
  padding-bottom: 1em;
}

.blogcard_link {
  font-size: 0.65em;
  line-height: 1;
}

@media screen and (min-width: 608px) {
  .blogcard {
    display: flex;
    padding: 1.5em;
  }

  .blogcard_thumbnail {
    margin-right: 1em;
    margin-bottom: 0;
  }
}

</style>
<div class="blogcard">
 <div class="blogcard_thumbnail">
 	<?php if ( has_post_thumbnail() ) { ?>
            <a href="<?php the_permalink();?>"><?php the_post_thumbnail( 'large', array( 'class' => 'article-list__link--image' )  ); ?></a>
        <?php } else {?>
            <a href="<?php the_permalink();?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/noimage.png"></a>
    <?php } ?>
 </div>
 <div class="blogcard_content">
  <div class="blogcard_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
  <div class="blogcard_excerpt"><a href="<?php the_permalink(); ?>"><?php echo mb_substr(the_excerpt_embed(), 0, 60); ?></a></div>
  <div class="blogcard_link"><?php the_embed_site_title(); ?></div>
 </div>
</div>
