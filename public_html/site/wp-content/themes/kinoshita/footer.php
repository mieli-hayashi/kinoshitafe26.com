	<?php if( have_rows("フッター_採用情報リンクブロック",2) ): ?>
	<?php while ( have_rows("フッター_採用情報リンクブロック",2) ): the_row();?>
	<section class="root_recruit" style="background: url(<?php the_sub_field('背景画像');?>) center;background-size:cover;">
		<div class="wrapper">
			<dl>
				<dt><?php the_sub_field('見出しテキスト');?></dt>
				<dd><?php the_sub_field('本文テキスト');?></dd>
			</dl>
			<ul class="inline_button">
				<li data-type="採用情報"><a href="https://kinoshitafe26-recruit.com/"><span>採用情報</span><i><img src="<?php bloginfo('template_url'); ?>/images/icon/arrow.svg" class="objf"></i></a></li>
				<li data-type="募集一覧"><a href="https://kinoshitafe26-recruit.com/joblist"><span>募集一覧</span><i><img src="<?php bloginfo('template_url'); ?>/images/icon/arrow_wh.svg" class="objf"></i></a></li>
			</ul>
		</div>
	</section>
	<?php endwhile;?>
	<?php endif;?>
	<?php if( have_rows("フッターエリア",2) ): ?>
	<?php while ( have_rows("フッターエリア",2) ): the_row();?>
	<footer id="siteFoot" role="contentinfo" style="background: url(<?php the_sub_field('背景画像');?>) center;background-size:cover;">
		<div class="_sitemap">
			<div class="wrapper">
				<div class="__profile">
					<a href="<?php echo home_url(); ?>">
						<img src="<?php bloginfo('template_url'); ?>/images/logo_wh.svg" height="45" loading="lazy">
					</a>
					<ul class="callme">
						<li><?php the_sub_field('住所');?><br>
							<a href="<?php the_sub_field('google_map_リンクurl');?>" target="_blank">Googlemaps</a>
						</li>
						<li><?php the_sub_field('連絡先情報');?></li>
						<li>
							<ul class="social">
								<?php if( have_rows("snsリンク",2) ): ?>
								<?php while ( have_rows("snsリンク",2) ): the_row();?>
								<li><a href="<?php the_sub_field('リンク先url');?>" target="_blank"><i><img src="<?php the_sub_field('アイコン画像');?>" class="objf"></i></a></li>
								<?php endwhile;?>
								<?php endif;?>
							</ul>
						</li>
					</ul>
				</div>
				<div class="__nav">
					<ul class="list_sitemap">
						<li>
							<ul class="_link">
								<li>
									<ul class="__navigation">
										<li>
											<dl>
												<dt>
													<div>会社情報</div>
												</dt>
												<dd><a href="<?php if(!is_page('policy')): echo home_url(); echo'/about/policy'; endif; ?>">PMVV</a></dd>
												<dd><a href="<?php if(!is_page('message')): echo home_url(); echo'/about/message'; endif; ?>">社長メッセージ</a></dd>
												<dd><a href="<?php if(!is_page('company')): echo home_url(); echo'/about/company'; endif; ?>">企業概要</a></dd>
												<dd><a href="<?php if(!is_page('history')): echo home_url(); echo'/about/history'; endif; ?>">会社沿革</a></dd>
												<dd><a href="<?php if(!is_page('tour')): echo home_url(); echo'/about/tour'; endif; ?>">オフィス・工場紹介</a></dd>
											</dl>
										</li>
									</ul>
								</li>
								<li>
									<ul class="__navigation">
										<li>
											<dl>
												<dt>
													<div>事業内容</div>
												</dt>
												<dd><a href="<?php if(!is_page('business')): echo home_url(); echo'/business'; endif; ?>">事業紹介</a></dd>
												<dd><a href="<?php if(!is_page('business')): echo home_url(); echo'/business'; endif; ?>#sec2">鐵工ができるまで</a></dd>
											</dl>
										</li>
									</ul>
								</li>
								<li>
									<ul class="__navigation">
										<li>
											<dl>
												<dt><a href="https://kinoshitafe26-recruit.com">採用情報</a></dt>
												<dd><a href="https://kinoshitafe26-recruit.com/work">仕事を知る</a></dd>
												<dd><a href="https://kinoshitafe26-recruit.com/member">仲間を知る</a></dd>
												<dd><a href="https://kinoshitafe26-recruit.com/joblist">募集一覧</a></dd>
												<dd><a href="https://kinoshitafe26-recruit.com/entry">応募フォーム</a></dd>
											</dl>
										</li>
									</ul>
								</li>
								<li>
									<ul class="__navigation">
										<li>
											<dl>
												<dt><a href="<?php if(!is_page('contact')): echo home_url(); echo'/contact'; endif; ?>">お問い合わせ</a></dt>
												<dd><a href="<?php if(!is_page('privacy')): echo home_url(); echo'/privacy'; endif; ?>">プライバシーポリシー</a></dd>
											</dl>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="_copy">
			<div class="wrapper">
				<p class="lead"><?php the_sub_field('フッター用コピー');?></p>
				<ul class="basic">
					<li>Copyright(C)KINOSHITA Fe 26. All Rights Reserved.</li>
				</ul>
			</div>
		</div>
	</footer>
	<?php endwhile;?>
	<?php endif;?>

	<!-- #site-footer -->

	<?php wp_footer(); ?>
	<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
	<script>
