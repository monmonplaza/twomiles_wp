<?php
# Template Name: Our Team - Location
?>

<?php get_header(); ?>
<?php if(have_posts() ) : while(have_posts() ) : the_post() ?>
<section class="banner-sm" style="background-image: linear-gradient(to right, white 20%, rgba(255, 255, 255, 0.2)), url(<?php echo get_field('page_banner')['url']; ?>)">
    <div class="container">
        <div class="banner-sm-wrapper text-light">
            <span class="welcome-span">Staff</span>
            <h1>Two Miles <span><?php the_title() ?></span></h1>
            <!-- <a href="services.html" class="btn bg-primary">View Offices</a> -->
            <a href="http://localhost/two_miles/our-team/"><i class="fas fa-arrow-left"></i> Back</a>

        </div>
    </div>
</section>


<section class="management-team py-5">
      <div class="container">
      <div class="section-header">
          <span><?php the_title(); ?></span>
          <h2>Meet The Team</h2>


        </div>
        <?php $slug = get_post_field( 'post_name');
              $staff = New WP_Query(array(
            'post_type' => 'staff',
            'post_per_page' => 30,
            'tax_query' => array(
              array (
                'taxonomy' => 'post',
                'field'    => 'slug',
                'terms'    => $slug
              ))
        )) ?>



 <div class="row">
          <div class="col-sm-12 col-md-9">
            <div class="member-list-info">
            <?php if($staff->have_posts()) : while($staff->have_posts()) : $staff->the_post()?>

              <div class="employee-content active-emp-detail">
                <div class="row">
                  <div class="col-sm-12  col-md-5">
                    <div class="employee-content-main">
                      <img src="<?php echo get_field('image')['url'] ?>" />
                     
                      <h3><?php the_title(); ?></h3>
                      <h4><?php the_field('position')?></h4>
                      <p class="text-justify"><?php the_field('about')?></p>
                    </div>
                  </div>
                  <div class="col-sm-12  col-md-7">
                    <div class="employee-content-faq">
                    <?php the_content()?>
                    </div>
                  </div>
                </div>
              </div>
         <?php endwhile;?>
            <?php endif;
                wp_reset_postdata();	
            ?>

 
            </div>
          </div>

          <div class="col-md-3">
            <div class="member-list-wrapper">
              <h3>The Team</h3>
              <ul>
              <?php if($staff->have_posts()) : while($staff->have_posts()) : $staff->the_post()?>
              
                <li>
                  <div class="employee-box active-emp">
                    <img src="<?php echo get_field('image')['url'] ?>" alt="" />
                    <div class="employee-box-details">
                      <h4><?php the_title(); ?></h4>
                    </div>
                  </div>
                </li>

                <?php endwhile;?>
            <?php endif;
                wp_reset_postdata();	
            ?>
              </ul>
            </div>
          </div>

        </div>



      
      </div>
    </section>


<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no more page to load.' ); ?></p>
<?php endif; ?>

<section class="get-quote bg-lightgray call-out">
    <div class="container">
        <h3 class="float-left">
            We have over 30 years of expertise in Finance, Accounting and
            Consulting
        </h3>
        <a href="contact.html" class="btn bg-primary float-right">Get Free Quote</a>
    </div>
</section>


<?php get_footer(); ?>