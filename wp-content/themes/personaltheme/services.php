<?php
/*
 * Template Name: Services Page
 * description: >-
  This is the services page
 */

get_header(); ?>

<main id="content-services" role="main">
  <div class="pic-container">
    <img class="profile-pic" src="../wp-content/themes/personaltheme/images/code.svg" alt="Graphic illustration of a person in front of a screen with code.">
  </div>

  <div class=row>
    <div class="card">
      <i class="fas fa-code icon"></i>
      <h4>Web Development</h4>
      <p>Whether you have unique individual needs or you are happy with a more off the shelf solution like a Content Management System with ready made themes I can create your next modern, responsive website or web application.</p>
    </div>

    <div class="card">
      <i class="fas fa-mobile-alt icon"></i>
      <h4>Mobile Development</h4>
      <div class="service-text">
        <p>I am happy to create your app on both IOS and Android phones using the React Native framework.</p>
      </div>
    </div>

    <div class="card">
      <i class="fas fa-shopping-basket icon"></i>
      <h4>E-commerce solutions</h4>
      <div class="service-text">
        <p>I can create beautiful Shopify or Woocommerce websites with custom themes if required that drive customers and sales through your store.</p>
      </div>
    </div>
  
  </div>    

</main>


<?php get_footer(); ?>