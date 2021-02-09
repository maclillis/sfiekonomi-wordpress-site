<?php /* Template Name: Kapitel */ ?>

<?php get_header(); ?>
<section class="sfi-chapter-header-wrapper">
  <div class="sfi-chapter-header-inner">
    <div class="sfi-breadcrumbs">
    <h4><a href="<?php echo home_url(); ?>">Hem</a> / <a href="../">Privatekonomi</a> / <?php the_title(); ?> </h4>
    </div>
    <div class="sfi-chapter-divider"></div>
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

    <?php
      $pagelist = get_pages('');
      $pages = array();
      foreach ($pagelist as $page) {
      $pages[] += $page->ID;
      }

      $current = array_search(get_the_ID(), $pages);
      $prevID = $pages[$current-1];
      $nextID = $pages[$current+1];
    ?>

    <section class="sfi-bottom-navigation-wrapper">
      <article class="sfi-bottom-navigation-previous">
    <?php if(!empty(get_previous_post())){ ?>
    <p class="sfi-previous-chapter-desc">Föregående:</p> 
    <?php } ?>
        <p class="sfi-previous-chapter"><?php previous_post_link('%link'); ?></p>
      </article>

      <!-- Bottom page pagination -->
      <article class="sfi-bottom-navigation">

      <?php if(!empty(get_previous_post())){ ?>
        <a href="<?php echo get_permalink( get_adjacent_post(false,'',true)->ID ) ?>">
          <i class="fas fa-angle-left" id="sfi-bottom-navigation-arrow-prev"></i>
        </a>
      <?php } ?>
      <?php wp_nav_menu( array( 
        "theme_location" => "femte-meny", 
        "container_id" => "sfi-bottom-navigation-bubbles",
        'link_before' => '<div class="sfi-chapter-bubble bubble-greyed"><p>',
        'link_after' => '</p></div>',
        'after' => '<p class="sfi-bottom-navigation-bubble-desc" align="center">' . get_the_title() . '</p>'
         ) ); ?>
      
      <?php if(!empty(get_next_post())){ ?>
        <a href="<?php echo get_permalink( get_adjacent_post(false,'',false)->ID ) ?>">
          <i class="fas fa-angle-right" id="sfi-bottom-navigation-arrow-next"></i>
        </a>
      <?php } ?>
        
      </article>
      <article class="sfi-bottom-navigation-next">
      <?php if(!empty(get_next_post())){ ?>
        <p class="sfi-next-chapter-desc">Nästa:</p>
      <?php } ?>
        <p class="sfi-next-chapter"><?php next_post_link('%link'); ?></p>
      </article>

    </section>

</div>

<?php get_footer(); ?>