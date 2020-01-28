<?php
# Template Name: Our Team
?>

<?php get_header(); ?>
<?php if(have_posts() ) : while(have_posts() ) : the_post() ?>
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
<section class="banner-sm " style="background-image: linear-gradient(to right, white 20%, rgba(255, 255, 255, 0.2)), url(<?php echo $backgroundImg[0]; ?>)">
    <div class="container">
        <div class="banner-sm-wrapper text-light">
            <span class="welcome-span">Beginnings</span>
            <h1>Two Miles <span><?php the_title() ?></span></h1>
            <!-- <a href="services.html" class="btn bg-primary">View Offices</a> -->
        </div>
    </div>
</section>

<section class="management-team py-5">
      <div class="container">
        <div class="section-header">
          <span>Two Miles</span>
          <h2>Management Team</h2>
        </div>

        <?php $staff = New WP_Query(array(
            'post_type' => 'staff',
            'post_per_page' => 3,
            'tax_query' => array(
              array (
                'taxonomy' => 'post',
                'field'    => 'slug',
                'terms'    => 'Management'
              ))
        )) ?>

        <div class="row">
        <?php if($staff->have_posts()) : while($staff->have_posts()) : $staff->the_post()?>
          <div class="col-md-4">
            <div
              class="management-tab-btn "
              id="management-1"
            >
              <img src="<?php echo get_field('image')['url'] ?>" alt="" />
              <div class="management-info text-center">
                <h3><?php the_title(); ?></h3>
                <p><?php the_field('position')?></p>
              </div>
            </div>
          </div>
     

        <?php endwhile;?>
        <?php endif;
            wp_reset_postdata();	
        ?>
   </div>
        <div class="management-tab-content-main">
        <?php if($staff->have_posts()) : while($staff->have_posts()) : $staff->the_post()?>

          <div class="management-tab-content" id="management-1-content">
            <div class="more-info">
              <div class="more-info-detail">
                <div
                  class="management-tab-content-wrapper bg-primary text-white"
                >
              
                  <p>
                   <?php the_field('about')?>
                  </p>
                </div>
              </div>

              <div class="more-info-faq">
                <div class="management-tab-content-wrapper">
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
    </section>


<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no more page to load.' ); ?></p>
<?php endif; ?>


<section class="office-team py-5">
      <div class="container">
        <div class="section-header">
          <span>Two Miles</span>
          <h2>Location and Staff</h2>
        </div>

        <div class="row">
          <div class="col-sm-6 col-md-4">
            <div class="staff-location-wrapper">
              <img
                src="http://localhost/two_miles/wp-content/uploads/2020/01/team_thumb_costamesa.jpg"
                alt="Costa Mesa Thumb"
              />
              <div class="overlay">
                <div class="overlay-content text-center">
                  <h3>Costa Mesa <br> Office</h3>
                  <a href=" http://localhost/two_miles/our-team/costa-mesa/"><i class="fas fa-list-ul"></i> Staff</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4">
            <div class="staff-location-wrapper">
              <img src="http://localhost/two_miles/wp-content/uploads/2020/01//team_thumb_torrance.jpg" alt="Torrance Thumb" />
              <div class="overlay">
                <div class="overlay-content text-center">
                  <h3>Torrance <br> Office</h3>
                  <a href="http://localhost/two_miles/our-team/torrance/"><i class="fas fa-list-ul"></i> Staff</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4">
            <div class="staff-location-wrapper">
              <img src="http://localhost/two_miles/wp-content/uploads/2020/01//team_thumb_sanDiego.jpg" alt="San Diego Thumb" />
              <div class="overlay">
                <div class="overlay-content text-center">
                  <h3>San Diego <br> Office</h3>
                  <a href="http://localhost/two_miles/our-team/san-diego/"><i class="fas fa-list-ul"></i>  Staff</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4">
            <div class="staff-location-wrapper">
              <img src="http://localhost/two_miles/wp-content/uploads/2020/01//team_thumb_hawaii.jpg" alt="Hawaii Thumb" />
              <div class="overlay">
                <div class="overlay-content text-center">
                  <h3>Hawaii <br> Office</h3>
                  <a href="http://localhost/two_miles/our-team/hawaii/"><i class="fas fa-list-ul"></i> Staff</a>
                </div>
              </div>
            </div>
          </div>


            <div class="col-sm-6 col-md-4">
              <div class="staff-location-wrapper">
                <img src="http://localhost/two_miles/wp-content/uploads/2020/01//team_thumb_japan.jpg" alt="japan Thumb" />
                <div class="overlay">
                  <div class="overlay-content text-center">
                    <h3>Japan <br> Office</h3>
                    <a href="http://localhost/two_miles/our-team/japan/"><i class="fas fa-list-ul"></i>  Staff</a>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-sm-6 col-md-4">
              <div class="staff-location-wrapper">
                <img src="http://localhost/two_miles/wp-content/uploads/2020/01//team_thumb_phil.jpg" alt="Phil Thumb" />
                <div class="overlay">
                  <div class="overlay-content text-center">
                    <h3>Philippines <br> Office</h3>
                    <a href="http://localhost/two_miles/our-team/philippines/"><i class="fas fa-list-ul"></i> Staff</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


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