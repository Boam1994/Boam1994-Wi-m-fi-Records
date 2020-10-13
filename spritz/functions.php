<?php


function on_spritz_init()
{
  //on enregistre le menu
  register_nav_menu('header_menu', 'Header Menu');
}
//on ajoute une action pour détecter l’initialisation
add_action('init', 'on_spritz_init');

add_action('wp_nav_menu', 'spritz_menu_responsive', 9, 2);

function spritz_menu_responsive($menu, $args)
{
  if ('header_menu' == $args->theme_location) {
    $button = '<button type="button" class="toggle-menu"><i class="fa fa-bars"></i></button>';
    $menu = preg_replace('/(<nav(.*?)>)/', '${1}' . $button, $menu);
  }
  return $menu;
}


add_action('wp_enqueue_scripts', 'spritz_styles_scripts');
function spritz_styles_scripts()
{
  wp_register_style('spritz-style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('spritz-style');
}
//register js
add_action('wp_enqueue_scripts', 'spritz_styles_scripts'); {
  wp_register_script(
    'spritz-plugins',
    get_template_directory_uri() . '/js/plugins.js',
    array('jquery')
  );
  wp_register_script(
    'spritz-app',
    get_template_directory_uri() . '/js/app.js',
    array('jquery', 'spritz-plugins')
  );
  wp_enqueue_script('spritz-plugins');
  wp_enqueue_script('spritz-app');
}

//Add js only for IE9
wp_script_add_data('ie-support-html5',   'conditional', 'lt IE 9');
wp_script_add_data('ie-support-respond', 'conditional', 'lt IE 9');


add_theme_support('tittle-tag');


add_theme_support('post-thumbnails');