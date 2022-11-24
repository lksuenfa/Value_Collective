<?php get_header(); ?>

<section id="pageDescription">
    <div id="documentpage2" class="outer-box-frame">
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
        <div id="documentpage" class="outer-box-frame">
            <?php
            // get field id
            $file = get_field('upload_doc');

            // if file has been uploaded then display download link
            if ($file) {
            ?>
                <a href="
                <?php echo $file['url']; //link of file from field 
                ?>" target="_blank">
                    <img src=<?php echo get_theme_file_uri('/assets/icons/download.svg'); ?> alt="download icon">
                </a>
            <?php }; ?>

            <h1> <?php the_title(); ?></h1>
            <p>
                <?php the_content(); ?>
            </p>
        </div>

    <?php
    };
    ?>
</section>

<?php get_footer(); ?>