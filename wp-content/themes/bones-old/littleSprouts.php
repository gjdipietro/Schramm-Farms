<?php
/**
 * Template Name: little Sprouts
 *
 * Used by little sprouts
 */
?>

<?php 
 $fields = $cfs->get(); 
 $pics = $cfs->get('picstory'); 
 get_header(); 
?>

<section id="content" class="layout_content module_content">
	<div id="main"role="main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

			<header class="article-header module_styledBreak noTopBorder">
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title() ?></a></h1>
				<h3 class="tagline"><?php echo $fields['tagline']; ?></h3>
			</header>

			<section class="module_thecontent clearfix" itemprop="articleBody">
				
				<?php if ($fields['announcement']) {?> 
					<div class="module_styledBG module_annoucement">
						<strong class="title"><?php the_modified_time('F j, Y'); ?></strong> 
						<p><?php echo $fields['announcement']; ?></p>
					</div> 
				<?php } ?>

				<?php the_content(); ?>

				<?php 
				if ( isset($fields['registration']) ) { ?>
				<p>
			 	 	<a href="<?php echo $fields['registration']; ?>" target="_blank" title="Print Registration Form">Print Little Sprouts Registration Form</a>					
				</p>
				<br>
				<?php } ?>

				<?php 
				if ( isset( $fields['family_reg']) ) { ?>
				<p>
			 	 	<a href="<?php echo $fields['family_reg']; ?>" target="_blank" title="Print Family Session Registration Form">Print Family Session Registration Form</a>					
				</p>
				<br>
				<?php } ?>


				<?php
				foreach ($pics as $pics) {
				?>
					<figure>
						<img src="<?php echo $pics['picture'] ?>" />
						<figcaption><?php echo $pics['caption']; ?></figcaption>
					</figure>					
				<?php } ?>

				

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
