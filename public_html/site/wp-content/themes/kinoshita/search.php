<?php get_header(); ?>

<main id="siteContent" role="main" class="post">
 <div id="breadcrumb">
		<div class="wrapper">
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?>
		</div>
	</div>
	<?php get_template_part( 'template-parts/navigation' ); ?>
	<article class="mainContent">
		<span class="pagetag"><?php the_search_query(); ?></span>
		<div class="main_wrapper root">
			<div class="content_wrapper">
				<header class="search_header">
					<h2>
						<span class="_icon"><img src="<?php bloginfo('template_url'); ?>/images/icon/icon_search.svg" alt="<?php the_search_query(); ?>" class="objf" loading="lazy"></span>
	 	 		<span class="_txt">「<?php the_search_query(); ?>」の検索結果は<?php echo $wp_query->found_posts;?>件です。</span>
 	 		</h2>
				</header>
				<div class="search_body">
					<?php if (have_posts()) : ?>
					<ul class="_list">
						<?php while (have_posts()) : the_post(); ?>
					 <li>
						 <a href="<?php echo get_permalink() ?>" class="_card">
								<?php if ( has_post_thumbnail() ): ?>
							 <div class="_head">
									<?php the_post_thumbnail( 'full', array( 'class' => 'objf' )); ?>
								</div>
								<?php else: ?>
								<?php endif; ?>
							 <div class="_body">
									<h3><?php the_title(); ?></h3>
									<p><?php echo mb_substr( get_the_excerpt(), 0, 64 ) . '...'; ?></p>
								</div>
								<div class="_arrow">
									<img src="<?php bloginfo('template_url'); ?>/images/icon/icon_arrow_wh.svg" alt="#" class="objf" loading="lazy">
								</div>
							</a>
						</li>
						<?php endwhile; ?>
						<?php if(function_exists('wp_pagenavi')) : wp_pagenavi(); endif; ?><!--WP-PageNavi-->
					</ul>
					<?php endif; ?>
					<?php wp_reset_query(); ?>
			 	<?php get_template_part( 'template-parts/pagination' ); ?>
				</div>
			</div>
		</div>
	</article>
</main><!-- #site-content -->
<?php get_footer(); ?>
