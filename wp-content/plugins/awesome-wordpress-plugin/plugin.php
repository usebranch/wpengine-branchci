<?php

/**
 * Plugin Name: Awesome WordPress Plugin
 * Author: WP Pusher
 * Version: 1.2.3 */

add_filter( "wp_loaded", "checkForGreeting" );

function checkForGreeting()
{
    if (isset($_GET['hello'])) {

        echo "Hello " . $_GET['hello'] . "!";
        die();

    }
}
