<?php 
/**
* header.php
*
* The header for the theme
**/
?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title( '|', true, 'right');?><?php bloginfo( 'name' ); ?></title>
  <meta name="description" content="<?php bloginfo( 'description' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='http://fonts.googleapis.com/css?family=Lato:700|Merriweather:400|Open+Sans:400,700' rel='stylesheet' type='text/css'>

  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

	<?php get_template_part( 'parts/topbar', 'default' ); ?>
	<div class="container">