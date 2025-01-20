<?php get_header(); ?>

<main id="siteContent" role="main" class="lower">
	<div class="___sticky">
		<article class="-page">
			<p id="breadcrumbs">
				<span>
					<span><a href="<?php echo home_url(); ?>">ホーム</a></span>
					- 
					<span><a href="<?php echo home_url(); ?>/recruit">採用情報</a></span>
					- 
					<span class="breadcrumb_last" aria-current="page">NBK GROUPで募集中の求人一覧</span>
				</span>
			</p>
			<header>
				<div class="wrapper">
					<span>Openjobs</span>
					<h1>採用情報</h1>
					<p>NBK GROUPで募集中の求人一覧</p>
				</div>
			</header>
			<section class="openjobs_wrapper">
				<div class="_search">
					<div class="wrapper">
	 				<p>募集中の<b>求人一覧</b></p>
 					<?php echo do_shortcode('[searchandfilter id="96"]'); ?>
					</div>
				</div>
	  	<div class="_main">
 		 	<div class="wrapper">
						<div class="joblist_wrapper">
										
										<?php
										$args=array(
											'post_type' => 'post',
											'posts_per_page'=> 10
										);
										?>
										<?php query_posts( $args ); ?>
									<?php if ( have_posts() ) : ?>
									<ul class="list">
										<?php while ( have_posts() ) : the_post(); ?>
										<li class="<?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->category_nicename; } ?> <?php if( time() - get_the_time('G') < 604800 ): ?>new<?php endif; ?>">
											<?php $price = get_post_meta($post->ID,"pram_status",true); //雇用形態 ?>
											<a href="<?php echo get_permalink() ?>?post_id=<?php echo $post->ID; ?>" class="card">
												<div class="_head inview">
													<div class="aspect aspect100">
														<div class="aspectBlock">
															<?php if(get_field('見出し画像')):?>
															<img src="<?php	echo wp_get_attachment_image_url(get_field('見出し画像'), 'full');	?>" alt="<?php the_title(); ?>" class="objf" loading="lazy">
															<?php else: ?>
															<img src="<?php bloginfo('template_url'); ?>/images/sample.svg" alt="<?php the_title(); ?>" class="objf" loading="lazy">
															<?php endif; ?>
														</div>
													</div>
												</div>
												<div class="_body">
													<h2><?php the_title('');?></h2>
													<ul class="tag">
														<?php $arg = get_field('雇用区分'); if(!empty($arg)):?>
														<li><span><?php the_field('雇用区分');?></span></li>
														<?php endif;?>
														<?php $arg = get_field('職種区分'); if(!empty($arg)):?>
														<li><span><?php the_field('職種区分');?></span></li>
														<?php endif;?>
														<?php $arg = get_field('エリア区分'); if(!empty($arg)):?>
														<li><span><?php the_field('エリア区分');?></span></li>
														<?php endif;?>
														<?php $min = get_field('最低給与'); if(!empty($min)):?>
														<li>
															<span>
																<?php the_field('給与形態'); ?>
																<?php
																echo number_format( get_field('最低給与')) ;
																echo '円';
																?>
																<?php
																if(get_field('最高給与')):
																echo ' ~ ';
																echo number_format( get_field('最高給与'));
																echo '円';
																endif;
																?>
															</span>
														</li>
														<?php endif;?>
													</ul>
													<?php $arg = get_field('仕事内容'); if(!empty($arg)):?>
													<p style="margin-top: 1em;">
														<?php
														$text = get_field('仕事内容');
														$str = str_replace(array('<br>', '<br />', "\r\n", "\n", "\r", '　'), '', $text);
														echo mb_substr(($str), 0, 100).'...';
														?>
														<?php 
														/*
														$text = mb_substr(get_field('仕事内容'),0,120,'utf-8'); 
														echo $text.'...';
														*/
														?>
													</p>
													<?php endif;?>
													<i><img src="<?php bloginfo('template_url'); ?>/images/icon/arrow_wh.svg" width="64" height="64" loading="lazy"></i>
												</div>
											</a>
										</li>
										<?php endwhile; ?>
									</ul>
									<?php
									the_posts_pagination( array(
										'prev_text'          => __( '←' ),
										'next_text'          => __( '→' ),
										'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( '' ) . ' </span>',
									));
									else :
									echo '<p>現在この条件で募集中の求人はございません。</p>';
									get_template_part( 'template-parts/post/content', 'none' );
									endif;
									?>
							
						</div>
				 </div>
			 </div>
			</section>
			<p id="breadcrumbs">
				<span>
					<span><a href="<?php echo home_url(); ?>">ホーム</a></span>
					- 
					<span><a href="<?php echo home_url(); ?>/recruit">採用情報</a></span>
					- 
					<span class="breadcrumb_last" aria-current="page">NBK GROUPで募集中の求人一覧</span>
				</span>
			</p>
		</article>
	</div>
</main>

<?php get_footer(); ?>
