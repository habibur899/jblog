<?php

function jblog_footer_sidebar_register(){

	// Blog Sidebar
	register_sidebar(array(
		'name'           =>  __( 'Blog Sidebar','jblog'  ),
		'id'             => "blog-sidebar",
		'description'    => 'Blog sidebar is here',
		'before_widget'  => '<div id="%1$s" class="widget %2$s">',
		'after_widget'   => "</div>\n",
		'before_title'   => '<h5 class="widget-title widgettitle"><span>',
		'after_title'    => "</span></h5>\n",
	));

	// Footer Top Sidebar One
	register_sidebar(array(
		'name'           =>  __( 'Footer Top Sidebar One','jblog'  ),
		'id'             => "footer-top-sidebar-one",
		'description'    => 'Footer Top Sidebar One Is Here',
		'before_widget'  => '<div id="%1$s" class="f-about single-footer widget %2$s">',
		'after_widget'   => "</div>\n",
		'before_title'   => '<h3 class="widgettitle">',
		'after_title'    => "</h3>\n",
	));

	// Footer Top Sidebar Two
	register_sidebar(array(
		'name'           =>  __( 'Footer Top Sidebar Two','jblog'  ),
		'id'             => "footer-top-sidebar-two",
		'description'    => 'Footer Top Sidebar Two Is Here',
		'before_widget'  => '<div id="%1$s" class="single-footer f-link widget %2$s">',
		'after_widget'   => "</div>\n",
		'before_title'   => '<h3 class="widgettitle">',
		'after_title'    => "</h3>\n",
	));

	// Footer Top Sidebar Three
	register_sidebar(array(
		'name'           =>  __( 'Footer Top Sidebar Three','jblog'  ),
		'id'             => "footer-top-sidebar-three",
		'description'    => 'Footer Top Sidebar Three Is Here',
		'before_widget'  => '<div id="%1$s" class="single-footer f-link widget %2$s">',
		'after_widget'   => "</div>\n",
		'before_title'   => '<h3 class="widgettitle">',
		'after_title'    => "</h3>\n",
	));

	// Footer Top Sidebar Four
	register_sidebar(array(
		'name'           =>  __( 'Footer Top Sidebar Four','jblog'  ),
		'id'             => "footer-top-sidebar-four",
		'description'    => 'Footer Top Sidebar Four Is Here',
		'before_widget'  => '<div id="%1$s" class="single-footer f-link widget %2$s">',
		'after_widget'   => "</div>\n",
		'before_title'   => '<h3 class="widgettitle">',
		'after_title'    => "</h3>\n",
	));

	// Footer Bottom Sidebar One
	register_sidebar(array(
		'name'           =>  __( 'Copyright','jblog'  ),
		'id'             => "copyright",
		'description'    => 'Footer copyright is here',
		'before_widget'  => '<div id="%1$s" class="left widget %2$s">',
		'after_widget'   => "</div>\n",
		'before_title'   => '<h3 class="widgettitle">',
		'after_title'    => "</h3>\n",
	));
}
add_action('widgets_init','jblog_footer_sidebar_register');