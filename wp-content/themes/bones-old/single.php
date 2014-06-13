<?php
/**
 * Template Name: single
 *
 * Selectable from a dropdown menu on the edit page screen.
 */
?>


<?php 
 $fields = $cfs->get(); 
 global $pageID;
 $pageID = 258;
 get_header(); 
?>

<section id="content" class="layout_content module_content">
	<div id="main" role="main">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
			
			
			<header class="article-header module_styledBreak noTopBorder">
				<h1 title="<?php the_title_attribute(); ?>"><?php the_title() ?></h1>
			</header>

			<section class="entry-content clearfix">
				
				<?php  // check for coupon post
				if ( $fields['is_coupon'] ) {
					?>
					<div class="couponIntro">
						<?php the_content(); ?>
					</div>
					<div class="actualCoupon">
						<a href="javascript:window.print()" class="printButton" title="Print Recipe">
							<i class="fa fa-print fa-2x" title="Print" alt="Print"></i>
						</a>
						<div class="title">
							<img src="<?php echo get_template_directory_uri(); ?>/library/images/logo.png" alt="Schramm Farms & Orchards" />
						</div>
						<div class="details">
							<p><?php echo $fields['coupon_details'] ?></p>
							<p>Expires: 
							<strong><?php echo date('F d, Y', strtotime($fields['coupon_expiration']));  ?></strong></p>
							<p>If you cannot print this coupon please use coupon code: <strong><?php echo $fields['coupon_code'] ?></strong></p>
						</div>
					</div>
				<?php 
				}

				else {
					the_content(); 
				}
				?>

			</section>


			<footer class="article-footer">
				<p class="tags"><?php echo get_the_term_list( get_the_ID(), 'custom_tag', '<span class="tags-title">' . __( 'Custom Tags:', 'bonestheme' ) . '</span> ', ', ' ) ?></p>
			</footer>

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
