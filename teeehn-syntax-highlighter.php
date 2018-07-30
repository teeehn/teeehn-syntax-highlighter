<?php
/** 
 * Plugin Name: Teeehn Syntax Highlighter
 * Plugin URI: http://teeehn.com
 * Description: Loads highlight.js (https://highlightjs.org/) for
 *  syntax highlighting of code snippets.
 *  Custom build of Version 9.12.0 
 *  Supports: Bash, CSS, HTML, XML, JavaScript, PHP, SQL
 * Version: 1.0.0
 * Author: Tom Nicolosi
 * License: GPL-3.0
 * License URI: https://www.gnu.org/licenses/gpl-3.0.txt
 */

function tn_sh_loadcss() {

    wp_enqueue_style('tn_sh_obsidian', plugin_dir_url(__FILE__) . '/lib/highlight/styles/obsidian.css');
}
add_action('wp_enqueue_scripts', 'tn_sh_loadcss');

function tn_sh_loadjs() {

    wp_enqueue_script('highlight', plugin_dir_url(__FILE__) . '/lib/highlight/highlight.pack.js', array(), '9.12.0', true);

    wp_enqueue_script('tn_syntax_highlighter', plugin_dir_url(__FILE__) . '/js/tn-syntax-highlighter.js', array('highlight'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'tn_sh_loadjs');
