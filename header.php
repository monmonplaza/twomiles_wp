<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?php bloginfo('title')?></title>
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <div class="container">
        <div class="header-wrapper ">
          <div class="branding float-left">
            <a href="<?php echo get_home_URL();?>"
              ><img src="<?php echo get_template_directory_uri()?>/img/logo.gif" alt="Two Miles Logo"
            /></a>
          </div>
          <nav class="float-right">
            <div class="toggle-menu" id="toggle-menu"><span></span></div>
            <div class="desktop-nav hide-sm">
            <?php if ( is_user_logged_in() ) {
             wp_nav_menu(array('theme_location' => 'Login Menu'));
        
            } else {
             wp_nav_menu(array('theme_location' => 'Logout Menu'));
      
            } ?>

           


            </div>
         

            <div class="mobile-nav">
              <div>
             
              <a href="<?php echo get_home_URL();?>"><img src="<?php echo get_template_directory_uri()?>/img/logo.jpg" alt="Two Miles Logo"></a>
              <?php if ( is_user_logged_in() ) {
             wp_nav_menu(array('theme_location' => 'Login Menu'));
        
            } else {
             wp_nav_menu(array('theme_location' => 'Logout Menu'));
      
            } ?>
           
              </div>
              <ul class="mobile-info">
              <li><i class="fa fa-phone"></i><span> 714-437-5823</span></li>
              <li>
                    <i class="fa fa-envelope"></i><span>
                    <a href="mailto:support@twomiles.net">support@twomiles.net</a
                    ></span>
                  </li>
                  <li>
                    <i class="fa fa-map-marker-alt"></i> <span>3070 Bristol Street
                    Suite 440<br> Costa Mesa, CA 92626</span>
                  </li>

                 
                 
            </div>
          </nav>
          <div class="mega-menu hide-sm">
             <div class="mega-menu-wrapper">
              <div class="container">
                <div class="row">
                  <div class="col-md-3">
                    <img src="<?php echo get_template_directory_uri()?> /img/team_thumb_hawaii.jpg" alt="">
                  </div>
                  <div class="col-md-9">
                    <div class="mega-menu-flex">
                    
                      <div class="mega-menu-box">
                      <a href=""> <h3> <i class="fas fa-angle-right"></i>  Consulting </h3></a>
                    <ul>
                          <li>Fractional/Virtual CFO & Controllership services</li>
                          <li>Valuation</li>
                          <li>M&A/Due Diligence</li>
                          <li>HR Management</li>
                          <li>Banking/Lender Management</li>
                         <li> Risk Management</li>
                          <li>General Business Consulting</li>
                          <li>Growth Consulting / Business Planning</li>
                        </ul>
                      </div>

                      <div class="mega-menu-box">
                      <a href="">   <h3 > <i class="fas fa-angle-right"></i> Accounting </h3></a>
                        <ul>
                          <li> Audit, Review and Compilation services</li>
                          <li> ERISA Audit</li>
                          <li> Bookkeeping</li>
                          <li> Outsourced Accounting Services</li>
                        </ul>
                      </div>
                      <div class="mega-menu-box">
                      <a href=""><h3><i class="fas fa-angle-right"></i>  Business Support </h3></a>
                        <ul>
                           <li> Payroll</li>
                           <li> Virtual Office</li>
                           <li> Business Formation</li>
                           <li> Dissolution</li>
                        </ul>
                      </div>
                      <div class="mega-menu-box">
                      <a href="">  <h3> <i class="fas fa-angle-right"></i> Tax</h3></a>
                        <ul>
                          <li>Individual</li>
                          <li>Corporate</li>
                          <li>International</li>
                          <li>Real Estate</li>
                          <li>State and Local</li>
                          <li>Sales Tax</li>
                          <li>Property Tax</li>
                          <li>Tax Planning</li>
                        </ul>
                    </div>
                    </div>
                    <p class="text-right">If you have any questions about our services, <a href="">contact us</a></p>

                  </div>

                </div>
              </div>
             </div> 

            </div>
        </div>
      </div>
    </header>

 
