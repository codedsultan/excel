<?php

function excel_files() {
  wp_enqueue_script('main-excel-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true); // slideshow
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i'); //font
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); //icon
  wp_enqueue_style('excel_main_styles', get_theme_file_uri('/build/style-index.css')); //styles
  wp_enqueue_style('excel_extra_styles', get_theme_file_uri('/build/index.css')); // extra styles
}

add_action('wp_enqueue_scripts', 'excel_files');