
<?php //___固定ページ_Nul
 if(is_page(array('nul'))): ?>

 <!--Nul-->

<?php //___固定ページ_会社を知る
 elseif(is_page(array('about'))): ?>
<nav class="lowerNavigation">
	<div class="_bg">
		<img src="<?php echo get_the_post_thumbnail_url(9); ?>" alt="[]" class="objf" loading="lazy">
	</div>
	<a href="<?php echo home_url(); ?>/people" class="_card">
	 <span>Next</span>
		<h3>人と仕事を知る</h3>
		<p>People &amp; Works</p>
	</a>
</nav>

<?php //___固定ページ_人と仕事を知る
 elseif(is_page(array('people'))): ?>
<nav class="lowerNavigation">
	<div class="_bg">
		<img src="<?php echo get_the_post_thumbnail_url(15); ?>" alt="[]" class="objf" loading="lazy">
	</div>
	<a href="<?php echo home_url(); ?>/career" class="_card">
	 <span>Next</span>
		<h3>キャリアパス</h3>
		<p>Careerstep</p>
	</a>
</nav>

<?php //___固定ページ_キャリアパス
 elseif(is_page(array('career'))): ?>
<nav class="lowerNavigation">
	<div class="_bg">
		<img src="<?php echo get_the_post_thumbnail_url(11); ?>" alt="物流人のプライド" class="objf" loading="lazy">
	</div>
	<a href="<?php echo home_url(); ?>/business/pride" class="_card">
	 <span>Next</span>
		<h3>物流人のプライド</h3>
		<p>Pride Of Logistics</p>
	</a>
</nav>

<?php //___固定ページ_業界を知る
 elseif(is_page(array('business'))): ?>
<nav class="lowerNavigation">
	<div class="_bg">
		<img src="<?php echo get_the_post_thumbnail_url(11); ?>" alt="物流人のプライド" class="objf" loading="lazy">
	</div>
	<a href="<?php echo home_url(); ?>/business/pride" class="_card">
	 <span>Next</span>
		<h3>物流人のプライド</h3>
		<p>Pride Of Logistics</p>
	</a>
</nav>

<?php //___固定ページ_物流人のプライド
 elseif(is_page(array('pride'))): ?>
<nav class="lowerNavigation">
	<div class="_bg">
		<img src="<?php echo get_the_post_thumbnail_url(13); ?>" alt="ご家族の方へ" class="objf" loading="lazy">
	</div>
	<a href="<?php echo home_url(); ?>/business/family" class="_card">
	 <span>Next</span>
		<h3>ご家族の方へ</h3>
		<p>For family</p>
	</a>
</nav>

<?php //___固定ページ_ご家族の方へ
 elseif(is_page(array('family'))): ?>
<nav class="lowerNavigation">
	<div class="_bg">
		<img src="<?php echo get_the_post_thumbnail_url(13); ?>" alt="リール" class="objf" loading="lazy">
	</div>
	<a href="<?php echo home_url(); ?>/reel" class="_card">
	 <span>Next</span>
		<h3>リール</h3>
		<p>Reel</p>
	</a>
</nav>

<?php //___固定ページ_リール
 elseif(is_page(array('reel'))): ?>
<nav class="lowerNavigation">
	<div class="_bg">
		<img src="<?php echo get_the_post_thumbnail_url(19); ?>" alt="[]" class="objf" loading="lazy">
	</div>
	<a href="<?php echo home_url(); ?>/recruit" class="_card">
	 <span>Next</span>
		<h3>採用情報</h3>
		<p>Recruitment</p>
	</a>
</nav>

<?php //___固定ページ_採用情報
 elseif(is_page(array('recruit','internship','faq'))): ?>
<nav class="lowerNavigation">
	<div class="_bg">
		<img src="<?php echo get_the_post_thumbnail_url(21); ?>" alt="[]" class="objf" loading="lazy">
	</div>
	<a href="<?php echo home_url(); ?>/entry" class="_card">
	 <span>Next</span>
		<h3>応募フォーム</h3>
		<p>Entryform</p>
	</a>
</nav>

<?php //Begin 投稿ページ
 elseif(is_single()): ?>
 <?php //基本投稿
  if (get_post_type() === 'post'): ?>

  <!--Nul-->

 <?php //社員インタビュー
  elseif (get_post_type() === 'interview'): ?>
   <?php
   //▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼
			$args = array(
				'post_type' => 'interview',
				'posts_per_page' => -1,
				'post_status' => 'publish',
				'post__not_in' => array($id),
				'order' => 'ASC',
			);
			$query = new WP_Query( $args );
			if ( $query->have_posts() ) : ?>
   <div class="mainContent">
		 	<div class="ankerWrap">
			  <div class="_anker">
				 	<div class="inner">
       <h2 class="idxTtl">
        <span class="en serif">Interview</span>
        <span class="jp">その他の社員インタビュー</span>
       </h2>
					 </div>
			 	</div>
			  <div class="_main nul">
						<div class="secPage">
							<div class="_slide lower-container">
								<div class="iv_wrapper swiper-wrapper">
 								<?php while ( $query->have_posts() ) : $query->the_post(); ?>
	 						 <div class="swiper-slide">
		 						 <a href="<?php echo get_permalink() ?>">
			 						 <div class="_head">
				 							<div class="aspect aspect141">
					 						 <div class="aspectBlock">
						  						<?php if ( has_post_thumbnail() ): ?><!-- if文による条件分岐 アイキャッチが有る時-->
							  					<?php the_post_thumbnail( 'full', array( 'class' => 'objf showImg inview' )); ?>
								  				<?php else: ?><!-- アイキャッチが無い時-->
									  			<img src="<?php bloginfo('template_url'); ?>/images/sample.jpg" alt="<?php the_title(); ?>" class="objf showImg inview" loading="lazy">
 										 		<?php endif; ?>
	 											</div>
		 									</div>
			 							</div>
				 					 <div class="_body">
					 						<h3 class="ivTtl"><span><?php the_field('氏名');?></span></h3>
						 					<ul class="tags">
             <?php $arg = get_field('所属'); if(!empty($arg)):?>
								 			 <li><span><?php the_field('所属');?></span></li>
						       <?php endif;?>
             <?php $arg = get_field('役職'); if(!empty($arg)):?>
 					 					 <li><span><?php the_field('役職');?></span></li>
						       <?php endif;?>
								 			</ul>
 											<p class="btn _liner"><span class="txt serif">View More</span><span class="icon"></span></p>
	 									</div>
		 							</a>
			 					</div>
				 				<?php endwhile; ?>
								</div>
							</div>
						</div>
				 </div>
			</div>
   </div>
   <?php endif; ?>

   <?php //▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲ ?>

 <?php //カスタム投稿タイプ
  elseif (get_post_type() === 'nul'): ?>

  <!--Nul-->

 <?php endif; ?>

<?php //上記以外
 else: ?>
<?php endif; ?>
