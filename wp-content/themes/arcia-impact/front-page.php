<?php 
// Template Name: Homepage
get_header(); while(have_posts())  : the_post(); ?>


<h1 class="layout-padding">May Main Content</h1>

<?php get_footer(); endwhile; ?>