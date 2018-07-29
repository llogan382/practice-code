<?php

class Walker_nav_xxxxx extends Walker_Nav_Menu {


    // this has 4 functions: Start lvl, start el, end lvl, end el. 
    // Wordpress automatically creates a blank template, but these 4 functions need to be created to tell WP what to do w those classes, and how to style them. 

    function start_lvl( &$output, $depth){      //& will join this with the WP Walker Nav, instead of creating it anew.

        $indent = str_repeat("\t", $depth);
        $submenu = ($depth > 0) ? 'sub-menu' : ' '; //this detects if there is a submenu, and can call on the bootstrap class for dropdown if a submenu is found. 
        $output .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\">\n";
    }
    function start_el ( &$output, $item, $depth = 0, $args )
    {

    }
}
?>