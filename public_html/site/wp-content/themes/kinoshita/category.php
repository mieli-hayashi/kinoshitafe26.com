<?php get_header(); ?>
<main id="siteContent" class="change" role="main">
 <div class="page_body">
  <article class="-page ___archive">
   <header> <span>News / Journal</span>
    <h1>
     <?php single_cat_title(); ?>
    </h1>
    <ul class="category">
     <li><a href="<?php echo home_url(); ?>/news"><span>お知らせ</span></a></li>
     <li><a href="<?php echo home_url(); ?>/press"><span>プレスリリース</span></a></li>
     <li><a href="<?php echo home_url(); ?>/event"><span>イベント・セミナー</span></a></li>
     <li><a href="<?php echo home_url(); ?>/media"><span>メディア</span></a></li>
    </ul>
   </header>
   <section>
    <div class="_block wrapper">
     <?php if (have_posts()) : ?>
     <div class="_body">
      <ul class="list">
       <?php while (have_posts()) : the_post(); ?>
       <li> <a href="<?php echo get_permalink() ?>" class="card">
        <div class="_img">
         <div class="aspect aspect61">
          <div class="aspectBlock">
           <?php if ( has_post_thumbnail() ): ?>
           <?php the_post_thumbnail( 'large', array( 'class' => 'objf' )); ?>
           <?php else: ?>
           <img src="<?php bloginfo('template_url'); ?>/images/index/background.jpg" class="objf" loading="lazy">
           <?php endif; ?>
          </div>
         </div>
        </div>
        <div class="_txt">
         <time datetime="<?php the_time('Y-m-d'); ?>">
          <?php the_time('Y.m.d'); ?>
         </time>
         <p class="title">
          <?php the_title(); ?>
         </p>
        </div>
        </a>
        <?php the_category( ); ?>
       </li>
       <?php endwhile; ?>
      </ul>
     </div>
     <?php endif; wp_reset_query(); ?>
     <div class="_foot"> </div>
    </div>
   </section>
  </article>
 </div>
</main>
<!-- #site-content -->
<div class="footer_height"></div>
<?php get_footer(); ?>
