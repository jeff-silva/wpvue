<?php

/**
 * Plugin Name: WP Vue
 * Plugin URI: https://labscript.dev
 * Description: Wordpress Plugin + Vue3 + Vite
 * Author: Jeferson Silva
 * Author URI: https://labscript.dev
 * Version: 1.0.0
 */

function dd() {
  foreach(func_get_args() as $data) {
    echo '<pre>'. print_r($data, true) .'</pre>';
  }
}

$manifest = json_decode(file_get_contents(__DIR__ . '/dist/manifest.json'), true);

foreach(['wp_enqueue_scripts', 'admin_enqueue_scripts'] as $action) {
  add_action($action, function() use($manifest) {
    wp_enqueue_script('test-vite', plugin_dir_url(__FILE__) . 'dist/' . $manifest['index.html']['file']);
    wp_enqueue_style('test-vite', plugin_dir_url(__FILE__) . 'dist/' . $manifest['index.css']['file']);
  });
}

add_action('admin_footer', function() {
  $user = wp_get_current_user();
  ?><admin-footer
    user-name="<?php echo $user->data->display_name; ?>"
    style="position:fixed; bottom:10px; right:10px;"
  ></admin-footer><?php
});
