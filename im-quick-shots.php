<?php /* Template Name: IM Quick Shots */ ?>
<?php get_header(); ?>

<?php
if (have_posts()) : 
  while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>

    <style>
      .icon_overlay_top{
        width:68px;
      }

      .icons_quick_shot{
        width:60px;
      }

      .im_energizer_icon{
        width: 87px;
      }

      .img_super_charger_icon{
        width: 70px;
      }
    </style>

<div class="im-quick-shots">
  <div class="extra-space-top"></div>
  <div class="container w_1450 page-header-container">
    <div class="row">
      <div class="col-md-12">
        <h1><?php the_title(); ?></h1>
        <p>Don't have time for a full IV vitamin infusion but looking for the benefit? Give your body a boost in just five minutes!</p>
        <div class="btn-links-container">
          <ul>
            <li id="btn-li-one"><a class="btn header-btn-zoom" href="/iv-lifestyle-drips/">IV Lifestyle Drips</a></li>
            <li id="btn-li-two"><a class="btn header-btn-zoom" href="/iv-health-support-drips/">IV Health Support Drips</a></li>
            <li id="btn-li-three"><a class="btn" href="/im-quick-shots/">IM Quick Shots</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="gallery-container hide-on-mobile">
    <div class="gallery">
      <figure id="gallery-item-1" class="gallery__item gallery__item--1 gallery-item-open">
          <img src="/wp-content/uploads/2020/06/IM-Energized-min.png" alt="IM Energized" class="gallery__img">
          <img class="icons_quick_shot im_energizer_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Energized-overlay-icon.svg" alt="IM-Energized-icon">
          <p>IM Energized</p>
      </figure>
      <figure id="gallery-item-2" class="gallery__item gallery__item--2 gallery-item-open">
          <img src="/wp-content/uploads/2020/06/IM-Super-Charged-min.png" alt="IM Super Charged" class="gallery__img">
          <img class="icons_quick_shot img_super_charger_icon"  src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Super-Charged-overlay-icon.svg" alt="IM-Super-Charged-icon">
          <p>IM Super Charged</p>
      </figure>
      <figure id="gallery-item-3" class="gallery__item gallery__item--3 gallery-item-open">
          <img src="/wp-content/uploads/2020/06/IM-Shielded-min.png" alt="IM Shielded" class="gallery__img">
          <img class="icons_quick_shot" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Shielded-overlay-icon.svg" alt="IM-Shielded-icon">
          <p>IM Shielded</p>
      </figure>
      <figure id="gallery-item-4" class="gallery__item gallery__item--4 gallery-item-open">
          <img src="/wp-content/uploads/2020/06/IM-Glowing-min.png" alt="IM Glowing" class="gallery__img">
          <img class="icons_quick_shot" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Glowing-overlay-icon.svg" alt="IM-Glowing-icon">
          <p>IM Glowing</p>
      </figure>
      <figure id="gallery-item-5" class="gallery__item gallery__item--5 gallery-item-open">
          <img src="/wp-content/uploads/2020/06/IM-Detoxed-min.png" alt="IM Detoxed" class="gallery__img">
          <img class="icons_quick_shot" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Detoxed-overlay-icon.svg" alt="IM-Detoxed-icon">
          <p>IM Detoxed</p>
      </figure>
      <figure id="gallery-item-6" class="gallery__item gallery__item--6 gallery-item-open">
          <img src="/wp-content/uploads/2020/06/IM-Strong-min.png" alt="IM Strong" class="gallery__img">
          <img class="icons_quick_shot" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Strong-overlay-icon.svg" alt="IM-Strong-icon">
          <p>IM Strong</p>
      </figure>
      <figure id="gallery-item-7" class="gallery__item gallery__item--7 gallery-item-open">
          <img src="/wp-content/uploads/2020/06/IM-Lean-min.png" alt="IM Lean" class="gallery__img">
          <img class="icons_quick_shot" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Lean-overlay-icon.svg" alt="IM-Lean-icon">
          <p>IM Lean</p>
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
                    <img src="/wp-content/uploads/2020/06/IM-Energized-min.png" alt="IM Energized" class="gallery__img">
                    <img class="icons_quick_shot im_energizer_icon" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Energized-overlay-icon.svg" alt="IM-Energized-icon">
                    <p>IM Energized</p>
                </figure>
                <figure id="gallery-item-2" class="gallery__item gallery__item--2 gallery-item-open">
                    <img src="/wp-content/uploads/2020/06/IM-Super-Charged-min.png" alt="IM Super Charged" class="gallery__img">
                    <img class="icons_quick_shot img_super_charger_icon"  src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Super-Charged-overlay-icon.svg" alt="IM-Super-Charged-icon">
                    <p>IM Super Charged</p>
                </figure>
                <figure id="gallery-item-3" class="gallery__item gallery__item--3 gallery-item-open">
                    <img src="/wp-content/uploads/2020/06/IM-Shielded-min.png" alt="IM Shielded" class="gallery__img">
                    <img class="icons_quick_shot" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Shielded-overlay-icon.svg" alt="IM-Shielded-icon">
                    <p>IM Shielded</p>
                </figure>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="gallery-container">
              <div class="gallery">
                <figure id="gallery-item-4" class="gallery__item gallery__item--4 gallery-item-open">
                    <img src="/wp-content/uploads/2020/06/IM-Glowing-min.png" alt="IM Glowing" class="gallery__img">
                    <img class="icons_quick_shot" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Glowing-overlay-icon.svg" alt="IM-Glowing-icon">
                    <p>IM Glowing</p>
                </figure>
                <figure id="gallery-item-5" class="gallery__item gallery__item--5 gallery-item-open">
                    <img src="/wp-content/uploads/2020/06/IM-Detoxed-min.png" alt="IM Detoxed" class="gallery__img">
                    <img class="icons_quick_shot" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Detoxed-overlay-icon.svg" alt="IM-Detoxed-icon">
                    <p>IM Detoxed</p>
                </figure>
                <figure id="gallery-item-6" class="gallery__item gallery__item--6 gallery-item-open">
                    <img src="/wp-content/uploads/2020/06/IM-Strong-min.png" alt="IM Strong" class="gallery__img">
                    <img class="icons_quick_shot" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Strong-overlay-icon.svg" alt="IM-Strong-icon">
                    <p>IM Strong</p>
                </figure>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="gallery-container">
              <div class="gallery">
                <figure id="gallery-item-7" class="gallery__item gallery__item--7 gallery-item-open">
                    <img src="/wp-content/uploads/2020/06/IM-Lean-min.png" alt="IM Lean" class="gallery__img">
                    <img class="icons_quick_shot" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Lean-overlay-icon.svg" alt="IM-Lean-icon">
                    <p>IM Lean</p>
                </figure>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="im-quick-shots-overlays">
  <!-- IM Energized Overlay -->
  <div id="gallery-overlay-1" class="overlay">
    <span aria-hidden="true"><i class="fas fa-times closebtn"></i></span>
    <div class="overlay-content">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-1 col-md-10">
            <img class="icon_overlay_top" style="width:88px;" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Energized-overlay-icon.svg" alt="IM-Energized-icon">
            <h3>IM Energized</h3>
            <div class="overlay-description">
              <p>Without robust levels of B12, energy fades and your neurons wither. In addition to fatigue, symptoms of low B12 can include tingling and numbness in the hands and feet, brain fog, and difficulty losing weight. B12 is found in meats.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-icons-menu">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 overlay-icons-col">
            <img class="overlay-icon-selected" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Energized-overlay-icon.svg" alt="IM Energized">
            <img id="gallery-icon-2" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Super-Charged-overlay-icon.svg" alt="IM Super Charged">
            <img id="gallery-icon-3" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Shielded-overlay-icon.svg" alt="IM Shielded">
            <img id="gallery-icon-4" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Glowing-overlay-icon.svg" alt="IM Glowing">
            <img id="gallery-icon-5" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Detoxed-overlay-icon.svg" alt="IM Detoxed">
            <img id="gallery-icon-6" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Strong-overlay-icon.svg" alt="IM Strong">
            <img id="gallery-icon-7" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Lean-overlay-icon.svg" alt="IM Lean">
          </div>
          <p class="text-on-hover">IM Energized</p>
        </div>
      </div>
    </div>
  </div>

  <!-- IM Super Charged Overlay -->
  <div id="gallery-overlay-2" class="overlay">
    <span aria-hidden="true"><i class="fas fa-times closebtn"></i></span>
    <div class="overlay-content">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-1 col-md-10">
            <img class="icon_overlay_top" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Super-Charged-overlay-icon.svg" alt="IM-Super-Charged-icon-icon">
            <h3>IM Super Charged</h3>
            <div class="overlay-description">
              <p>With high levels of B12, as well as the other seven essential B vitamins, this injection helps to reassure that you will  avoid being deficient in the energy-fueling B vitamin family.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-icons-menu">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 overlay-icons-col">
            <img id="gallery-icon-1" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Energized-overlay-icon.svg" alt="IM Energized">
            <img class="overlay-icon-selected" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Super-Charged-overlay-icon.svg" alt="IM Super Charged">
            <img id="gallery-icon-3" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Shielded-overlay-icon.svg" alt="IM Shielded">
            <img id="gallery-icon-4" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Glowing-overlay-icon.svg" alt="IM Glowing">
            <img id="gallery-icon-5" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Detoxed-overlay-icon.svg" alt="IM Detoxed">
            <img id="gallery-icon-6" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Strong-overlay-icon.svg" alt="IM Strong">
            <img id="gallery-icon-7" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Lean-overlay-icon.svg" alt="IM Lean">
          </div>
          <p class="text-on-hover">IM Super Charged</p>
        </div>
      </div>
    </div>
  </div>

  <!-- IM Shielded Overlay -->
  <div id="gallery-overlay-3" class="overlay">
    <span aria-hidden="true"><i class="fas fa-times closebtn"></i></span>
    <div class="overlay-content">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-1 col-md-10">
            <img class="icon_overlay_top" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Shielded-overlay-icon.svg" alt="IM-Shielded-icon">
            <h3>IM Shielded</h3>
            <div class="overlay-description">
              <p>This injection has all the immune supporting ingredients as its big brother, the ‘IV Shield,’ only in a compact and quick form ready for speedy injection.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-icons-menu">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 overlay-icons-col">
            <img id="gallery-icon-1" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Energized-overlay-icon.svg" alt="IM Energized">
            <img id="gallery-icon-2" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Super-Charged-overlay-icon.svg" alt="IM Super Charged">
            <img class="overlay-icon-selected" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Shielded-overlay-icon.svg" alt="IM Shielded">
            <img id="gallery-icon-4" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Glowing-overlay-icon.svg" alt="IM Glowing">
            <img id="gallery-icon-5" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Detoxed-overlay-icon.svg" alt="IM Detoxed">
            <img id="gallery-icon-6" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Strong-overlay-icon.svg" alt="IM Strong">
            <img id="gallery-icon-7" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Lean-overlay-icon.svg" alt="IM Lean">
          </div>
          <p class="text-on-hover">IM Shielded</p>
        </div>
      </div>
    </div>
  </div>

  <!-- IM Glowing Overlay -->
  <div id="gallery-overlay-4" class="overlay">
    <span aria-hidden="true"><i class="fas fa-times closebtn"></i></span>
    <div class="overlay-content">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-1 col-md-10">
            <img class="icon_overlay_top" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Glowing-overlay-icon.svg" alt="IM-Glowing-icon">
            <h3>IM Glowing</h3>
            <div class="overlay-description">
              <p>Healthy skin depends as much on what is in you, as what you put on it. Give your skin the collagen supporting, free radical neutralizing health boost that it needs.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-icons-menu">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 overlay-icons-col">
            <img id="gallery-icon-1" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Energized-overlay-icon.svg" alt="IM Energized">
            <img id="gallery-icon-2" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Super-Charged-overlay-icon.svg" alt="IM Super Charged">
            <img id="gallery-icon-3" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Shielded-overlay-icon.svg" alt="IM Shielded">
            <img class="overlay-icon-selected" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Glowing-overlay-icon.svg" alt="IM Glowing">
            <img id="gallery-icon-5" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Detoxed-overlay-icon.svg" alt="IM Detoxed">
            <img id="gallery-icon-6" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Strong-overlay-icon.svg" alt="IM Strong">
            <img id="gallery-icon-7" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Lean-overlay-icon.svg" alt="IM Lean">
          </div>
          <p class="text-on-hover">IM Glowing</p>
        </div>
      </div>
    </div>
  </div>

  <!-- IM Detoxed Overlay -->
  <div id="gallery-overlay-5" class="overlay">
    <span aria-hidden="true"><i class="fas fa-times closebtn"></i></span>
    <div class="overlay-content">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-1 col-md-10">
            <img class="icon_overlay_top"  src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Detoxed-overlay-icon.svg" alt="IM-Detoxed-icon">
            <h3>IM Detoxed</h3>
            <div class="overlay-description">
              <p>We move through a polluted planet, absorbing persistent organic pollutants (POP’s), toxic heavy metals, and pesticide-laced foods. All of this increases the free radical assault that attacks our cells  every day.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-icons-menu">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 overlay-icons-col">
            <img id="gallery-icon-1" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Energized-overlay-icon.svg" alt="IM Energized">
            <img id="gallery-icon-2" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Super-Charged-overlay-icon.svg" alt="IM Super Charged">
            <img id="gallery-icon-3" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Shielded-overlay-icon.svg" alt="IM Shielded">
            <img id="gallery-icon-4" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Glowing-overlay-icon.svg" alt="IM Glowing">
            <img class="overlay-icon-selected" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Detoxed-overlay-icon.svg" alt="IM Detoxed">
            <img id="gallery-icon-6" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Strong-overlay-icon.svg" alt="IM Strong">
            <img id="gallery-icon-7" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Lean-overlay-icon.svg" alt="IM Lean">
          </div>
          <p class="text-on-hover">IM Detoxed</p>
        </div>
      </div>
    </div>
  </div>

  <!-- IM Strong Overlay -->
  <div id="gallery-overlay-6" class="overlay">
    <span aria-hidden="true"><i class="fas fa-times closebtn"></i></span>
    <div class="overlay-content">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-1 col-md-10">
            <img class="icon_overlay_top" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Strong-overlay-icon.svg" alt="IM-Strong-icon">
            <h3>IM Strong</h3>
            <div class="overlay-description">
              <p>Whether you were looking for a boost at the gym, at spin class, or at the start of your next race, this drip can give you an edge.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-icons-menu">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 overlay-icons-col">
            <img id="gallery-icon-1" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Energized-overlay-icon.svg" alt="IM Energized">
            <img id="gallery-icon-2" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Super-Charged-overlay-icon.svg" alt="IM Super Charged">
            <img id="gallery-icon-3" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Shielded-overlay-icon.svg" alt="IM Shielded">
            <img id="gallery-icon-4" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Glowing-overlay-icon.svg" alt="IM Glowing">
            <img id="gallery-icon-5" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Detoxed-overlay-icon.svg" alt="IM Detoxed">
            <img class="overlay-icon-selected" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Strong-overlay-icon.svg" alt="IM Strong">
            <img id="gallery-icon-7" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Lean-overlay-icon.svg" alt="IM Lean">
          </div>
          <p class="text-on-hover">IM Strong</p>
        </div>
      </div>
    </div>
  </div>

  <!-- IM Lean Overlay -->
  <div id="gallery-overlay-7" class="overlay">
    <span aria-hidden="true"><i class="fas fa-times closebtn"></i></span>
    <div class="overlay-content">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-1 col-md-10">
            <img class="icon_overlay_top" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Lean-overlay-icon.svg" alt="IM-Lean-icon">
            <h3>IM Lean</h3>
            <div class="overlay-description">
              <p>Whatever path you are on to achieve fat reduction, the IM Fat Burner can assist you.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-icons-menu">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 overlay-icons-col">
            <img id="gallery-icon-1" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Energized-overlay-icon.svg" alt="IM Energized">
            <img id="gallery-icon-2" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Super-Charged-overlay-icon.svg" alt="IM Super Charged">
            <img id="gallery-icon-3" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Shielded-overlay-icon.svg" alt="IM Shielded">
            <img id="gallery-icon-4" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Glowing-overlay-icon.svg" alt="IM Glowing">
            <img id="gallery-icon-5" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Detoxed-overlay-icon.svg" alt="IM Detoxed">
            <img id="gallery-icon-6" class="gallery-icon-open" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Strong-overlay-icon.svg" alt="IM Strong">
            <img class="overlay-icon-selected" src="<?php bloginfo('template_directory'); ?>/assets/images/icons_overlay/im_quick_shots/IM-Lean-overlay-icon.svg" alt="IM Lean">
          </div>
          <p class="text-on-hover">IM Lean</p>
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