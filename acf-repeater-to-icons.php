<?php
/*
Plugin Name: acf repeater to icons
Description: A short plugin using short code that displays social media links as icons from urls stored in a acf repeater field on each listing
Version:     1.0
Author:      Nathan Smith 
*/
function shortcode_acfIcons() {
    //store links in this array, and create the html content to be added to as we loop through the links
    $links = array();
    $returnContent = '';
    //check we actually have some links saved 
    if(have_rows('social_media')): 
        //add each link to an array 
        while ( have_rows('social_media') ) : the_row();  
            array_push($links, get_sub_field('url'));
        endwhile;
       //check which social media links we have and update our content to include an icon with an attached link to that url 
        foreach ($links as $link) {
           if((strpos($link, 'facebook') !== false)){
                $returnContent .=  "<a href=$link target='_blank'>&#xe0aa</a>";
            }
            if((strpos($link, 'instagram') !== false)){
                $returnContent .= "<a href=$link target='_blank'>&#xe09a</a>";
            }
            if((strpos($link, 'twitter') !== false)){
                $returnContent .= "<a href=$link target='_blank'>&#xe0ab</a>";
            }
        }
      //send our content back to the webpage with a unique class for CSS styling 
        return "<span class='acf-repeater-icons'>$returnContent</span>";
    endif;
}//Add the shortcode - [acfsocial] to call - shortcode_acfIcons, the name of this shortcode function  
add_shortcode('acfsocial', 'shortcode_acfIcons');
?>