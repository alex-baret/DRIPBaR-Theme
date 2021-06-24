<footer class="footer">
  <div class="footer-top">
    <div class="container w_1450">
      <div class="row gutter-row">
        <div class="col-sm-7 compliant-col">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/compliant_logo.svg" alt="797 Compliant Logo">
          <h3>We are 797 Compliant</h3>
        </div>
        <div class="col-sm-5 guidelines-col">
          <div class="guidelines">
            <p>Guidelines, procedures and compliance</p>
            <p>Requirements for compounding sterile preparations. <a href="/797-compliant/" style="color:#F8E71C; text-decoration:underline;">Learn More</a> about 797 compliance.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-center">
    <div class="container w_1450">
      <div class="row gutter-row">
        <div class="col-sm-12 footer-center-cols">
          <div class="contact-info">
          <?php if (is_active_sidebar('widget-area-footer-1')) : ?>
            <div id="footer-widget-area" class="chw-widget-area widget-area" role="complementary">
                <?php dynamic_sidebar('widget-area-footer-1'); ?>
            </div>
          <?php endif; ?>
          </div>

          <div class="links-info">
            <h4>Find a Location</h4>
          <?php echo do_shortcode('[custom-mapping map_id="686" height="300"]'); ?>
          </div>

          <div class="social-section">
          <?php if (is_active_sidebar('widget-area-footer-3')) : ?>
            <div id="footer-widget-area" class="chw-widget-area widget-area" role="complementary">
                <?php dynamic_sidebar('widget-area-footer-3'); ?>
            </div>
          <?php endif; ?>
          <p class="privacy-link-mobile show-on-mobile"><a href="/sitemap/">Sitemap</a></p>
          <p class="privacy-link-mobile show-on-mobile"><a href="/privacy-policy/">Privacy</a></p>
          <span class="copyright">Copyright &copy; THE DRIPBaR <?php echo date("Y"); ?></span>
          </div>
        </div>
      </div>

      <div class="row gutter-row footer-bottom hide-on-mobile">
        <div class="col-md-12">
          <div></div>
        </div>
        <div class="footer-menu-copyright">
          <div class="col-md-9">
          <?php
          $args = array(
          'theme_location' => 'FooterMenuLeft',
          'container' => false
          );
          wp_nav_menu($args);
          ?>
          </div>
          <div class="col-md-3 copyright">
            <p><span class="privacy-link"><a href="/sitemap/">Sitemap</a></span><span class="privacy-link"><a href="/privacy-policy/">Privacy</a></span>Copyright &copy; THE DRIPBaR <?php echo date("Y"); ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>