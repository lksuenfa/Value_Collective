<?php
// function to load files
add_action('wp_enqueue_scripts', 'loadFiles');

function loadFiles()
{
  //load css files
  wp_enqueue_style('stylesheet', get_theme_file_uri("/css/stylesheet.css"));
  wp_enqueue_style('style', get_theme_file_uri("/css/style.css"));
  wp_enqueue_style('front-page', get_theme_file_uri("/css/front-page.css"));
  wp_enqueue_style('navigation', get_theme_file_uri("/css/nav.css"));
  wp_enqueue_style('about-us', get_theme_file_uri("/css/about.css"));
  wp_enqueue_style('documentation', get_theme_file_uri("/css/documents.css"));
  wp_enqueue_style('timeline', get_theme_file_uri("/css/timeline.css"));
  wp_enqueue_style('footerNav', get_theme_file_uri("/css/footer.css"));
  wp_enqueue_style('project', get_theme_file_uri("/css/project.css"));
  wp_enqueue_style('residencies', get_theme_file_uri("/css/residencies.css"));


  // load scripts
  wp_enqueue_script('frontpage', get_theme_file_uri('/js/frontpage.js'), false, false);
  wp_enqueue_script('grid', get_theme_file_uri('/js/grid.js'), false, false);
  wp_enqueue_script('hoverColours', get_theme_file_uri('/js/hoverColours.js'), false, false);
  wp_enqueue_script('nav', get_theme_file_uri('/js/nav.js'), false, false);
}



//  set a unique title per page
add_action('after_setup_theme', 'features');

function features()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');

  // add custom image sizes for cropping
  add_image_size('team-page', 300, 400, true);
  add_image_size('team-thumbnail', 250, 300, true);
}

// adjust queries
add_action('pre_get_posts', 'adjust_queries');

function adjust_queries($query)
{
  // order documents in document page
  if (!is_admin() and is_post_type_archive('document') and $query->is_main_query()) {
    $query->set('posts_per_page', -1); //unlimited posts
    $query->set('orderby', 'title'); //order by title
    $query->set('order', 'ASC'); //in ascending order
  }

  if (!is_admin() and is_post_type_archive('project') and $query->is_main_query()) {
    $query->set('posts_per_page', -1); //unlimited posts
    $query->set('orderby', 'title'); //order by title
    $query->set('order', 'ASC'); //in ascending order
  }

  if (!is_admin() and is_post_type_archive('residents') and $query->is_main_query()) {
    $query->set('posts_per_page', -1); //unlimited posts
    $query->set('orderby', 'title'); //order by title
    $query->set('order', 'ASC'); //in ascending order
  }
}
