<?php
/**
 * Template Name: single-ordering
 *
 * Selectable from a dropdown menu on the edit page screen.
 */
?>

<?php 
 $fields = $cfs->get(); 
 global $pageID;
 $pageID = 180;
 get_header(); 
?>

<section id="content" class="layout_content module_content">
	<div id="main" role="main">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
			
			<header class="article-header module_styledBreak noTopBorder">
				<h1 title="<?php the_title_attribute(); ?>"><?php the_title() ?></h1>
				<h3 class="tagline">In <a href="../">Ordering</a></h3>
			</header>

			<section class="entry-content clearfix">
				<?php the_content(); ?>
				<a href="<?php echo $fields['order_form']; ?>" target="_blank" class="module_printForm" title="Print Order Form">
					<img src="<?php echo get_template_directory_uri(); ?>/library/images/pdf.png" alt="Print Order Form" />
					Print Order Form
				</a>
			</section>
		</article>
		<?php endwhile; ?>
		
		<?php else : ?>
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
