<?php get_header(); ?>

<section id="pageDescription">
    <div class="frame pageHeader">
        <?php
        $args = array(
            'post_type' => 'page',
            'title' => 'Online Resources'
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


<section id="docList">
    <?php while (have_posts()) {
        the_post();
    ?>
        <div id="document-wrapper" class="frame">
            <?php
            // get field id
            $file = get_field('upload_doc');

            // if file has been uploaded then display download link
            if ($file) {
            ?>
                <a href=" <?php echo $file['url']; //link of file from field  
                            ?>" target="_blank">
                    <img src=<?php echo get_theme_file_uri('/assets/icons/download.svg'); ?> alt="download icon">
                </a>
            <?php }; ?>

            <div>
                <h1> <?php the_title(); ?></h1>
                <div class="docTextContainer">
                    <?php the_content(); ?>
                </div>
            </div>

        </div>

    <?php
    };
    ?>
</section>

<?php get_footer(); ?>