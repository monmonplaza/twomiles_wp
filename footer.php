
<footer>
<p class="page-name">
  <?php if (is_user_logged_in() ) {
  global $template; echo basename($template);
  }

  ?>
</p>
      <div class="container">
      <!-- <?php global $template; echo basename($template); ?> -->

        <div class="row">
          <div class="col-md-6">
            <div class="footer-box">
              <h2>About Two Miles</h2>
              <p>
                We are committed to offer a variety of solutions with a
                reasonable price. We focus on your business goals and to assist
                your success with passion. Our desire is to become your partners
                in reaching you business and personal goals.
              </p>

              <ul class="social-media">
                <li>
                  <a href="#"><i class="fab fa-facebook"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-md-2">
            <div class="footer-box ">
              <h3>Quick Links</h3>
              <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Our Team</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>

          <div class="col-md-4">
            <div class="footer-box">
              <div class="footer-box-inner">
                <h3>Company Info</h3>
                <ul class="company-info">
                  <li>
                    <i class="fa fa-map-marker-alt"></i> 3070 Bristol Street
                    Suite 440 Costa Mesa, CA 92626
                  </li>

                  <li><i class="fa fa-phone"></i> 714-437-5823</li>
                  <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:support@twomiles.net">
                      support@twomiles.net</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright">
        <p>&copy; 2020. All right reserved</p>
      </div>
  
    </footer>
    <?php wp_footer(); ?>
    <!-- <script src="./js/script.js"></script> -->
  </body>
</html>
