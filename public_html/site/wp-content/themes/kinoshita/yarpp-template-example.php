<?php
/*
YARPP Template: Starter Template
Description: A simple starter example template that you can edit.
Author: YARPP Team
*/
?>

<?php
/*
Templating in YARPP enables developers to uber-customize their YARPP display using PHP and template tags.

The tags we use in YARPP templates are the same as the template tags used in any WordPress template. In fact, any WordPress template tag will work in the YARPP Loop. You can use these template tags to display the excerpt, the post date, the comment count, or even some custom metadata. In addition, template tags from other plugins will also work.

If you've ever had to tweak or build a WordPress theme before, you’ll immediately feel at home.

// Special template tags which only work within a YARPP Loop:

1. the_score()		// this will print the YARPP match score of that particular related post
2. get_the_score()		// or return the YARPP match score of that particular related post

Notes:
1. If you would like Pinterest not to save an image, add `data-pin-nopin="true"` to the img tag.

*/
?>

<h2 class="secTtl"><span>ピックアップ求人</span></h2>
<?php if ( have_posts() ) : ?>
<div class="box free-container">
 <div class="swiper-wrapper">
	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<div class="swiper-slide pickup_card">
 		<a href="<?php the_permalink(); ?>?post_id=<?php echo $post->ID; ?>" rel="bookmark norewrite" title="<?php the_title_attribute(); ?>" >
    <div class="_head">
					<div class="aspect aspect41">
					 <div class="aspectBlock">
      <?php if(get_field('見出し画像')):?>
       <img src="<?php	echo wp_get_attachment_image_url(get_field('見出し画像'), 'full');	?>" alt="<?php the_title(); ?>" class="objf showImg inview">
       <?php else: ?>
       <img src="<?php bloginfo('template_url'); ?>/images/sample.jpg" alt="<?php the_title(); ?>" class="objf showImg inview">
       <?php endif; ?>
						</div>
					</div>
    </div>
    <div class="_body">
					<h2 class="jobTtl"><span><?php the_title(); ?></span></h2>
     <ul class="box listJobPram">
      <li><span><?php the_field('事業');?></span></li>
      <li><span><?php the_field('職種');?></span></li>
      <li><span><?php the_field('雇用形態');?></span></li>
      <li><span><?php the_field('エリア');?></span></li>
     </ul>
				</div>
	 	</a>
		<!-- (<?php the_score(); ?>)-->
		</div>
	<?php endwhile; ?>
	</div>
</div>
<?php else : ?>
<p>No related posts.</p>
<?php endif; ?>
