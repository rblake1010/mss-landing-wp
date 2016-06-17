<?php
/*
 Template Name: Landing Page Template
*/
?>



<?php get_header('landing'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div <?php post_class() ?> id="post-<?php the_ID(); ?>">



<section id="hero" class="section section-hero">
    <div class="zone-wrapper zone-wrapper--hero">
      <div class="zone zone-hero">
        <div class="region region--hero">
          <h1>A Passion for Technology, Value for our Customers </h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda sed illo vel.</p>
        </div>
      </div>
    </div>
  </section>
  <section id="section-one" class="section section-one">
    <div class="zone-wrapper zone-wrapper--one">
      <div class="zone zone-one">
        <div class="region region--one-first"></div>
      </div>
    </div>
  </section>
  <section id="section-two" class="section section-two">
    <div class="zone-wrapper zone-wrapper--two">
      <div class="zone zone-two">
        <div class="region region--two-first"></div>
      </div>
    </div>
  </section>
  <section id="section-three" class="section section-three">
    <div class="zone-wrapper zone-wrapper--three">
      <div class="zone zone-three">
        <div class="region region--three-first"></div>
      </div>
    </div>
  </section>
  <section id="section-four" class="section section-four">
    <div class="zone-wrapper zone-wrapper--four">
      <div class="zone zone-four">
        <div class="region region--four-first"></div>
      </div>
    </div>
  </section>
		


	</div>

<?php endwhile; ?>

<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

<?php else : ?>

	<h2>Not Found</h2>

<?php endif; ?>


<?php get_footer('landing'); ?>