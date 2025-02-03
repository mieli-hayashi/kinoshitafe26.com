<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q5KPTQNTKY"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'G-Q5KPTQNTKY');
	</script>

	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-M57DNFN');
	</script>
	<!-- End Google Tag Manager -->
	<!-- Google Tag Manager | Panarea-->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-WNWZK36L');
	</script>
	<!-- End Google Tag Manager | Panarea -->

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/good-design/good-design.css?250203">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png">
	<link rel="icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/images/favicon.svg">
	<link rel="icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico">
	<?php wp_head(); ?>

	<link rel="stylesheet" href="https://unpkg.com/mouse-follower@1/dist/mouse-follower.min.css">
	<script src="https://unpkg.com/mouse-follower@1/dist/mouse-follower.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"></script>
	<script src="https://unpkg.com/mouse-follower@1/dist/mouse-follower.min.js"></script>
	<meta name="google-site-verification" content="CTdwG2nrpFGFW7ZHjcJLQHK1YOLuYH8kPXO8qzi9cFQ" />

</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M57DNFN" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<!-- Google Tag Manager | Panarea (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WNWZK36L" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager | Panarea (noscript) -->

	<!--page loading-->
	<aside id="fixNav">
		<div class="_menu" data-cursor-text="Menu" data-cursor-stick>
			<p class="humbNav"><span><i></i><i></i></span>Menu</p>
		</div>
	</aside>
	<aside id="aside">
		<div class="wrapper">
			<div class="_side">
			</div>
			<div class="_main">
				<ul class="list">
					<li>
						<dl>
							<dt><a href="<?php echo home_url(); ?>/">ホーム</a></dt>
						</dl>
					</li>
					<li>
						<dl>
							<dt class="tgr_parents">
								<div>会社情報<span><i></i><i></i></span></div>
							</dt>
							<dd class="tgr_child"><a href="<?php if (!is_page('policy')) : echo home_url();
																								echo '/about/policy';
																							endif; ?>#">PMVV</a></dd>
							<dd class="tgr_child"><a href="<?php if (!is_page('message')) : echo home_url();
																								echo '/about/message';
																							endif; ?>#">社長メッセージ</a></dd>
							<dd class="tgr_child"><a href="<?php if (!is_page('company')) : echo home_url();
																								echo '/about/company';
																							endif; ?>#">企業概要</a></dd>
							<dd class="tgr_child"><a href="<?php if (!is_page('history')) : echo home_url();
																								echo '/about/history';
																							endif; ?>#">会社沿革</a></dd>
							<dd class="tgr_child"><a href="<?php if (!is_page('tour')) : echo home_url();
																								echo '/about/tour';
																							endif; ?>#">オフィス・工場紹介</a></dd>
						</dl>
					</li>
					<li>
						<dl>
							<dt class="tgr_parents">
								<div>事業内容<span><i></i><i></i></span></div>
							</dt>
							<dd class="tgr_child"><a href="<?php if (!is_page('business')) : echo home_url();
																								echo '/business';
																							endif; ?>#">事業紹介</a></dd>
							<dd class="tgr_child"><a href="<?php if (!is_page('business')) : echo home_url();
																								echo '/business';
																							endif; ?>#sec2">鐵工ができるまで</a></dd>
						</dl>
					</li>
					<li>
						<dl>
							<dt class="tgr_parents">
								<div>採用情報<span><i></i><i></i></span></div>
							</dt>
							<dd class="tgr_child"><a href="https://kinoshitafe26-recruit.com/">採用トップ</a></dd>
							<dd class="tgr_child"><a href="https://kinoshitafe26-recruit.com/work">仕事を知る</a></dd>
							<dd class="tgr_child"><a href="https://kinoshitafe26-recruit.com/member">仲間を知る</a></dd>
							<dd class="tgr_child"><a href="https://kinoshitafe26-recruit.com/joblist">募集一覧</a></dd>
							<dd class="tgr_child"><a href="https://kinoshitafe26-recruit.com/entry">応募フォーム</a></dd>
						</dl>
					</li>
					<li>
						<dl>
							<dt><a href="<?php if (!is_page('contact')) : echo home_url();
															echo '/contact';
														endif; ?>#">お問い合わせ</a></dt>
						</dl>
					</li>
					<li>
						<dl>
							<dt><a href="<?php echo home_url(); ?>/privacy"><small>プライバシーポリシー</small></a></dt>
						</dl>
					</li>
					<li class="other">
						<ul class="social">
							<li><a href="https://www.instagram.com/kinoshita_fe26_recruit/"><i><img src="<?php bloginfo('template_url'); ?>/images/icon/instagram.svg" width="300" height="300" class="objf" loading="lazy"></i></a></li>
							<!-- <li><a href="https://www.youtube.com/channel/UCk2QoPVz-ZAjLUuti3rOO1A"><i><img src="<?php bloginfo('template_url'); ?>/images/icon/youtube.svg" width="300" height="300" class="objf" loading="lazy"></i></a></li> -->
						</ul>
					</li>
				</ul>
				<div class="foot">
					<ul class="basic left-side">
						<li>Copyright(C)KINOSHITA Fe 26. All Rights Reserved.</li>
					</ul>
				</div>
			</div>
		</div>
	</aside>
	<header id="siteHead" class="<?php if (!is_front_page() && !is_page('entry') && !is_archive('interview') && !is_singular('interview')) : echo 'lower';
																elseif (strstr($url, 'joblist') == true) : echo 'lower';
																endif; ?>" role="banner">
		<div class="wrapper">
			<div class="_head">
				<a href="<?php if (!is_front_page('')) : echo home_url();
									endif; ?>#">
					<h1><img src="<?php bloginfo('template_url'); ?>/images/logo.svg" class="objf"></h1>
				</a>
			</div>
			<div class="_body">
				<ul class="social">
					<li><a href="https://www.instagram.com/kinoshita_fe26_recruit/" target="_blank"><i><img src="<?php bloginfo('template_url'); ?>/images/icon/instagram.svg" class="objf"></i></a></li>
					<!-- <li><a href="https://www.youtube.com/channel/UCk2QoPVz-ZAjLUuti3rOO1A" target="_blank"><i><img src="<?php bloginfo('template_url'); ?>/images/icon/youtube.svg" class="objf"></i></a></li> -->
					<li><a href="https://nimu-fe26.net/" target="_blank"><i style="width: 35px; height: 35px;"><img src="<?php bloginfo('template_url'); ?>/images/icon/nimusroom.png" class="objf" style="object-fit: contain;"></i></a></li>
				</ul>
			</div>
		</div>
	</header>
	<?php $url = $_SERVER['REQUEST_URI']; ?>
	<?php if (is_page('about') || is_parent_slug() === 'about') : ?>
	<?php elseif (is_page('team') /*|| 'interview' === get_post_type()*/) : ?>
	<?php elseif (strstr($url, 'joblist') == true) : ?>
		<?php if (is_single('')) : ?>
		<?php endif; ?>
	<?php endif; ?>

	<?php //PHP雛形// 
	?>
	<?php if (is_page(array('nul'))) : ?>
	<?php elseif (is_parent_slug() === 'company' || is_parent_slug() === 'service' || is_parent_slug() === 'culture') : ?>
		<?php if (has_post_thumbnail()) : ?>
			<?php the_post_thumbnail('full', array('class' => 'objf')); ?>
		<?php else : ?>
			<img src="<?php bloginfo('template_url'); ?>/images/sample.svg" alt="<?php the_title(); ?>" class="objf">
		<?php endif; ?>
		<!--ACF 直接-->
		<?php $arg = get_field('nul');
		if (!empty($arg)) : ?>
			<?php echo the_field('nul'); ?>
		<?php endif; ?>
		<!--ACF 包括-->
		<?php if (have_rows("nul")) : ?>
			<?php $count = 1; ?>
			<?php while (have_rows("nul")) : the_row(); ?>
				<?php echo $count = sprintf("%02d", $count); ?>
				<?php if (get_sub_field('nul')) : ?>
					<?php the_sub_field('nul'); ?>
				<?php endif; ?>
				<?php $count++; ?>
			<?php endwhile; ?>
		<?php endif; ?>
		<!--Query Loop-->
		<?php
		$args = array(
			'tax_query' => array(
				array(
					'taxonomy' => 'inter',
					'field' => 'slug',
					'terms' => array('group1')
				),
			),
			'post_type' => 'interview',
			'posts_per_page' => -1
		);
		?>
		<?php query_posts($args); ?>
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<a href="<?php echo get_permalink() ?>?post_id=<?php echo $post->ID; ?>" class="card"></a>
				<?php if (has_post_thumbnail()) : ?>
					<?php the_post_thumbnail('large', array('class' => 'objf')); ?>
				<?php endif; ?>
				<?php the_field('nul'); ?>
			<?php endwhile; ?>
		<?php endif; ?>
		<?php wp_reset_query(); ?>

	<?php else : ?>
	<?php endif; ?>