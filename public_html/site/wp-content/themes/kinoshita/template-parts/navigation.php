<?php
/**
 * Displays the next and previous post navigation in single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

$next_post = get_next_post();
$prev_post = get_previous_post();

if ( $next_post || $prev_post ) {

	$pagination_classes = '';

	if ( ! $next_post ) {
		$pagination_classes = ' only-one only-prev';
	} elseif ( ! $prev_post ) {
		$pagination_classes = ' only-one only-next';
	}

	?>

	<nav class="pagination-single section-inner<?php echo esc_attr( $pagination_classes ); ?>" aria-label="<?php esc_attr_e( 'Post', 'twentytwenty' ); ?>" role="navigation">
		<div class="pagination-single-inner">
   <?php if (get_post_type() === 'medias')://ブログ投稿 ?>
   <div class="flexLeft">
    <a href="<?php echo home_url(); ?>/news">
     <div class="pagination-btn all-post"></div>
    </a>
   </div>
   <?php elseif (get_post_type() === 'interviews')://スタッフインタビュー投稿 ?>
   <div class="flexLeft">
    <a href="<?php echo home_url(); ?>/interview">
     <div class="pagination-btn all-post"></div>
    </a>
   </div>
   <?php endif; ?>
   
   <div class="flexRight">
			<?php if ( $prev_post ) { ?>
				<a class="previous-post" href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>">
     <div class="pagination-btn previous-post"></div>
				</a>
				<?php } if ( $next_post ) { ?>
				<a class="next-post" href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>">
     <div class="pagination-btn next-post"></div>
				</a>
				<?php } ?>
   </div>
		</div><!-- .pagination-single-inner -->
	</nav><!-- .pagination-single -->

	<?php
}
