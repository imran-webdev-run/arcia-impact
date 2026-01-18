<?php 
// Template Name: Homepage
get_header(); while(have_posts())  : the_post(); ?>

    <!-- Hero Section Start -->
        
    <div class="hero-section">

        <div class="hero-inner">


            <?php if(get_field('hero_bg_image')) : ?>
                <div class="hero-image media">
                    <img src="<?php the_field('hero_bg_image'); ?>" alt="">
                </div>
            <?php endif; ?>



            
            <div class="hero-content container layout-padding pt-sm-65 pt-50 pb-sm-65 pb-50">

                    <?php if(get_field('hero_title')) : ?>
                        <h1><?php the_field('hero_title'); ?></h1>
                    <?php endif; ?>

                    <?php if(get_field('hero_description')) : ?>
                        <p><?php the_field('hero_description'); ?></p>
                    <?php endif; ?>

                    <?php if(get_field('hero_button_text')) : ?>
                        <a href="<?php the_field('hero_button_link'); ?>" class=" hero-btn site-btn" ><?php the_field('hero_button_text'); ?></a>
                    <?php endif; ?>
                </div>

        </div>
    </div>


    <!-- Hero Section End -->


    <!-- About Section Start -->
     <section class="about-us-section layout-padding pt-lg-135 pt-md-80 pt-sm-80 pt-50 pb-md-165 pb-sm-130 pb-150">
        <div class="about-inner container">

            <div class="about-images mb-lg-110">

                <div class="about-images-column1">

                    <div class="about-image media">
                        <?php if(get_field('about_us_image_long_left')) : ?>
                            <img src=" <?php the_field('about_us_image_long_left') ; ?> " alt="">
                        <?php endif; ?>
                    </div>

                    <div class="about-image media">
                        <?php if(get_field('about_us_image_short_left')) : ?>
                            <img src=" <?php the_field('about_us_image_short_left') ; ?> " alt="">
                        <?php endif; ?>
                    </div>
                </div>

                <div class="about-images-column2">
                    <div class="about-image media">
                        <?php if(get_field('about_us_image_short_right')) : ?>
                            <img src=" <?php the_field('about_us_image_short_right') ; ?> " alt="">
                        <?php endif; ?>
                    </div>

                    <div class="about-image media">
                        <?php if(get_field('about_us_image_long_right')) : ?>
                            <img src=" <?php the_field('about_us_image_long_right') ; ?> " alt="">
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="about-content">
                <div class="section-sub-title">
                    <svg xmlns="http://www.w3.org/2000/svg" width="71" height="10" viewBox="0 0 71 10" fill="currentColor">
                        <line x1="28" y1="1" x2="71" y2="1" stroke="currentColor" stroke-width="2"/>
                        <line x1="-8.74228e-08" y1="9" x2="71" y2="8.99999" stroke="currentColor" stroke-width="2"/>
                    </svg>

                    <?php if(get_field('section_name')) : ?>
                        <span><?php the_field('section_name'); ?></span>
                    <?php endif; ?>
                </div>

                <div class="section-title">
                    <?php if(get_field('section_title')) : ?>
                        <h2><?php the_field('section_title'); ?></h2>
                    <?php endif; ?>
                </div>

                <div class="section-description">
                    <?php if(get_field('section_description')) : ?>
                        <p><?php the_field('section_description'); ?></p>
                    <?php endif; ?>
                </div>

                <div class="section-button">
                    <?php if(get_field('about_button_text')) : ?>
                        <a href="<?php the_field('about_button_link'); ?>" class=" hero-btn site-btn" ><?php the_field('about_button_text'); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
     </section>
    <!-- About Section End -->



    <!-- Services Section Start -->
     <section class="layout-padding services pt-lg-95 pt-md-50 pt-sm-50 pt-50 pb-lg-95 pb-md-50 pb-sm-50 pb-50">
        <div class="services-inner container">
            <div class="section-top">
                <div class="section-sub-title">
                    <svg xmlns="http://www.w3.org/2000/svg" width="71" height="10" viewBox="0 0 71 10" fill="currentColor">
                        <line x1="28" y1="1" x2="71" y2="1" stroke="currentColor" stroke-width="2"/>
                        <line x1="-8.74228e-08" y1="9" x2="71" y2="8.99999" stroke="currentColor" stroke-width="2"/>
                    </svg>

                    <?php if(get_field('service_section_name')) : ?>
                        <span><?php the_field('service_section_name'); ?></span>
                    <?php endif; ?>
                </div>

                <div class="section-title">
                    <?php if(get_field('servic_section_title')) : ?>
                        <h2><?php the_field('servic_section_title'); ?></h2>
                    <?php endif; ?>
                </div>
            </div>
            <div class="service-boxes pt-lg-40 pt-md-30 pt-sm-30 pt-20">
                <?php
                    $service = new WP_Query(array(
                        'post_type' => 'service',
                        'posts_per_page' => -1,   
                        'order' => 'DESC',            
                    ));
                ?>

                <?php if ($service->have_posts()) : ?>
                <?php while ($service->have_posts()) : $service->the_post(); ?>
                
                        <a href="<?php the_permalink(); ?>" class="service-post">
                            <div class="service">
                                <div class="post-thumb media">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <h3><?php the_title(); ?></h3>
                            </div>
                        </a>
                        
                        <?php endwhile; wp_reset_postdata(); endif; ?>
                </div>

        </div>

     </section>

    <!-- Services Section End -->


    <!-- Testimonials Section Start -->
    <section class="testimonials">
        <div class="testimonials-inner ">
            <div class="testimonials-bg media">
                <?php if(get_field('testimonials_background_image')) : ?>
                    <img src="<?php the_field('testimonials_background_image'); ?>" alt="">
                <?php endif; ?>
            </div>
            <div class="testimonials-content container layout-padding pt-lg-95 pt-md-50 pt-sm-50 pt-50 pb-lg-95 pb-md-50 pb-sm-50 pb-50">
                <div class="testimonials-content-inner">
                    <div class="section-sub-title">
                        <svg xmlns="http://www.w3.org/2000/svg" width="71" height="10" viewBox="0 0 71 10" fill="currentColor">
                            <line x1="28" y1="1" x2="71" y2="1" stroke="currentColor" stroke-width="2"/>
                            <line x1="-8.74228e-08" y1="9" x2="71" y2="8.99999" stroke="currentColor" stroke-width="2"/>
                        </svg>
        
                        <?php if(get_field('testimonial_section_name')) : ?>
                            <span><?php the_field('testimonial_section_name'); ?></span>
                        <?php endif; ?>
                    </div>
        
                    <div class="section-title">
                        <?php if(get_field('testimonial_section_title')) : ?>
                            <h2><?php the_field('testimonial_section_title'); ?></h2>
                        <?php endif; ?>
                    </div>
        
                    <div class="section-description">
                        <?php if(get_field('testimonial_section_description')) : ?>
                            <p><?php the_field('testimonial_section_description'); ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="testimonial-client-profile">
                        <?php if(get_field('richard_green')) : ?>    
                            <span> <?php the_field('richard_green'); ?></span>
                        <?php endif; ?>

                        <div class="profile-iner">

                            <div class="profile-images">
                            <?php if( have_rows('profile_images')) : ?>
                            <?php while( have_rows('profile_images')) : the_row(''); ?>
                                <div class="profile-image media">

                                    <?php if(get_sub_field('testimonial_profile_image')) : ?>
                                        <img src="<?php the_sub_field('testimonial_profile_image'); ?>" alt="">
                                    <?php endif; ?>

                                </div>
                                <?php endwhile; else: endif; ?>
                            </div>


                            <?php 
                            $TestimonialButton = get_field('testimonial_button');
        
                            ?>

                              <div class="testimonial-button">
                                 <?php if($TestimonialButton) : ?>
                                    <a href=" <?php echo $TestimonialButton['url']; ?> "> <?php echo $TestimonialButton['title']; ?></a>
                                <?php endif; ?>

                                <?php if($TestimonialButton) : ?>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="29" height="15" viewBox="0 0 29 15" fill="currentColor">
                                    <path d="M28.7071 8.07112C29.0976 7.6806 29.0976 7.04743 28.7071 6.65691L22.3431 0.292946C21.9526 -0.0975785 21.3195 -0.0975785 20.9289 0.292946C20.5384 0.68347 20.5384 1.31664 20.9289 1.70716L26.5858 7.36401L20.9289 13.0209C20.5384 13.4114 20.5384 14.0446 20.9289 14.4351C21.3195 14.8256 21.9526 14.8256 22.3431 14.4351L28.7071 8.07112ZM0 8.36401H28V6.36401H0V8.36401Z" fill="currentColor"/>
                                </svg>
                                <?php endif; ?>

                              </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Testimonials Section End -->
     


                







<?php get_footer(); endwhile; ?>