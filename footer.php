      </div>
      <?php wp_footer(); ?>
      <footer id="sfi-footer-wrapper">
        <div id="sfi-inner-footer-wrapper">
          <section id="sfi-quick-links">
          <p>Snabblänkar</p>
          <?php wp_nav_menu( array( "theme_location" => "tredje-meny", "container_class" => "sfi-menu-list" ) ); ?>
          <a href="om-cookies"><p>Om cookies</p></a>
            </ul>
          </section>
          <section id="sfi-footer-information">
            <div id="sfi-footer-logo">
              <img src="<?php bloginfo("template_directory"); ?>/assets/images/fi-logo.png" class="fi-footer-logo" alt="Finansinspektionens logotyp" />
            </div>
            <div id="sfi-footer-text">
              <p>Finansinspektionen</p>
              <a href="https://www.fi.se" target="_blank"><p>fi.se</p></a>
            </div>
          </section>
        </div>
      </footer>
    </div>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
  </body>
</html>