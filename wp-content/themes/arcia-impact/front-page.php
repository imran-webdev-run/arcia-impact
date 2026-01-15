<?php 
// Template Name: Homepage
get_header(); while(have_posts())  : the_post(); ?>


<h1 class="layout-padding pt-lg-200 pb-lg-200" > This is main content</h1>

<?php get_footer(); endwhile; ?>