<?php /*Template name: Home page Post Type */ get_header(); ?>


<?php if (have_posts()): the_post();
$condition = get_field('condition');
$image = get_field('image');
$miles = get_field('miles');
$engine = get_field('engine');
$gears = get_field('gears');
$type_of_vehicle = get_field('vehicle'); 
$title = get_field('title'); 
$sub_title = get_field('sub_title');
$cost_per_month = get_field('cost');
$total_cost = get_field('total_cost');
endif;
?>

<section>
    <div>
        <!-- start looping through array -->
        <?php
                    $args = array(
                        'post_type' => 'the-cars',
                        'posts_per_page' => -1,
                        'orderby' => 'ased',
                        'post__not_in' => array(get_the_ID())
                    );
                    $query = new WP_Query($args);
                    $posts = $query->posts;
                    $posts_filtered_by_car = array();
                    foreach ($posts as $post) : setup_postdata($post);
                        $condition = get_field('condition');
                        $image = get_field('image');
                        $miles = get_field('miles');
                        $engine = get_field('engine');
                        $gears = get_field('gears');
                        $vehicle = get_field('type_of_vehicle'); 
                        $title = get_field('title'); 
                        $sub_title = get_field('sub_title');
                        $cost_per_month = get_field('cost_per_month');
                        $total_cost = get_field('total_cost');
                        
                    ?>

        <div class="container product-cards">
            <div class="row">
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="car-container card-img-top">
                            <a href="#">
                                <picture>
                                    <source media="(min-width:650px)" srcset="<?php echo esc_url($image['url']); ?>">
                                    <source media="(min-width:465px)" srcset="<?php echo esc_url($image['url']); ?>">
                                    <img src="<?php echo esc_url($image['url']); ?>"
                                        alt="<?php echo esc_attr($image['alt']); ?>" style="width:auto;" />
                                </picture>
                            </a>
                            <div class="label-top shadow-sm">
                                <a class="text-white" href="#"> <?= $condition ?></a>
                            </div>
                            <span>
                                <div class="label-bottom shadow-sm">
                                    <?= $vehicle ?>
                                </div>
                                <!-- if the car has this information that the field will display on the front end  -->
                                <?php
                            if (!empty($gears)):?>
                                <div class="label-bottom shadow-sm">
                                    <?= $gears ?>
                                </div>
                                <?php endif; ?>
                                <?php
                            if (!empty($engine)):?>
                                <div class="label-bottom shadow-sm">
                                    <?= $engine ?>
                                </div>
                                <?php endif; ?>
                                <?php
                            if (!empty($miles)):?>
                                <div class="label-bottom shadow-sm">
                                    <?= $miles ?>
                                </div>
                                <?php endif; ?>
                            </span>
                        </div>
                        <h5 class="card-title mt-2">
                            <?= $title ?>
                        </h5>
                        <h6 class="card-sub-title">
                            <?= $sub_title ?>
                        </h6>
                        <div class="price-body">
                            <div class="cost-of-car">
                                <span class="per-month-cost"><?= $cost_per_month ?></span>
                            </div>
                            <div class="cost-of-car">
                                <span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>
                                <span class="float-end">
                                    <i class="far fa-heart" style="cursor: pointer"></i>
                                </span>
                            </div>
                        </div>
                        <div class="total-price-body mb-2">
                            <div class="total-cost-of-car">
                                <span> <?= $total_cost ?> </span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

endforeach;
?>



<?php
wp_reset_postdata(); ?>