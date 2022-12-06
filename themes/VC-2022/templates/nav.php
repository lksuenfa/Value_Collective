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
                  <a class="lined last hover yellow" href="<?php echo get_post_type_archive_link('project'); ?>">Projects</a>

              </div>


          </div>

          <div id="eventMenu">
              <a href="<?php echo get_post_type_archive_link('event'); ?>">

                  <h3 class="eventTitle">Upcoming Events</h3>

                  <?php
                    $today = date('Ymd');

                    // display upcoming events only
                    $upcomingEvents = new WP_Query(array(
                        'posts_per_page' => -1,
                        'post_type' => 'event',
                        'meta_key' => 'end_date',
                        'orderby' => 'meta_value_num',
                        'order' => 'ASC',
                        'meta_query' => array(
                            array(
                                'key' => 'end_date',
                                'compare' => '>=',
                                'value' => $today,
                                'type' => 'numeric'
                            )
                        )
                    ));

                    while ($upcomingEvents->have_posts()) {
                        $upcomingEvents->the_post();
                    ?>
                      <div class="eventrow">
                          <h4 class="date"> <?php the_field('date_display'); ?></h4>
                          <p class="eventname"><?php the_title(); ?> </p>
                      </div>

                  <?php } ?>

              </a>
          </div>

          <div id="overlayFooter">
              <a href=""><img src=<?php echo get_theme_file_uri('/assets/icons/fb.svg'); ?> alt=" facebook logo"></a>
              <a href="mailto: abc@example.com"> <img src=<?php echo get_theme_file_uri('/assets/icons/email.png'); ?> alt="email logo"></a>
              <a href=""><img src="<?php echo get_theme_file_uri('/assets/icons/newsletter.svg'); ?>" alt="newsletter icon"></a>
          </div>
      </div>
      <section class="footerSide">
          <?php require  "footerNav.php" ?>
      </section>

      </div>


  </nav>