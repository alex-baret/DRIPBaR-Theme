<?php /* Template Name: Additional Services */ ?>
<?php get_header(); ?>

<style>
.botox_icon {
  width: 75px;
}

.mobile_concierge_icon {
  width: 75px;
}

.weight_loss_icon {
  width: 75px;
}

.longevity_program_icon {
  width: 75px;
}

.hyperbaric_icon {
  width: 75px;
}

.heavy_metal_testing_icon {
  width: 75px;
}

.food_inflamation_testing_icon {
  width: 50px;
}

.micronurtrient_icon {
  width: 75px;
}

.vibrant_icon {
  width: 75px;
}

.liquid_blood_icon {
  width: 75px;
}

.biocept_icon {
  width: 75px;
}

.ivygene_icon {
  width: 75px;
}

.phlebotomy_icon {
  width: 75px;
}

.cryotherapy_icon {
  width: 75px;
}

.red_light_therapy_icon {
  width: 75px;
}

.infrared_sauna_icon {
  width: 75px;
}

.ozone_therapy_icon {
  width: 75px;
}

.oral_supplements_icon {
  width: 75px;
}

</style>

<?php
if (have_posts()) : 
  while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>

<div class="additional-services">
  <div class="extra-space-top"></div>
  <div class="container w_1450 page-header-container">
    <div class="row">
      <div class="col-md-12">
        <h1><?php the_title(); ?></h1>
        <p>From Aesthetics to Weight Loss, The DRIPBaR offers a range of additional services to Feed Your Cells and Fuel Your Life.</p>
      </div>
    </div>
  </div>

  <div class="gallery-container hide-on-mobile">
    <div class="gallery">
      <figure id="gallery-item-1" class="gallery__item gallery__item--1 gallery-item-open">
          <img src="/wp-content/uploads/2020/06/PRP-Facial-min.png" alt="Aesthetics" class="gallery__img">
          <img class="botox_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Botox-overlay-icon.svg" alt="Aesthetics-icon">
          <p>Aesthetics</p>
      </figure>
      <figure id="gallery-item-2" class="gallery__item gallery__item--2 gallery-item-open">
          <img src="/wp-content/uploads/2020/07/Mobile-Concierge-new-min.jpg" alt="Mobile Concierge" class="gallery__img">
          <img class="mobile_concierge_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Mobile-Concierge-overlay-icon.svg" alt="Mobile-Concierge-icon">
          <p>Mobile Concierge</p>
      </figure>
      <figure id="gallery-item-3" class="gallery__item gallery__item--3 gallery-item-open">
          <img src="/wp-content/uploads/2020/06/Weight-Loss-min.jpg" alt="Weight Loss Program" class="gallery__img">
          <img class="weight_loss_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Weight-Loss-overlay-icon.svg" alt="Weight-Loss-icon">
          <p>Weight Loss Program</p>
      </figure>
      <figure id="gallery-item-4" class="gallery__item gallery__item--4 gallery-item-open">
          <img src="/wp-content/uploads/2020/06/Botox-min.png" alt="Longevity Program" class="gallery__img">
          <img class="longevity_program_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Longevity-Program-overlay-icon.svg" alt="Longevity-Program-icon">
          <p>Longevity Program</p>
      </figure>
      <figure id="gallery-item-5" class="gallery__item gallery__item--5 gallery-item-open">
          <img src="/wp-content/uploads/2020/06/Hyperbaric-Oxygen-Therapy-min.png" alt="Hyperbaric Oxygen Therapy" class="gallery__img">
          <img class="hyperbaric_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Hyperbaric-Oxygen-Therapy-overlay-icon.svg" alt="Hyperbaric-Oxygen-Therapy-icon">
          <p>Hyperbaric Oxygen Therapy</p>
      </figure>
      <figure id="gallery-item-6" class="gallery__item gallery__item--6 gallery-item-open">
          <img src="/wp-content/uploads/2020/06/Heavy-Metal-Testing-min.png" alt="Heavy Metal Testing" class="gallery__img">
          <img class="heavy_metal_testing_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Heavy-Metal-Testing-overlay-icon.svg" alt="Heavy-Metal-Testing-icon">
          <p>Heavy Metal Testing</p>
      </figure>
      <figure id="gallery-item-7" class="gallery__item gallery__item--7 gallery-item-open">
          <img src="/wp-content/uploads/2020/06/Food-Inflammation-Testing-min.png" alt="Food Inflammation Testing" class="gallery__img">
          <img class="food_inflamation_testing_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Food-Inflammation-Testing-overlay-icon.svg" alt="Food-Inflammation-Testing-icon">
          <p>Food Inflammation Testing</p>
      </figure>
      <figure id="gallery-item-8" class="gallery__item gallery__item--8 gallery-item-open">
          <img src="/wp-content/uploads/2020/06/Micronurtrient-Testing-min.png" alt="Micronutrient Testing" class="gallery__img">
          <img class="micronurtrient_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Micronurtrient-Testing-overlay-icon.svg" alt="Micronurtrient-Testing-icon">
          <p>Micronutrient Testing</p>
      </figure>
      <figure id="gallery-item-9" class="gallery__item gallery__item--9 gallery-item-open">
          <img src="/wp-content/uploads/2020/06/Vibrant-Reference-Testing-min.png" alt="Vibrant Reference Testing For Lyme and Co-infections" class="gallery__img">
          <img class="vibrant_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Vibrant-Reference-Testing-overlay-icon.svg" alt="Vibrant-Reference-Testing-icon">
          <p>Vibrant Reference Testing For Lyme and Co-infections</p>
      </figure>
      <figure id="gallery-item-10" class="gallery__item gallery__item--10 gallery-item-open">
          <img src="/wp-content/uploads/2020/06/Liquid-Blood-min.png" alt="Liquid (blood) Biopsies For Cancer" class="gallery__img">
          <img class="liquid_blood_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Liquid-Blood-overlay-icon.svg" alt="Liquid-Blood-icon">
          <p>Liquid (blood) Biopsies For Cancer</p>
      </figure>
      <figure id="gallery-item-11" class="gallery__item gallery__item--11 gallery-item-open">
          <img src="/wp-content/uploads/2020/06/Biocept-min.png" alt="Biocept" class="gallery__img">
          <img class="biocept_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Biocept-overlay-icon.svg" alt="Biocept-icon">
          <p>Biocept</p>
      </figure>
      <figure id="gallery-item-12" class="gallery__item gallery__item--12 gallery-item-open">
          <img src="/wp-content/uploads/2020/06/IvyGene-min.png" alt="IvyGene" class="gallery__img">
          <img class="ivygene_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/IvyGene-overlay-icon.svg" alt="IvyGene-icon">
          <p>IvyGene</p>
      </figure>
      <figure id="gallery-item-13" class="gallery__item gallery__item--13 gallery-item-open">
          <img src="/wp-content/uploads/2020/06/Phlebotomy-min.png" alt="Phlebotomy - Blood Draw" class="gallery__img">
          <img class="phlebotomy_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Phlebotomy-overlay-icon.svg" alt="Phlebotomy-icon">
          <p>Phlebotomy - Blood Draw</p>
      </figure>
      <figure id="gallery-item-14" class="gallery__item gallery__item--14 gallery-item-open">
          <img src="/wp-content/uploads/2020/06/Cryotherapy-min.jpg" alt="Cryotherapy" class="gallery__img">
          <img class="cryotherapy_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Cryotherapy-overlay-icon.svg" alt="Cryotherapy-icon">
          <p>Cryotherapy</p>
      </figure>
      <figure id="gallery-item-15" class="gallery__item gallery__item--15 gallery-item-open">
          <img src="/wp-content/uploads/2020/07/Red-Light-Therpay-new-min.jpg" alt="Red Light Therapy" class="gallery__img">
          <img class="red_light_therapy_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Red-Light-Therapy-overlay-icon.svg" alt="Red-Light-Therapy-icon">
          <p>Red Light Therapy</p>
      </figure>
      <figure id="gallery-item-16" class="gallery__item gallery__item--16 gallery-item-open">
          <img src="/wp-content/uploads/2020/06/Infrared-Sauna-min.jpg" alt="Infrared Sauna" class="gallery__img">
          <img class="infrared_sauna_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Infrared-Sauna-overlay-icon.svg" alt="Infrared-Sauna-icon">
          <p>Infrared Sauna</p>
      </figure>
      <figure id="gallery-item-17" class="gallery__item gallery__item--17 gallery-item-open">
          <img src="/wp-content/uploads/2020/07/Ozone-Therapy-new-min.jpg" alt="Ozone Therapy" class="gallery__img">
          <img class="ozone_therapy_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Ozone-Therapy-overlay-icon.svg" alt="Ozone-Therapy-icon">
          <p>Ozone Therapy</p>
      </figure>
      <!-- <figure id="gallery-item-18" class="gallery__item gallery__item--18 gallery-item-open">
          <img src="/wp-content/uploads/2020/06/Oral-Supplements-min.jpg" alt="Oral Supplements" class="gallery__img">
          <img class="oral_supplements_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Oral-Supplements-overlay-icon.svg" alt="Oral-Supplements-icon">
          <p>Oral Supplements</p>
      </figure> -->
    </div>
  </div>

  <div class="show-on-mobile services-carousel">
    <div class="owl-nav-buttons">
      <div class="owl-prev-services"><i class="fas fa-caret-left"></i></div>
      <div class="owl-next-services"><i class="fas fa-caret-right"></i></div>
    </div>
    <div class="list-wrapper">
      <div class="owl-carousel owl-theme owl-services">
          <div class="item">
            <div class="gallery-container">
              <div class="gallery">
                <figure id="gallery-item-1" class="gallery__item gallery__item--1 gallery-item-open">
                    <img src="/wp-content/uploads/2020/06/PRP-Facial-min.png" alt="Aesthetics" class="gallery__img">
                    <img class="botox_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Botox-overlay-icon.svg" alt="Aesthetics-icon">
                    <p>Aesthetics</p>
                </figure>
                <figure id="gallery-item-2" class="gallery__item gallery__item--2 gallery-item-open">
                    <img src="/wp-content/uploads/2020/07/Mobile-Concierge-new-min.jpg" alt="Mobile Concierge" class="gallery__img">
                    <img class="mobile_concierge_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Mobile-Concierge-overlay-icon.svg" alt="Mobile-Concierge-icon">
                    <p>Mobile Concierge</p>
                </figure>
                <figure id="gallery-item-3" class="gallery__item gallery__item--3 gallery-item-open">
                    <img src="/wp-content/uploads/2020/06/Weight-Loss-min.jpg" alt="Weight Loss Program" class="gallery__img">
                    <img class="weight_loss_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Weight-Loss-overlay-icon.svg" alt="Weight-Loss-icon">
                    <p>Weight Loss Program</p>
                </figure>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="gallery-container">
              <div class="gallery">
                <figure id="gallery-item-4" class="gallery__item gallery__item--4 gallery-item-open">
                    <img src="/wp-content/uploads/2020/06/Botox-min.png" alt="Longevity Program" class="gallery__img">
                    <img class="longevity_program_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Longevity-Program-overlay-icon.svg" alt="Longevity-Program-icon">
                    <p>Longevity Program</p>
                </figure>
                <figure id="gallery-item-5" class="gallery__item gallery__item--5 gallery-item-open">
                    <img src="/wp-content/uploads/2020/06/Hyperbaric-Oxygen-Therapy-min.png" alt="Hyperbaric Oxygen Therapy" class="gallery__img">
                    <img class="hyperbaric_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Hyperbaric-Oxygen-Therapy-overlay-icon.svg" alt="Hyperbaric-Oxygen-Therapy-icon">
                    <p>Hyperbaric Oxygen Therapy</p>
                </figure>
                <figure id="gallery-item-6" class="gallery__item gallery__item--6 gallery-item-open">
                    <img src="/wp-content/uploads/2020/06/Heavy-Metal-Testing-min.png" alt="Heavy Metal Testing" class="gallery__img">
                    <img class="heavy_metal_testing_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Heavy-Metal-Testing-overlay-icon.svg" alt="Heavy-Metal-Testing-icon">
                    <p>Heavy Metal Testing</p>
                </figure>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="gallery-container">
              <div class="gallery">
                <figure id="gallery-item-7" class="gallery__item gallery__item--7 gallery-item-open">
                    <img src="/wp-content/uploads/2020/06/Food-Inflammation-Testing-min.png" alt="Food Inflammation Testing" class="gallery__img">
                    <img class="food_inflamation_testing_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Food-Inflammation-Testing-overlay-icon.svg" alt="Food-Inflammation-Testing-icon">
                    <p>Food Inflammation Testing</p>
                </figure>
                <figure id="gallery-item-8" class="gallery__item gallery__item--8 gallery-item-open">
                    <img src="/wp-content/uploads/2020/06/Micronurtrient-Testing-min.png" alt="Micronurtrient Testing" class="gallery__img">
                    <img class="micronurtrient_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Micronurtrient-Testing-overlay-icon.svg" alt="Micronurtrient-Testing-icon">
                    <p>Micronurtrient Testing</p>
                </figure>
                <figure id="gallery-item-9" class="gallery__item gallery__item--9 gallery-item-open">
                    <img src="/wp-content/uploads/2020/06/Vibrant-Reference-Testing-min.png" alt="Vibrant Reference Testing For Lyme and Co-infections" class="gallery__img">
                    <img class="vibrant_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Vibrant-Reference-Testing-overlay-icon.svg" alt="Vibrant-Reference-Testing-icon">
                    <p>Vibrant Reference Testing For Lyme and Co-infections</p>
                </figure>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="gallery-container">
              <div class="gallery">
                <figure id="gallery-item-10" class="gallery__item gallery__item--10 gallery-item-open">
                    <img src="/wp-content/uploads/2020/06/Liquid-Blood-min.png" alt="Liquid (blood) Biopsies For Cancer" class="gallery__img">
                    <img class="liquid_blood_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Liquid-Blood-overlay-icon.svg" alt="Liquid-Blood-icon">
                    <p>Liquid (blood) Biopsies" For Cancer</p>
                </figure>
                <figure id="gallery-item-11" class="gallery__item gallery__item--11 gallery-item-open">
                    <img src="/wp-content/uploads/2020/06/Biocept-min.png" alt="Biocept" class="gallery__img">
                    <img class="biocept_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Biocept-overlay-icon.svg" alt="Biocept-icon">
                    <p>Biocept</p>
                </figure>
                <figure id="gallery-item-12" class="gallery__item gallery__item--12 gallery-item-open">
                    <img src="/wp-content/uploads/2020/06/IvyGene-min.png" alt="IvyGene" class="gallery__img">
                    <img class="ivygene_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/IvyGene-overlay-icon.svg" alt="IvyGene-icon">
                    <p>IvyGene</p>
                </figure>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="gallery-container">
              <div class="gallery">
                <figure id="gallery-item-13" class="gallery__item gallery__item--13 gallery-item-open">
                    <img src="/wp-content/uploads/2020/06/Phlebotomy-min.png" alt="Phlebotomy - Blood Draw" class="gallery__img">
                    <img class="phlebotomy_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Phlebotomy-overlay-icon.svg" alt="Phlebotomy-icon">
                    <p>Phlebotomy - Blood Draw</p>
                </figure>
                <figure id="gallery-item-14" class="gallery__item gallery__item--14 gallery-item-open">
                    <img src="/wp-content/uploads/2020/06/Cryotherapy-min.jpg" alt="Cryotherapy" class="gallery__img">
                    <img class="cryotherapy_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Cryotherapy-overlay-icon.svg" alt="Cryotherapy-icon">
                    <p>Cryotherapy</p>
                </figure> 
                <figure id="gallery-item-15" class="gallery__item gallery__item--15 gallery-item-open">
                    <img src="/wp-content/uploads/2020/07/Red-Light-Therpay-new-min.jpg" alt="Red Light Therapy" class="gallery__img">
                    <img class="red_light_therapy_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Red-Light-Therapy-overlay-icon.svg" alt="Red-Light-Therapy-icon">
                    <p>Red Light Therapy</p>
                </figure>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="gallery-container">
              <div class="gallery">
                <figure id="gallery-item-16" class="gallery__item gallery__item--16 gallery-item-open">
                    <img src="/wp-content/uploads/2020/06/Infrared-Sauna-min.jpg" alt="Infrared Sauna" class="gallery__img">
                    <img class="infrared_sauna_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Infrared-Sauna-overlay-icon.svg" alt="Infrared-Sauna-icon">
                    <p>Infrared Sauna</p>
                </figure>
                <figure id="gallery-item-17" class="gallery__item gallery__item--17 gallery-item-open">
                    <img src="/wp-content/uploads/2020/07/Ozone-Therapy-new-min.jpg" alt="Ozone Therapy" class="gallery__img">
                    <img class="ozone_therapy_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Ozone-Therapy-overlay-icon.svg" alt="Ozone-Therapy-icon">
                    <p>Ozone Therapy</p>
                </figure>
                <!-- <figure id="gallery-item-18" class="gallery__item gallery__item--18 gallery-item-open">
                    <img src="/wp-content/uploads/2020/06/Oral-Supplements-min.jpg" alt="Oral Supplements" class="gallery__img">
                    <img class="oral_supplements_icon" src="<?php //bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Oral-Supplements-overlay-icon.svg" alt="Oral-Supplements-icon">
                    <p>Oral Supplements</p>
                </figure> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="additional-services-overlays">
  <!-- Botox Overlay -->
  <div id="gallery-overlay-1" class="overlay">
    <span aria-hidden="true"><i class="fas fa-times closebtn"></i></span>
    <div class="overlay-content">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-1 col-md-10">
            <img class="botox_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Botox-overlay-icon.svg" alt="Aesthetics-icon">
            <h3>Aesthetics</h3>
            <div class="overlay-description">
              <p>Many DRIPBaR centers offer the latest and best techniques for administering Botulin toxins such as Botox and Dysport. This remarkably effective, safe and affordable facial anti aging treatment can match your youthful internal energy, with maintaining a  natural and youthful appearance.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-icons-menu">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 overlay-icons-col">
            <img class="overlay-icon-selected" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Botox-overlay-icon.svg" alt="Aesthetics">
            <img id="gallery-icon-2" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Mobile-Concierge-overlay-icon.svg" alt="Mobile Concierge">
            <img id="gallery-icon-3" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Weight-Loss-overlay-icon.svg" alt="Weight Loss Program">
            <img id="gallery-icon-4" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Longevity-Program-overlay-icon.svg" alt="Longevity Program">
            <img id="gallery-icon-5" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Hyperbaric-Oxygen-Therapy-overlay-icon.svg" alt="Hyperbaric Oxygen Therapy">
            <img id="gallery-icon-6" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Heavy-Metal-Testing-overlay-icon.svg" alt="Heavy Metal Testing">
            <img id="gallery-icon-7" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Food-Inflammation-Testing-overlay-icon.svg" alt="Food Inflammation Testing">
            <img id="gallery-icon-8" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Micronurtrient-Testing-overlay-icon.svg" alt="Micronurtrient Testing">
            <img id="gallery-icon-9" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Vibrant-Reference-Testing-overlay-icon.svg" alt="Vibrant Reference Testing For Lyme and Co-infections">
            <img id="gallery-icon-10" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Liquid-Blood-overlay-icon.svg" alt='Liquid (blood) Biopsies" For Cancer'>
            <img id="gallery-icon-11" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Biocept-overlay-icon.svg" alt="Biocept">
            <img id="gallery-icon-12" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/IvyGene-overlay-icon.svg" alt="IvyGene">
            <img id="gallery-icon-13" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Phlebotomy-overlay-icon.svg" alt="Phlebotomy - Blood Draw">
            <img id="gallery-icon-14" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Cryotherapy-overlay-icon.svg" alt="Cryotherapy">
            <img id="gallery-icon-15" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Red-Light-Therapy-overlay-icon.svg" alt="Red Light Therapy">
            <img id="gallery-icon-16" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Infrared-Sauna-overlay-icon.svg" alt="Infrared Sauna">
            <img id="gallery-icon-17" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Ozone-Therapy-overlay-icon.svg" alt="Ozone Therapy">
            <!-- <img id="gallery-icon-18" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Oral-Supplements-overlay-icon.svg" alt="Oral Supplements"> -->
          </div>
          <p class="text-on-hover">Aesthetic</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Mobile Concierge Overlay -->
  <div id="gallery-overlay-2" class="overlay">
    <span aria-hidden="true"><i class="fas fa-times closebtn"></i></span>
    <div class="overlay-content">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-1 col-md-10">
            <img class="mobile_concierge_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Mobile-Concierge-overlay-icon.svg" alt="Mobile-Concierge-icon">
            <h3>Mobile Concierge</h3>
            <div class="overlay-description">
              <p>THE DRIPBaR offers mobile services, including IV’s shots and other services, to support your best health.</p>
              <p>We offer in-home, in-office, or on vacation services. Feed your Cells. Fuel your Life.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-icons-menu">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 overlay-icons-col">
            <img id="gallery-icon-1" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Botox-overlay-icon.svg" alt="Aesthetics">
            <img class="overlay-icon-selected" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Mobile-Concierge-overlay-icon.svg" alt="Mobile Concierge">
            <img id="gallery-icon-3" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Weight-Loss-overlay-icon.svg" alt="Weight Loss Program">
            <img id="gallery-icon-4" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Longevity-Program-overlay-icon.svg" alt="Longevity Program">
            <img id="gallery-icon-5" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Hyperbaric-Oxygen-Therapy-overlay-icon.svg" alt="Hyperbaric Oxygen Therapy">
            <img id="gallery-icon-6" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Heavy-Metal-Testing-overlay-icon.svg" alt="Heavy Metal Testing">
            <img id="gallery-icon-7" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Food-Inflammation-Testing-overlay-icon.svg" alt="Food Inflammation Testing">
            <img id="gallery-icon-8" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Micronurtrient-Testing-overlay-icon.svg" alt="Micronurtrient Testing">
            <img id="gallery-icon-9" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Vibrant-Reference-Testing-overlay-icon.svg" alt="Vibrant Reference Testing For Lyme and Co-infections">
            <img id="gallery-icon-10" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Liquid-Blood-overlay-icon.svg" alt='Liquid (blood) Biopsies" For Cancer'>
            <img id="gallery-icon-11" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Biocept-overlay-icon.svg" alt="Biocept">
            <img id="gallery-icon-12" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/IvyGene-overlay-icon.svg" alt="IvyGene">
            <img id="gallery-icon-13" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Phlebotomy-overlay-icon.svg" alt="Phlebotomy - Blood Draw">
            <img id="gallery-icon-14" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Cryotherapy-overlay-icon.svg" alt="Cryotherapy">
            <img id="gallery-icon-15" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Red-Light-Therapy-overlay-icon.svg" alt="Red Light Therapy">
            <img id="gallery-icon-16" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Infrared-Sauna-overlay-icon.svg" alt="Infrared Sauna">
            <img id="gallery-icon-17" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Ozone-Therapy-overlay-icon.svg" alt="Ozone Therapy">
            <!-- <img id="gallery-icon-18" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Oral-Supplements-overlay-icon.svg" alt="Oral Supplements"> -->
          </div>
          <p class="text-on-hover">Mobile Concierge</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Weight Loss Program Overlay -->
  <div id="gallery-overlay-3" class="overlay">
    <span aria-hidden="true"><i class="fas fa-times closebtn"></i></span>
    <div class="overlay-content">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-1 col-md-10">
            <img class="weight_loss_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Weight-Loss-overlay-icon.svg" alt="Weight-Loss-icon">
            <h3>Weight Loss Program</h3>
            <div class="overlay-description">
              <p>There may be nothing more critical to avoiding disease, preserving youth, enhancing longevity than maintaining your healthiest percent body fat. We know that conventional diets do not work to maintain a healthy weight. They invite cycles of weight loss and weight regain.</p>
              <p>THE DRIPBaR uses their knowledge of cellular energy expenditure, neurotransmitter triggering of hunger desire, micronutrient support, and combines it with a program of nutritional behavioral change to help you achieve and maintain your healthiest weight. We use a combination of infusions, supplements, accountability and guided nutritional change designed to fit your life and make THE DRIPBaR weight loss program the last one you will ever need.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-icons-menu">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 overlay-icons-col">
            <img id="gallery-icon-1" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Botox-overlay-icon.svg" alt="Aesthetics">
            <img id="gallery-icon-2" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Mobile-Concierge-overlay-icon.svg" alt="Mobile Concierge">
            <img class="overlay-icon-selected" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Weight-Loss-overlay-icon.svg" alt="Weight Loss Program">
            <img id="gallery-icon-4" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Longevity-Program-overlay-icon.svg" alt="Longevity Program">
            <img id="gallery-icon-5" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Hyperbaric-Oxygen-Therapy-overlay-icon.svg" alt="Hyperbaric Oxygen Therapy">
            <img id="gallery-icon-6" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Heavy-Metal-Testing-overlay-icon.svg" alt="Heavy Metal Testing">
            <img id="gallery-icon-7" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Food-Inflammation-Testing-overlay-icon.svg" alt="Food Inflammation Testing">
            <img id="gallery-icon-8" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Micronurtrient-Testing-overlay-icon.svg" alt="Micronurtrient Testing">
            <img id="gallery-icon-9" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Vibrant-Reference-Testing-overlay-icon.svg" alt="Vibrant Reference Testing For Lyme and Co-infections">
            <img id="gallery-icon-10" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Liquid-Blood-overlay-icon.svg" alt='Liquid (blood) Biopsies" For Cancer'>
            <img id="gallery-icon-11" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Biocept-overlay-icon.svg" alt="Biocept">
            <img id="gallery-icon-12" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/IvyGene-overlay-icon.svg" alt="IvyGene">
            <img id="gallery-icon-13" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Phlebotomy-overlay-icon.svg" alt="Phlebotomy - Blood Draw">
            <img id="gallery-icon-14" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Cryotherapy-overlay-icon.svg" alt="Cryotherapy">
            <img id="gallery-icon-15" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Red-Light-Therapy-overlay-icon.svg" alt="Red Light Therapy">
            <img id="gallery-icon-16" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Infrared-Sauna-overlay-icon.svg" alt="Infrared Sauna">
            <img id="gallery-icon-17" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Ozone-Therapy-overlay-icon.svg" alt="Ozone Therapy">
            <!-- <img id="gallery-icon-18" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Oral-Supplements-overlay-icon.svg" alt="Oral Supplements"> -->
          </div>
          <p class="text-on-hover">Weight Loss Program</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Longevity Program Overlay -->
  <div id="gallery-overlay-4" class="overlay">
    <span aria-hidden="true"><i class="fas fa-times closebtn"></i></span>
    <div class="overlay-content">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-1 col-md-10">
            <img class="longevity_program_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Longevity-Program-overlay-icon.svg" alt="Longevity-Program-icon">
            <h3>Longevity Program</h3>
            <div class="overlay-description">
              <p>At THE DRIPBaR, our mission is to help our clients pursue the audacious objective of longevity, with preserved youthful vitality. As much as we all aspire to a long lifespan, many people fear infirmity and dependence more than death itself. This fear is so overwhelming that it leads people to incorrectly assume that a long life brings with it physical and mental decline. Our health starts at a cellular level. Healthy cells are what enables us to repair muscle, tendon and joint damage. Cell vitality is central to proper immune function, and healthy detoxification. Keeping your brain sharp and your memory intact requires nurturing healthy neurons. We believe that with proper care you can enjoy an exceptional lifespan that is bursting with energy.</p>
              <p>Although our health is challenged by living on a polluted planet, scientists have been able to figure out some of the essential elements necessary for life extension and youth preservation. At THE DRIPBaR, we are able to take out the things that don’t belong in your body that can damage the brain and the heart and increase cancer risk. We can also put in the things needed to feed your cells and your mitochondria to help them recover and maintain their energy and health. We help to make the advanced science of longevity and youth preservation available to all of our clients.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-icons-menu">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 overlay-icons-col">
            <img id="gallery-icon-1" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Botox-overlay-icon.svg" alt="Aesthetics">
            <img id="gallery-icon-2" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Mobile-Concierge-overlay-icon.svg" alt="Mobile Concierge">
            <img id="gallery-icon-3" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Weight-Loss-overlay-icon.svg" alt="Weight Loss Program">
            <img class="overlay-icon-selected" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Longevity-Program-overlay-icon.svg" alt="Longevity Program">
            <img id="gallery-icon-5" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Hyperbaric-Oxygen-Therapy-overlay-icon.svg" alt="Hyperbaric Oxygen Therapy">
            <img id="gallery-icon-6" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Heavy-Metal-Testing-overlay-icon.svg" alt="Heavy Metal Testing">
            <img id="gallery-icon-7" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Food-Inflammation-Testing-overlay-icon.svg" alt="Food Inflammation Testing">
            <img id="gallery-icon-8" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Micronurtrient-Testing-overlay-icon.svg" alt="Micronurtrient Testing">
            <img id="gallery-icon-9" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Vibrant-Reference-Testing-overlay-icon.svg" alt="Vibrant Reference Testing For Lyme and Co-infections">
            <img id="gallery-icon-10" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Liquid-Blood-overlay-icon.svg" alt='Liquid (blood) Biopsies" For Cancer'>
            <img id="gallery-icon-11" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Biocept-overlay-icon.svg" alt="Biocept">
            <img id="gallery-icon-12" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/IvyGene-overlay-icon.svg" alt="IvyGene">
            <img id="gallery-icon-13" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Phlebotomy-overlay-icon.svg" alt="Phlebotomy - Blood Draw">
            <img id="gallery-icon-14" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Cryotherapy-overlay-icon.svg" alt="Cryotherapy">
            <img id="gallery-icon-15" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Red-Light-Therapy-overlay-icon.svg" alt="Red Light Therapy">
            <img id="gallery-icon-16" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Infrared-Sauna-overlay-icon.svg" alt="Infrared Sauna">
            <img id="gallery-icon-17" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Ozone-Therapy-overlay-icon.svg" alt="Ozone Therapy">
            <!-- <img id="gallery-icon-18" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Oral-Supplements-overlay-icon.svg" alt="Oral Supplements"> -->
          </div>
          <p class="text-on-hover">Longevity Program</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Hyperbaric Oxygen Therapy Overlay -->
  <div id="gallery-overlay-5" class="overlay">
    <span aria-hidden="true"><i class="fas fa-times closebtn"></i></span>
    <div class="overlay-content">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-1 col-md-10">
            <img class="hyperbaric_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Hyperbaric-Oxygen-Therapy-overlay-icon.svg" alt="Hyperbaric-Oxygen-Therapy-icon">
            <h3>Hyperbaric<br> Oxygen Therapy</h3>
            <div class="overlay-description">
              <p>Hyperbarics is a technology in which the air pressure in the environment is increased. When a person’s body is placed in a more pressure environment, it absorbs more oxygen molecules per volume of compressed air. The body normally transports oxygen via the hemoglobin of the red blood cells. By increasing the air pressure, oxygen is then driven into the body’s fluids, allowing a super-saturation of tissues and organs with oxygen. The increased pressure infuses the body with oxygen, even reaching injuries with damaged circulation. An example of this is a blood clot in the brain (stroke).</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-icons-menu">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 overlay-icons-col">
            <img id="gallery-icon-1" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Botox-overlay-icon.svg" alt="Aesthetics">
            <img id="gallery-icon-2" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Mobile-Concierge-overlay-icon.svg" alt="Mobile Concierge">
            <img id="gallery-icon-3" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Weight-Loss-overlay-icon.svg" alt="Weight Loss Program">
            <img id="gallery-icon-4" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Longevity-Program-overlay-icon.svg" alt="Longevity Program">
            <img class="overlay-icon-selected" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Hyperbaric-Oxygen-Therapy-overlay-icon.svg" alt="Hyperbaric Oxygen Therapy">
            <img id="gallery-icon-6" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Heavy-Metal-Testing-overlay-icon.svg" alt="Heavy Metal Testing">
            <img id="gallery-icon-7" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Food-Inflammation-Testing-overlay-icon.svg" alt="Food Inflammation Testing">
            <img id="gallery-icon-8" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Micronurtrient-Testing-overlay-icon.svg" alt="Micronurtrient Testing">
            <img id="gallery-icon-9" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Vibrant-Reference-Testing-overlay-icon.svg" alt="Vibrant Reference Testing For Lyme and Co-infections">
            <img id="gallery-icon-10" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Liquid-Blood-overlay-icon.svg" alt='Liquid (blood) Biopsies" For Cancer'>
            <img id="gallery-icon-11" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Biocept-overlay-icon.svg" alt="Biocept">
            <img id="gallery-icon-12" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/IvyGene-overlay-icon.svg" alt="IvyGene">
            <img id="gallery-icon-13" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Phlebotomy-overlay-icon.svg" alt="Phlebotomy - Blood Draw">
            <img id="gallery-icon-14" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Cryotherapy-overlay-icon.svg" alt="Cryotherapy">
            <img id="gallery-icon-15" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Red-Light-Therapy-overlay-icon.svg" alt="Red Light Therapy">
            <img id="gallery-icon-16" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Infrared-Sauna-overlay-icon.svg" alt="Infrared Sauna">
            <img id="gallery-icon-17" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Ozone-Therapy-overlay-icon.svg" alt="Ozone Therapy">
            <!-- <img id="gallery-icon-18" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Oral-Supplements-overlay-icon.svg" alt="Oral Supplements"> -->
          </div>
          <p class="text-on-hover">Hyperbaric Oxygen Therapy</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Heavy Metal Testing Overlay -->
  <div id="gallery-overlay-6" class="overlay">
    <span aria-hidden="true"><i class="fas fa-times closebtn"></i></span>
    <div class="overlay-content">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-1 col-md-10">
            <img class="heavy_metal_testing_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Heavy-Metal-Testing-overlay-icon.svg" alt="Heavy-Metal-Testing-icon">
            <h3>Heavy Metal Testing</h3>
            <div class="overlay-description">
              <p>The role of toxic heavy metals in disease states has been widely neglected by conventional medicine.</p>
              <p>Lead is known to contribute to high blood pressure, heart disease, brain damage and dementia. Cadmium, nickel, and arsenic are known carcinogens. Aluminum increases the risk of dementia and other neurological disorders. Gadolinium once thought to be a harmless contrast material for MRI studies, has recently been shown to accumulate in the brain.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-icons-menu">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 overlay-icons-col">
            <img id="gallery-icon-1" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Botox-overlay-icon.svg" alt="Aesthetics">
            <img id="gallery-icon-2" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Mobile-Concierge-overlay-icon.svg" alt="Mobile Concierge">
            <img id="gallery-icon-3" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Weight-Loss-overlay-icon.svg" alt="Weight Loss Program">
            <img id="gallery-icon-4" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Longevity-Program-overlay-icon.svg" alt="Longevity Program">
            <img id="gallery-icon-5" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Hyperbaric-Oxygen-Therapy-overlay-icon.svg" alt="Hyperbaric Oxygen Therapy">
            <img class="overlay-icon-selected" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Heavy-Metal-Testing-overlay-icon.svg" alt="Heavy Metal Testing">
            <img id="gallery-icon-7" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Food-Inflammation-Testing-overlay-icon.svg" alt="Food Inflammation Testing">
            <img id="gallery-icon-8" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Micronurtrient-Testing-overlay-icon.svg" alt="Micronurtrient Testing">
            <img id="gallery-icon-9" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Vibrant-Reference-Testing-overlay-icon.svg" alt="Vibrant Reference Testing For Lyme and Co-infections">
            <img id="gallery-icon-10" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Liquid-Blood-overlay-icon.svg" alt='Liquid (blood) Biopsies" For Cancer'>
            <img id="gallery-icon-11" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Biocept-overlay-icon.svg" alt="Biocept">
            <img id="gallery-icon-12" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/IvyGene-overlay-icon.svg" alt="IvyGene">
            <img id="gallery-icon-13" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Phlebotomy-overlay-icon.svg" alt="Phlebotomy - Blood Draw">
            <img id="gallery-icon-14" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Cryotherapy-overlay-icon.svg" alt="Cryotherapy">
            <img id="gallery-icon-15" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Red-Light-Therapy-overlay-icon.svg" alt="Red Light Therapy">
            <img id="gallery-icon-16" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Infrared-Sauna-overlay-icon.svg" alt="Infrared Sauna">
            <img id="gallery-icon-17" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Ozone-Therapy-overlay-icon.svg" alt="Ozone Therapy">
            <!-- <img id="gallery-icon-18" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Oral-Supplements-overlay-icon.svg" alt="Oral Supplements"> -->
          </div>
          <p class="text-on-hover">Heavy Metal Testing</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Food Inflammation Testing Overlay -->
  <div id="gallery-overlay-7" class="overlay">
    <span aria-hidden="true"><i class="fas fa-times closebtn"></i></span>
    <div class="overlay-content">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-1 col-md-10">
            <img class="food_inflamation_testing_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Food-Inflammation-Testing-overlay-icon.svg" alt="Food-Inflammation-Testing-icon">
            <h3>Food Inflammation Testing</h3>
            <div class="overlay-description">
              <p>We measure the following 132 foods and additives including candida. Find out which you are sensitive to and start a new way of living.</p>
              <p>This test is a patented, multi-pathway delayed food sensitivity test. The test uses new technology that measures both IgG and Immune Complexes, the most common food-related pathways in the body. A simple blood test is needed.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-icons-menu">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 overlay-icons-col">
            <img id="gallery-icon-1" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Botox-overlay-icon.svg" alt="Aesthetics">
            <img id="gallery-icon-2" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Mobile-Concierge-overlay-icon.svg" alt="Mobile Concierge">
            <img id="gallery-icon-3" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Weight-Loss-overlay-icon.svg" alt="Weight Loss Program">
            <img id="gallery-icon-4" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Longevity-Program-overlay-icon.svg" alt="Longevity Program">
            <img id="gallery-icon-5" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Hyperbaric-Oxygen-Therapy-overlay-icon.svg" alt="Hyperbaric Oxygen Therapy">
            <img id="gallery-icon-6" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Heavy-Metal-Testing-overlay-icon.svg" alt="Heavy Metal Testing">
            <img class="overlay-icon-selected" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Food-Inflammation-Testing-overlay-icon.svg" alt="Food Inflammation Testing">
            <img id="gallery-icon-8" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Micronurtrient-Testing-overlay-icon.svg" alt="Micronurtrient Testing">
            <img id="gallery-icon-9" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Vibrant-Reference-Testing-overlay-icon.svg" alt="Vibrant Reference Testing For Lyme and Co-infections">
            <img id="gallery-icon-10" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Liquid-Blood-overlay-icon.svg" alt='Liquid (blood) Biopsies" For Cancer'>
            <img id="gallery-icon-11" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Biocept-overlay-icon.svg" alt="Biocept">
            <img id="gallery-icon-12" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/IvyGene-overlay-icon.svg" alt="IvyGene">
            <img id="gallery-icon-13" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Phlebotomy-overlay-icon.svg" alt="Phlebotomy - Blood Draw">
            <img id="gallery-icon-14" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Cryotherapy-overlay-icon.svg" alt="Cryotherapy">
            <img id="gallery-icon-15" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Red-Light-Therapy-overlay-icon.svg" alt="Red Light Therapy">
            <img id="gallery-icon-16" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Infrared-Sauna-overlay-icon.svg" alt="Infrared Sauna">
            <img id="gallery-icon-17" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Ozone-Therapy-overlay-icon.svg" alt="Ozone Therapy">
            <!-- <img id="gallery-icon-18" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Oral-Supplements-overlay-icon.svg" alt="Oral Supplements"> -->
          </div>
          <p class="text-on-hover">Food Inflammation Testing</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Micronurtrient Testing Overlay -->
  <div id="gallery-overlay-8" class="overlay">
    <span aria-hidden="true"><i class="fas fa-times closebtn"></i></span>
    <div class="overlay-content">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-1 col-md-10">
            <img class="micronurtrient_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Micronurtrient-Testing-overlay-icon.svg" alt="Micronurtrient-Testing-icon">
            <h3>Micronurtrient Testing</h3>
            <div class="overlay-description">
              <p>Our micronutrient test measures 31 vitamins, minerals, amino/fatty acids, antioxidants, and metabolites - and how they affect cellular function in person. Correlating micronutrient deficiencies not only slows aging and degenerative disease progression, it can also prevent as well as repair cellular dysfunction, and by extension, disease.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-icons-menu">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 overlay-icons-col">
            <img id="gallery-icon-1" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Botox-overlay-icon.svg" alt="Aesthetics">
            <img id="gallery-icon-2" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Mobile-Concierge-overlay-icon.svg" alt="Mobile Concierge">
            <img id="gallery-icon-3" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Weight-Loss-overlay-icon.svg" alt="Weight Loss Program">
            <img id="gallery-icon-4" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Longevity-Program-overlay-icon.svg" alt="Longevity Program">
            <img id="gallery-icon-5" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Hyperbaric-Oxygen-Therapy-overlay-icon.svg" alt="Hyperbaric Oxygen Therapy">
            <img id="gallery-icon-6" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Heavy-Metal-Testing-overlay-icon.svg" alt="Heavy Metal Testing">
            <img id="gallery-icon-7" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Food-Inflammation-Testing-overlay-icon.svg" alt="Food Inflammation Testing">
            <img class="overlay-icon-selected" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Micronurtrient-Testing-overlay-icon.svg" alt="Micronurtrient Testing">
            <img id="gallery-icon-9" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Vibrant-Reference-Testing-overlay-icon.svg" alt="Vibrant Reference Testing For Lyme and Co-infections">
            <img id="gallery-icon-10" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Liquid-Blood-overlay-icon.svg" alt='Liquid (blood) Biopsies" For Cancer'>
            <img id="gallery-icon-11" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Biocept-overlay-icon.svg" alt="Biocept">
            <img id="gallery-icon-12" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/IvyGene-overlay-icon.svg" alt="IvyGene">
            <img id="gallery-icon-13" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Phlebotomy-overlay-icon.svg" alt="Phlebotomy - Blood Draw">
            <img id="gallery-icon-14" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Cryotherapy-overlay-icon.svg" alt="Cryotherapy">
            <img id="gallery-icon-15" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Red-Light-Therapy-overlay-icon.svg" alt="Red Light Therapy">
            <img id="gallery-icon-16" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Infrared-Sauna-overlay-icon.svg" alt="Infrared Sauna">
            <img id="gallery-icon-17" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Ozone-Therapy-overlay-icon.svg" alt="Ozone Therapy">
            <!-- <img id="gallery-icon-18" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Oral-Supplements-overlay-icon.svg" alt="Oral Supplements"> -->
          </div>
          <p class="text-on-hover">Micronurtrient Testing</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Vibrant Reference Testing For Lyme and Co-infections Overlay -->
  <div id="gallery-overlay-9" class="overlay">
    <span aria-hidden="true"><i class="fas fa-times closebtn"></i></span>
    <div class="overlay-content">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-1 col-md-10">
            <img class="vibrant_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Vibrant-Reference-Testing-overlay-icon.svg" alt="Vibrant-Reference-Testing-icon">
            <h3>Vibrant Reference Testing<br> For Lyme and Co-infections</h3>
            <div class="overlay-description">
              <p>Lyme disease and other co-infections can be incredibly hard to diagnose. In some cases conventional testing can be negative, even when Lyme Disease or other co-infections are present.</p>
              <p>For individuals facing uncertainty in diagnosis, the “Vibrant“ reference laboratory test can offer a more sensitive means of testing. There have been cases where the Vibrant test was positive, when conventional testing was negative. This can help to direct proper care.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-icons-menu">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 overlay-icons-col">
            <img id="gallery-icon-1" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Botox-overlay-icon.svg" alt="Aesthetics">
            <img id="gallery-icon-2" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Mobile-Concierge-overlay-icon.svg" alt="Mobile Concierge">
            <img id="gallery-icon-3" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Weight-Loss-overlay-icon.svg" alt="Weight Loss Program">
            <img id="gallery-icon-4" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Longevity-Program-overlay-icon.svg" alt="Longevity Program">
            <img id="gallery-icon-5" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Hyperbaric-Oxygen-Therapy-overlay-icon.svg" alt="Hyperbaric Oxygen Therapy">
            <img id="gallery-icon-6" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Heavy-Metal-Testing-overlay-icon.svg" alt="Heavy Metal Testing">
            <img id="gallery-icon-7" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Food-Inflammation-Testing-overlay-icon.svg" alt="Food Inflammation Testing">
            <img id="gallery-icon-8" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Micronurtrient-Testing-overlay-icon.svg" alt="Micronurtrient Testing">
            <img class="overlay-icon-selected" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Vibrant-Reference-Testing-overlay-icon.svg" alt="Vibrant Reference Testing For Lyme and Co-infections">
            <img id="gallery-icon-10" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Liquid-Blood-overlay-icon.svg" alt='Liquid (blood) Biopsies" For Cancer'>
            <img id="gallery-icon-11" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Biocept-overlay-icon.svg" alt="Biocept">
            <img id="gallery-icon-12" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/IvyGene-overlay-icon.svg" alt="IvyGene">
            <img id="gallery-icon-13" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Phlebotomy-overlay-icon.svg" alt="Phlebotomy - Blood Draw">
            <img id="gallery-icon-14" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Cryotherapy-overlay-icon.svg" alt="Cryotherapy">
            <img id="gallery-icon-15" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Red-Light-Therapy-overlay-icon.svg" alt="Red Light Therapy">
            <img id="gallery-icon-16" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Infrared-Sauna-overlay-icon.svg" alt="Infrared Sauna">
            <img id="gallery-icon-17" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Ozone-Therapy-overlay-icon.svg" alt="Ozone Therapy">
            <!-- <img id="gallery-icon-18" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Oral-Supplements-overlay-icon.svg" alt="Oral Supplements"> -->
          </div>
          <p class="text-on-hover">Vibrant Reference Testing For Lyme and Co-infections</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Liquid (blood) Biopsies" For Cancer Overlay -->
  <div id="gallery-overlay-10" class="overlay">
    <span aria-hidden="true"><i class="fas fa-times closebtn"></i></span>
    <div class="overlay-content">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-1 col-md-10">
            <img class="liquid_blood_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Liquid-Blood-overlay-icon.svg" alt="Liquid-Blood-icon">
            <h3>Liquid (blood) Biopsies" For Cancer</h3>
            <div class="overlay-description">
              <p>Liquid biopsies are typically conducted with blood as the sample type, and are used to identify cancer biomarkers in circulating tumor DNA (ctDNA) or on circulating tumor cells (CTCs), which are the most commonly evaluated indicators or drivers of cancer development. Doctors may use liquid biopsies to help design cancer treatment plans, to evaluate how well treatment is working, or to determine if a prior cancer condition has recurred. The ability to take multiple samples of blood may help doctors understand what kind of molecular changes are taking place over time in a patient’s tumor.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-icons-menu">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 overlay-icons-col">
            <img id="gallery-icon-1" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Botox-overlay-icon.svg" alt="Aesthetics">
            <img id="gallery-icon-2" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Mobile-Concierge-overlay-icon.svg" alt="Mobile Concierge">
            <img id="gallery-icon-3" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Weight-Loss-overlay-icon.svg" alt="Weight Loss Program">
            <img id="gallery-icon-4" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Longevity-Program-overlay-icon.svg" alt="Longevity Program">
            <img id="gallery-icon-5" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Hyperbaric-Oxygen-Therapy-overlay-icon.svg" alt="Hyperbaric Oxygen Therapy">
            <img id="gallery-icon-6" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Heavy-Metal-Testing-overlay-icon.svg" alt="Heavy Metal Testing">
            <img id="gallery-icon-7" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Food-Inflammation-Testing-overlay-icon.svg" alt="Food Inflammation Testing">
            <img id="gallery-icon-8" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Micronurtrient-Testing-overlay-icon.svg" alt="Micronurtrient Testing">
            <img id="gallery-icon-9" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Vibrant-Reference-Testing-overlay-icon.svg" alt="Vibrant Reference Testing For Lyme and Co-infections">
            <img class="overlay-icon-selected" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Liquid-Blood-overlay-icon.svg" alt='Liquid (blood) Biopsies" For Cancer'>
            <img id="gallery-icon-11" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Biocept-overlay-icon.svg" alt="Biocept">
            <img id="gallery-icon-12" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/IvyGene-overlay-icon.svg" alt="IvyGene">
            <img id="gallery-icon-13" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Phlebotomy-overlay-icon.svg" alt="Phlebotomy - Blood Draw">
            <img id="gallery-icon-14" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Cryotherapy-overlay-icon.svg" alt="Cryotherapy">
            <img id="gallery-icon-15" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Red-Light-Therapy-overlay-icon.svg" alt="Red Light Therapy">
            <img id="gallery-icon-16" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Infrared-Sauna-overlay-icon.svg" alt="Infrared Sauna">
            <img id="gallery-icon-17" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Ozone-Therapy-overlay-icon.svg" alt="Ozone Therapy">
            <!-- <img id="gallery-icon-18" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Oral-Supplements-overlay-icon.svg" alt="Oral Supplements"> -->
          </div>
          <p class="text-on-hover">Liquid (blood) Biopsies" For Cancer</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Biocept Overlay -->
  <div id="gallery-overlay-11" class="overlay">
    <span aria-hidden="true"><i class="fas fa-times closebtn"></i></span>
    <div class="overlay-content">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-1 col-md-10">
            <img class="biocept_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Biocept-overlay-icon.svg" alt="Biocept-icon">
            <h3>Biocept</h3>
            <div class="overlay-description">
              <p>Biocept offers a series of “ blood biopsies“ that can be used to detect the presence of circulating tumor cells. This test is appropriate for individuals who have had cancer or are currently being treated for cancer. Identifying the amount of circulating tumor cells, complementary treatments can be aligned with conventional therapy to attempt to reduce the risk of cancer progression or relapse.</p>
              <p>This test is not approved as a screening tool for cancer, and does not replace conventional monitoring techniques for malignancy.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-icons-menu">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 overlay-icons-col">
            <img id="gallery-icon-1" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Botox-overlay-icon.svg" alt="Aesthetics">
            <img id="gallery-icon-2" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Mobile-Concierge-overlay-icon.svg" alt="Mobile Concierge">
            <img id="gallery-icon-3" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Weight-Loss-overlay-icon.svg" alt="Weight Loss Program">
            <img id="gallery-icon-4" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Longevity-Program-overlay-icon.svg" alt="Longevity Program">
            <img id="gallery-icon-5" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Hyperbaric-Oxygen-Therapy-overlay-icon.svg" alt="Hyperbaric Oxygen Therapy">
            <img id="gallery-icon-6" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Heavy-Metal-Testing-overlay-icon.svg" alt="Heavy Metal Testing">
            <img id="gallery-icon-7" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Food-Inflammation-Testing-overlay-icon.svg" alt="Food Inflammation Testing">
            <img id="gallery-icon-8" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Micronurtrient-Testing-overlay-icon.svg" alt="Micronurtrient Testing">
            <img id="gallery-icon-9" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Vibrant-Reference-Testing-overlay-icon.svg" alt="Vibrant Reference Testing For Lyme and Co-infections">
            <img id="gallery-icon-10" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Liquid-Blood-overlay-icon.svg" alt='Liquid (blood) Biopsies" For Cancer'>
            <img class="overlay-icon-selected" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Biocept-overlay-icon.svg" alt="Biocept">
            <img id="gallery-icon-12" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/IvyGene-overlay-icon.svg" alt="IvyGene">
            <img id="gallery-icon-13" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Phlebotomy-overlay-icon.svg" alt="Phlebotomy - Blood Draw">
            <img id="gallery-icon-14" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Cryotherapy-overlay-icon.svg" alt="Cryotherapy">
            <img id="gallery-icon-15" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Red-Light-Therapy-overlay-icon.svg" alt="Red Light Therapy">
            <img id="gallery-icon-16" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Infrared-Sauna-overlay-icon.svg" alt="Infrared Sauna">
            <img id="gallery-icon-17" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Ozone-Therapy-overlay-icon.svg" alt="Ozone Therapy">
            <!-- <img id="gallery-icon-18" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Oral-Supplements-overlay-icon.svg" alt="Oral Supplements"> -->
          </div>
          <p class="text-on-hover">Biocept</p>
        </div>
      </div>
    </div>
  </div>

  <!-- IvyGene Overlay -->
  <div id="gallery-overlay-12" class="overlay">
    <span aria-hidden="true"><i class="fas fa-times closebtn"></i></span>
    <div class="overlay-content">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-1 col-md-10">
            <img class="ivygene_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/IvyGene-overlay-icon.svg" alt="IvyGene-icon">
            <h3>IvyGene</h3>
            <div class="overlay-description">
              <p>The IvyGene test is a more sensitive means of evaluating for the presence of cancer somewhere in the body. It looks for A specific pattern of methylated DNA that is unique to cancer cells. Methylated DNA is easier to detect in the blood and circulating tumor cells, therefore this test may be more sensitive.</p>
              <p>It is currently approved for testing breast, colon, liver and lung cancer.</p>
              <p>This test has not been approved as a screening tool for people without cancer. It is used to monitor people who have a history of cancer, or people who are actively being treated for cancer.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-icons-menu">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 overlay-icons-col">
            <img id="gallery-icon-1" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Botox-overlay-icon.svg" alt="Aesthetics">
            <img id="gallery-icon-2" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Mobile-Concierge-overlay-icon.svg" alt="Mobile Concierge">
            <img id="gallery-icon-3" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Weight-Loss-overlay-icon.svg" alt="Weight Loss Program">
            <img id="gallery-icon-4" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Longevity-Program-overlay-icon.svg" alt="Longevity Program">
            <img id="gallery-icon-5" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Hyperbaric-Oxygen-Therapy-overlay-icon.svg" alt="Hyperbaric Oxygen Therapy">
            <img id="gallery-icon-6" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Heavy-Metal-Testing-overlay-icon.svg" alt="Heavy Metal Testing">
            <img id="gallery-icon-7" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Food-Inflammation-Testing-overlay-icon.svg" alt="Food Inflammation Testing">
            <img id="gallery-icon-8" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Micronurtrient-Testing-overlay-icon.svg" alt="Micronurtrient Testing">
            <img id="gallery-icon-9" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Vibrant-Reference-Testing-overlay-icon.svg" alt="Vibrant Reference Testing For Lyme and Co-infections">
            <img id="gallery-icon-10" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Liquid-Blood-overlay-icon.svg" alt='Liquid (blood) Biopsies" For Cancer'>
            <img id="gallery-icon-11" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Biocept-overlay-icon.svg" alt="Biocept">
            <img class="overlay-icon-selected" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/IvyGene-overlay-icon.svg" alt="IvyGene">
            <img id="gallery-icon-13" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Phlebotomy-overlay-icon.svg" alt="Phlebotomy - Blood Draw">
            <img id="gallery-icon-14" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Cryotherapy-overlay-icon.svg" alt="Cryotherapy">
            <img id="gallery-icon-15" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Red-Light-Therapy-overlay-icon.svg" alt="Red Light Therapy">
            <img id="gallery-icon-16" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Infrared-Sauna-overlay-icon.svg" alt="Infrared Sauna">
            <img id="gallery-icon-17" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Ozone-Therapy-overlay-icon.svg" alt="Ozone Therapy">
            <!-- <img id="gallery-icon-18" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Oral-Supplements-overlay-icon.svg" alt="Oral Supplements"> -->
          </div>
          <p class="text-on-hover">IvyGene</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Phlebotomy - Blood Draw Overlay -->
  <div id="gallery-overlay-13" class="overlay">
    <span aria-hidden="true"><i class="fas fa-times closebtn"></i></span>
    <div class="overlay-content">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-1 col-md-10">
            <img class="phlebotomy_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Phlebotomy-overlay-icon.svg" alt="Phlebotomy-icon">
            <h3>Phlebotomy - Blood Draw</h3>
            <div class="overlay-description">
              <p>Since many of the tests that we run require that the blood is drawn in a specific manner, we offer phlebotomy service at the IM DRIPBaR. Your blood will be drawn in the comfortable environment and all the proper steps will be taken to make sure it is properly delivered to the lab.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-icons-menu">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 overlay-icons-col">
            <img id="gallery-icon-1" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Botox-overlay-icon.svg" alt="Aesthetics">
            <img id="gallery-icon-2" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Mobile-Concierge-overlay-icon.svg" alt="Mobile Concierge">
            <img id="gallery-icon-3" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Weight-Loss-overlay-icon.svg" alt="Weight Loss Program">
            <img id="gallery-icon-4" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Longevity-Program-overlay-icon.svg" alt="Longevity Program">
            <img id="gallery-icon-5" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Hyperbaric-Oxygen-Therapy-overlay-icon.svg" alt="Hyperbaric Oxygen Therapy">
            <img id="gallery-icon-6" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Heavy-Metal-Testing-overlay-icon.svg" alt="Heavy Metal Testing">
            <img id="gallery-icon-7" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Food-Inflammation-Testing-overlay-icon.svg" alt="Food Inflammation Testing">
            <img id="gallery-icon-8" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Micronurtrient-Testing-overlay-icon.svg" alt="Micronurtrient Testing">
            <img id="gallery-icon-9" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Vibrant-Reference-Testing-overlay-icon.svg" alt="Vibrant Reference Testing For Lyme and Co-infections">
            <img id="gallery-icon-10" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Liquid-Blood-overlay-icon.svg" alt='Liquid (blood) Biopsies" For Cancer'>
            <img id="gallery-icon-11" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Biocept-overlay-icon.svg" alt="Biocept">
            <img id="gallery-icon-12" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/IvyGene-overlay-icon.svg" alt="IvyGene">
            <img class="overlay-icon-selected" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Phlebotomy-overlay-icon.svg" alt="Phlebotomy - Blood Draw">
            <img id="gallery-icon-14" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Cryotherapy-overlay-icon.svg" alt="Cryotherapy">
            <img id="gallery-icon-15" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Red-Light-Therapy-overlay-icon.svg" alt="Red Light Therapy">
            <img id="gallery-icon-16" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Infrared-Sauna-overlay-icon.svg" alt="Infrared Sauna">
            <img id="gallery-icon-17" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Ozone-Therapy-overlay-icon.svg" alt="Ozone Therapy">
            <!-- <img id="gallery-icon-18" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Oral-Supplements-overlay-icon.svg" alt="Oral Supplements"> -->
          </div>
          <p class="text-on-hover">Phlebotomy - Blood Draw</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Cryotherapy Overlay -->
  <div id="gallery-overlay-14" class="overlay">
    <span aria-hidden="true"><i class="fas fa-times closebtn"></i></span>
    <div class="overlay-content">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-1 col-md-10">
            <img class="cryotherapy_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Cryotherapy-overlay-icon.svg" alt="Cryotherapy-icon">
            <h3>Cryotherapy</h3>
            <div class="overlay-description">
              <p>Whole body cryotherapy involves spending several minutes at super low temperatures in an enclosed chamber. The technique originated in Japan in the 1970s and was used primarily for people with arthritis. Whole body cryotherapy has a capacity to reduce inflammation throughout the body. Think of it like applying an ice pack to a sprained knee, only the entire body is getting treated at once.</p>
              <p>The reduction of inflammation has been correlated with significant reductions in muscle pain, especially after intense athletic training. Athletes have used whole body therapy to help them recover from intense cycles of training. The inflammation reduction has also been used by people with chronic pain syndromes from fibromyalgia, to various types of arthritis. For others, they report a generalized revitalization of joints, muscles and even mental clarity.</p>
              <p>When administered at THE DRIPBaR,  you are reassured that you will be guided toward the best application of its use, and it will be delivered in an environment with professional nursing staff on site,  thereby affording you an extremely high level of safety.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-icons-menu">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 overlay-icons-col">
            <img id="gallery-icon-1" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Botox-overlay-icon.svg" alt="Aesthetics">
            <img id="gallery-icon-2" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Mobile-Concierge-overlay-icon.svg" alt="Mobile Concierge">
            <img id="gallery-icon-3" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Weight-Loss-overlay-icon.svg" alt="Weight Loss Program">
            <img id="gallery-icon-4" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Longevity-Program-overlay-icon.svg" alt="Longevity Program">
            <img id="gallery-icon-5" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Hyperbaric-Oxygen-Therapy-overlay-icon.svg" alt="Hyperbaric Oxygen Therapy">
            <img id="gallery-icon-6" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Heavy-Metal-Testing-overlay-icon.svg" alt="Heavy Metal Testing">
            <img id="gallery-icon-7" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Food-Inflammation-Testing-overlay-icon.svg" alt="Food Inflammation Testing">
            <img id="gallery-icon-8" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Micronurtrient-Testing-overlay-icon.svg" alt="Micronurtrient Testing">
            <img id="gallery-icon-9" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Vibrant-Reference-Testing-overlay-icon.svg" alt="Vibrant Reference Testing For Lyme and Co-infections">
            <img id="gallery-icon-10" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Liquid-Blood-overlay-icon.svg" alt='Liquid (blood) Biopsies" For Cancer'>
            <img id="gallery-icon-11" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Biocept-overlay-icon.svg" alt="Biocept">
            <img id="gallery-icon-12" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/IvyGene-overlay-icon.svg" alt="IvyGene">
            <img id="gallery-icon-13" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Phlebotomy-overlay-icon.svg" alt="Phlebotomy - Blood Draw">
            <img class="overlay-icon-selected" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Cryotherapy-overlay-icon.svg" alt="Cryotherapy">
            <img id="gallery-icon-15" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Red-Light-Therapy-overlay-icon.svg" alt="Red Light Therapy">
            <img id="gallery-icon-16" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Infrared-Sauna-overlay-icon.svg" alt="Infrared Sauna">
            <img id="gallery-icon-17" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Ozone-Therapy-overlay-icon.svg" alt="Ozone Therapy">
            <!-- <img id="gallery-icon-18" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Oral-Supplements-overlay-icon.svg" alt="Oral Supplements"> -->
          </div>
          <p class="text-on-hover">Cryotherapy</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Red Light Therapy Overlay -->
  <div id="gallery-overlay-15" class="overlay">
    <span aria-hidden="true"><i class="fas fa-times closebtn"></i></span>
    <div class="overlay-content">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-1 col-md-10">
            <img class="red_light_therapy_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Red-Light-Therapy-overlay-icon.svg" alt="Red-Light-Therapy-icon">
            <h3>Red Light Therapy</h3>
            <div class="overlay-description">
              <p>Red light therapy, also called "photobiomodulation" (PBM), uses light emitting diodes to emit red light and near infrared light. Near infrared light is light that cannot be seen, it is at a wavelength just beneath human recognition. Light within this wavelength has the ability to stimulate the mitochondria inside of cells to produce more energy. Improved function of mitochondria is one of the mechanisms of action thought to provide the benefit from PBM. It's primary use has been to improve skin and facial features. It can help to reduce uneven color and fine lines, it can improve the texture of the skin as well. PBM has also been used to help treat severe forms of acne. The anti-inflammatory effects noted on the skin have also been applied to other conditions including joint pain from arthritis. More recent studies have been looking into its impact on neuro-regeneration (to support memory, and recover from other conditions caused by nerve damage).</p>
              <p>What makes this particular treatment most appealing is its extraordinary safety. Near infrared light is completely natural and has none of the dangerous ultraviolet wavelengths (UV) that can cause cancer and skin damage. Despite its enormous safety, the details of its application regarding the dose, the duration of treatment, and the frequency of treatment, are important to get the best results.</p>
              <p>In addition, at THE DRIPBaR we are capable of pairing red light therapy with other mitochondrial stimulating infusions such as "The Executive,” thus supporting mitochondrial health and its anti-aging benefits from the outside in, and from the inside out.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-icons-menu">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 overlay-icons-col">
            <img id="gallery-icon-1" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Botox-overlay-icon.svg" alt="Aesthetics">
            <img id="gallery-icon-2" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Mobile-Concierge-overlay-icon.svg" alt="Mobile Concierge">
            <img id="gallery-icon-3" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Weight-Loss-overlay-icon.svg" alt="Weight Loss Program">
            <img id="gallery-icon-4" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Longevity-Program-overlay-icon.svg" alt="Longevity Program">
            <img id="gallery-icon-5" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Hyperbaric-Oxygen-Therapy-overlay-icon.svg" alt="Hyperbaric Oxygen Therapy">
            <img id="gallery-icon-6" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Heavy-Metal-Testing-overlay-icon.svg" alt="Heavy Metal Testing">
            <img id="gallery-icon-7" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Food-Inflammation-Testing-overlay-icon.svg" alt="Food Inflammation Testing">
            <img id="gallery-icon-8" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Micronurtrient-Testing-overlay-icon.svg" alt="Micronurtrient Testing">
            <img id="gallery-icon-9" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Vibrant-Reference-Testing-overlay-icon.svg" alt="Vibrant Reference Testing For Lyme and Co-infections">
            <img id="gallery-icon-10" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Liquid-Blood-overlay-icon.svg" alt='Liquid (blood) Biopsies" For Cancer'>
            <img id="gallery-icon-11" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Biocept-overlay-icon.svg" alt="Biocept">
            <img id="gallery-icon-12" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/IvyGene-overlay-icon.svg" alt="IvyGene">
            <img id="gallery-icon-13" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Phlebotomy-overlay-icon.svg" alt="Phlebotomy - Blood Draw">
            <img id="gallery-icon-14" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Cryotherapy-overlay-icon.svg" alt="Cryotherapy">
            <img class="overlay-icon-selected" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Red-Light-Therapy-overlay-icon.svg" alt="Red Light Therapy">
            <img id="gallery-icon-16" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Infrared-Sauna-overlay-icon.svg" alt="Infrared Sauna">
            <img id="gallery-icon-17" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Ozone-Therapy-overlay-icon.svg" alt="Ozone Therapy">
            <!-- <img id="gallery-icon-18" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Oral-Supplements-overlay-icon.svg" alt="Oral Supplements"> -->
          </div>
          <p class="text-on-hover">Red Light Therapy</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Infrared Sauna Overlay -->
  <div id="gallery-overlay-16" class="overlay">
    <span aria-hidden="true"><i class="fas fa-times closebtn"></i></span>
    <div class="overlay-content">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-1 col-md-10">
            <img class="infrared_sauna_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Infrared-Sauna-overlay-icon.svg" alt="Infrared-Sauna-icon">
            <h3>Infrared Sauna</h3>
            <div class="overlay-description">
              <p>Saunas are extensively used in Scandinavian countries, and in Japan as a routine part of their health support. Evidence has supported their benefit in a wide range of cardiovascular conditions including heart failure and peripheral vascular disease. They have also been used extensively in autoimmune conditions including seasonal allergies, rheumatoid arthritis, Sjogren's syndrome and others.</p>
              <p>Saunas are a powerful means of achieving "depuration" which refers to purification and cleansing that takes place when the sweat produced by infrared pulls accumulated toxins out of the body. The toxins removed include heavy metals which are contributors to heart disease and cancer risk. In addition, Infrared has also been shown to have helped individuals with fibromyalgia and other pain syndromes.</p>
              <p>The far infrared wavelength produces gentle radiant heat which can penetrate 1.5 inches beneath the skin. This has a capacity not only to generate a significant amount of toxic-reducing sweat, but it can also safely raise body temperature. Increased body temperature helps the immune system to function better.</p>
              <p>A Sauna treatment is a wonderful and safe add-on to any of the other treatments at THE DRIPBaR. It can complement heavy-metal reduction. The combination of toxin reduction, and increase in body temperature is complementary in cancer support care. It has also been used to add benefit to people with chronic fatigue and muscle pain syndromes.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-icons-menu">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 overlay-icons-col">
            <img id="gallery-icon-1" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Botox-overlay-icon.svg" alt="Aesthetics">
            <img id="gallery-icon-2" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Mobile-Concierge-overlay-icon.svg" alt="Mobile Concierge">
            <img id="gallery-icon-3" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Weight-Loss-overlay-icon.svg" alt="Weight Loss Program">
            <img id="gallery-icon-4" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Longevity-Program-overlay-icon.svg" alt="Longevity Program">
            <img id="gallery-icon-5" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Hyperbaric-Oxygen-Therapy-overlay-icon.svg" alt="Hyperbaric Oxygen Therapy">
            <img id="gallery-icon-6" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Heavy-Metal-Testing-overlay-icon.svg" alt="Heavy Metal Testing">
            <img id="gallery-icon-7" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Food-Inflammation-Testing-overlay-icon.svg" alt="Food Inflammation Testing">
            <img id="gallery-icon-8" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Micronurtrient-Testing-overlay-icon.svg" alt="Micronurtrient Testing">
            <img id="gallery-icon-9" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Vibrant-Reference-Testing-overlay-icon.svg" alt="Vibrant Reference Testing For Lyme and Co-infections">
            <img id="gallery-icon-10" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Liquid-Blood-overlay-icon.svg" alt='Liquid (blood) Biopsies" For Cancer'>
            <img id="gallery-icon-11" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Biocept-overlay-icon.svg" alt="Biocept">
            <img id="gallery-icon-12" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/IvyGene-overlay-icon.svg" alt="IvyGene">
            <img id="gallery-icon-13" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Phlebotomy-overlay-icon.svg" alt="Phlebotomy - Blood Draw">
            <img id="gallery-icon-14" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Cryotherapy-overlay-icon.svg" alt="Cryotherapy">
            <img id="gallery-icon-15" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Red-Light-Therapy-overlay-icon.svg" alt="Red Light Therapy">
            <img class="overlay-icon-selected" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Infrared-Sauna-overlay-icon.svg" alt="Infrared Sauna">
            <img id="gallery-icon-17" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Ozone-Therapy-overlay-icon.svg" alt="Ozone Therapy">
            <!-- <img id="gallery-icon-18" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Oral-Supplements-overlay-icon.svg" alt="Oral Supplements"> -->
          </div>
          <p class="text-on-hover">Infrared Sauna</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Ozone Therapy Overlay -->
  <div id="gallery-overlay-17" class="overlay">
    <span aria-hidden="true"><i class="fas fa-times closebtn"></i></span>
    <div class="overlay-content">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-1 col-md-10">
            <img class="ozone_therapy_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Ozone-Therapy-overlay-icon.svg" alt="Ozone-Therapy-icon">
            <h3>Ozone Therapy</h3>
            <div class="overlay-description">
              <p>Ozone therapy has been used for many years primarily because of its value in activating various viruses and bacteria. It is also being used in some cases to help people in their fight against cancer.</p>
              <p>Ozone therapy has emerged as an option in addressing difficult to treat infections, especially in an era with growing antibiotic resistance. Furthermore, since ozone is a germicidal, it can kill bacteria without exposing individuals to the same risk profile is antibiotics.</p>
              <p>Positive results with ozone therapy have been reported for patients attempting to recover from chronic or persistent Lyme disease. As a naturally occurring substance that works with your body, ozone therapy aligns with the philosophy that we promote at THE DRIPBaR of supporting the body's innate healing abilities.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-icons-menu">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 overlay-icons-col">
            <img id="gallery-icon-1" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Botox-overlay-icon.svg" alt="Aesthetics">
            <img id="gallery-icon-2" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Mobile-Concierge-overlay-icon.svg" alt="Mobile Concierge">
            <img id="gallery-icon-3" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Weight-Loss-overlay-icon.svg" alt="Weight Loss Program">
            <img id="gallery-icon-4" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Longevity-Program-overlay-icon.svg" alt="Longevity Program">
            <img id="gallery-icon-5" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Hyperbaric-Oxygen-Therapy-overlay-icon.svg" alt="Hyperbaric Oxygen Therapy">
            <img id="gallery-icon-6" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Heavy-Metal-Testing-overlay-icon.svg" alt="Heavy Metal Testing">
            <img id="gallery-icon-7" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Food-Inflammation-Testing-overlay-icon.svg" alt="Food Inflammation Testing">
            <img id="gallery-icon-8" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Micronurtrient-Testing-overlay-icon.svg" alt="Micronurtrient Testing">
            <img id="gallery-icon-9" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Vibrant-Reference-Testing-overlay-icon.svg" alt="Vibrant Reference Testing For Lyme and Co-infections">
            <img id="gallery-icon-10" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Liquid-Blood-overlay-icon.svg" alt='Liquid (blood) Biopsies" For Cancer'>
            <img id="gallery-icon-11" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Biocept-overlay-icon.svg" alt="Biocept">
            <img id="gallery-icon-12" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/IvyGene-overlay-icon.svg" alt="IvyGene">
            <img id="gallery-icon-13" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Phlebotomy-overlay-icon.svg" alt="Phlebotomy - Blood Draw">
            <img id="gallery-icon-14" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Cryotherapy-overlay-icon.svg" alt="Cryotherapy">
            <img id="gallery-icon-15" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Red-Light-Therapy-overlay-icon.svg" alt="Red Light Therapy">
            <img id="gallery-icon-16" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Infrared-Sauna-overlay-icon.svg" alt="Infrared Sauna">
            <img class="overlay-icon-selected" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Ozone-Therapy-overlay-icon.svg" alt="Ozone Therapy">
            <!-- <img id="gallery-icon-18" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Oral-Supplements-overlay-icon.svg" alt="Oral Supplements"> -->
          </div>
          <p class="text-on-hover">Ozone Therapy</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Oral Supplements Overlay -->
  <div id="gallery-overlay-18" class="overlay">
    <span aria-hidden="true"><i class="fas fa-times closebtn"></i></span>
    <div class="overlay-content">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-1 col-md-10">
            <img class="oral_supplements_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Oral-Supplements-overlay-icon.svg" alt="Ozone-Therapy-icon">
            <h3>Oral Supplements</h3>
            <div class="overlay-description">
              <p>At THE DRIPBaR we have taken the overwhelming confusion out of supplement selection. Each infusion has a companion “supplement box” that contains the core and essential supplements identified by our research and development staff to support the benefit of the infusion. Each box delivers 30 days of simple, easy to use supplements.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-icons-menu">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 overlay-icons-col">
            <img id="gallery-icon-1" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Botox-overlay-icon.svg" alt="Aesthetics">
            <img id="gallery-icon-2" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Mobile-Concierge-overlay-icon.svg" alt="Mobile Concierge">
            <img id="gallery-icon-3" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Weight-Loss-overlay-icon.svg" alt="Weight Loss Program">
            <img id="gallery-icon-4" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Longevity-Program-overlay-icon.svg" alt="Longevity Program">
            <img id="gallery-icon-5" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Hyperbaric-Oxygen-Therapy-overlay-icon.svg" alt="Hyperbaric Oxygen Therapy">
            <img id="gallery-icon-6" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Heavy-Metal-Testing-overlay-icon.svg" alt="Heavy Metal Testing">
            <img id="gallery-icon-7" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Food-Inflammation-Testing-overlay-icon.svg" alt="Food Inflammation Testing">
            <img id="gallery-icon-8" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Micronurtrient-Testing-overlay-icon.svg" alt="Micronurtrient Testing">
            <img id="gallery-icon-9" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Vibrant-Reference-Testing-overlay-icon.svg" alt="Vibrant Reference Testing For Lyme and Co-infections">
            <img id="gallery-icon-10" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Liquid-Blood-overlay-icon.svg" alt='Liquid (blood) Biopsies" For Cancer'>
            <img id="gallery-icon-11" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Biocept-overlay-icon.svg" alt="Biocept">
            <img id="gallery-icon-12" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/IvyGene-overlay-icon.svg" alt="IvyGene">
            <img id="gallery-icon-13" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Phlebotomy-overlay-icon.svg" alt="Phlebotomy - Blood Draw">
            <img id="gallery-icon-14" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Cryotherapy-overlay-icon.svg" alt="Cryotherapy">
            <img id="gallery-icon-15" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Red-Light-Therapy-overlay-icon.svg" alt="Red Light Therapy">
            <img id="gallery-icon-16" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Infrared-Sauna-overlay-icon.svg" alt="Infrared Sauna">
            <img id="gallery-icon-17" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Ozone-Therapy-overlay-icon.svg" alt="Ozone Therapy">
            <img class="overlay-icon-selected" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/additional_services/Oral-Supplements-overlay-icon.svg" alt="Oral Supplements">
          </div>
          <p class="text-on-hover">Oral Supplements</p>
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