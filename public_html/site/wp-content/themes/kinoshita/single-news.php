<?php get_header(); ?>

<main id="siteContent" role="main" class="post">
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<div class="___sticky">
		<article class="-page interview">
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?>
			<header>
				<div class="wrapper">
					<span>News</span>
					<h1><?php the_title(); ?></h1>
					<div class="publish">
				 	<?php
			 		if ($terms = get_the_terms($post->ID, 'cat_news')) {
				 		foreach ( $terms as $term ) {
			 			echo '<p class="'.$term->slug.'">';
		 				echo esc_html($term->name);
	 					echo '</p>';
 					}
					 }
				 	else {
			 			echo '<p>お知らせ</p>';
		 			}
	 				?>
						<p>-</p>
 					<time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
					</div>
				</div>
			</header>
			<section class="single_interview">
				<div class="_main">
					<div class="wrapper">
						<div class="_body">
									<div class="__main <?php if ( has_post_thumbnail() ): ?>thumbnail<?php endif; ?>">
											<?php the_content(); ?>
									</div>
									<div class="__foot">
										<span>(Pagenation)</span>
										<div class="___pager">
											<div class="prev">
												<?php previous_post_link('%link', '<span>Prev</span>'); ?>
											</div>
											<div class="all">
												<a href="<?php echo home_url(); ?>/news">
													<span>All Articles</span>
												</a>
											</div>
											<div class="next">
												<?php next_post_link('%link', '<span>Next</span>'); ?>
											</div>
										</div>
									</div>
					</div>
				</div>
			</section>
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?>
		</article>
	</div>
</div>
<?php endwhile; else : endif; ?>
	
</main>

<?php get_footer(); ?>