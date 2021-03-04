<!DOCTYPE html>
<html>
  <head>
    <?php wp_head(); ?> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <header>
      <nav class="navigation">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
      </nav>
    </header>
 