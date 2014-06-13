<?php 
  
 global $pageID;
 $pageID = 258;
  
?>


<?php get_header(); ?>
<section id="content" class="layout_content module_content">
	<div id="main"role="main">

		<article id="post-not-found" class="hentry clearfix">

			<header class="article-header module_styledBreak noTopBorder">
				<h1>Page Not Found</h1>
			</header>

			<section class="module_thecontent clearfix" itemprop="articleBody">
				<p><?php _e( 'The article you were looking for was not found, but maybe try looking again!', 'bonestheme' ); ?></p>
				<p><?php get_search_form(); ?></p>
			</section>


		</article>

	</div>
</section>


<?php get_footer(); ?>
