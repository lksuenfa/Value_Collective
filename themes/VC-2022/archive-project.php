<?php get_header(); ?>

<section id="pageDescription">
    <div id="documentpage2" class="outer-box-frame">
        <?php
        $args = array(
            'post_type' => 'page',
            'title' => 'Projects'
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


<!-- Product Grid -->
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
                    <h4 class="grid-title">
                        <?php the_title();


                        ?>
                    </h4>

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

<!-- Modal window -->
<section id="modal-grid" class="modal-grid">

    <div class="modal-content">
        <span class="closeModal">
            <img class="closeModalBtn" src=<?php echo get_theme_file_uri('/assets/icons/close_icon.svg'); ?> alt="close icon">
        </span>

        <div class="modal-content-layout">
            <div>
                <h3 class="thumbnail-title"><?php echo the_title(); ?></h3>

                <p class="thumbnail-text">

                    <?php
                    $id = get_the_ID();
                    echo $id;
                    the_content();
                    ?>
                </p>
            </div>
        </div>


    </div>

</section>

<?php get_footer(); ?>