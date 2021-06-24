<?php /* Template Name: IV Health Support Drips */ ?>
<?php get_header(); ?>

<style>
.icon_support_drips {
  width: 92px;
}

.chelation_icon {
  width:75px;
}

.mistletoe_icon {
  width: 78px;
}

.icons_support_drips_main {
  width: 82px;
}

.alpha_icon {
  width: 70px;
}

.chelation_icon_main {
  width: 70px;
}

.milestone_icon_main {
  width: 63px;
}

</style>

<?php
if (have_posts()) : 
  while (have_posts()) : the_post(); ?>
    <?php //the_content(); ?>

<div class="health-support-drips">
  <div class="extra-space-top"></div>
  <div class="container w_1450 page-header-container">
    <div class="row">
      <div class="col-md-12">
        <h1><?php the_title(); ?></h1>
        <p>
        <?php the_field('sub_title'); ?>  
        </p>
        <div class="btn-links-container">
          <ul>
            <li id="btn-li-one"><a class="btn header-btn-zoom" href="/iv-lifestyle-drips/">IV Lifestyle Drips</a></li>
            <li id="btn-li-two"><a class="btn" href="/iv-health-support-drips/">IV Health Support Drips</a></li>
            <li id="btn-li-three"><a class="btn header-btn-zoom" href="/im-quick-shots/">IM Quick Shots</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="gallery-container hide-on-mobile">
    <div class="gallery">
      <figure id="gallery-item-1" class="gallery__item gallery__item--1 gallery-item-open">
          <img src="/wp-content/uploads/2020/06/High-C-min.png" alt="High C" class="gallery__img">
          <img class="icons_support_drips_main" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/health_support_drips/High-C-overlay-icon.svg" alt="High-C-icon">
          <p>High C</p>
      </figure>
      <figure id="gallery-item-2" class="gallery__item gallery__item--2 gallery-item-open">
          <img src="/wp-content/uploads/2020/06/Alpha-Lipoic-Acid-min.png" alt="Alpha Lipoic Acid" class="gallery__img">
          <img class="icons_support_drips_main alpha_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/health_support_drips/Alpha-Lipoic-Acid-overlay-icon.svg" alt="Alpha-Lipoic-Acid-icon">
          <p>Alpha Lipoic Acid</p>
      </figure>
      <figure id="gallery-item-3" class="gallery__item gallery__item--3 gallery-item-open">
          <img src="/wp-content/uploads/2020/06/Mistletoe-min.png" alt="Mistletoe" class="gallery__img">
          <img class="milestone_icon_main" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/health_support_drips/Mistletoe-overlay-icon.svg" alt="Mistletoe-icon">
          <p>Mistletoe</p>
      </figure>
      <figure id="gallery-item-4" class="gallery__item gallery__item--4 gallery-item-open">
          <img src="/wp-content/uploads/2020/06/Chelation-min.png" alt="Chelation" class="gallery__img">
          <img class="icons_support_drips_main chelation_icon_main" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/health_support_drips/Chelation-overlay-icon.svg" alt="Chelation-icon">
          <p>Chelation</p>
      </figure>
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
                    <img src="/wp-content/uploads/2020/06/High-C-min.png" alt="High C" class="gallery__img">
                    <img src="/wp-content/uploads/2020/06/High-C-icon.png" alt="High-C-icon">
                    <p>High C</p>
                </figure>
                <figure id="gallery-item-2" class="gallery__item gallery__item--2 gallery-item-open">
                    <img src="/wp-content/uploads/2020/06/Alpha-Lipoic-Acid-min.png" alt="Alpha Lipoic Acid" class="gallery__img">
                    <img src="/wp-content/uploads/2020/06/Alpha-Lipoic-Acid-icon.png" alt="Alpha-Lipoic-Acid-icon">
                    <p>Alpha Lipoic Acid</p>
                </figure>
                <figure id="gallery-item-3" class="gallery__item gallery__item--3 gallery-item-open">
                    <img src="/wp-content/uploads/2020/06/Mistletoe-min.png" alt="Mistletoe" class="gallery__img">
                    <img src="/wp-content/uploads/2020/06/Mistletoe-icon.png" alt="Mistletoe-icon">
                    <p>Mistletoe</p>
                </figure>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="gallery-container">
              <div class="gallery">
                <figure id="gallery-item-4" class="gallery__item gallery__item--4 gallery-item-open">
                    <img src="/wp-content/uploads/2020/06/Chelation-min.png" alt="Chelation" class="gallery__img">
                    <img src="/wp-content/uploads/2020/06/Chelation-icon.png" alt="Chelation-icon">
                    <p>Chelation</p>
                </figure>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="health-support-drips-overlays">
  <!-- High C Overlay -->
  <div id="gallery-overlay-1" class="overlay">
    <span aria-hidden="true"><i class="fas fa-times closebtn"></i></span>
    <div class="overlay-content">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-1 col-md-10">
            <img class="icon_support_drips" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/health_support_drips/High-C-overlay-icon.svg" alt="High-C-icon">
            <h3>High C</h3>
            <div class="overlay-description">
              <p>If you have ever had cancer, or if you are currently fighting cancer, super doses of vitamin C delivered through the vein may help you. Not only has high doses of vitamin c been shown to kill cancer cells, but it can also reduce the side effects of chemotherapy. In addition to helping support patients who were actively fighting cancer, many of our patients choose to make monthly infusions part of their approach to help prevent cancer from returning.</p>
              <p>We advocate our High Dose IV Vitamin C therapies in addition to most traditional cancer treatment protocols. The growing body of research surrounding high-dose intravenous vitamin C continues to lend supportive evidence regarding its potential for benefit, and its safety.</p>
              <p>In the 1970s, Dr. Linus Pauling – the only person to ever be awarded two unshared Nobel Prizes – began to examine the potential use of Vitamin C in the treatment of cancer.  Starting in 1974, researchers inspired by the theories of Dr. Pauling published clinical trials of high-dose intravenous vitamin C in advanced human cancer.  The observed patients had longer than expected lifespan when compared to case controls, and when compared to expected norms for their disease.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-icons-menu">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 overlay-icons-col">
            <img class="overlay-icon-selected" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/health_support_drips/High-C-overlay-icon.svg" alt="High C">
            <img id="gallery-icon-2" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/health_support_drips/Alpha-Lipoic-Acid-overlay-icon.svg" alt="Alpha Lipoic Acid (ALA)">
            <img id="gallery-icon-4" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/health_support_drips/Chelation-overlay-icon.svg" alt="Chelation">
            <img id="gallery-icon-3" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/health_support_drips/Mistletoe-overlay-icon.svg" alt="Mistletoe">
          </div>
          <p class="text-on-hover">High C</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Alpha Lipoic Acid Overlay -->
  <div id="gallery-overlay-2" class="overlay">
    <span aria-hidden="true"><i class="fas fa-times closebtn"></i></span>
    <div class="overlay-content">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-1 col-md-10">
            <img class="icon_support_drips" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/health_support_drips/Alpha-Lipoic-Acid-overlay-icon.svg" alt="Alpha-Lipoic-Acid-icon">
            <h3>Alpha Lipoic Acid (ALA)</h3>
            <div class="overlay-description">
              <p>Whether it’s fighting cancer, chronic liver disease, reducing neuropathy, or helping in Alzheimer’s disease, there is a lot to like about ALA. This is a naturally occurring antioxidant present in every cell of the body. In addition to its broad therapeutic value, it has an impressive record of safety.</p>
              <p>When used intravenously ALA has a rapid onset of action that has been shown to be capable of killing tumor cells.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-icons-menu">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 overlay-icons-col">
            <img id="gallery-icon-1" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/health_support_drips/High-C-overlay-icon.svg" alt="High C">
            <img class="overlay-icon-selected" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/health_support_drips/Alpha-Lipoic-Acid-overlay-icon.svg" alt="Alpha Lipoic Acid (ALA)">
            <img id="gallery-icon-4" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/health_support_drips/Chelation-overlay-icon.svg" alt="Chelation">
            <img id="gallery-icon-3" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/health_support_drips/Mistletoe-overlay-icon.svg" alt="Mistletoe">
          </div>
          <p class="text-on-hover">Alpha Lipoic Acid (ALA)</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Mistletoe Overlay -->
  <div id="gallery-overlay-3" class="overlay">
    <span aria-hidden="true"><i class="fas fa-times closebtn"></i></span>
    <div class="overlay-content">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-1 col-md-10">
            <img class="icon_support_drips mistletoe_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/health_support_drips/Mistletoe-overlay-icon.svg" alt="Mistletoe-icon">
            <h3>Mistletoe</h3>
            <div class="overlay-description">
              <p>When you’re fighting cancer, do not leave any weapons in reserve. Mistletoe is one of the most widely used complementary treatments in Europe, but the details of its use can be complicated. We will help guide you toward the right form, and dose to help you get the best result.</p>
              <p>Treatment can be administered either intravenously, or subcutaneously thereby making it possible to self-treat at home in many cases. At THE DRIPBaR we frequently combine Mistletoe with high dose vitamin C.</p>
              <p>In most cases, both of these complementary cancer treatments can be used at the same time as chemotherapy, or radiation therapy. In many cases these very well tolerated treatments can be used long-term to prevent cancer relapse.</p>
              <p>Note; Mistletoe has not been approved by the FDA for treatment of any disease. Although there are studies showing favorable impact, there is no conclusive evidence that Mistletoe therapy can delay progression of cancer, or increased length of life. Mistletoe is not a replacement for standard cancer therapy.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-icons-menu">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 overlay-icons-col">
            <img id="gallery-icon-1" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/health_support_drips/High-C-overlay-icon.svg" alt="High C">
            <img id="gallery-icon-2" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/health_support_drips/Alpha-Lipoic-Acid-overlay-icon.svg" alt="Alpha Lipoic Acid (ALA)">
            <img id="gallery-icon-4" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/health_support_drips/Chelation-overlay-icon.svg" alt="Chelation">
            <img class="overlay-icon-selected" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/health_support_drips/Mistletoe-overlay-icon.svg" alt="Mistletoe">
          </div>
          <p class="text-on-hover">Mistletoe</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Chelation Overlay -->
  <div id="gallery-overlay-4" class="overlay">
    <span aria-hidden="true"><i class="fas fa-times closebtn"></i></span>
    <div class="overlay-content">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-1 col-md-10">
            <img class="icon_support_drips chelation_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/health_support_drips/Chelation-overlay-icon.svg" alt="Chelation-icon">
            <h3>Chelation</h3>
            <div class="overlay-description">
              <p>To live your longest and healthiest life, you must avoid the “big three.” I’m referring to cardiovascular disease, cancer, and Alzheimer’s.  We would like to introduce you to Chelation therapy, your new best friend that can help you to avoid all three.</p>
              <p>Chelation therapy is a mixture of high-dose vitamin C, B vitamins, and EDTA. The mixture has been around for decades and has been used by clinicians in hundreds of thousands of cases to help patients with a wide array of conditions. Some of its benefits include removal of toxic heavy metals from the body, prevent heart disease (TACT Trial to Assess Chelation Therapy ), Peripheral vascular disease (PVD), and Brain preservation.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-icons-menu">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 overlay-icons-col">
            <img id="gallery-icon-1" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/health_support_drips/High-C-overlay-icon.svg" alt="High C">
            <img id="gallery-icon-2" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/health_support_drips/Alpha-Lipoic-Acid-overlay-icon.svg" alt="Alpha Lipoic Acid (ALA)">
            <img class="overlay-icon-selected" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/health_support_drips/Chelation-overlay-icon.svg" alt="Chelation">
            <img id="gallery-icon-3" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/health_support_drips/Mistletoe-overlay-icon.svg" alt="Mistletoe">
          </div>
          <p class="text-on-hover">Chelation</p>
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