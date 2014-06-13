<?php
/**
 * Template Name: single-blog
 *
 * Selectable from a dropdown menu on the edit page screen.
 */
?>

<?php 
 $fields = $cfs->get(); 
 $components = $cfs->get('components'); 

 global $pageID;
 $pageID = 230;
 get_header(); 
?>

<section id="content" class="layout_content module_content">
	<div id="main" role="main">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

		<section class="entry-content clearfix">
			<div class="recipeIntro">
				
				
				<header class="article-header module_styledBreak noTopBorder">
					<h1 title="<?php the_title_attribute(); ?>"><?php the_title() ?></h1>
					<h3 class="tagline byline vcard">
						<?php
						printf( __( 'In <a href="../../recipes/">Recipes</a> <i class="fa fa-circle"></i> <time class="updated" datetime="%1$s" pubdate>%2$s</time>', 'bonestheme' ), get_the_time( 'Y-m-j' ), get_the_time( __( 'F jS, Y', 'bonestheme' ) ), get_the_term_list( $post->ID, 'custom_cat', ' ', ', ', '' ) );
						?>
					</h3>
				</header>
				
				
				<?php the_content(); ?>		
			</div>
			
			<?php if($fields['has_recipe']){ ?>
			<div class="recipe">
				<a href="javascript:window.print()" class="printButton" title="Print Recipe">
					<i class="fa fa-print fa-2x" title="Print" alt="Print"></i>
				</a>
				<h2><?php the_title(); ?></h2>
				<ul class="cookTime">
					<?php if($fields['yields']){ ?>
						<li>						
							<strong>Serves </strong> 
							<?php echo $fields['yields'];?>
						</li>
					<?php } ?>
						<?php if($fields['prep_time']){ ?>
						<li>						
							<strong>Prep Time </strong> 
							<?php echo $fields['prep_time'];?>
						</li>
					<?php } ?>
						<?php if($fields['cook_time']){ ?>
						<li>						
							<strong>Cook Time </strong> 
							<?php echo $fields['cook_time'];?>
						</li>
					<?php } ?>
						<?php if($fields['total_time']){ ?>
						<li>						
							<strong>Total Time </strong> 
							<?php echo $fields['total_time'];?>
						</li>
					<?php } ?>
				</ul>
				<h3>Ingredients</h3>
				<?php
				foreach ($components as $components) {
				?> 
					<h4 class="comp-name"><?php echo $components['component_name'] ?> </h4>
					<p class="comp-ing"> <?php echo $components['component_ingredients']; ?> </p>
				<?php } ?>
				

				<h3>Directions</h3>
				<?php echo $fields['directions'];?></p>
			</div>
			<?php } ?>
		</section>

		

		<footer class="article-footer">
			<p class="tags"><?php echo get_the_term_list( get_the_ID(), 'custom_tag', '<span class="tags-title">' . __( 'Custom Tags:', 'bonestheme' ) . '</span> ', ', ' ) ?></p>
		</footer>


		<?php /* if ( function_exists( 'bones_page_navi' ) ) { ?>
			<?php bones_page_navi(); ?>
				<?php } else { ?>
				<nav class="wp-prev-next">
					<ul class="clearfix">
						<li class="prev-link"><?php next_posts_link( __( '&laquo; Older Entries', 'bonestheme' )) ?></li>
						<li class="next-link"><?php previous_posts_link( __( 'Newer Entries &raquo;', 'bonestheme' )) ?></li>
					</ul>
				</nav>
			<?php } ?>
		<?php else : */ ?>

		

		<div class="commentsBlock">
			<?php comments_template(); ?>
		</div>
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
