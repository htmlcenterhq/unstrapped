<?php
/**
 * Removes actions to keep markup lean.
 *
 * @package unstrapped
 */

remove_action( 'wp_head', 'feed_links_extra', 3 );                      // Remove display of the links to the extra feeds such as category feeds.
remove_action( 'wp_head', 'feed_links', 2 );                            // Remove display of the links to the general feeds: Post and Comment Feed.
remove_action( 'wp_head', 'rsd_link' );                                 // Remove display of the link to the Really Simple Discovery service endpoint, EditURI link.
remove_action( 'wp_head', 'wlwmanifest_link' );                         // Remove display of the link to the Windows Live Writer manifest file.
remove_action( 'wp_head', 'index_rel_link');                            // Remove display of the index link.
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );              // Remove display of the prev link.
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );               // Remove display of the start link.
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );   // Remove display of the relational links for the posts adjacent to the current post.
remove_action( 'wp_head', 'wp_generator' );                             // Remove display of the the XHTML generator that is generated on the wp_head hook, WP version.

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );          // Remove display of the emoji.
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); // Remove display of the emoji.
remove_action( 'wp_print_styles', 'print_emoji_styles' );               // Remove display of the emoji.
remove_action( 'admin_print_styles', 'print_emoji_styles' );            // Remove display of the emoji.
