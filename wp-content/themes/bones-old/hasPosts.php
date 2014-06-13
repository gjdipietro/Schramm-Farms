<?php
/**
 * Template Name: hasPosts
 *
 * used by events and ordering
 */
?>

		

<?php $fields = $cfs->get(); ?>

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
			</section>

			<ul class="module_grid_postList clearfix">
				<?php
				//WordPress loop for custom post type
		 		$query = 'post_type= '.$fields['post_type_name'].'&posts_per_page=-1&orderby=menu_order&order=ASC';
				$my_query = new WP_Query($query);
				while ($my_query->have_posts()) : $my_query->the_post(); ?>
					


				<li role="article" id="post-<?php the_ID(); ?>">
					<?php
					//little sprouts hijack check.
					if( $id == "196" ) {  ?>
					<a href="<?php bloginfo('url'); ?>/little-sprouts" rel="bookmark" title="<?php the_title_attribute(); ?>"> <?php } else {  ?>	
					<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
						<?php
						}
						$thumb_id = get_post_thumbnail_id();
						$thumb_url = wp_get_attachment_image_src($thumb_id, 'medium', true);
						?>
						<img src="<?php echo $thumb_url[0];?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
					</a>

					<div class="meta">
						<h2>
							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?>
							</a>
						</h2>
					</div>

				</li>
				<?php endwhile;  wp_reset_query(); ?>
			</ul>
			<?php get_sidebar(); ?>
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