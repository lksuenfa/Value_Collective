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

    <?php } ?>




    <?php require "templates/scrollArrow.php" ?>

    <div class="dropdown3">
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
    </div>

</div>

<?php get_footer(); ?>