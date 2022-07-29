<!-- BLOG CONTAINER -->
<?php
get_header();
?>

<div id="wrapper">
    <!-- add image for 404 -->
    <main>
          <h2> Yikes, </h2>
          <p> Sorry, nothing here. But click below to find some wonderful content. </p>  
          <?php get_search_form(); ?>
          <h3> </h3>
          <?php wp_list_pages()  ;?>
                
                  
    </main>   
    
    <aside>
       
    </aside>
</div><!-- close wrapper -->
<?php
get_footer();
?>