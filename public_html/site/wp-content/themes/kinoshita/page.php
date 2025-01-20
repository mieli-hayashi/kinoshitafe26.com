<?php get_header(); ?>

<main id="siteContent" class="lower" role="main">

	<?php //▼------------------ Main Content ------------------▼// ?>
	<?php
 if(is_page('nul')): ?>

	<?php //___固定ページ _ 会社情報 _ PMVV
 elseif(is_page('policy')): ?>
	<div class="___sticky">
		<article class="-page">
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?>
			<?php if( have_rows("コンテンツ_見出しエリア") ): ?>
			<?php while ( have_rows("コンテンツ_見出しエリア") ): the_row();?>
			<header>
				<div class="wrapper">
					<span><?php the_sub_field('ページタイトル_英語');?></span>
					<h1><?php the_sub_field('ページタイトル_日本語');?></h1>
					<p><?php the_sub_field('親ページ');?></p>
				</div>
			</header>
			<?php endwhile;?>
			<?php endif;?>
			<?php if( have_rows("コンテンツ_pmvv") ): ?>
			<?php while ( have_rows("コンテンツ_pmvv") ): the_row();?>
			<section class="policy_wrapper">
				<div class="_main">
					<div class="wrapper">
						<dl class="lead">
							<dt><?php the_sub_field('見出しテキスト');?></dt>
							<dd><?php the_sub_field('本文テキスト');?></dd>
						</dl>
						<?php if( have_rows("ブランドロゴ_画像") ): ?>
						<h3>KINOSHITA Fe26 Brand Logo</h3>
						<ul class="list_logo">
							<?php while ( have_rows("ブランドロゴ_画像") ): the_row();?>
							<li>
								<img src="<?php the_sub_field('画像');?>" class="objf" width="1280" height="1280" loading="lazy">
							</li>
							<?php endwhile;?>
						</ul>
						<?php endif;?>
						<?php if( have_rows("行動方針一覧") ): ?>
						<h3>5つの行動方針【LCBCE】</h3>
						<ul class="list_policy done">
							<?php while ( have_rows("行動方針一覧") ): the_row();?>
							<li>
								<img src="<?php the_sub_field('アイコン');?>" width="128" height="128" loading="lazy">
								<div>
									<p><?php the_sub_field('見出しテキスト');?></p>
									<span><?php the_sub_field('本文テキスト');?></span>
								</div>
							</li>
							<?php endwhile;?>
						</ul>
						<?php endif;?>
					</div>
				</div>
			</section>
			<?php endwhile;?>
			<?php endif;?>
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?>
			<?php get_sidebar(); ?>
		</article>
	</div>

	<?php //___固定ページ _ 会社情報 _ 社長メッセージ
 elseif(is_page('message')): ?>
	<div class="___sticky">
		<article class="-page">
			<?php
				if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
				}
				?>
			<?php if( have_rows("コンテンツ_見出しエリア") ): ?>
			<?php while ( have_rows("コンテンツ_見出しエリア") ): the_row();?>
			<header>
				<div class="wrapper">
					<span><?php the_sub_field('ページタイトル_英語');?></span>
					<h1><?php the_sub_field('ページタイトル_日本語');?></h1>
					<p><?php the_sub_field('親ページ');?></p>
				</div>
			</header>
			<?php endwhile;?>
			<?php endif;?>
			<?php if( have_rows("コンテンツ_社長メッセージ") ): ?>
			<?php while ( have_rows("コンテンツ_社長メッセージ") ): the_row();?>
			<section class="message_wrapper">
				<div class="_main">
					<div class="thumbnail">
						<div class="aspect aspect50">
							<div class="aspectBlock">
								<img src="<?php the_sub_field('社長メッセージ画像');?>" width="1360" height="680" class="objf" loading="lazy">
							</div>
						</div>
					</div>
					<div class="wrapper">
						<ul class="list">
							<?php if( have_rows("本文エリア") ): ?>
							<?php while ( have_rows("本文エリア") ): the_row();?>
							<li>
								<dl>
									<dt><?php the_sub_field('見出しテキスト');?></dt>
									<dd><?php the_sub_field('本文テキスト');?></dd>
								</dl>
							</li>
							<?php endwhile;?>
							<?php endif;?>
						</ul>
						<p class="wrote">
							<span class="position"><?php the_sub_field('役職');?></span>
							<span class="name"><?php the_sub_field('氏名');?></span>
						</p>
					</div>
				</div>
			</section>
			<?php endwhile;?>
			<?php endif;?>
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?>
			<?php get_sidebar(); ?>
		</article>
	</div>

	<?php //___固定ページ _ 会社情報 _ 企業概要
 elseif(is_page('company')): ?>
	<div class="___sticky">
		<article class="-page">
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?>
			<?php if( have_rows("コンテンツ_見出しエリア") ): ?>
			<?php while ( have_rows("コンテンツ_見出しエリア") ): the_row();?>
			<header>
				<div class="wrapper">
					<span><?php the_sub_field('ページタイトル_英語');?></span>
					<h1><?php the_sub_field('ページタイトル_日本語');?></h1>
					<p><?php the_sub_field('親ページ');?></p>
				</div>
			</header>
			<?php endwhile;?>
			<?php endif;?>
			<section class="company_wrapper">
				<div class="_main">
					<?php if( have_rows("コンテンツ_見出しエリア") ): ?>
					<?php while ( have_rows("コンテンツ_見出しエリア") ): the_row();?>
					<div class="thumbnail">
						<div class="aspect aspect50">
							<div class="aspectBlock">
								<img src="<?php the_sub_field('見出し画像');?>" width="1360" height="680" class="objf" loading="lazy">
							</div>
						</div>
					</div>
					<?php endwhile;?>
					<?php endif;?>
					<div class="wrapper">
						<h3>会社概要</h3>
						<ul class="list">
							<?php if( have_rows("コンテンツ_会社概要") ): ?>
							<?php while ( have_rows("コンテンツ_会社概要") ): the_row();?>
							<li>
								<dl>
									<dt><?php the_sub_field('項目名');?></dt>
									<dd><?php the_sub_field('内容');?></dd>
								</dl>
							</li>
							<?php endwhile;?>
							<?php endif;?>
						</ul>
					</div>
				</div>
			</section>
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?>
			<?php get_sidebar(); ?>
		</article>
	</div>

	<?php //___固定ページ _ 会社情報 _ 事業沿革
 elseif(is_page('history')): ?>
	<div class="___sticky">
		<article class="-page">
			<?php
				if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
				}
				?>
			<?php if( have_rows("コンテンツ_見出しエリア") ): ?>
			<?php while ( have_rows("コンテンツ_見出しエリア") ): the_row();?>
			<header>
				<div class="wrapper">
					<span><?php the_sub_field('ページタイトル_英語');?></span>
					<h1><?php the_sub_field('ページタイトル_日本語');?></h1>
					<p><?php the_sub_field('親ページ');?></p>
				</div>
			</header>
			<?php endwhile;?>
			<?php endif;?>
			<section class="history_wrapper">
				<div class="_main">
					<div class="wrapper">
						<ul class="list done">
							<?php if( have_rows("コンテンツ_会社沿革") ): ?>
							<?php while ( have_rows("コンテンツ_会社沿革") ): the_row();?>
							<li>
								<p class="year"><?php the_sub_field('年次');?></p>
								<ul class="event">
									<?php if( have_rows("内容") ): ?>
									<?php while ( have_rows("内容") ): the_row();?>
									<li>
										<p class="month"><?php the_sub_field('月次');?></p>
										<ul class="topic">
											<li><?php the_sub_field('本文テキスト');?></li>
										</ul>
									</li>
									<?php endwhile;?>
									<?php endif;?>
								</ul>
							</li>
							<?php endwhile;?>
							<?php endif;?>
						</ul>
					</div>
				</div>
			</section>
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?>
			<?php get_sidebar(); ?>
		</article>
	</div>

	<?php //___固定ページ _ 会社情報 _ オフィス・工場紹介
 elseif(is_page('tour')): ?>
	<div class="___sticky">
		<article class="-page">
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?>
			<?php if( have_rows("コンテンツ_見出しエリア") ): ?>
			<?php while ( have_rows("コンテンツ_見出しエリア") ): the_row();?>
			<header>
				<div class="wrapper">
					<span><?php the_sub_field('ページタイトル_英語');?></span>
					<h1><?php the_sub_field('ページタイトル_日本語');?></h1>
					<p><?php the_sub_field('親ページ');?></p>
				</div>
			</header>
			<?php endwhile;?>
			<?php endif;?>
			<section class="tour_wrapper">
				<div class="_main">
					<?php if( have_rows("コンテンツ_見出しエリア") ): ?>
					<?php while ( have_rows("コンテンツ_見出しエリア") ): the_row();?>
					<div class="thumbnail">
						<div class="aspect aspect50">
							<div class="aspectBlock">
								<img src="<?php the_sub_field('見出し画像');?>" width="1360" height="680" class="objf" loading="lazy">
							</div>
						</div>
					</div>
					<?php endwhile;?>
					<?php endif;?>
					<div class="wrapper">
						<div class="fancybox" data-fancybox data-src="<?php the_field('全体図_イメージ画像');?>">
							<img src="<?php the_field('全体図_イメージ画像');?>" width="14180" height="7094" class="objf" loading="lazy">
						</div>
						<ul class="gallery_list">
							<?php if( have_rows("コンテンツ_オフィス・工場紹介") ): ?>
							<?php while ( have_rows("コンテンツ_オフィス・工場紹介") ): the_row();?>
							<li <?php if(get_sub_field('表示サイズ') == '2列表示'):?> class="item-2" <?php endif;?>>
								<h4><?php the_sub_field('タイトル');?></h4>
								<div class="img fancybox" data-fancybox="gallery" data-src="<?php the_sub_field('画像');?>" data-caption="<?php the_sub_field('タイトル');?>">
									<div class="aspect aspect56">
										<div class="aspectBlock">
											<img src="<?php the_sub_field('画像');?>" width="14180" height="7094" class="objf" loading="lazy">
										</div>
									</div>
								</div>
								<?php if( have_rows("リスト") ): ?>
								<ul>
									<?php while ( have_rows("リスト") ): the_row();?>
									<li><?php the_sub_field('テキスト');?></li>
									<?php endwhile;?>
								</ul>
								<?php endif;?>
								<p><?php the_sub_field('本文テキスト');?></p>
							</li>
							<?php endwhile;?>
							<?php endif;?>
						</ul>
					</div>
				</div>
			</section>
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?>
			<?php get_sidebar(); ?>
		</article>
	</div>

	<?php //___固定ページ _ 事業内容
 elseif(is_page('business')): ?>
	<div class="___sticky">
		<article class="-page">
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?>
			<?php if( have_rows("コンテンツ_見出しエリア") ): ?>
			<?php while ( have_rows("コンテンツ_見出しエリア") ): the_row();?>
			<header>
				<div class="wrapper">
					<span><?php the_sub_field('ページタイトル_英語');?></span>
					<h1><?php the_sub_field('ページタイトル_日本語');?></h1>
					<p><?php the_sub_field('親ページ');?></p>
				</div>
			</header>
			<?php endwhile;?>
			<?php endif;?>
			<section id="sec1" class="business_wrapper">
				<div class="_main">
					<?php if( have_rows("コンテンツ_事業紹介") ): ?>
					<?php while ( have_rows("コンテンツ_事業紹介") ): the_row();?>
					<div class="wrapper">
						<dl class="lead">
							<dt><?php the_sub_field('見出しテキスト');?></dt>
							<dd><?php the_sub_field('本文テキスト');?></dd>
						</dl>
					</div>
					<?php endwhile;?>
					<?php endif;?>
					<?php if( have_rows("コンテンツ_当社プロジェクト実績") ): ?>
					<?php while ( have_rows("コンテンツ_当社プロジェクト実績") ): the_row();?>
					<div class="performance_wrapper">
						<div class="background">
							<!--<img src="<?php the_sub_field('背景画像');?>" class="objf" width="1360" height="800" loading="lazy">-->
						</div>
						<div class="wrapper">
							<h5>当社プロジェクト実績</h5>
							<div class="performance-container">
								<ul class="swiper-wrapper list_performance">
									<li class="swiper-slide">
										<h6>都道府県別施工実績</h6>
										<ul class="performance_1">
											<?php if( have_rows("都道府県別施工実績") ): ?>
											<?php while ( have_rows("都道府県別施工実績") ): the_row();?>
											<li>
												<p><?php the_sub_field('都道府県名');?></p><span class="border"></span>
												<p><i class="num"><?php the_sub_field('件数');?></i>件</p>
											</li>
											<?php endwhile;?>
											<?php endif;?>
										</ul>
										<p class="caption"><?php the_sub_field('都道府県別施工実績_補足テキスト');?></p>
									</li>
									<li class="swiper-slide">
										<h6>加工t数別施工実績</h6>
										<ul class="performance_2">
											<?php if( have_rows("加工t数別施工実績") ): ?>
											<?php while ( have_rows("加工t数別施工実績") ): the_row();?>
											<li class="over">
												<p>1000t超工事</p><span class="border"></span>
												<p><i class="num"><?php the_sub_field('1000t超工事件数');?></i>件</p>
											</li>
											<li class="less">
												<p>500~1000t工事</p><span class="border"></span>
												<p><i class="num"><?php the_sub_field('500~1000t工事件数');?></i>件</p>
											</li>
											<?php endwhile;?>
											<?php endif;?>
										</ul>
										<p class="caption"><?php the_sub_field('加工t数別施工実績_補足テキスト');?></p>
									</li>
								</ul>
								<div class="swiper-pagination"></div>
							</div>
							<div class="spot">
								<div class="map">
									<img src="<?php bloginfo('template_url'); ?>/images/performance.webp" class="objf" width="1680" height="800" loading="lazy">
								</div>
							</div>
						</div>
					</div>
					<?php endwhile;?>
					<?php endif;?>
				</div>
			</section>
			<section id="sec2" class="flow_wrapper">
				<div class="_main">
					<div class="wrapper">
						<h2>鉄骨ができるまで</h2>
						<ul class="flow_list done">
							<?php if( have_rows("コンテンツ_鉄骨ができるまで") ): ?>
							<?php while ( have_rows("コンテンツ_鉄骨ができるまで") ): the_row();?>
							<li>
								<div class="img">
									<div class="aspect aspect100">
										<div class="aspectBlock">
											<img src="<?php the_sub_field('画像');?>" class="objf" width="1360" height="800" loading="lazy">
										</div>
									</div>
								</div>
								<div class="txt">
									<dl>
										<dt><?php the_sub_field('見出しテキスト');?></dt>
										<dd><?php the_sub_field('本文テキスト');?> </dd>
									</dl>
								</div>
							</li>
							<?php endwhile;?>
							<?php endif;?>
						</ul>
					</div>
				</div>
			</section>
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?>
			<?php get_sidebar(); ?>
		</article>
	</div>

	<?php //___固定ページ_応募フォーム
 elseif(is_page('contact') || is_parent_slug() === 'contact'): ?>
	<div class="___sticky">
		<article class="-page">
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?>
			<header>
				<div class="wrapper">
					<span>Contact</span>
					<h1><?php the_title(); ?></h1>
					<?php if(!is_page('contact')): ?><p>お問い合わせ</p><?php endif; ?>
				</div>
			</header>
			<section>
				<div class="_main">
					<div class="__blcok">
						<div class="___cell entry_wrapper">
							<div class="wrapper">
								<?php echo do_shortcode('[mwform_formkey key="41"]'); ?>
							</div>
						</div>
					</div>
				</div>
			</section>
		</article>
	</div>

	<?php //___固定ページ_プライバシーポリシー
 elseif(is_page('privacy')): ?>
	<div class="___sticky">
		<article class="-page">
			<?php
				if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
				}
				?>
			<?php if( have_rows("コンテンツ_見出しエリア") ): ?>
			<?php while ( have_rows("コンテンツ_見出しエリア") ): the_row();?>
			<header>
				<div class="wrapper">
					<span><?php the_sub_field('ページタイトル_英語');?></span>
					<h1><?php the_sub_field('ページタイトル_日本語');?></h1>
					<p><?php the_sub_field('親ページ');?></p>
				</div>
			</header>
			<?php endwhile;?>
			<?php endif;?>
			<section class="privacy_wrapper">
				<div class="_main">
					<div class="wrapper">
						<div class="_head">
							<p><?php the_field('プライバシーポリシー_本文テキスト');?></p>
							<?php if( have_rows("コンテンツ_プライバシーポリシー") ): ?>
							<nav>
								<span>Table of Contents</span>
								<ul>
									<?php $count=01;?>
									<?php while ( have_rows("コンテンツ_プライバシーポリシー") ): the_row();?>
									<li><a href="#sec<?php echo sprintf("%01d",$count);?>"><?php echo sprintf("%01d",$count);?>. <?php the_sub_field('見出しテキスト');?></a></li>
									<?php $count++;?>
									<?php endwhile;?>
								</ul>
							</nav>
							<?php endif;?>
						</div>
						<div class="_body">
							<ul class="list">
								<?php if( have_rows("コンテンツ_プライバシーポリシー") ): ?>
								<?php $count=01;?>
								<?php while ( have_rows("コンテンツ_プライバシーポリシー") ): the_row();?>
								<li id="sec<?php echo sprintf("%01d",$count);?>">
									<dl class="_list">
										<dt><span><?php echo sprintf("%01d",$count);?>. <?php the_sub_field('見出しテキスト');?></span></dt>
										<dd>
											<p><?php the_sub_field('本文テキスト');?></p>
										</dd>
									</dl>
								</li>
								<?php $count++;?>
								<?php endwhile;?>
								<?php endif;?>
							</ul>
							<p>Last updated: 2024 KINOSHITA Fe26.</p>
						</div>
					</div>
				</div>
			</section>
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?>
			<?php get_sidebar(); ?>
		</article>
	</div>

	<?php else: ?>

	<?php the_content(); ?>

	<?php endif; ?>
</main>
<div class="footer_height"></div>

<?php get_footer(); ?>
