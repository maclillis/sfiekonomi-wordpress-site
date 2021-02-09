<?php /* Template Name: Search */ ?>

<?php 
  get_header(); 
  global $wp_query;
  ?>
<section class="sfi-chapter-header-wrapper">
  <div class="sfi-chapter-header-inner">
    <div class="sfi-breadcrumbs">
    <h4><a href="<?php echo home_url(); ?>">Start</a> / Sökresultat </h4>
    </div>
    <div class="sfi-chapter-divider" style="height:1px;background-color:#B4B4B4!important;"></div>
  </div>
</section>

<div class="sfi-main-outer-wrapper">
  <section class="sfi-main-content-wrapper">

  <article class="sfi-main-content-header row">
    <div class="col-xs-9 align-self-end">
      <div class="sfi-main-content-header-title">
        <h1>Sökresultat för "<?php the_search_query(); ?>" </h1>
        <h2 >Hittade <span > <?php echo $wp_query->found_posts; ?></span>
        <?php _e( 'sidor ', 'locale' ) ?> som innehöll den sökningen.</h2>
      </div>
    </div>
  </article>

  <?php if ( have_posts() ) { ?>
<article class="sfi-search-result-content">
<ul>

<?php while ( have_posts() ) { the_post(); ?>

   <li>
     <h3><a href="<?php echo get_permalink(); ?>">
       <?php the_title();  ?>
     </a></h3>
     <?php  the_post_thumbnail('medium') ?>
     <p><?php echo substr(get_the_excerpt(), 0,200); ?></p>
     <div class="sfi-search-spacer"> <a href="<?php the_permalink(); ?>"><?php the_permalink(); ?></a></div>
   </li>

<?php } ?>

</ul>
</article>

<?php } ?>

    </section>

</div>

<?php get_footer(); ?>