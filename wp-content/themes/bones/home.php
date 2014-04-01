<?php
/**
 * Template Name: Home
 *
 * Selectable from a dropdown menu on the edit page screen.
 */
?>


<?php get_header(); ?>



			

<section id="content" class="layout_content module_content">
	<div id="main" role="main">
							
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
			
			<div class="module_homeInfo">
				<p class="sTagline"><?php echo $fields['tagline'] ?></p>

				<p class="sTaglineSub">
					<span><a href="//maps.google.com/maps?q=Schramm Farms Orchards Jeannette, PA 15644" target="_blank">1002 Blank Road, Jeannette PA</a></span>
				    <i class="fa fa-circle"></i>
				    <span><a href="tel:724-744-7320">724-744-7320</a></span>
				    <i class="fa fa-circle"></i>
					<span><?php include('hours.php');?></span>
				</p>
			</div>


			
			<h2 class="h5 module_styledBreak thin">
				Announcements
			</h2>

			<ul class="module_grid_postList clearfix">
				<?php
				//WordPress loop for custom post type
		 		$my_query = new WP_Query('post_type=post&posts_per_page=-1&showposts=9');
				while ($my_query->have_posts()) : $my_query->the_post(); 
					$fields = $cfs->get();
					$thumb_id = get_post_thumbnail_id();
					$thumb_url = wp_get_attachment_image_src($thumb_id, 'medium', true);
					$permalink = get_permalink();
					if ( $fields['direct_link'] ) {
						$permalink = $fields['direct_link'];
					}
				?>

				<li role="article" id="post-<?php the_ID(); ?>"  class="<?php if($fields['is_coupon']) { echo "coupon"; } ?>">
					<a href="<?php echo $permalink ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
						<?php if($fields['is_coupon']) { ?> <div class="couponImg"></div> <?php } ?>
						<img src="<?php echo $thumb_url[0];?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
					</a>
					<div class="meta">
						<h2>
							<a href="<?php echo $permalink ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>						
						</h2>
					</div>
					
				</li>
				<?php endwhile;  wp_reset_query(); ?>
			</ul>
			

			<h2 class="h5 module_styledBreak thin">
				About Schramm's
			</h2>
			<section class="module_thecontent clearfix" itemprop="articleBody">
				<?php the_content(); ?>
			</section>


		</article>

		<?php endwhile; else : ?>
		<article id="post-not-found" class="hentry clearfix">
			<header class="article-header module_styledBreak noTopBorder">
				<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
			</header>
			<section class="module_thecontent clearfix">
				<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
			</section>
		</article>
		<?php endif; ?>

				



			

		

	</div>
</section>



<?php get_footer(); ?>