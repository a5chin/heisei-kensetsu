<?php if ( post_password_required() ) {
	return;
}
$comments_number = absint( get_comments_number() );
?>
<?php if ( comments_open() || have_comments()): ?><div id="comments" class="comments">
	<?php $args = array(
		'title_reply' => 'コメントをどうぞ！',
		'label_submit' => 'コメントする'
	);
	comment_form( $args ); ?>
	<?php if( have_comments() ):?>
	<h3 class="comments-ttl"><?php echo $comments_number;?>件のコメント</h3>
	<ol class="comments-list">
		<?php wp_list_comments( 'avatar_size=80' ); ?>
	</ol>
	<?php endif; ?>
</div><?php endif;?>
