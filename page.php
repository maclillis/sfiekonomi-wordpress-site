<?php get_header(); ?>
<section class="sfi-chapter-header-wrapper">
  <div class="sfi-chapter-header-inner">
    <div class="sfi-breadcrumbs">
    <h4><a href="<?php echo home_url(); ?>">Hem</a> / <?php the_title(); ?> </h4>
    </div>
    <div class="sfi-chapter-divider" style="height:1px;background-color:#B4B4B4;"></div>
  </div>
</section>

<div class="sfi-main-outer-wrapper">
  <section class="sfi-main-content-wrapper">

  <article class="sfi-main-content-header row">
    <div class="col-xs-9 align-self-end">
      <div class="sfi-main-content-header-title">
        <h1><?php the_title();?></h1>
      </div>
    </div>
  </article>

  <?php

if (have_posts()):
while (have_posts()) : the_post();
  the_content();
endwhile;
else:
  echo '<p>Sorry, no posts matched your criteria.</p>';
endif;

?>

    </section>

</div>

<?php get_footer(); ?>