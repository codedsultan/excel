<?php 
function excel_files(){
    wp_enqueue_style('excel_main_styles', get_stylesheet_uri()); // load css tyles
}

add_action('wp_enqueue_scripts' ,'excel_files');//  load css and js files