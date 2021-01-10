<?php get_header(); ?>

<main id="content" role="main">

<ul class="blog-list">
 
 <?php 
 // Start our WP Query
 while (have_posts()) : the_post(); 
 // Display the Post Title with Hyperlink
 ?>
   
  
 <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
   
  
 <li><?php 
 // Display the Post Excerpt
 the_excerpt(__('(more…)')); ?></li>
   
  
 <?php 
 endwhile;
 ?>
 </ul>

</main>

<?php 
pagination_nav(); 
      wp_reset_postdata();
?>
<?php get_footer(); ?>


