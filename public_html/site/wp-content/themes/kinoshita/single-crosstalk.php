<?php get_header(); ?>

<main id="siteContent" role="main" class="post">
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<header class="crosstalkHeader">
		<div class="wrapper">
			<?php if ( has_post_thumbnail() ): ?>
				<div class="_thumbnail">
					<?php the_post_thumbnail( 'full', array( 'class' => 'objf' )); ?>
				</div>
			<?php endif; ?>
			<div class="_txt">
			<h1 title="<?php the_field('タイトル');?>"><span><?php the_field('タイトル');?></span></h1>
			</div>
		</div>
	</header>
	<?php	if( have_rows("参加者") ): ?>
	<div class="crosstalk_talker">
		<div class="wrapper">
			<h2>Member</h2>
			<ul>
				<?php while ( have_rows("参加者") ) : the_row(); ?>
				<li>
					<i><img src="<?php the_sub_field('アイコン'); ?>" width="300" height="300" class="objf" loading="lazy"></i>
					<dl>
						<dt><?php the_sub_field('氏名'); ?></dt>
						<dd><?php the_sub_field('所属'); ?></dd>
					</dl>
				</li>
				<?php endwhile; ?>
			</ul>
		</div>
	</div>
	<?php endif; ?>
	<div class="crosstalkBody">
		<div class="wrapper">
	 	<article class="page_block">
				<div class="_inner">
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
 		</article>
			<div class="__foot">
						<span>(Pagenation)</span>
						<div class="___pager">
	 		 		<div class="prev">
		  			 <?php previous_post_link('%link', '<span>Prev</span>'); ?>
			 	 	</div>
				  	<div class="all">
			 		 	<a href="<?php echo home_url(); ?>/member#sec1">
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
	<?php endwhile; else : endif; ?>
	
</main>

<?php get_footer(); ?>