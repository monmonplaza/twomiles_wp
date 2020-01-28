<?php get_header(); ?>
<section class="banner-sm bg-404" >
    <div class="container">
        <div class="banner-sm-wrapper text-light">
            <span class="welcome-span">Wrong Page</span>
            <h1>Two Miles <span><?php the_title() ?></span></h1>
            <!-- <a href="services.html" class="btn bg-primary">View Offices</a> -->
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
    <div class="error-wrapper text-center">
        <h1 >404</h1>
        <h3>Something's missing.</h3>
        <p>This page is missing or has been removed</p>
        <a href="<?php echo get_home_url( )?>" class="btn bg-primary"> Go to Home</a>
    </div>
    </div>
</section>

<?php get_footer(); ?>