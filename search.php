<!-- BLOG CONTAINER -->
<?php
get_header();
?>

<div id="wrapper">

    <main>
            <?php if (have_posts()) : ?>
                <!-- posts use php loop -->
                <!-- happy photo -->
                <h2> Search Resluts For: <?php echo get_search_query() ;?></h2>
                        <!-- Display how many posts -->

                        <p>Our findings for
                        <?php /* Search Count */
                        $allsearch = new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(''); _e('<span class="search-terms">'); echo $key; _e('</span>'); _e(' &mdash; '); echo $count . ' '; _e('articles/pages'); wp_reset_query(); ?></p>


                <?php while(have_posts()) : the_post() ; ?>
                    <article class="post">
                     <h2 class="title"> <a href="<?php the_permalink() ; ?>"> 
                     <?php the_title() ; ?></a></h2>
                        <div class="meta">
                            <span> <b>posted By:</b> <?php the_author() ;?> </span>
                            <span> <b>posted On:</b> <?php the_time('F j, Y g:i a') ;?></span>
                        </div> <!-- close meta -->
                        <div class ="thumbnail">
                            <?php if(has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink() ; ?>">
                            <?php the_post_thumbnail(); ?>
                            </a>
                            <?php endif ?>


                        </div><!-- end thumbnail -->
                
                     <?php the_excerpt() ; ?>

                     <span class="block">
                        <a href="<?php the_permalink()  ;?>"> Read more about the <?php the_title(); ?> </a>
                     </span>

                     
                     

                    </article>

                <?php endwhile ; ?>
                    
                    <?php  else : ?>
                    <h3> No Content For:
                    <?php echo get_search_query() ;?></h3>
                    <p> Sorry, No content regarding your search terms. Would you like to search again using different search terms? 

                    <?php get_search_form(); ?> 
                    
            

            <?php endif; ?>
            <?php comments_template(); ?>
    </main>   
    
    <?php get_sidebar(); ?> 
    
</div><!-- close wrapper -->
<?php
get_footer();
?>