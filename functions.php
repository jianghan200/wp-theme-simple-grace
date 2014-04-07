<?php 


// register menu
function simplegrace_menu_setup(){
 
  register_nav_menu( 'primary', __( 'Primary Menu', 'mytheme' ) );
  
}
//run it when theme has been setup
add_action( 'after_setup_theme', 'simplegrace_menu_setup' );



if ( function_exists('register_sidebar') ){

$before_widget= '<img class="paperclip" src="'.get_stylesheet_directory_uri().'/image/paperclip.png" alt="paperclip" /><div class="sidebar">';

register_sidebar(array(
'name' => 'Sidebar',
'description' => 'Widgets in this area will be shown in the sidebar.',
'before_widget' => $before_widget,
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));


}

?>