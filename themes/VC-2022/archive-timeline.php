<?php get_header(); ?>

<section id="pageDescription">
    <div id="about" class="frame pageHeader">
        <?php
        $args = array(
            'post_type' => 'page',
            'title' => 'What is VC?'
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



<section id=timeline class="frame timeline">

    <?php
    $count = 1;

    $args = array(
        'post_type' => 'timeline',
        'orderby' => 'menu_order',
        'order' => 'ASC'
    );
    $timeline = new WP_Query($args);


    ?>

    <h1>Timeline</h1>
    <div class="demo-card-wrapper">
        <?php
        while ($timeline->have_posts()) {
            $timeline->the_post();
        ?>
            <div <?php echo "class=demo-card demo-card--step" . $count ?>>
                <div class="head">
                    <div class="number-box"> <span><?php echo "0" . $count ?></span></div>

                    <h2><span class="small"><?php
                                            $timelineDate = new DateTime(get_field('timeline_date'));
                                            echo $timelineDate->format('M Y');
                                            ?>
                        </span> <?php the_title(); ?></h2>
                </div>
                <div class="timelineBody">
                    <div class="timelinebody content">
                        <?php the_content(); ?>
                    </div>

                    <div class="timelineImg">
                        <?php the_post_thumbnail(); ?>
                    </div>

                </div>

            </div>

        <?php
            $count++;
        }; ?>

</section>

<?php get_footer(); ?>