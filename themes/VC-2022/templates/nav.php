  <!-- menu -->

  <nav aria-labelledby="menu">

      <section id="navHeader">
          <a href="<?php echo site_url(); ?>">
              <img id="logo" src=<?php echo get_theme_file_uri('/assets/logo/logo_black.svg'); ?>>

          </a>
          <button id="openBtn" class="open">MENU</button>
      </section>


      <div id="menuMobile" class="overlay">

          <section class="overlayHeader">
              <a href="<?php echo site_url(); ?>">
                  <img class="overlayLogo" src=<?php echo get_theme_file_uri('/assets/logo/logo_black.svg'); ?> alt="Value Collective logo">
              </a>

              <a id="closeBtn" class="close"><img src=<?php echo get_theme_file_uri('/assets/icons/close_icon.svg'); ?> alt="close icon"></a>
          </section>

          <div>
              <div class="search-container lined">
                  <form action="">
                      <input type="text" name="s" value="<?php echo get_search_query(); ?>">
                      <button type="submit"><img id="searchIcon" src=<?php echo get_theme_file_uri('/assets/icons/search.svg'); ?> alt="search icon"></button>
                  </form>

              </div>

              <div id="mainMenu">
                  <a class="lined hover green" href="<?php echo get_post_type_archive_link('timeline'); ?>">About</a>
                  <a class="lined hover pink" href="<?php echo get_post_type_archive_link('residents'); ?>">Residencies</a>
                  <a class="lined hover yellow" href="<?php echo get_post_type_archive_link('project'); ?>">Projects</a>
                  <a class="lined  hover aqua" href="<?php echo get_post_type_archive_link('document'); ?>">Document</a>
                  <a class="lined last hover salmon" href="<?php echo get_post_type_archive_link('event'); ?>">Events</a>
              </div>
          </div>

          <div id="overlayFooter">
              <a href=""><img src=<?php echo get_theme_file_uri('/assets/icons/fb.svg'); ?> alt=" facebook logo"></a>
              <a href="mailto: abc@example.com"> <img src=<?php echo get_theme_file_uri('/assets/icons/email.png'); ?> alt="email logo"></a>
          </div>
          <section class="footerSide">
              <?php require  "footerNav.php" ?>
          </section>

      </div>


  </nav>