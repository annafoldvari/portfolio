<?php
/*
 * Template Name: About Page
 * description: >-
  This is the about page
 */

get_header(); ?>

<main id="content" role="main">

  <?php while(have_posts()) : the_post(); ?>
    <div class="pic-container">
      <img class="profile-pic" src="../wp-content/themes/personaltheme/images/work.svg" alt="Graphic illustration of two woman working together, one sitting at a laptop, the other one standing at a board on the wall with some cards on it.">
    </div>
    <div class="about-text"> 
    <?php the_content();?>
    <div class="technologies">
      Technologies I work with:
      <ul class="tech-list">
      <li>HTML</li>
      <li>CSS</li>
      <li>JavaScript</li>
      <li>React</li>
      <li>React Native</li>
      <li>Node.js</li>
      <li>Express</li>
      <li>jQuery</li>
      <li>Wordpress</li>
      <li>PHP</li>
      <li>Laravel</li>
      <li>MySQL</li>
      <li>GIT</li>
      </ul>
    </div> 
  </div>
  <?php endwhile; ?>

</main>


<?php get_footer(); ?>
