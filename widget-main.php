<?php

/**
 * Plugin Name: TypeWriter Widget for Elementor
 * Description: Simple TypeWriter Widget for Elementor
 * Plugin URI:  https://codechampdev.com/
 * Version:     1.0.0
 * Author:      CodeChamp Group
 * Author URI:  https://codechampdev.com/
 */


if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/**
 * Register oEmbed Widget.
 *
 * Include widget file and register widget class.
 *
 * @since 1.0.0
 * @param \Elementor\Widgets_Manager $widgets_manager Elementor widgets manager.
 * @return void
 */
function register_typewriter_widget($widgets_manager)
{

    require_once(__DIR__ . '/widgets/typewriter-widget.php');

    $widgets_manager->register(new \Elementor_typewriter_Widget());
}
add_action('elementor/widgets/register', 'register_typewriter_widget');
