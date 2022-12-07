<?php
get_header();

while (have_posts()) {
    the_post();



?>
    <div class="frame singlePage">

        <h1> <?php the_title(); ?></h1>

        <div class="page-content">
            <?php the_content(); ?>
        </div>


    </div>


<?php


}






get_footer();
?>