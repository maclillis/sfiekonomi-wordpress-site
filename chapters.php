<?php /* Template Name: Kapitel */ ?>

<?php get_header(); ?>
<section class="sfi-chapter-header-wrapper">
  <div class="sfi-chapter-header-inner">
    <div class="sfi-breadcrumbs">
    <h4><a href="<?php echo home_url(); ?>">Hem</a> / <?php the_title(); ?> </h4>
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
    <div class="col-xs-3">
      <div class="sfi-main-content-header-navigation">
        <p>Välj innehåll</p>
        <!--<select class="select">
          <option>Budget och Skatt</option>
        </select>-->
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
      $pagelist = get_pages('sort_column=menu_order&sort_order=asc');
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
        <p class="sfi-previous-chapter-desc">Föregående:</p>
        <p class="sfi-previous-chapter"><?php previous_post_link('%link'); ?></p>
      </article>

      <article class="sfi-bottom-navigation">
      <?php if (!empty($prevID)) { ?>
      <a href="<?php echo get_permalink($prevID); ?>">
        <i class="fas fa-angle-left" id="sfi-bottom-navigation-arrow-prev"></i>
      </a>
      <?php } ?>

      <div id="sfi-bottom-navigation-bubbles">
        <ul>
          <li>
              <div class="sfi-chapter-bubble chap-1"><p>1</p></div>
          </li>
          <li>
              <div class="sfi-chapter-bubble chap-2"><p>2</p></div>
          </li>
          <li>
              <div class="sfi-chapter-bubble chap-3"><p>3</p></div>    
          </li>
          <li>
              <div class="sfi-chapter-bubble chap-4"><p>4</p></div>
          </li>
          <li>
              <div class="sfi-chapter-bubble chap-5"><p>5</p></div>
          </li>
          <li>
              <div class="sfi-chapter-bubble chap-6"><p>6</p></div>
          </li>
          <li>
              <div class="sfi-chapter-bubble chap-7"><p>7</p></div>
          </li>
          <li>
              <div class="sfi-chapter-bubble chap-8"><p>8</p></div>
          </li>
          <li>
              <div class="sfi-chapter-bubble chap-9"><p>9</p></div>
          </li>
          <li>
              <div class="sfi-chapter-bubble chap-10"><p>10</p></div>
          </li>
          <li>
              <div class="sfi-chapter-bubble chap-11"><p>11</p></div>
          </li>
        </ul>
      </div>

      <?php if (!empty($nextID)) { ?>
        <a href="<?php echo get_permalink($nextID); ?>">
          <i class="fas fa-angle-right" id="sfi-bottom-navigation-arrow-next"></i>
        </a>
        <?php } ?>
        
      </article>

      <article class="sfi-bottom-navigation-next">
        <p class="sfi-next-chapter-desc">Nästa:</p>
        <p class="sfi-next-chapter"><?php next_post_link('%link'); ?></p>
      </article>

    </section>

</div>

<?php get_footer(); ?>