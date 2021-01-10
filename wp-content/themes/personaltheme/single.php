<?php
/*
 * Template Name: Blog Page
 * description: >-
  This is the blog page
 */

get_header(); ?>

<main id="content" role="main">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<span class="title-text"><?php the_title(); ?></span>
<?php the_content(); ?>
<span class="date-text"><?php echo get_the_date(); ?></span>

<?php endwhile; ?>
<?php endif; ?>

</main>


<?php get_footer(); ?>
