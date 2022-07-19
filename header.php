
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
<title>Basic<?php bloginfo('name');?></title>
<link href="<?php bloginfo('stylesheet_url');?>"rel="stylesheet"  type="text/css" >
<!-- Function for plugin info , stylesheet, JS etc before closing of head -->
<?php wp_head();  ?>

</head>

<body <?php body_class(); ?>>
<header> </header>

<div id="top"> </div><!--close top -->

<div id="inner-header"> </div><!--close inner-hedader -->

<div id="hero"> </div><!--close hero -->

<!-- If we have post display them with while loop -->