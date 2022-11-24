<?php get_header(); ?>

<section id="pageDescription">
    <div id="documentpage2" class="outer-box-frame">
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

    <h2>Current Residents</h2>

    <section class="product-grid projects">
        <div class="grid-wrapper">

            <?php while (have_posts()) {
                the_post();
            ?>

                <figure class="product modalBtn">
                    <div class="product-thumbnail">
                        <?php the_post_thumbnail('team-thumbnail'); ?>
                    </div>

                    <figcaption>
                        <h4 class="grid-title"><?php the_title(); ?></h4>

                        <p class="grid-description">
                            <?php
                            if (the_excerpt()) {
                                echo get_the_excerpt();
                            }  ?>
                        </p>
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
            <li>member</li>
            <li>member</li>
            <li>member</li>
            <li>member</li>
            <li>member</li>
            <li>member</li>
            <li>member</li>
            <li>member</li>
            <li>member</li>

        </ul>
    </div>
</section>

<?php get_footer(); ?>