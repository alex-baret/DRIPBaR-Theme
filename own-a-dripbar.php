<?php /* Template Name: Own a DRIPBaR */ ?>
<?php get_header(); ?>

<div class="own-a-dripbar-slider">
  <?php echo do_shortcode('[rev_slider alias="own-a-dripbar"]'); ?>
</div>

<?php
if (have_posts()) : 
  while (have_posts()) : the_post(); ?>

<div class="own-a-dripbar-page">
  <div class="container w_1450">
    <div class="row gutter-row">
      <div class="col-sm-12">
      <?php the_content(); ?>
      </div>
    </div>
  </div>
</div>

<div class="own-a-dripbar-overlays">
  <!-- Executive Team Overlay -->
  <div id="gallery-overlay-1" class="overlay">
    <span aria-hidden="true"><i class="fas fa-times closebtn"></i></span>
    <div class="overlay-content">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-1 col-md-10">
            <h3>Executive Team</h3>
            <div class="overlay-description">
              <p>Driven by advances in cellular and biological science to support the best health of our clients— help them fight the consequences of chronic illness, and to fundamentally address the effects of aging itself—are the leaders who will support you as you grow and scale your franchise.</p>
              <h4>Shannon Petteruti, N.P., Chief Executive Officer</h4>
              <p>A Sigma Theta Tau International Honors graduate from Simmons College with dual bachelor degrees in business management and nursing, and Master’s degree in Nursing, Petteruti has spent over 20 years garnering experience throughout the healthcare landscape—uniquely preparing her for her role as Chief Executive Officer of THE DRIPBaR Franchising, LLC.</p>
              <p>Her career began through passion and an entrepreneurial spark. With a focus on birth, child development, and helping families, Petteruti launched Bellani Maternity in her garage and successfully grew the business to $1 million in sales within their first year. She continued to profitably run the award-winning company as CEO for six years before transitioning leadership to pursue her deepening passion for nursing and patient-centered care.</p>
              <p>A board-certified nurse practitioner with a constant passion for knowledge, she has further continued her education in anti-aging, functional medicine, IV vitamin therapy and USP 797 sterile compounding training. In 2014, Petteruti stepped into her current position as CEO of IM120, a concierge medical practice locked-in on the future of personal health care rather than sick care. With her leadership, IM120 grew sales by 33%, reduced cost of goods by 24%, and sustained a loyalty base of over 78%.</p>
              <p>Petteruti’s professional success and industry expertise makes her a force to be reckoned with. Her collective experience and passion has now culminated with her position as CEO of THE DRIPBaR Franchising, LLC. With a dedication to individualized patient care and a keen focus on the emerging science of cellular health, THE DRIPBaR is breaking new boundaries—with Petteruti firmly at the helm.</p>
              <h4>Ben Crosbie, Chief Development Officer</h4>
              <p>Mr. Crosbie brings a lifetime of passion and over 20 years of experience in health and personal care industries with an emphasis on franchising to THE DRIPBaR team. Beginning as a Kinesiology graduate from the University of New Hampshire to working and owning businesses throughout the health and fitness industry he has maintained a focus on individual wellness. With his foundation based in wellness and his business expertise, Mr. Crosbie has helped optimize THE DRIPBaR with core competencies from the fitness, spa, and personal care industries.</p>
              <p>He looks forward to developing THE DRIPBaR as the market leader in an emerging industry that needs a focused level of professionalism in a modern yet medical platform. His focus is to continually support the team and the franchisees mission to produce the optimal outcome for THE DRIPBaR clients.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Research and Development Council Overlay -->
  <div id="gallery-overlay-2" class="overlay">
    <span aria-hidden="true"><i class="fas fa-times closebtn"></i></span>
    <div class="overlay-content">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-1 col-md-10">
            <h3>Research and Development Council</h3>
            <div class="overlay-description">
              <p>Our Research & Development Team is a diverse group of individuals who were specifically selected for their complementary experience, and common intellect. They provide fresh professional and medical perspectives to protocols that are being developed throughout THE DRIPBaR franchises. We want to know how thoughtful members of the community at large may view not only these new treatments and protocols, but the manner in which are described.</p>
              <h4>Dr. George Cooper, MD</h4>
              <p>Dr. Cooper has served on our Research Advisory Council since January 1<sup>st</sup>, 2020. From 2008 to present he is the founder and chief physician of Northeast Laser and Vein Center. Dr. George Cooper is a board-certified cardiovascular and thoracic surgeon.</p>
              <h4>Stephen Petteruti, D.O., Director of Research and Development </h4>
              <p>Dr. Petteruti has served as our Director of Research and Development since our inception on July 24, 2019. Concurrently, he has served as the President of our affiliate, Intellectual Medicine 120, in Warwick, Rhode Island since December 13, 2005. He is a board-certified family physician, as well as certified in functional medicine and medical weight loss.</p>
              <h4>Alfred Marciano, CPA</h4>
              <p>Mr. Marciano has served on our Business Advisory Council since January 1<sup>st</sup>, 2020. He is a partner in Charland, Marciano & Company, CPAs, LLP, founded in 1982.</p>
              <h4>Gina DiSpirito</h4>
              <p>Ms. DiSpirito has served on our Business Advisory Council since January 1<sup>st</sup>, 2020. Ms. DiSpirito is the owner, founder, and Creative Director of GLAD WORKS, a full service advertising advertising agency in Pawtucket, Rhode Island, established in 1995. GLAD WORKS partnered with THE DRIPBaR to develop THE DRIPBaR franchise brand identify including the design and development of the website.</p>
              <h4>Jeffrey Richardson, Esq., Col</h4>
              <p>Mr. Richardson has served on our Business Advisory Council since January 1<sup>st</sup>, 2020.  From 1984 until present he has been an active independent practice attorney in Rhode Island. He is a retired Marie colonel after serving for 28+ years. From 2014 until present he has been the senior Marine instructor for the Marine Corps junior ROTC program in Pawtucket, RI.</p>
            </div>
          </div>
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