<?php get_header();

$category = $_GET['product'];
?>

<div class="container-fluid" style="padding: 0;">
    <div class="image">
        <img src="<?php bloginfo('template_directory'); ?>/assets/img/home.jpg" style="width: 100%;object-fit: cover;height: 100vh;" alt="Alternate Text" />
    </div>
</div>
<section class="blog blog-category blog-animated py-5">
    <!--Content-->

    <div class="container">

        <?php switch ($category) {
            case "curtains": ?>
                <!--Blog content-->
                <div class="we-section">
                    <div class="row">

                        <div class="col-12 col-md-12">
                            <h2 class="text-center">
                                Curtains
                            </h2>
                            <div class="we-text"><span>
                            If you're looking for the best curtains shop in Bangalore,
                             The Royal Furnishing offers you the highest quality curtains in a wide range at the right price. Our customer’s google reviews 
                             and amazing customer service make us one of the top curtain store in Bangalore.
                          
                            </div>
                        </div>
                    </div>
                </div>
                <?php break; ?>

            <?php
            case "Mattresses": ?>
                <!--Blog content-->
                <div class="we-section">
                    <div class="row">

                        <div class="col-12 col-md-12">
                            <h2 class="text-center">
                            Mattresses
                            </h2>
                            <div class="we-text">
                                <span>
                                If you're looking for the best Mattress shop in Bangalore, The Royal Furnishing offers you the highest
                                 quality mattress in a wide range at the right price.
                                 Our customer’s google reviews and amazing customer service make us one of the top mattress store in Bangalore. 
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php break; ?>

            <?php
            case "Upholstery": ?>
                <!--Blog content-->
                <div class="we-section">
                    <div class="row">

                        <div class="col-12 col-md-12">
                            <h2 class="text-center">
                            Upholstery
                            </h2>
                            <div class="we-text">
                            If you're looking for the best Upholstery shop in Bangalore, The Royal Furnishing offers you the highest quality Upholstery services in a wide range at the right price.
                             Our customer’s google reviews and amazing customer service make us one of the top upholstery store in Bangalore. 
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php break;  ?>

            <?php
            case "Wallpapers":  ?>
                <!--Blog content-->
                <div class="we-section">
                    <div class="row">

                        <div class="col-12 col-md-12">
                            <h2 class="text-center">
                            Wallpapers
                            </h2>
                            <div class="we-text">
                            If you're looking for the Best Home Wallpaper Shop in Bangalore, The Royal Furnishing offers you the highest quality Wallpaper in a wide range at the right price.
                             Our customer’s google reviews and amazing customer service make us one of the top Home Wallpaper store in Bangalore. 
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php break; ?>

            <?php
            case "Blinds": ?>
                <!--Blog content-->
                <div class="we-section">
                    <div class="row">

                        <div class="col-12 col-md-12">
                            <h2 class="text-center">
                            Blinds
                            </h2>
                            <div class="we-text">
                            If you're looking for the best Window Blind shop in Bangalore, The Royal Furnishing offers you the highest quality Window Blind in a wide range at the right price. 
                            Our customer’s google reviews and amazing customer service make us one of the top Window Blind store in Bangalore. 
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php break; ?>

            <?php
            case "Customised Sofas":  ?>
                <!--Blog content-->
                <div class="we-section">
                    <div class="row">

                        <div class="col-12 col-md-12">
                            <h2 class="text-center">
                            Customised Sofas
                            </h2>
                            <div class="we-text">
                            If you're looking for the best-customized sofa shop in Bangalore, The Royal Furnishing offers you the highest quality sofa in a wide range at the right price. 
                            Our customer’s google reviews and amazing customer service make us one of the top customized sofa store in Bangalore. 
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php break; ?>

            <?php
            case "Flooring": ?>
                <!--Blog content-->
                <div class="we-section">
                    <div class="row">

                        <div class="col-12 col-md-12">
                            <h2 class="text-center">
                            Flooring
                            </h2>
                            <div class="we-text">
                            If you're looking for the best wooden flooring shop in Bangalore, The Royal Furnishing offers you the highest quality wooden flooring in a wide range at the right price. 
                            Our customer’s google reviews and amazing customer service make us one of the top wooden flooring store in Bangalore. 
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php break; ?>

            <?php
            case "Carpets":  ?>
                <!--Blog content-->
                <div class="we-section">
                    <div class="row">

                        <div class="col-12 col-md-12">
                            <h2 class="text-center">
                            Carpets
                            </h2>
                            <div class="we-text">
                            If you're looking for the best Rugs and Carpets shop in Bangalore, The Royal Furnishing offers you the highest quality Carpets in a wide range at the right price.
                             Our customer’s google reviews and amazing customer service make us one of the top Rugs and Carpet store in Bangalore. 
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php break; ?>

            <?php
            case "Accessories":  ?>
                <!--Blog content-->
                <div class="we-section">
                    <div class="row">

                        <div class="col-12 col-md-12">
                            <h2 class="text-center">
                            Accessories
                            </h2>
                            <div class="we-text">
                            If you're looking for the best Home Decor shop in Bangalore, The Royal Furnishing offers you the highest quality Home Decor Items in a wide range at the right price. 
                            Our customer’s google reviews and amazing customer service make us one of the top Home Decor store in Bangalore. 
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php break; ?>

            <?php
            case "hospitality-cat":  ?>
                <!--Blog content-->
                <div class="we-section">
                    <div class="row">

                        <div class="col-12 col-md-12">
                            <h2 class="text-center">
                            hospitality
                            </h2>
                            <div class="we-text">
                            If you're looking for the best Hospitality products in Bangalore, The Royal Furnishing offers you the highest quality Home Decor Items in a wide range at the right price. 
                            Our customer’s google reviews and amazing customer service make us one of the top Home Decor store in Bangalore. 
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
        <?php break;
        } ?>
        </br></br></br></br>

        <div class="row">

            <!--Blog item-->
            <?php

            $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
            $condition = array(
                "post_type" => "products",
                'category_name'  => "$category",
                'posts_per_page' => 20,
                'paged' => $paged
            );
            $the_query = new WP_Query($condition);
            if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    $id = get_the_ID();
            ?>
                    <div class="col-sm-6 col-md-4">
                        <article>
                            <a href="<?php echo (get_permalink($id)); ?>" class="blog-link">
                                <div class="image" style="background-image:url(<?= get_the_post_thumbnail_url($id) ?>)">
                                    <img src="<?= get_the_post_thumbnail_url($id) ?>" alt="" />
                                </div>
                                <div class="entry entry-table">
                                    <div class="title">
                                        <h2 class="h5"><?php the_title_attribute(); ?></h2>
                                    </div>
                                </div>
                            </a>
                        </article>
                    </div>
            <?php
                }
                wp_reset_postdata();
            } ?>


        </div>

        <!--Pagination-->

        <div class="pagination-wrapper">
            <?php echo paginate_links(); ?>
            <?php
            $prev_arrow = is_rtl() ? '&raquo;' : '&laquo;';
            $next_arrow = is_rtl() ? '&laquo;' : '&raquo;';
            echo paginate_links(array(
                'total' => $the_query->max_num_pages,
                'prev_text'        => $prev_arrow,
                'next_text'        => $next_arrow,
                'type'             => 'list',
            ));
            ?>
        </div>
    </div>
    <!--/container-->
</section>
<style>
    span.current {
        z-index: 2;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(60, 85, 112, 0.25);
    }
</style>

<?php get_footer(); ?>
<script>
    $('.page-numbers').addClass('pagination justify-content-center');
    $('.page-numbers li').addClass('page-item');
    $('.page-numbers li a').addClass('page-link');
    $('.page-numbers li span').addClass('page-link');
</script>