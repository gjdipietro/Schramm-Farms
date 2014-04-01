<!--  
This is the main page 
right now just use the map stuff for reference

-->

<?php get_header(); ?>
			
			
<section id="content" class="layout_content module_content">
	<div id="main" role="main">
		
		<header class="module_pageBanner">
			<?php 
			$thumb_id = get_post_thumbnail_id();
			$thumb_url = wp_get_attachment_image_src($thumb_id,'original', true);
			?><img src="<?php echo $thumb_url[0];?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
			<div class="title">
				<h1 class="page-title">Schramm's Farm</h1>
				<h3 class="tagline"><?php echo get_bloginfo ( 'description' ); ?></h3>
			</div>
		</header>

		
		<h1>On the farm</h1>
			<ul class="featured-post-list clearfix">
				<?php if (have_posts()) : while (have_posts()) : the_post(); 
				$fields = $cfs->get();
				$thumb_id = get_post_thumbnail_id();
				$thumb_url = wp_get_attachment_image_src($thumb_id,'medium', true);
				?>
				<li role="article" id="post-<?php the_ID(); ?>" class="<?php if($fields['is_coupon']) { echo "coupon"; } ?>" >
					<?php 
					if ($fields['direct_link']) {
					?><a href="<?php echo $fields[direct_link] ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
					<?php 
					}
					else { 
					?><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
					<?php
					}
					?>
					<img src="<?php echo $thumb_url[0];?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
					<h2><?php the_title(); ?></h2>
					<?php the_excerpt() ?>
					</a>
				</li>
				<?php endwhile; ?>
			</ul>


			<?php if ( function_exists( 'bones_page_navi' ) ) { ?>
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
					<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
				</header>
				
				<section class="entry-content">
					<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
				</section>
				<footer class="article-footer">
					<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
				</footer>
			</article>
			<?php endif; ?>
							

			<div class="clearfix">
				<h2>About Schramm's</h2>
				<p>
				Schramm’s is a family owned and operated farm that has been growing and selling fresh fruits
				and vegetables in the Pittsburgh area since 1864. Third-generation farmer Eugene H. Schramm Sr. re-located the farm in
				1981 to its current location in Harrison City, Pennsylvania. Today, the tradition of farming is carried on by Eugene’s sons
				Hilary, John, and Ralph, along with their families and exceptional staff.
				
				<h2>Our Mission</h2>
				</p>
				Schramm Farms <span class="amp">&amp;</span> Orchards takes pride in providing high-quality, homegrown fruits and vegetables to our
				community. We believe that local produce has many benefits including superior taste, freshness, and nutritional value. 
				We believe in participating in the local community; supporting local interests and community groups, and contributing 
				to the econ
				</p>
				<!--
				<h2>Directions</h2>
				<div class="map" id="map-canvas">
					<a href="http://maps.googleapis.com/maps/api/staticmap?center=1002,Blank%20Road%20PA%2015644" class="btn map-link">Open Map</a>
			    </div>
				-->
			</div>

	</div>
</section>



<?php get_footer(); ?>


<script type="text/javascript">





$(document).ready(function(){
  //buildMap();
});
/*
var sw = document.body.clientWidth,
    bp = 550,
    $map = $('.map');

var static = "http://maps.googleapis.com/maps/api/staticmap?center=Williamsburg,Brooklyn,NY&zoom=13&size=400x400&markers=color:blue%7Clabel:S%7C11211%7C11206%7C11222&sensor=false";
var embed = '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12157.571115009412!2d-79.64252060247877!3d40.37798659299369!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8834c47cb5798c35%3A0x39e3e0e1e218ca1c!2sSchramm+Farms+%26+Orchards!5e0!3m2!1sen!2sus!4v1386651784751" width="600" height="450" frameborder="0" style="border:0"></iframe>';

function buildMap() {
  if(sw>bp) { //If Large Screen
      if($('.map-container').length < 1) { //If map doesn't already exist
        buildEmbed();
      }
  } else {
      if($('.static-img').length < 1) { //If static image doesn't exist
        buildStatic();
      }
  }
};

function buildEmbed() { //Build iframe view
    $('<div class="map-container"/>').html(embed).prependTo($map);
};
  
function buildStatic() { //Build static map
   var mapLink = $('.map-link').attr('href'),
       $img = $('<img class="static-img" />').attr('src',static);
   $('<a/>').attr('href',mapLink).html($img).prependTo($map); 
}

$(window).resize(function() {
  sw = document.body.clientWidth;
  buildMap();
  google.maps.event.trigger(map, "resize");
});*/
</script>