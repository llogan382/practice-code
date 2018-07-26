<?php 
//hooks include both acitons and filters. 
//actions are triggered at a certain time when WP is running, like sending a tweet when a post is published. 
//actions are executed at specific points in WP core. 

//two types of actions are listed below:
do_action()//this executes our action
add_action()//this hooks into our custom function

//hooks 
apply_filters( tag, value )
add_filter( tag, function_to_add, priority, accepted_args )


//filters allow you to edit and modify data before it is sent to the db, like adding infor at the end of a blog post. 

//tells us that to hook into (Tag), what function to add
add_filter( tag, function_to_add, priority, accepted_args )

//name, and default value are passed in
apply_filters( tag, value )
//a filter must be added before it is applied. 

//tells us what to hook into, and what function to run instead. 
add_action( tag, function_to_add, priority, accepted_args )

//filter to tie into, then the function to remove. 
remove_filter( tag, function_to_remove, priority )

//why use hooks and actions? so you dont mess with core. 
//add functionality to WP core. 

function my_function_name( $wp_luke_custom)
{
    code goes here;
}

add_action( 'customize_register', 'my_function_name');
?>