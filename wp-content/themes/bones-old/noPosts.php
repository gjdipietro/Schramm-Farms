<?php
/**
 * Template Name: noPosts
 *
 * used by produce, plants, wine,shop, contact
 */

?>

<?php get_header(); ?>
<section id="content" class="layout_content module_content">
	<div id="main"role="main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

			<header class="article-header module_styledBreak noTopBorder">
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title() ?></a></h1>
				<h3 class="tagline"><?php echo $fields['tagline']; ?></h3>
			</header>

			<section class="module_thecontent clearfix" itemprop="articleBody">
				<?php the_content(); ?>
			</section>

			<?php 
			//this is the produce page - charts
			if ($id == "33") {
			?>
				<h2 class="h5 module_styledBreak thin">
				  Season Chart
				</h2>
				<?php include('seasonchart.php'); ?>
				<br><br>
				<h2 class="h5 module_styledBreak thin">
				  Apple Chart
				</h2>
				<?php include('applechart.php'); ?>

			<?php
			}

			// this is the contact page  - map.
			else if	( $id == "31") {
			?>
				<h2 class="h5 module_styledBreak thin">
					<a href="//maps.google.com/maps?q=Schramm Farms Orchards Jeannette, PA 15644" target="_blank">1002 Blank Road, Jeannette PA</a>
				</h2>
				
				<div class="map" id="map-canvas">
					<a href="http://maps.googleapis.com/maps/api/staticmap?center=1002%20Blank%20Road%2015644&zoom=12&size=400x400&sensor=true&markers=40.37578,-79.63908" class="btn map-link">Open Map</a>
			    </div>
			<?php
			}
			?>
			
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


<?php // this is the contact page  - map.
if	( $id == "31") { ?>
			
<script type="text/javascript">
$(document).ready(function(){
	buildMap();
});
var sw = document.body.clientWidth,
    bp = 550,
    $map = $('.map');

var static = "http://maps.googleapis.com/maps/api/staticmap?center=1002%20Blank%20Road%2015644&zoom=12&size=400x400&sensor=true&markers=40.37578,-79.63908";
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
});
</script>

<?php } ?>