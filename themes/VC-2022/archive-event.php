<?php get_header(); ?>

<section>

    <div id="documentpage2" class="outer-box-frame">

        <?php
        $args = array(
            'post_type' => 'page',
            'title' => 'Events'
        );
        $selectedPage = new WP_Query($args);

        while ($selectedPage->have_posts()) {
            $selectedPage->the_post();
        ?>
            <h1><?php the_title(); ?></h1>
        <?php
            the_content();
        }; ?>

    </div>

    <section>

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
            <div id="eventpage" class="outer-box-frame">

                <?php the_post_thumbnail(); ?>
                <h1><?php the_title(); ?></h1>
                <h3>
                    <?php the_field('date_display');
                    echo "<br>";
                    the_field('event_location');
                    ?>

                </h3>

                <?php the_content(); ?>

            </div>

        <?php }; ?>

    </section>



    <section>
        <h3>Past Events</h3>


        <?php


        // display past events only
        $pastEvents = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'event',
            'meta_key' => 'end_date',
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
            'meta_query' => array(
                array(
                    'key' => 'end_date',
                    'compare' => '<',
                    'value' => $today,
                    'type' => 'numeric'
                )
            )
        ));

        while ($pastEvents->have_posts()) {
            $pastEvents->the_post();
        ?>

            <div id="eventpage" class="outer-box-frame">

                <div>
                    <?php the_post_thumbnail(); ?>
                </div>

                <h1><?php the_title(); ?></h1>
                <h3>
                    <?php the_field('date_display');
                    echo "<br>";
                    the_field('event_location');
                    ?>

                </h3>

                <?php the_content(); ?>

            </div>

        <?php }; ?>

    </section>








</section>


<?php get_footer(); ?>