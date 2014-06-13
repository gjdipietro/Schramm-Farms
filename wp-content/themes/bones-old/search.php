
<?php 
  
 global $pageID;
 $pageID = 258;
  
?>

<?php get_header(); ?>
<section id="content" class="layout_content module_content">
	<div id="main"role="main">

		<article id="post-not-found" class="hentry clearfix">

			<header class="article-header module_styledBreak noTopBorder">
				<h1 class="archive-title"><span><?php _e( 'Search Results for:', 'bonestheme' ); ?></span> <?php echo esc_attr(get_search_query()); ?></h1>

			</header>

			<section class="module_thecontent clearfix" itemprop="articleBody">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						<header class="article-header">
							<h3 class="search-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
							<p class="byline vcard"><?php
							printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span> <span class="amp">&</span> filed under %4$s.', 'bonestheme' ), get_the_time( 'Y-m-j' ), get_the_time( __( 'F jS, Y', 'bonestheme' ) ), bones_get_the_author_posts_link(), get_the_category_list(', ') );
							?></p>
							<?php the_excerpt( '<span class="read-more">' . __( 'Read more &raquo;', 'bonestheme' ) . '</span>' ); ?>
						</header>
					</article>
				<?php endwhile; ?>

				<?php if (function_exists('bones_page_navi')) { ?>
					<?php bones_page_navi(); ?>
				<?php } else { ?>
					<nav class="wp-prev-next">
						<ul class="clearfix">
							<li class="prev-link"><?php next_posts_link( __( '&laquo; Older Entries', 'bonestheme' )) ?></li>
							<li class="next-link"><?php previous_posts_link( __( 'Newer Entries &raquo;', 'bonestheme' )) ?></li>
						</ul>
					</nav>
				<?php } ?>

				<?php else : ?>

					<article id="post-not-found" class="hentry clearfix">
						<header class="article-header">
							<h1><?php _e( 'Sorry, No Results.', 'bonestheme' ); ?></h1>
						</header>
						<section class="entry-content">
							<p><?php _e( 'Try your search again.', 'bonestheme' ); ?></p>
						</section>
					</article>
				<?php endif; ?>
			</section>


		</article>

	</div>
</section>





						

					

<?php get_footer(); ?>
