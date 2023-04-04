<?php

/*
   Plugin Name: demoWpPlugin
   Plugin URI: https://www.linkedin.com/in/serhii-rohatin-17452b127/
   description: change blog title to "myNewBlogTitle" when activated
   Version: 1.0.0
   Author: Serhii Rohatin
   Author URI: https://www.linkedin.com/in/serhii-rohatin-17452b127/
*/



function firstfunc()
{

    update_option( 'blogname', 'myNewBlogTitle');

}

register_activation_hook(__FILE__, 'firstfunc');