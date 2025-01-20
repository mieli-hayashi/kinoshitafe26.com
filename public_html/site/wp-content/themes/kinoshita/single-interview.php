<?php get_header(); ?>

<main id="siteContent" role="main" class="post">
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<div class="___sticky">
		<article class="-page">
				<?php
				if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
				}
				?>
			<header class="interviewHeader">
				<div class="thumbnail_wrapper">
					<div class="figure">
						<div class="figure1">
							<img src="<?php the_field('見出し画像');?>" width="1360" height="800" class="objf" loading="lazy">
						</div>
					</div>
					<div class="title_wrapper">
 					<div class="title_area">
							<ul>
							 <li><?php echo the_field('所属'); ?></li>
							 <li>
									<?php
									echo the_field('職種');
									if(get_field('役職')):
									echo ' / ';
									echo the_field('役職');
									endif;
									?>
								</li>
							</ul>
	 			 	<h1><?php echo the_field('記事見出し'); ?></h1>
	 			 	<p>
							 <span class="jp"><?php echo the_field('氏名'); ?></span>
							 <span class="en"><?php echo the_field('ふりがな'); ?></span>
							</p>
			 		</div>
					</div>
				</div>
				<div class="profile_wrapper">
					<div class="wrapper">
						<span>主な仕事内容</span>
						<p><?php the_field('主な仕事内容'); ?></p>
 	 			<ul>
		  			<?php if(get_field('入社区分')):?>
	  	 		<li><span><?php echo the_field('入社区分'); ?></span></li>
		  	 	<?php endif;?>
		  			<?php if(get_field('入社年')):?>
	  	 		<li><span><?php echo the_field('入社年'); ?></span></li>
		  	 	<?php endif;?>
		  			<?php if(get_field('学部・選考')):?>
	  	 		<li><span><?php echo the_field('学部・選考'); ?></span></li>
		  	 	<?php endif;?>
		  	 </ul>
					</div>
				</div>
			</header>
	<div class="interviewBody">
		<div class="wrapper">
			<div class="_main">
				<div class="__article">
					<?php	if( have_rows("質疑応答") ): ?>
					<ul>
						<?php while ( have_rows("質疑応答") ) : the_row(); ?>
						<li>
							<dl>
								<dt>
									<p><?php the_sub_field('質問'); ?></p>
								</dt>
								<dd>
									<p><?php the_sub_field('回答'); ?></p>
								</dd>
							</dl>
						</li>
						<?php endwhile; ?>
					</ul>
					<?php endif; ?>
				</div>
				<div class="__supplement">
					<?php	if( have_rows("ある日のスケジュール") ): ?>
					<div data-type="ある日のスケジュール">
						<h3>ある日のスケジュール</h3>
 					<ul class="timeline">
	 					<?php while ( have_rows("ある日のスケジュール") ) : the_row(); ?>
		 				<li>
			 				<dl>
				 				<dt>
					 				<p><?php the_sub_field('時間'); ?></p>
						 		</dt>
							 	<dd>
								 	<p><?php the_sub_field('内容'); ?></p>
								 </dd>
 							</dl>
	 					</li>
						<?php endwhile; ?>
				 	</ul>
					</div>
					<?php endif; ?>
					<?php	if( have_rows("休日の過ごし方") ): ?>
					<div data-type="休日の過ごし方">
						<h3>休日の過ごし方</h3>
						<?php while ( have_rows("休日の過ごし方") ) : the_row(); ?>
						<div class="holiday">
		 			 <?php if(get_sub_field('画像')):?>
						 <div class="img">
								<div class="aspect aspect61">
								 <div class="aspectBlock">
  				  		<img src="<?php the_sub_field('画像');?>" width="1000" height="563" class="objf" loading="lazy">
									</div>
								</div>
				 		</div>
			 			<?php endif;?>
		 				<div class="txt">
	 						<p><?php the_sub_field('内容'); ?></p>
 						</div>
						</div>
						<?php endwhile; ?>
					</div>
					<?php endif; ?>
					
				</div>
			</div>
			<div class="_foot">
		 	<div class="title_block">
		 	 <h2>その他のインタビュー</h2>
			 	<h3>Other Staff Interview</h3>
			 </div>
				
			</div>
		</div>
	</div>
				<?php
				if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
				}
				?>
		</article>
	</div>
	<?php endwhile; else : endif; ?>

</main>

<?php get_footer(); ?>
