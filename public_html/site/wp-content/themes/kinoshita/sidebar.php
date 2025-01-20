<?php if(is_page('about') || is_parent_slug() === 'about'): ?>

<section class="idx page_navigation">
		<div class="wrapper">
			<ul class="list done">
			 <li class="<?php if(is_page('policy')): echo 'current'; endif; ?>">
				 <a href="<?php if(!is_page('policy')): echo home_url(); echo'/about/policy'; endif; ?>#" class="card">
					 <div class="_txt">
							<div class="title_block thirdly">
							 <h2>PMVV</h2>
							</div>
							<i><img src="<?php bloginfo('template_url'); ?>/images/icon/arrow_blue.svg" width="64" height="64" loading="lazy"></i>
						</div>
					</a>
				</li>
			 <li class="<?php if(is_page('message')): echo 'current'; endif; ?>">
				 <a href="<?php if(!is_page('message')): echo home_url(); echo'/about/message'; endif; ?>#" class="card">
					 <div class="_txt">
							<div class="title_block thirdly">
							 <h2>社長メッセージ</h2>
							</div>
							<i><img src="<?php bloginfo('template_url'); ?>/images/icon/arrow_blue.svg" width="64" height="64" loading="lazy"></i>
						</div>
					</a>
				</li>
			 <li class="<?php if(is_page('company')): echo 'current'; endif; ?>">
				 <a href="<?php if(!is_page('company')): echo home_url(); echo'/about/company'; endif; ?>#" class="card">
					 <div class="_txt">
							<div class="title_block thirdly">
							 <h2>企業概要</h2>
							</div>
							<i><img src="<?php bloginfo('template_url'); ?>/images/icon/arrow_blue.svg" width="64" height="64" loading="lazy"></i>
						</div>
					</a>
				</li>
			 <li class="<?php if(is_page('history')): echo 'current'; endif; ?>">
				 <a href="<?php if(!is_page('history')): echo home_url(); echo'/about/history'; endif; ?>#" class="card">
					 <div class="_txt">
							<div class="title_block thirdly">
							 <h2>会社沿革</h2>
							</div>
							<i><img src="<?php bloginfo('template_url'); ?>/images/icon/arrow_blue.svg" width="64" height="64" loading="lazy"></i>
						</div>
					</a>
				</li>
			 <li class="<?php if(is_page('tour')): echo 'current'; endif; ?>">
				 <a href="<?php if(!is_page('tour')): echo home_url(); echo'/about/tour'; endif; ?>#" class="card">
					 <div class="_txt">
							<div class="title_block thirdly">
							 <h2>オフィス・工場紹介</h2>
							</div>
							<i><img src="<?php bloginfo('template_url'); ?>/images/icon/arrow_blue.svg" width="64" height="64" loading="lazy"></i>
						</div>
					</a>
				</li>
			</ul>
		</div>
	</section>

<?php elseif(is_page('recruit') || is_parent_slug() === 'recruit'): ?>

<section class="idx page_navigation">
		<div class="wrapper">
			<ul class="list recruit done">
			 <li>
				 <a href="<?php if(!is_page('business')): echo home_url(); echo'/recruit/business'; endif; ?>#" class="card">
					 <div class="_txt">
							<div class="title_block secondly">
							 <h2>仕事を知る</h2>
								<h3>Our Business</h3>
							</div>
							<i><img src="<?php bloginfo('template_url'); ?>/images/icon/arrow_wh.svg" width="64" height="64" loading="lazy"></i>
						</div>
					</a>
				</li>
			 <li>
				 <a href="<?php if(!is_page('welfare')): echo home_url(); echo'/recruit/welfare'; endif; ?>#" class="card">
					 <div class="_txt">
							<div class="title_block secondly">
							 <h2>福利厚生</h2>
								<h3>Welfare System</h3>
							</div>
							<i><img src="<?php bloginfo('template_url'); ?>/images/icon/arrow_wh.svg" width="64" height="64" loading="lazy"></i>
						</div>
					</a>
				</li>
			 <li>
				 <a href="<?php if(!is_page('bill')): echo home_url(); echo'/recruit/bill'; endif; ?>#" class="card">
					 <div class="_txt">
							<div class="title_block secondly">
							 <h2>給与・報酬</h2>
								<h3>Salary & Compensation</h3>
							</div>
							<i><img src="<?php bloginfo('template_url'); ?>/images/icon/arrow_wh.svg" width="64" height="64" loading="lazy"></i>
						</div>
					</a>
				</li>
			 <li>
				 <a href="<?php if(!is_page('training')): echo home_url(); echo'/recruit/training'; endif; ?>#" class="card">
					 <div class="_txt">
							<div class="title_block secondly">
							 <h2>研修制度</h2>
								<h3>Training System</h3>
							</div>
							<i><img src="<?php bloginfo('template_url'); ?>/images/icon/arrow_wh.svg" width="64" height="64" loading="lazy"></i>
						</div>
					</a>
				</li>
			 <li>
				 <a href="<?php if(!is_page('interview')): echo home_url(); echo'/recruit/interview'; endif; ?>#" class="card">
					 <div class="_txt">
							<div class="title_block secondly">
							 <h2>社員インタビュー</h2>
								<h3>Staff Interview</h3>
							</div>
							<i><img src="<?php bloginfo('template_url'); ?>/images/icon/arrow_wh.svg" width="64" height="64" loading="lazy"></i>
						</div>
					</a>
				</li>
			</ul>
		</div>
	</section>

<?php endif; ?>
