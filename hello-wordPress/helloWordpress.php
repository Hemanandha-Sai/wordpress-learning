<?php
/*
Plugin Name: Hello rtCamp
Description: My first WordPress plugin created for learning purposes.
Version: 1.0
Author: Hemanandha Sai
*/

add_action('admin_notices', function () {
    echo '<div class="notice notice-success"><p>Hello rtCamp! 🚀</p></div>';
});
