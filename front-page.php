<?php get_header(); ?>

<section class="banner">
      <div class="container">
        <div class="banner-wrapper text-light">
          <h1>How Do You Handle Challenges?</h1>
          <h2>
            Our Calling – Let us assist you with your journey by becoming your
            partner.
          </h2>
          <a href="http://localhost/two_miles/services" class="btn bg-primary">Our Services</a>
          <a href="http://localhost/two_miles/contact" class="btn bg-dark">Get in Touch</a>
        </div>
      </div>
    </section>



    <section class="tagline bg-primary call-out">
      <div class="container">
        <h3 class="text-center">
          We have over 30 years of expertise in Finance, Accounting and
          Consulting
        </h3>
      </div>
    </section>

    <section class="index-services py-5">
      <div class="container">
        <div class="section-header">
          <span class="text-primary">Tax/Accounting/Outsourcing</span>
          <h2>Explore our Services</h2>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="index-services-box">
              <img src="<?php echo get_template_directory_uri()?>/img/service-index-1.jpg" alt="" />
              <div class="index-services-box-content">
                <h2>Tax Services</h2>
                <div>
                  <p>
                    Our services includes: Strategic Tax Planning, Benefit
                    consulting, Tax Return Preparation, and Tax Audit
                    Representation.
                  </p>

                  <a href="#">Learn More</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="index-services-box">
            <img src="<?php echo get_template_directory_uri()?>/img/service-index-2.jpg" alt="" />
              <div class="index-services-box-content">
                <h2>Accounting and Tax consulting</h2>
                <div>
                  <p>
                    We will provide advice on tax savings or asset management
                    according to your situation
                  </p>

                  <a href="#">Learn More</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="index-services-box">
            <img src="<?php echo get_template_directory_uri()?>/img/service-index-3.jpg" alt="" />
              <div class="index-services-box-content">
                <h2>Accounting System Set Up</h2>
                <div>
                  <p>
                    We provide consulting on introducing a reasonable accounting
                    system according to the company's size and business content
                  </p>
                  <a href="#">Learn More</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="index-services-box">
            <img src="<?php echo get_template_directory_uri()?>/img/service-index-4.jpg" alt="" />
              <div class="index-services-box-content">
                <h2>Business Support</h2>
                <div>
                  <p>
                    We have all functions related to Payroll. Tax saving
                    consulting is especially effective for owners.
                  </p>
                  <a href="#">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  

    <section class="index-about">
      <div class="container-fluid no-padding">
        <div class="row no-margin">
          <div class="col-md-6 no-padding">
            <img src="<?php echo get_template_directory_uri()?>/img/front-page_about.jpg" alt="" />
          </div>
          <div class="col-md-6 no-padding">
            <div class="index-about-content bg-primary">
              <div class="index-about-content-wrapper">
                <h3 class="primary-header">
                  About Two Miles
                </h3>
                <p>
                  Our name "Two Miles" come from the bible in Matthew chapter 5
                  where Jesus says “And if anyone forces you to go one mile, go
                  with him two miles.” It represents our commitment to our
                  clients. As our name states, we are committed to going the
                  extra mile and providing quality work in a timely manner.
                </p>

                <p>
                  We are striving to provide you with service that exceeds your
                  expectations. Our goal is to provide the best and fastest
                  service that exceeds clients' expectations with integrity and
                  trust. We focus on your requirements, respond quickly, and
                  communicate sincerely.
                </p>

                <a href="#" class="btn bg-light">Our Team</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="latest-news py-5">
      <div class="container">
        <div class="section-header">
          <span class="text-primary">Latest</span>
          <h2>Global Accounting News</h2>
        </div>
        <div class="row">
        <?php
                  $news = new WP_Query(array(
                    'post_type' => 'news',
                    'posts_per_page' => 4
                  ));
        ?>

          <?php if($news->have_posts()) : while($news->have_posts() ) : $news->the_post(); ?>
          <div class="col-sm-6 col-md-3">
            <div class="latest-news-box article-box">
              <div class="latest-news-box-img">
              <?php if(has_post_thumbnail()) : the_post_thumbnail(); ?>
              <?php endif;?>
              </div>
              <div class="latest-news-box-content article-box-content">
                <div class="article-box-content-wrapper">
                  <h3>
                    <?php the_title(); ?>
                  </h3>

                  <p>
                  <?php 
                      $excerpt = get_the_excerpt();
                      $excerpt = substr($excerpt, 0, 150);
                      $result = substr($excerpt, 0, strrpos($excerpt, ' '));
                      echo $result;
                    ?>
                  </p>
                </div>

                <a href="<?php the_permalink(); ?>" class="text-primary "
                  >Read More <i class="fa fa-angle-right"></i
                ></a>
              </div>
            </div>
          </div>

          <?php endwhile; else : ?>
                <p><?php esc_html_e( 'Sorry, no more News to load.' ); ?></p>
            <?php endif; ?>

        </div>
      </div>
    </section>

<?php get_footer(); ?>