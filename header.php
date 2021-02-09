<!DOCTYPE html>
<html lang="sv" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo( "name" ); echo " | "; wp_title('');  ?></title>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/libs/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory"); ?>/css/sass.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory"); ?>/css/flexboxgrid.min.css" />

    <!-- Font Awesome CSS-library -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory"); ?>/css/all.min.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-176041777-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-176041777-1');
    </script>


    <link rel="icon" type="image/png" href="<?php bloginfo("template_directory"); ?>/assets/images/favicon/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="<?php bloginfo("template_directory"); ?>/assets/images/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="<?php bloginfo("template_directory"); ?>/assets/images/favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?php bloginfo("template_directory"); ?>/assets/images/favicon/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="<?php bloginfo("template_directory"); ?>/assets/images/favicon/favicon-128.png" sizes="128x128" />
    <?php wp_head();?>
  </head>
  <body>
  <div id="sfi-menu-wrapper">
    <div id="sfi-menu-inner-wrapper">
      <div id="sfi-menu-background"></div>
      <nav id="sfi-responsive-menu">
        <div class="sfi-menu-row">
          <div class="sfi-menu-title">
            <h3>Meny</h3>
          </div>
          <div id="sfi-menu-close">
            <button class="button button-solid" alt="Menyknapp"><i class="fas fa-times"></i><p>Stäng</p></button>
          </div>
        </div>
        <div class="sfi-menu-list-row">
          <p class="sfi-menu-list-title">Privatekonomi</p>
          <?php wp_nav_menu( array( "theme_location" => "huvud-meny", "container_class" => "sfi-menu-list", 'link_before' => '<span class="current-marker"></span><p>', 'link_after' => '</p>' ) ); ?>
        </div>
        <div class="sfi-menu-border"></div>
        <div class="sfi-menu-short-list-row"> 
        <?php wp_nav_menu( array( "theme_location" => "andra-meny", "container_class" => "sfi-menu-short-list" ) ); ?>
        </div>
      </nav>
    </div>
  </div>

  <div id="sfi-back-top">
    <div id="sfi-back-top-inner">
    <i class="fas fa-arrow-up"></i>
    </div>
    <p>Till toppen</p>
  </div>

  <div id="sfi-outer-wrapper">
      <div id="sfi-inner-wrapper">
        <header id="sfi-header-wrapper">
          <div id="sfi-header-inner-wrapper">
            <section id="sfi-logo">
             <a href="<?php echo home_url(); ?>"> <img src="<?php bloginfo("template_directory"); ?>/assets/images/sfi-logo.png" class="sfi-logo-img" /></a>
            </section>
            <section id="sfi-search"> <?php get_search_form()?></section>
            <section id="sfi-menu-btn">
              <button class="button button-solid">
                <i class="fas fa-bars"></i>
                <p>Meny</p>
              </button>
            </section>
          </div>
        </header>