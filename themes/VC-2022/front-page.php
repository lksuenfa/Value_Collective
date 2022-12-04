<?php get_header() ?>

<div id="frontpage" class="outer-box-frame shapes">

    <!-- mission statement -->
    <?php

    // add content of Residencies-home-page
    $args = array(
        'post_type' => 'page',
        'title' => 'mission statement'
    );

    $mission = new WP_Query($args);

    while ($mission->have_posts()) {
        $mission->the_post();
    ?>

        <div class="missionStat">
            <?php the_content(); ?>
        </div>

        <div class="frontImg">
            <?php the_post_thumbnail('team-thumbnail'); ?>
        </div>

    <?php } ?>

    <?php require "templates/scrollArrow.php" ?>

    <!-- <div class="dropdown3">
        <div class="dropdown" id="myBtn">
            <button class="dropbtn">
                residencies
            </button>
            <div id="myDropdown" class="dropdown-content">
                <?php

                // add content of Residencies-home-page
                $args = array(
                    'post_type' => 'page',
                    'title' => 'residencies-home-page'
                );

                $residencies_home = new WP_Query($args);

                while ($residencies_home->have_posts()) {
                    $residencies_home->the_post();
                    the_content();
                }

                ?>

            </div>
        </div>


        <div class="dropdown2" id="myBtn2">
            <button class="dropbtn2">
                projects

            </button>
            <div id="myDropdown2" class="dropdown2-content">
                <?php

                // add content of projects-home-page
                $args = array(
                    'post_type' => 'page',
                    'title' => 'projects-home-page'
                );

                $projects_home = new WP_Query($args);

                while ($projects_home->have_posts()) {
                    $projects_home->the_post();
                    the_content();
                }

                ?>
            </div>
        </div>
    </div> -->

</div>

<section id="s1">

    <!-- Full-width images with number and caption text -->

    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->

        <!-- Display 2 projects -->
        <?php
        $args = array(
            'post_type' => 'project',
            'cat' => '7',
        );

        $projects = new WP_Query($args);

        while ($projects->have_posts()) {
            $projects->the_post();
        ?>

            <div class="mySlides fade">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?>
                    <div class="text">
                        <?php
                        the_title();
                        echo "<br>";
                        the_excerpt();
                        ?>

                    </div>
                </a>
            </div>
        <?php }; ?>

        <!-- Display 1 document -->
        <?php
        $args = array(
            'post_type' => 'document',
            'cat' => '7',
        );

        $doc = new WP_Query($args);

        while ($doc->have_posts()) {
            $doc->the_post();
        ?>

            <div class="mySlides fade">

                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?>
                    <div class="text">
                        <?php
                        the_title();
                        echo "<br>";
                        the_excerpt();
                        ?>
                    </div>
                </a>
            </div>
        <?php }; ?>

        <!-- Display 1 document -->
        <?php
        $args = array(
            'post_type' => 'event',
            'cat' => '7',
        );

        $event = new WP_Query($args);

        while ($event->have_posts()) {
            $event->the_post();
        ?>

            <div class="mySlides fade">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?>
                    <div class="text">
                        <?php
                        the_title();
                        echo "<br>";
                        the_excerpt();
                        ?>
                    </div>
                </a>
            </div>
        <?php }; ?>





        <!-- Next and previous buttons -->
        <a class="prev" id="previousSlide">&#10094;</a>
        <a class="next" id="nextSlide">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <!-- <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>

    </div> -->
</section>


<section class="footerNav">
    <?php require  "templates/footerNav.php" ?>
</section>



<?php get_footer(); ?>