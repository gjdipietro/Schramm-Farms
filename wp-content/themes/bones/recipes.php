<?php
/**
 * Template Name: Recipes
 *
 * Selectable from a dropdown menu on the edit page screen.
 */

?>


<?php get_header(); ?>
			
			

<section id="content" class="layout_content module_content">
	<div id="main" role="main">
							
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
			<header class="article-header module_styledBreak noTopBorder">
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title() ?></a></h1>
				<h3 class="tagline"><?php echo $fields['tagline']; ?></h3>
			</header>
	
			<section class="module_thecontent clearfix" itemprop="articleBody">
				<?php the_content(); ?>

				<ul class="module_stacked_postList clearfix">
					<?php
					//WordPress loop for custom post type
			 		$query = 'post_type=blog&posts_per_page=-1&posts&showposts=15';
					$my_query = new WP_Query($query);
					while ($my_query->have_posts()) : $my_query->the_post(); ?>
					<li role="article" id="post-<?php the_ID(); ?>" class="clearfix">
						<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
							<?php 
							$thumb_id = get_post_thumbnail_id();
							$size = array(300,300);
							$thumb_url = wp_get_attachment_image_src($thumb_id, $size, true);
							?>
							<img src="<?php echo $thumb_url[0];?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
							<div class="info">
								<h2><?php the_title(); ?></h2>
								<?php the_excerpt() ?>
							</div>
						</a>
					</li>
					<?php endwhile;  wp_reset_query(); ?>
				</ul>
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


		<div class="subscribe">
			<div id="s2_form_widget-2" class="widget s2_form_widget">
				<div class="search">
					<form method="post" action="http://www.schrammfarms.com/recipes/">
						<input type="hidden" name="ip" value="98.236.70.139">
						<span style="display:none !important">
						<label for="name">Leave Blank:</label>
						<input type="text" id="name" name="name">
						<label for="uri">Do Not Change:</label>
						<input type="text" id="uri" name="uri" value="http://">
						</span>
						<label for="s2email">Email me Recipes and Annoucements!</label>
						<input type="email" name="email" id="s2email" size="20" placeholder="Enter Email Address" />
						<input type="submit" name="subscribe" class="button" value="Go">
					</form>
				</div>
			</div>
		</div>

		
			
	</div>
</section>



<?php get_footer(); ?>