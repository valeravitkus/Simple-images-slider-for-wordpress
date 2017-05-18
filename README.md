# Simple-images-slider-for-wordpress
Works based on custom post types

1) Add code from function.php to your wordpress theme function.php file. 

2) Add slider.php file in your wordpress theme folder.

3) Init Owl Carousel  jQuery plugin in your wordpress themes.  
   Add  
   ``<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">``   
   in the header.php  
   
    Add  
    ``<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>``    
    `` <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/owl.carousel.min.js"></script>``  
    in the footer.php</p>  
    
    Add code from main.js file in the js file of your theme  

4) Use this code  ``<?php get_template_part('slider'); ?>`` where you want to show the slider in your theme.


