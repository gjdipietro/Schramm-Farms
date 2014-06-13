<!doctype html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7 ie"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 ie"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 ie"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title> 
			<?php 
			if (  is_front_page() ) :
				?> Schramm Farms & Orchards <?php
			else :
				?> Schramm Farms - <?php wp_title(''); 
			endif;
			?>
		</title>

		<meta name="keywords" content="pumpkins, fall fest, apples, apple cider, family farm, local produce, fruits and vegetables, produce, farm, fruit basket, turkeys, local turkeys, crop seasons, Pennsylvania farms, sweet corn, locally grown, Schramm farms &amp; orchards, orchards, school group tours, corn stalk maze, hayrides, candy apples, october festival, pick-your-own pumpkins, pony rides, Western Pennsylvania farm, Pennsylvania fruit &amp; vegetables, 4th generation farm, quality fruits and vegetables, sweet corn, strawberries, raspberries, concord grapes">
		<meta name="description" content="Schramm Farms and Orchards is a 400 acre family farm that has been growing quality fruits and vegetables in the Pittsburgh area since 1864.  We offer fresh, homegrown produce year-round and are best known for Sweet Corn and our annual Fall Fest.">


		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		
		<?php //fonts ?>
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:700' rel='stylesheet' type='text/css'>

		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png"/>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">



		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>


		<script>
  		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 		 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

 		 ga('create', 'UA-50294402-1', 'schrammfarms.com');
 		 ga('send', 'pageview');

		</script>


		<?php 
			global $fields;
			$fields = $cfs->get();
			global $pageID;
			if (isset($pageID)) {
				$previousPage = get_post($pageID);
				$permalink = get_permalink($pageID);
				$tagline = $previousPage->post_title;

				$thumb_id = get_post_thumbnail_id($pageID);
				$thumb_url = wp_get_attachment_image_src($thumb_id,'original', true);
				$thumb_urlMed = wp_get_attachment_image_src($thumb_id,'medium', true);

				if ($pageID == 258) {
					// set the tagline for when it is "Home"
					$tagline = "Home";
				}
			}
			else {
				$permalink = get_permalink();
				$tagline = $fields['tagline'];
				$thumb_id = get_post_thumbnail_id();
				$thumb_url = wp_get_attachment_image_src($thumb_id,'original', true);
				$thumb_urlMed = wp_get_attachment_image_src($thumb_id,'medium', true);
			}
			
		?>




		<style>
			.cover {
				background-image:url(' <?php echo $thumb_urlMed[0] ?> ');
			}
				
			.lt-ie9 .cover { background-image:url(' <?php echo $thumb_url[0] ?> '); }
			
			@media only screen and (min-width : 600px) {
				.cover { 
					background: -moz-linear-gradient(left, rgba(0,0,0,0.80) 0%, rgba(0,0,0,0) 30%), url(' <?php echo $thumb_url[0] ?> '); /* FF3.6+ */
					background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(0,0,0,0.80)), color-stop(30%,rgba(0,0,0,0))), url(' <?php echo $thumb_url[0] ?> '); /* Chrome,Safari4+ */
					background: -webkit-linear-gradient(left, rgba(0,0,0,0.80) 0%,rgba(0,0,0,0) 30%), url(' <?php echo $thumb_url[0] ?> '); /* Chrome10+,Safari5.1+ */
					background: -o-linear-gradient(left, rgba(0,0,0,0.80) 0%,rgba(0,0,0,0) 30%), url(' <?php echo $thumb_url[0] ?> '); /* Opera 11.10+ */
					background: -ms-linear-gradient(left, rgba(0,0,0,0.80) 0%,rgba(0,0,0,0) 30%), url(' <?php echo $thumb_url[0] ?> '); /* IE10+ */
					background: linear-gradient(to right, rgba(0,0,0,0.80) 0%,rgba(0,0,0,0) 30%), url(' <?php echo $thumb_url[0] ?> '); /* W3C */
					filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4a000000', endColorstr='#00000000',GradientType=1 ); /* IE6-9 */
				}
			}
		</style>




	</head>


	<body <?php body_class(); ?>>


	

	<div id="perspective" class="perspective">

		<div class="layout_navigation module_navigation" role="banner">		
			<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
			<nav role="navigation">
				<?php bones_main_nav(); ?>
			</nav>
		</div>

		<div id="container" class="layout_container">
			<div class="layout_wrapper">

					<header class="module_pageBanner">
						<a class="nav-toggle" id="showMenu">
							<!-- <div class="nav-toggle-icon"></div> -->
							Menu
						</a>
						<div class="cover" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"></div>
						<div class="title">
							<h1 class="logo">
								<a href="<?php echo home_url(); ?>" rel="nofollow">
								<img src="<?php echo get_template_directory_uri(); ?>/library/images/logo.png" alt="Schramm Farms & Orchards"  title="Schramm Farms & Orchards" />
							</a>
						</h1>
					</header>

				