<?php if(is_front_page()): ?>
//Start___一文字づつ<span>で囲む
class SpanWrap {
	constructor() {
		this.settings = {
			target: ".spanWrap"
		}
		this.targets = "";
		this.targetLength = 0;
		this.nodes = [];
		this.convertContents = [];
	}
	init(options) {
		this.setup(options);
		this.getNodes();
		this.convert();
		this.set();
	}
	setup(options) {
		this.settings = Object.assign({
			target: this.settings.target
		}, options || {});
		this.targets = document.querySelectorAll(this.settings.target);
		this.targetLength = this.targets.length;
	}
	getNodes() {
		for (let target of this.targets) {
			let nodes = target.childNodes;
			this.nodes.push(nodes);
		}
	}
	convert() {
		for (let i = 0; i < this.targetLength; i++) {
			this.convertContents.push([]); //カラの配列を追加
			for (let node of this.nodes[i]) {
				if (node.nodeType == 3) { //テキストの場合
					let text = node.textContent.replace(/\s+/g, ''); //テキストから空白削除
					text.split('').forEach((v) => {
						this.convertContents[i].push("<span>" + v + "</span>");
					});
				} else { //テキスト以外
					this.convertContents[i].push(node.outerHTML);
				}
			}
		}
	}
	set() {
		for (let i = 0; i < this.targetLength; i++) {
			this.targets[i].innerHTML = this.convertContents[i].join("");
		}
	}
}
const spanWrap = new SpanWrap();
spanWrap.init();
//End___一文字づつ<span>で囲む


gsap.set(".js-box", {
	scale: .615
});
gsap.to(".js-box", {
	x: 0,
	rotation: 0,
	scale: 1,
	duration: 2,
	scrollTrigger: {
		trigger: ".js-trigger", //アニメーションが始まるトリガーとなる要素
		start: "top center", //アニメーションが始まる位置
		//markers: true,
		scrub: true,
	},
	stagger: {
		from: "start", //左からアニメーション start、center、edges、random、endが指定できる
		amount: 0.328 //0.1秒ズラしてアニメーション
	}
});
<?php endif; ?>
<?php if(is_page(array('company','tour'))): ?>
Fancybox.bind("[data-fancybox]", {
	// Your custom options
});
<?php endif; ?>
<?php if(is_page(array('about'))): ?>
gsap.set(".js-box", {
	opacity: 1,
	rotation: 0,
	scale: 1
});
gsap.to(".js-box", {
	y: 120,
	rotation: 0,
	opacity: .41,
	scale: .9,
	duration: 2,
	scrollTrigger: {
		trigger: ".js-trigger",
		start: "top center",
		//markers: true,
		scrub: true,
	},
	stagger: {
		from: "start",
		amount: 0.328
	}
});
gsap.set(".gsap-number", {
	y: 120,
	opacity: .41,
	rotation: 0,
	scale: .9
});
gsap.to(".gsap-number", {
	y: 0,
	rotation: 0,
	opacity: 1,
	scale: 1,
	duration: 2,
	scrollTrigger: {
		trigger: ".js-trigger",
		start: "top center",
		//markers: true,
		scrub: true,
	},
	stagger: {
		from: "start",
		amount: 0.328
	}
});
<?php endif; ?>
<?php if(is_page(array('newgraduate'))): ?>
jQuery(function($) {
	$(function() {
		$('[name="intern_entry"]:radio').change(function() {
			var result = $("input[name='intern_entry']:checked").val();
			if (result === '希望する') { //希望するを選んだ場合
				$('.open-area').css('display', 'block');
			} else if (result === '希望しない') { //希望しないを選んだ場合
				$('.open-area').css('display', 'none');
			}
		}).trigger('change');
	});
});
<?php endif; ?>

<?php if(is_page('internship') || is_parent_slug() === 'internship'):  ?>
jQuery(document).ready(function($) {
	$('#course').change(function() {
		var value = $(this).val();

		// すべての条件コンテンツを非表示に
		//$('.condition-content').addClass('hidden');

		// 選択された値に応じて特定のコンテンツを表示
		switch (value) {
			case '図面作成':
				$('#course-a').removeClass('hidden');
				break;
			case 'プログラミング':
				$('#course-b').removeClass('hidden');
				break;
			case '組立体験':
				$('#course-c').removeClass('hidden');
				break;
			case '評価テスト':
				$('#course-d').removeClass('hidden');
				break;
		}
	});
});
<?php endif; ?>

const cursor = new MouseFollower({
	el: null,
	container: document.body,
	className: 'mf-cursor',
	innerClassName: 'mf-cursor-inner',
	textClassName: 'mf-cursor-text',
	mediaClassName: 'mf-cursor-media',
	mediaBoxClassName: 'mf-cursor-media-box',
	iconSvgClassName: 'mf-svgsprite',
	iconSvgNamePrefix: '-',
	iconSvgSrc: '',
	dataAttr: 'cursor',
	hiddenState: '-hidden',
	textState: '-text',
	iconState: '-icon',
	activeState: '-active',
	mediaState: '-media',
	stateDetection: {
		'-pointer': 'a,button',
		'-hidden': 'iframe'
	},
	visible: true,
	visibleOnState: false,
	speed: 0.55,
	ease: 'expo.out',
	overwrite: true,
	skewing: 0,
	skewingText: 0,
	skewingIcon: 2,
	skewingMedia: 2,
	skewingDelta: 0.001,
	skewingDeltaMax: 0.15,
	stickDelta: 0.15,
	showTimeout: 20,
	hideOnLeave: true,
	hideTimeout: 300,
	hideMediaTimeout: 300
});
	</script>
	</body>

	</html>
