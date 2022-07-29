
<!DOCTYPE html>
<html <?php language_attributes();?>>
    <head>
            <meta charset="<?php bloginfo('charset');?>">
            <title>Basic<?php bloginfo('name');?></title>
            <link href="<?php bloginfo('stylesheet_url');?>"rel="stylesheet"  type="text/css" >
            <!-- Function for plugin info , stylesheet, JS etc before closing of head -->
            <?php wp_head();  ?>

    </head>

  <body <?php body_class(! is_front_page() ? "inner-page" : "" ); ?>>
    <header>


    <div id="top"><?php get_search_form(); ?>  </div><!--close top -->

        <div id="inner-header"> 
                <!--logo -->
                <a href="<?php echo get_home_url(); ?>" >
                <img src="<?php echo get_template_directory_uri(); ?>/photos/logo.png" alt="logo" id="logo"> </a>
                img src
            
        
                <nav id ="site-navigation" class="main-navigation">
                    <button class="nav-button">Toggle Navigation</button>
                    <?php $args_primary = array(
                        'theme_location' => 'primary'
                    ); 
                    ?>
                    <?php wp_nav_menu('$args_primary'); ?>

                </nav>   <!-- Nav -->
        </div><!--close inner-header -->

    <!-- If we have post display them with while loop -->

    </header>

<div id="hero"> img src="<?php echo get_template_directory_uri(); ?>/photo/yellowstone-home.jpg"> alt="Yellowstone"></div><!--close hero -->
