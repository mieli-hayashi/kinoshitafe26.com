<?php get_header(); ?>

<main id="siteContent" class="" role="main">
	<div class="___sticky">
		<article class="-page">
			<header>
				<?php
				if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
				}
				?>
				<div class="wrapper">
					<h1>働く警備員紹介</h1>
				</div>
			</header>
			<section>
				<div class="_main">
					<div class="__blcok">
						<div class="___cell interview_wrapper">
							<div class="wrapper">
								<?php if (have_posts()) : ?>
								<?php $number=1; ?>
									<ul class="list">
										<?php while (have_posts()) : the_post(); ?>
										<li id="sec<?php echo $number = sprintf("%01d",$number); ?>" class="sticky">
											<a href="<?php echo get_permalink() ?>" class="card">
											 <div class="_img">
												 <div class="aspect aspect56">
													 <div class="aspectBlock">
															<?php if ( has_post_thumbnail() ): ?>
															<?php the_post_thumbnail( 'large', array( 'class' => 'objf' )); ?>
															<?php else: ?>
														 <img src="<?php bloginfo('template_url'); ?>/images/sample.svg" class="objf" loading="lazy">
															<?php endif; ?>
														</div>
													</div>
												</div>
												<div class="_profile">
													<dl>
													 <dt>
	 												 <p>
																<?php echo the_field('職種'); ?>
																<?php
																if(get_field('役職')):
																echo '／';
																echo the_field('役職');
																endif;?>
															</p>
															<h4><?php the_title(); ?></h4>
														</dt>
														<dd>
															<ul class="tag">
																<?php if(get_field('入社年')):?>
															 <li><?php echo the_field('入社年'); ?></li>
																<?php endif;?>
																<?php if(get_field('学部・選考')):?>
															 <li><?php echo the_field('学部・選考'); ?></li>
																<?php endif;?>
															</ul>
														</dd>
													</dl>
												</div>
											</a>
										</li>
										<?php $number++; ?>
										<?php endwhile; ?>
									</ul>
								<?php endif; wp_reset_query(); ?>
							</div>
						</div>
					</div>
				</div>
			</section>
		</article>
	</div>
</main><!-- #site-content -->

<?php get_footer(); ?>
