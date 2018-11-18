<?php
/*
Template Name: Cart Template
*/
get_header(); ?>

    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <div class="row">
                <div class="col-md-12">
                    <?php the_title('<h1>', '</h1>'); ?>

                    <?php wc_get_template('global/steps.php') ?>

                    <?php the_content(); ?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>


<?php get_footer(); ?>