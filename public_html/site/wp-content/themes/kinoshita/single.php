<?php get_header(); ?>

<main id="siteContent" role="main" class="post">
	<?php if (have_posts()) : ?>
	<div class="page_body">
		<article class="-page ___single">
			<?php while (have_posts()) : the_post(); ?>
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?>
	<?php if(get_field('見出し画像')):?>
	<header class="post_header">
  <div class="thumbnail">
			<div class="aspect aspect50">
				<div class="aspectBlock">
					<img src="<?php	echo wp_get_attachment_image_url(get_field('見出し画像'), 'full');	?>" alt="<?php the_title(); ?>" class="objf" loading="lazy">
				</div>
			</div>
 	</div>
	</header>
	<?php endif; ?>
			<section>
				<div class="_main">
				<div class="wrapper">
		 		<div id="sec1" class="_block here1">
						<?php if(get_field('見出しテキスト')):?>
				 	<dl class="require_headline">
	 					<dt><p><?php the_field('見出しテキスト');?></p></dt>
				 	</dl>
						<?php endif; ?>
						<ul class="jobtag">
							<?php $arg = get_field('雇用形態'); if(!empty($arg)):?>
							<li><span><?php the_field('雇用形態');?></span></li>
							<?php endif;?>
							<?php $arg = get_field('職種'); if(!empty($arg)):?>
							<li><span><?php the_field('職種');?></span></li>
							<?php endif;?>
						</ul>
				 </div>
					
					<?php if(get_field('特徴1')):?>
					<div id="sec1" class="_block here1">
						<h2><i></i>求める人物像</h2>
						<div class="wanted_wrapper">
							<ul class="list">
							 <li>
								 <dl>
									 <dt><?php the_field('特徴1');?></dt>
										<dd><?php the_field('特徴1_詳細');?></dd>
									</dl>
								</li>
							 <li>
								 <dl>
									 <dt><?php the_field('特徴2');?></dt>
										<dd><?php the_field('特徴2_詳細');?></dd>
									</dl>
								</li>
							 <li>
								 <dl>
									 <dt><?php the_field('特徴3');?></dt>
										<dd><?php the_field('特徴2_詳細');?></dd>
									</dl>
								</li>
							</ul>
						</div>
					</div>
					<?php endif; ?>
							
					<?php if(get_field('採用メッセージ_見出し')):?>
					<div id="sec2" class="_block here2">
						<h2><i></i>採用メッセージ</h2>
						<div class="recruit-message_wrapper">
						 <dl>
							 <dt><?php the_field('採用メッセージ_見出し');?></dt>
								<dd><?php the_field('採用メッセージ_本文');?></dd>
							</dl>
						</div>
					</div>
					<?php endif; ?>
							
					<div id="sec3" class="_block here3">
					 <h2><i></i>募集要項</h2>
						<div class="requirements_wrapper">
							<ul class="list">
								<?php if(get_field('募集職種')):?>
								<li>
								 <dl class="list">
									 <dt><span>職種</span></dt>
									 <dd><span><b><?php the_field('募集職種');?></b></span></dd>
									</dl>
								</li>
        <?php endif;?>
								<?php if(get_field('仕事内容')):?>
								<li>
								 <dl class="list">
									 <dt><span>仕事内容</span></dt>
									 <dd><span><b><?php the_field('仕事内容');?></b></span></dd>
									</dl>
								</li>
        <?php endif;?>
        <?php if(get_field('雇用形態')):?>
								<li>
								 <dl class="list">
									 <dt><span>雇用形態</span></dt>
									 <dd>
											<span><b><?php the_field('雇用形態');?></b></span>
											<?php if(get_field('雇用形態補足')):?>
											<span><?php the_field('雇用形態補足');?></span>
											<?php endif;?>
										</dd>
									</dl>
								</li>
        <?php endif;?>
        <?php if(get_field('必要資格')):?>
								<li>
								 <dl class="list">
									 <dt><span>必要資格</span></dt>
									 <dd><span><?php echo nl2br( post_custom( '必要資格' ) ); ?></span></dd>
									</dl>
								</li>
        <?php endif;?>
        <?php if(get_field('勤務時間')):?>
								<li>
								 <dl class="list">
									 <dt><span>勤務時間</span></dt>
									 <dd><span><?php the_field('勤務時間');?></span></dd>
									</dl>
								</li>
        <?php endif;?>
        <?php if(get_field('待遇')):?>
								<li>
								 <dl class="list">
									 <dt><span>待遇</span></dt>
									 <dd><span><?php the_field('待遇');?></span></dd>
									</dl>
								</li>
        <?php endif;?>
        <?php if(get_field('休日')):?>
								<li>
								 <dl class="list">
									 <dt><span>休日</span></dt>
									 <dd><span><?php the_field('休日');?></span></dd>
									</dl>
								</li>
        <?php endif;?>
        <?php if(get_field('最低給与')):?>
								<li>
								 <dl class="list">
									 <dt><span>給与</span></dt>
									 <dd>
											<span>
												<?php
												the_field('給与形態');
												echo number_format( get_field('最低給与')) ;
												echo '円〜';
												if(get_field('最高給与')):
												echo number_format( get_field('最高給与'));
												echo '円';
												endif;
												?>
           </span>
										</dd>
									</dl>
								</li>
        <?php endif;?>
        <?php if(get_field('モデル年収')):?>
								<li>
								 <dl class="list">
									 <dt><span>モデル年収</span></dt>
									 <dd><span><?php the_field('モデル年収');?></span></dd>
									</dl>
								</li>
        <?php endif;?>
        <?php if(get_field('給与の備考')):?>
								<li>
								 <dl class="list">
									 <dt><span>給与の備考</span></dt>
									 <dd><span><?php the_field('給与の備考');?></span></dd>
									</dl>
								</li>
        <?php endif;?>
        <?php if(get_field('手当')):?>
								<li>
								 <dl class="list">
									 <dt><span>手当</span></dt>
									 <dd><span><?php the_field('手当');?></span></dd>
									</dl>
								</li>
        <?php endif;?>
        <?php if(get_field('待遇・福利厚生')):?>
								<li>
								 <dl class="list">
									 <dt><span>待遇・福利厚生</span></dt>
									 <dd><span><?php the_field('待遇・福利厚生');?></span></dd>
									</dl>
								</li>
        <?php endif;?>
        <?php if(get_field('加入保険')):?>
								<li>
								 <dl class="list">
									 <dt><span>加入保険</span></dt>
									 <dd><span><?php the_field('加入保険');?></span></dd>
									</dl>
								</li>
        <?php endif;?>
        <?php if(get_field('採用プロセス')):?>
								<li>
								 <dl class="list">
									 <dt><span>採用プロセス</span></dt>
									 <dd><span><?php the_field('採用プロセス');?></span></dd>
									</dl>
								</li>
        <?php endif;?>
        <?php if(get_field('郵便番号')):?>
								<li>
								 <dl class="list">
									 <dt><span>勤務地</span></dt>
									 <dd>
											<span>
												<?php
												echo '〒';
												the_field('郵便番号');
												echo '<br>';
												echo the_field('都道府県');
												echo the_field('市区町村');
												echo the_field('番地');
												?>
											</span>
										</dd>
									</dl>
								</li>
        <?php endif;?>
        <?php if(get_field('電話番号')):?>
								<li>
								 <dl class="list">
									 <dt><span>電話番号</span></dt>
									 <dd><span><?php the_field('電話番号');?></span></dd>
									</dl>
								</li>
        <?php endif;?>
							</ul>
						</div>
					</div>
				 <div id="form" class="_block here4">
					 <h2><i></i>応募フォーム</h2>
					 <div class="requirements_wrapper form_wrapper">
				 		<?php echo do_shortcode('[mwform_formkey key="284"]'); ?>
				 	</div>
				 </div>
				</div>
				</div>
			</section>
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?>
		</article>
	</div>
	<?php endwhile; else : endif; ?>
</main>
<div class="footer_height"></div>

<?php get_footer(); ?>
