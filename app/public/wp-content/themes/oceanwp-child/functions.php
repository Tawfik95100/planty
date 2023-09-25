<?php

// Hook filter: ajout d'un élément "Admin" au menu de navigation principal (main_menu) uniquement si un utilisateur est connecté. Si l'utilisateur n'est pas connecté, aucun changement n'est apporté au menu. 

function add_admin_nav_menu($items, $args)
{
    if (is_user_logged_in() && $args->theme_location == 'main_menu') {
        $items .= '<li><a href="' . admin_url() . '">admin</a></li>';
    } elseif (!is_user_logged_in()) {
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'add_admin_nav_menu', 10, 2);


// Exit if accessed directly
if (!defined('ABSPATH')) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if (!function_exists('chld_thm_cfg_locale_css')) :
    function chld_thm_cfg_locale_css($uri)
    {
        if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css'))
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter('locale_stylesheet_uri', 'chld_thm_cfg_locale_css');

if (!function_exists('child_theme_configurator_css')) :
    function child_theme_configurator_css()
    {
        wp_enqueue_style('chld_thm_cfg_child', trailingslashit(get_stylesheet_directory_uri()) . 'style.css', array('font-awesome', 'simple-line-icons', 'oceanwp-style'));
    }
endif;
add_action('wp_enqueue_scripts', 'child_theme_configurator_css', 10);

// END ENQUEUE PARENT ACTION
