<?php
function grow_setup(){add_theme_support('title-tag');add_theme_support('post-thumbnails');add_theme_support('html5',array('search-form','comment-form','comment-list','gallery','caption','style','script'));register_nav_menus(array('primary'=>'Primary Navigation','footer'=>'Footer Navigation','legal'=>'Legal Navigation'));}
add_action('after_setup_theme','grow_setup');
function grow_assets(){wp_enqueue_style('grow-style',get_stylesheet_uri(),array(),wp_get_theme()->get('Version'));}
add_action('wp_enqueue_scripts','grow_assets');
function grow_register_projects(){register_post_type('project',array('labels'=>array('name'=>'Projects','singular_name'=>'Project'),'public'=>true,'has_archive'=>true,'rewrite'=>array('slug'=>'projects'),'show_in_rest'=>true,'supports'=>array('title','editor','excerpt','thumbnail','custom-fields')));}
add_action('init','grow_register_projects');