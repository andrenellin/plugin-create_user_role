<?php
/*
Plugin Name: Bliksem Create Custom User Role
Description: Create custom user roles
Version: 1.0
Author: Bliksem LLC
 */

/* Exit if accessed directly */
if (!function_exists('add_action')) {
    echo "Hi there! I'm just a plugin, not much I can do when called directly";
    exit;
}

/*
 * Define constants
 *
 *  */
define('BS_VERSION', '1.0.1');
define('BS_PLUGIN_URL', plugin_dir_url(__FILE__));
define('BS_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('BS_PLUGIN_BASE_NAME', plugin_basename(__FILE__));
define('BS_PLUGIN_FILE', basename(__FILE__));
define('BS_PLUGIN_FULL_PATH', __FILE__);

/*
 * On activation, create custom user roles
 *
 *  */

function on_activation()
{
    bliksem_create_custom_user_roles();
}

register_activation_hook(__FILE__, 'on_activation');

function bliksem_create_custom_user_roles()
{
    add_role('attorney', __('Attorney'), array('read' => true, 'edit_posts' => false));
    add_role('paralegal', __('Paralegal'), array('read' => true, 'edit_posts' => false));
}