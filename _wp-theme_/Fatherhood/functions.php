<?php
  // config panda
  add_action( 'wp_enqueue_scripts', 'dequeue_scripts_and_styles', 11 );	
  function dequeue_scripts_and_styles() {	
    wp_dequeue_script( 'panda-pods-repeater-scripts' );	 
    wp_dequeue_style( 'panda-pods-repeater-general-styles' );
    wp_dequeue_style( 'panda-pods-repeater-styles' );		       	   
  }
  // load css
  function load_css(){
    wp_register_style('styles', get_template_directory_uri() . '/css/styles.css');
    wp_enqueue_style('styles');
  }
  add_action( 'wp_enqueue_scripts', 'load_css');
  // load js
  function load_js(){
    wp_register_script('app', get_template_directory_uri() . '/js/app.min.js', array(), '1.0', true);
    wp_enqueue_script('app');
    wp_register_script('mailer_lite', 'https://groot.mailerlite.com/js/w/webforms.min.js?ve398743b733fc0b40dcbf5777b0b4406', array(), '1.0', true);
    wp_enqueue_script('mailer_lite');
  }
  add_action( 'wp_enqueue_scripts', 'load_js');
?>