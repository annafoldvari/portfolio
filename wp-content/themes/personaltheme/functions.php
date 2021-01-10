<?php

function my_files() {
  wp_enqueue_script('font_awesome', 'https://kit.fontawesome.com/b42e86d591.js');
  wp_enqueue_style('main_styles', get_stylesheet_uri());  
  wp_enqueue_script('personal_js', get_template_directory_uri().'/js/main.js', array('jquery'), '0.1', true );
}

add_action('wp_enqueue_scripts', 'my_files'); 

function pagination_nav() {
  global $wp_query;
  if ( $wp_query->max_num_pages > 1 ) { ?>
      <nav class="pagination" role="navigation">
          <div class="nav-previous"><?php next_posts_link( '&larr; Older posts' ); ?></div>
          <div class="nav-next"><?php previous_posts_link( 'Newer posts &rarr;' ); ?></div>
      </nav>
<?php }
}

