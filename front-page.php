<?php /* Template Name: Home page */ ?>
<?php get_header(); ?>

<div id="home-slider">
  <?php echo do_shortcode('[rev_slider alias="home_slider"]'); ?>
</div>

<?php
if (have_posts()) : 
  while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>

<?php if (have_rows('explore_cards')) :
        $explore_images = array();
        $explore_icons = array();
        $explore_titles = array();
        $explore_descriptions = array();
        $explore_links = array();

        while (have_rows('explore_cards')) : the_row();

        // vars
        array_push($explore_images, get_sub_field('image'));
        array_push($explore_icons, get_sub_field('icon'));
        array_push($explore_titles, get_sub_field('title'));
        array_push($explore_descriptions, get_sub_field('description'));
        array_push($explore_links, get_sub_field('link'));
        ?>
<?php endwhile; ?>
<?php
$explore_titles_length = count($explore_titles);
endif; ?>
<div class="explore">
  <div class="container w_1450">
    <div class="row gutter-row-extra">
      <div class="col-md-12">
        <h3>Explore the DRIPBaR</h3>
        <p>What's the right combination for your best health and vitality?</p>
      </div>
    </div>
    <div class="rows-container desktop-only">
      <div class="row gutter-row-extra row-one">
        <div class="col-md-12">
          <div class="list-wrapper">
            <?php for($count = 0; $count < $explore_titles_length; $count++) { ?>
            <div class="item">
              <!-- <a href="#"> -->
                <div class="item-content">
                  <img src="<?php echo $explore_images[$count]; ?>" alt="Explore the DRIPBaR">
                  <img src="<?php echo $explore_icons[$count]; ?>" alt="Explore the DRIPBaR">
                  <?php echo $explore_titles[$count]; ?>
                </div>
              <!-- </a> -->
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="row gutter-row-extra row-two">
        <div class="col-md-12">
          <div class="list-wrapper">
            <?php for($count = 0; $count < $explore_titles_length; $count++) { ?>
            <div class="item">
              <!-- <a href="#"> -->
                <div class="item-content">
                  <img src="<?php echo $explore_images[$count]; ?>" alt="Explore the DRIPBaR">
                  <img src="<?php echo $explore_icons[$count]; ?>" alt="Explore the DRIPBaR">
                  <?php echo $explore_titles[$count]; ?>
                  <p><?php echo $explore_descriptions[$count]; ?></p>
                  <?php
                  if($count != 4) { ?>
                    <a href="<?php echo $explore_links[$count]; ?>">Read More <i class="fas fa-caret-right"></i></a>
                  <?php } ?>
                </div>
              <!-- </a> -->
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row gutter-row-extra row-one">
      <div class="col-md-12">
        <div class="owl-nav-buttons">
          <div class="owl-prev-explore mobile-only"><i class="fas fa-caret-left"></i></div>
          <div class="owl-next-explore mobile-only"><i class="fas fa-caret-right"></i></div>
        </div>
        <div class="owl-carousel owl-theme owl-explore mobile-only">
          <?php for($count = 0; $count < $explore_titles_length; $count++) { ?>
          <div class="list-wrapper">
            <div class="item">
              <?php
              if($count != 4) { ?>
              <a href="<?php echo $explore_links[$count]; ?>">
                <div class="item-content">
                  <img src="<?php echo $explore_images[$count]; ?>" alt="Explore the DRIPBaR">
                  <img src="<?php echo $explore_icons[$count]; ?>" alt="Explore the DRIPBaR">
                  <?php echo $explore_titles[$count]; ?>
                </div>
              </a>
              <?php } else { ?>
              <!-- <a href="#"> -->
                <div class="item-content">
                  <img src="<?php echo $explore_images[$count]; ?>" alt="Explore the DRIPBaR">
                  <img src="<?php echo $explore_icons[$count]; ?>" alt="Explore the DRIPBaR">
                  <?php echo $explore_titles[$count]; ?>
                </div>
              <!-- </a> -->
              <?php } ?>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php if (have_rows('get_to_know_us')) :
      $background_images = array();
      $titles = array();
      $descriptions = array();
      $card_images = array();
      $card_icons = array();
      $card_titles = array();

      while (have_rows('get_to_know_us')) : the_row();

      // vars
      array_push($background_images, get_sub_field('background_image'));
      array_push($titles, get_sub_field('title'));
      array_push($descriptions, get_sub_field('description'));
      array_push($card_images, get_sub_field('card_image'));
      array_push($card_icons, get_sub_field('card_icon'));
      array_push($card_titles, get_sub_field('card_title'));
      ?>
<?php endwhile; ?>
<?php
$titles_length = count($titles);
endif; ?>
<div class="get-to-know-us hide-on-mobile" style="background-image: url(<?php echo $background_images[0]; ?>)">
  <div class="container w_1450">
    <div class="row gutter-row content-body">
      <div class="col-md-5">
        <div id="card-item-display">
          <div>
            <h2><?php echo $titles[0]; ?></h2>
            <?php echo $descriptions[0]; ?>
          </div>
        </div>
        <?php for($count = 1; $count < $titles_length; $count++) { ?>
        <div style="display:none;">
          <div id="card-item-<?php echo $count + 1; ?>">
            <h2><?php echo $titles[$count]; ?></h2>
            <?php echo $descriptions[$count]; ?>
          </div>
          <img id="background-img-<?php echo $count + 1; ?>" src="<?php echo $background_images[$count]; ?>" alt="Get To Know Us">
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
  <div>
    <div class="list-wrapper">
      <?php for($count = 1; $count < $titles_length; $count++) { ?>
      <div class="item">
        <!-- <a href="#"> -->
          <div class="item-content card-item-title" id="card-item-<?php echo $count + 1; ?>">
            <img src="<?php echo $card_images[$count]; ?>" alt="Explore the DRIPBaR">
            <img src="<?php echo $card_icons[$count]; ?>" alt="Explore the DRIPBaR">
            <p><?php echo $card_titles[$count]; ?></p>
          </div>
        <!-- </a> -->
      </div>
      <?php } ?>
    </div>
  </div>
</div>

<div class="know-us-carousel show-on-mobile">
  <div class="owl-nav-buttons">
    <div class="owl-prev-know-us show-on-mobile"><i class="fas fa-caret-left"></i></div>
    <div class="owl-next-know-us show-on-mobile"><i class="fas fa-caret-right"></i></div>
  </div>
  <div class="list-wrapper">
    <div class="owl-carousel owl-theme owl-know-us">
      <?php for($count = 0; $count < $titles_length; $count++) { ?>
        <div class="item" style="background-image: url(<?php echo $background_images[$count]; ?>)">
          <div class="row gutter-row content-body">
            <div class="col-md-12">
              <h2><?php echo $titles[$count]; ?></h2>
              <?php echo $descriptions[$count]; ?>
            </div>
          </div>
          <div class="item-content">
            <img src="<?php echo $card_images[$count]; ?>" alt="Explore the DRIPBaR">
            <img src="<?php echo $card_icons[$count]; ?>" alt="Explore the DRIPBaR">
            <p><?php echo $card_titles[$count]; ?></p>
            <div class="scroll-read">
              <p>Scroll to Read More</p>
              <i class="fas fa-caret-down"></i>
            </div>
          </div>
        </div>
      <?php } ?>
      </div>
    </div>
  </div>
</div>

<?php if (have_rows('testimonials')) :
      $testimonials = array();
      $authors = array();
      $sources = array();

      while (have_rows('testimonials')) : the_row();

      // vars
      array_push($testimonials, get_sub_field('testimonial'));
      array_push($authors, get_sub_field('author'));
      array_push($sources, get_sub_field('source'));
      ?>
<?php endwhile; ?>
<?php
$testimonials_length = count($testimonials);
endif; ?>
<div class="testimonials">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <h3>What Are People Saying?</h3>
        <p>Still need convincing? Check out these client testimonials.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="owl-nav-buttons">
          <div class="owl-prev-btn desktop-only"><i class="fas fa-caret-left"></i></div>
          <div class="owl-next-btn desktop-only"><i class="fas fa-caret-right"></i></div>
        </div>
        <div class="owl-window-wrapper">
          <div class="owl-window"></div>
        </div>
        <div class="owl-carousel owl-theme owl-testimonials-1 desktop-only">
          <div class="testimonial-item" data-dot="<button role='button' class='owl-dot'></button>">
            <p class="quotation-mark"></p>
            <p class="quotation"></p>
            <p class="quotation-author"></p>
            <p class="quotation-source"></p>
          </div>

          <?php $quotationMarkColors = array("#AFB315", "#09CED0", "#F48C16", "#001F86", "#0075D7", "#AFB315", "#00B2B4"); ?>

          <?php for($count = 0; $count < $testimonials_length; $count++) { ?>
          <div class="testimonial-item" data-dot="<button role='button' class='owl-dot'></button>">
            <p class="quotation-mark" style="color:<?php echo $quotationMarkColors[$count]; ?>">“</p>
            <p class="quotation"><?php echo $testimonials[$count]; ?></p>
            <p class="quotation-author"><?php echo $authors[$count]; ?></p>
            <p class="quotation-source"><?php echo $sources[$count]; ?></p>
          </div>
          <?php } ?>

          <div class="testimonial-item" data-dot="<button role='button' class='owl-dot'></button>">
            <p class="quotation-mark"></p>
            <p class="quotation"></p>
            <p class="quotation-author"></p>
            <p class="quotation-source"></p>
          </div>
        </div>
        
        <div class="owl-nav-buttons">
          <div class="owl-prev-btn-mobile mobile-only"><i class="fas fa-caret-left"></i></div>
          <div class="owl-next-btn-mobile mobile-only"><i class="fas fa-caret-right"></i></div>
        </div>
        <div class="owl-carousel owl-theme owl-testimonials-2 mobile-only">
          <?php for($count = 0; $count < $testimonials_length; $count++) { ?>
          <div class="testimonial-item" data-dot="<button role='button' class='owl-dot'></button>">
            <p class="quotation-mark" style="color:<?php echo $quotationMarkColors[$count]; ?>">“</p>
            <p class="quotation"><?php echo $testimonials[$count]; ?></p>
            <p class="quotation-author"><?php echo $authors[$count]; ?></p>
            <p class="quotation-source"><?php echo $sources[$count]; ?></p>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php endwhile; 
else: ?>
  <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<?php get_footer(); ?>