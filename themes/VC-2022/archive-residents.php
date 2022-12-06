<?php get_header(); ?>

<section id="pageDescription">
    <div id="documentpage2" class="frame pageHeader">
        <?php
        $args = array(
            'post_type' => 'page',
            'title' => 'Residencies'
        );
        $selectedPage = new WP_Query($args);

        while ($selectedPage->have_posts()) {
            $selectedPage->the_post();
        ?>
            <h1><?php the_title(); ?></h1>
        <?php
            the_content();
        } ?>
    </div>
</section>


<!-- Current Residents -->

<section id="current-residents">

    <h2>Residents</h2>

    <section class="product-grid projects">
        <div class="grid-wrapper">

            <?php
            $currentResidents = new WP_Query(array(
                'post_per_page' => -1,
                'post_type' => 'residents',
                'cat' => 5, //filter for category id 5 = current
                'orderby' => 'title',
                'order' => 'ASC'
            ));

            while ($currentResidents->have_posts()) {
                $currentResidents->the_post();
            ?>

                <figure class="product modalBtn">
                    <div class="product-thumbnail">
                        <?php the_post_thumbnail('team-thumbnail'); ?>
                    </div>

                    <figcaption>
                        <h4 class="grid-title"><?php the_title(); ?></h4>

                        <div class="grid-description">
                            <?php the_content(); ?>
                        </div>
                    </figcaption>
                </figure>

            <?php
            };
            ?>
        </div>
    </section>
</section>


<!-- Past Residents -->
<section id="past-residents">
    <h2>Past Residents</h2>
    <div class="past-residents">
        <ul>
            <?php
            $currentResidents = new WP_Query(array(
                'post_per_page' => -1,
                'post_type' => 'residents',
                'cat' => 6, //filter for category id 5 = archive
                'orderby' => 'title',
                'order' => 'ASC'
            ));

            while ($currentResidents->have_posts()) {
                $currentResidents->the_post();
            ?>
                <li><?php the_title(); ?></li>

            <?php
            };
            ?>
        </ul>
    </div>
</section>

<?php get_footer(); ?>