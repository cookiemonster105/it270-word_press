<!-- BLOG CONTAINER -->
<?php
get_header();
?>



<div id="wrapper">
    <main>
            <?php if (have_posts()) : ?>
                <?php while(have_posts()) : the_post() ; ?>
                    <article class="post">
                     <h2 class="title"> <?php the_permalink() ; ?> 
                     <?php the_title() ; ?></a></h2>
                     <div class="meta">
                        <span> <b>posted By:</b> <?php the_author() ;?> </span>
                        <span> <b>posted On:</b> <?php the_time('F j, Y g:i a') ;?></span>
                     </div> <!-- close meta -->
                    
                     <?php the_content() ; ?>                     
                     

                    </article>

                <?php endwhile ; ?>
                    
                    <?php  else : ?>
                    <h2> <?php echo wpautop('Sorry, no posts were found!'); ?></h2>
                    
            

            <?php endif; ?>
    </main>   
    
   <?php get_sidebar(); ?> 
   
</div><!-- close wrapper -->
<?php
get_footer();
?>