<?php get_header(); ?>

<section id="pageDescription">
    <div id="documentpage2" class="outer-box-frame">
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



<section id=timeline class="outer-box-frame">
    <h1>Timeline</h1>
    <div class="demo-card-wrapper">
        <div class="demo-card demo-card--step1">
            <div class="head">
                <div class="number-box">
                    <span>01</span>
                </div>
                <h2><span class="small">janvier 2022</span> Technology</h2>
            </div>
            <div class="timelineBody">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis deserunt doloribus consequatur, laudantium odio dolorum laboriosam.</p>
                <img src="assets/images/residencies1.png" alt="Graphic"> </img>
            </div>
        </div>

        <div class="demo-card demo-card--step2">
            <div class="head">
                <div class="number-box">
                    <span>02</span>
                </div>
                <h2><span class="small">janvier 2022</span> Confidence</h2>
            </div>
            <div class="timelineBody">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis deserunt doloribus consequatur, laudantium odio dolorum laboriosam.</p>
                <img src="assets/images/residencies1.png" alt="Graphic"> </img>
            </div>
        </div>

        <div class="demo-card demo-card--step3">
            <div class="head">
                <div class="number-box">
                    <span>03</span>
                </div>
                <h2><span class="small">janvier 2022</span> Adaptation</h2>
            </div>
            <div class="timelineBody">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis deserunt doloribus consequatur, laudantium odio dolorum laboriosam.</p>
                <img src="assets/images/residencies1.png" alt="Graphic"> </img>
            </div>
        </div>

        <div class="demo-card demo-card--step4">
            <div class="head">
                <div class="number-box">
                    <span>04</span>
                </div>
                <h2><span class="small">janvier 2022</span> Consistency</h2>
            </div>
            <div class="timelineBody">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis deserunt doloribus consequatur, laudantium odio dolorum laboriosam.</p>
                <img src="assets/images/residencies1.png" alt="Graphic"> </img>
            </div>
        </div>

        <div class="demo-card demo-card--step5">
            <div class="head">
                <div class="number-box">
                    <span>05</span>
                </div>
                <h2><span class="small">janvier 2022</span> Conversion</h2>
            </div>
            <div class="timelineBody">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis deserunt doloribus consequatur, laudantium odio dolorum laboriosam.</p>
                <img src="assets/images/residencies1.png" alt="Graphic"> </img>
            </div>
        </div>

        <div class="demo-card demo-card--step6">
            <div class="head">
                <div class="number-box">
                    <span>06</span>
                </div>
                <h2><span class="small">janvier 2022</span> Conversion</h2>
            </div>
            <div class="timelineBody">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis deserunt doloribus consequatur, laudantium odio dolorum laboriosam.</p>
                <img src="assets/images/residencies1.png" alt="Graphic"> </img>
            </div>
        </div>

        <div class="demo-card demo-card--step7">
            <div class="head">
                <div class="number-box">
                    <span>07</span>
                </div>
                <h2><span class="small">janvier 2022</span> Conversion</h2>
            </div>
            <div class="timelineBody">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis deserunt doloribus consequatur, laudantium odio dolorum laboriosam.</p>
                <img src="assets/images/residencies1.png" alt="Graphic"> </img>
            </div>
        </div>

        <div class="demo-card demo-card--step8">
            <div class="head">
                <div class="number-box">
                    <span>08</span>
                </div>
                <h2><span class="small">janvier 2022</span> Conversion</h2>
            </div>
            <div class="timelineBody">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis deserunt doloribus consequatur, laudantium odio dolorum laboriosam.</p>
                <img src="assets/images/residencies1.png" alt="Graphic"> </img>
            </div>
        </div>



    </div>
</section>

<?php get_footer(); ?>