<?php
get_header();
/* Template Name: Front Page*/
?>
<div id="wrapper">


    <!-- If we have post display them with while loop -->

    <?php if (have_posts()) : ?>
            <?php while(have_posts()) : the_post() ; ?>

                <?php the_content() ; ?>
            <?php endwhile ; ?>
                
                <?php  else : ?>
                <h2> <?php echo wpautop('Sorry, no posts were found!'); ?></h2>
                
        

        <?php endif; ?> 
        
</div><!-- close wrapper -->
<?php
get_footer();
?>