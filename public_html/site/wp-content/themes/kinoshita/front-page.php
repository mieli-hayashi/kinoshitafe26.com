<?php get_header(); ?>
<main id="siteContent" role="main">
	<section class="idx idx_fv_wrap">
		<div class="first-container">
			<div class="swiper-wrapper">
				<?php $images = get_field('ファーストビュー_スライドショー');?>
				<?php if($images):?>
				<?php foreach( $images as $image ): ?>
				<div class="swiper-slide">
					<img src="<?php echo $image['url'];?>" class="objf" width="1360" height="800" loading="lazy">
				</div>
				<?php endforeach;?>
				<?php else:?>
				<div class="swiper-slide">
					<img src="<?php bloginfo('template_url'); ?>/images/index_fv-01.webp" class="objf" width="1360" height="800" loading="lazy">
				</div>
				<div class="swiper-slide">
					<img src="<?php bloginfo('template_url'); ?>/images/index_fv-02.webp" class="objf" width="1360" height="800" loading="lazy">
				</div>
				<div class="swiper-slide">
					<img src="<?php bloginfo('template_url'); ?>/images/index_fv-03.webp" class="objf" width="1360" height="800" loading="lazy">
				</div>
				<?php endif;?>
			</div>
			<div class="swiper-pagination"></div>
		</div>
		<div class="copy_wrapper">
			<div class="wrapper">
				<p class="lead"><?php the_field('メインコピー');?></p>
			</div>
		</div>
	</section>
	<?php if( have_rows("コンテンツ_イントロダクション") ): ?>
	<?php while ( have_rows("コンテンツ_イントロダクション") ): the_row();?>
	<section class="idx idx_intro_wrap">
		<div class="wrapper">
			<dl>
				<dt><?php the_sub_field('見出しテキスト');?></dt>
				<dd><?php the_sub_field('本文テキスト');?></dd>
			</dl>
			<div class="figure_wrap">
				<div class="_fig fig1 inview animated">
					<img src="<?php the_sub_field('画像_1');?>" width="383" height="128" loading="lazy">
				</div>
				<div class="_fig fig2 inview animated">
					<img src="<?php the_sub_field('画像_2');?>" width="383" height="128" loading="lazy">
				</div>
				<div class="_fig fig3 inview animated">
					<img src="<?php the_sub_field('画像_3');?>" width="383" height="128" loading="lazy">
				</div>
			</div>
		</div>
	</section>
	<?php endwhile;?>
	<?php endif;?>
	<section class="idx idx_about_wrap">
		<header>
			<h2>会社情報</h2>
			<span>About Us</span>
		</header>
		<div class="wrapper">
			<?php if( have_rows("コンテンツ_行動指針") ): ?>
			<?php while ( have_rows("コンテンツ_行動指針") ): the_row();?>
			<h3><?php the_sub_field('見出しテキスト');?></h3>
			<ul class="list_policy done">
				<?php if( have_rows("行動指針一覧") ): ?>
				<?php while ( have_rows("行動指針一覧") ): the_row();?>
				<li>
					<img src="<?php the_sub_field('アイコン');?>" width="128" height="128" loading="lazy">
					<div>
						<p><?php the_sub_field('見出しテキスト');?></p>
						<span><?php the_sub_field('本文テキスト');?></span>
					</div>
				</li>
				<?php endwhile;?>
				<?php endif;?>
			</ul>
			<?php endwhile;?>
			<?php endif;?>
			<div class="card_slide">
				<div class="idx_about_slide">
					<div class="swiper-wrapper">
						<?php if( have_rows("会社情報_ページリンク") ): ?>
						<?php while ( have_rows("会社情報_ページリンク") ): the_row();?>
						<div class="swiper-slide">
							<a href="<?php the_sub_field('リンク先url');?>" class="card">
								<i><img src="<?php the_sub_field('イメージ画像');?>" width="340"></i>
								<h4><?php the_sub_field('ページ名称_英語');?></h4>
								<span><?php the_sub_field('ページ名称_日本語');?></span>
								<p><?php the_sub_field('本文テキスト');?></p>
							</a>
						</div>
						<?php endwhile;?>
						<?php endif;?>
					</div>
					<div class="swiper-scrollbar"></div>
				</div>
			</div>
			<a href="<?php echo home_url(); ?>/about/policy" class="button color">
				<span>会社情報</span>
				<i><img src="<?php bloginfo('template_url'); ?>/images/icon/arrow_wh.svg" class="objf"></i>
			</a>
		</div>
		<div class="beltline">
			<div class="slider">
				<div class="slider__inner">
					<div class="slider__item">
						<span>Imagination of Dreams Creativity of the city</span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="idx idx_service_wrap">
		<header>
			<h2>事業内容</h2>
			<span>Service</span>
		</header>
		<?php if( have_rows("コンテンツ_事業内容") ): ?>
		<?php while ( have_rows("コンテンツ_事業内容") ): the_row();?>
		<div class="wrapper">
			<div class="_content">
				<div class="__txt">
					<dl class="">
						<dt><?php the_sub_field('見出しテキスト');?></dt>
						<dd><?php the_sub_field('本文テキスト');?></dd>
					</dl>
					<a href="<?php echo home_url(); echo'/business'; ?>" class=" button color">
						<span>事業内容</span>
						<i><img src="<?php bloginfo('template_url'); ?>/images/icon/arrow_wh.svg" class="objf"></i>
					</a>
				</div>
				<div class="__figure">
					<div class="___fig fig1 inview animated">
						<img src="<?php the_sub_field('画像_1');?>" width="340">
					</div>
					<div class="___fig fig2 inview animated">
						<img src="<?php the_sub_field('画像_2');?>" width="297.5">
					</div>
				</div>
			</div>
		</div>
		<?php endwhile;?>
		<?php endif;?>
	</section>
</main><!-- #site-content -->
<?php get_footer(); ?>
