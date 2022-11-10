<?php get_header(); ?>
<section class="header-content">
    <style>
        .hero-banner .item {
            position: relative;
        }

        .hero-banner .item::after {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.25);
            z-index: 0;
            content: "";
        }

        .hero-banner .item .container {
            z-index: 1;
        }

        .hero-banner .item .container .hero-text {
            max-width: 600px;
        }
        @media only screen and (min-width:768px) {
            .header-content .container-fluid{
                padding: 0;
            }
        }
    </style>

    <h2 class="d-none">Slider element</h2>

    <?php if (have_rows('hero_banner')) : ?>
        <div class="container-fluid">

            <div class=" hero-banner owl-slider owl-carousel owl-theme" data-autoplay="true">

                <!--Slide item-->
                <?php
                while (have_rows('hero_banner')) : the_row();
                    $slider_image = get_sub_field('hero_image');
                    $slider_heading = get_sub_field('hero_heading');
                    $hero_text = get_sub_field('hero_text');
                    $hero_link = get_sub_field('hero_link');
                ?>
                    <div class="item d-flex align-items-center" style="position: relative;">
                        <div style="position: absolute; top: 0; width: 100%; height: 100%; z-index: -1;">
                            <video loading="lazy" src="<?php echo $slider_image['url'] ?>" width="100%" height="100%" style="object-fit:cover" autoplay loop muted>
                                Your browser does not support the video tag.
                            </video>
                            <!-- 					<iframe  src="https://www.youtube.com/embed/Uttad0e6XTk?autoplay=1&cc_load_policy=1&modestbranding=1&modestbranding=1" title="YouTube video player" frameborder="0" allow=""></iframe> -->
                            <!-- 					<iframe src="https://player.vimeo.com/video/661100185?h=44db2045c4" width="100%" height="100%" frameborder="0"></iframe> -->
                        </div>
                        <div class="container">
                            <div class="caption">
                                <div class="animated" data-start="fadeInUp">
                                    <div class="promo pt-3">
                                        <div class="title title-sm p-0">
                                            <?php echo $slider_heading; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="animated hero-text" data-start="fadeInUp">
                                    <?php echo $hero_text; ?>
                                </div>
                                <div class="animated" data-start="fadeInUp">
                                    <div class="pt-3">
                                        <a href="<?php echo $hero_link['url'] ?>" target="_blank" class="btn btn-outline-warning">Click Here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

                <!--Slide item-->

                <!-- <div class="item d-flex align-items-center" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/slide-2.jpg)">
                <div class="container">
                    <div class="caption">
                        <div class="animated" data-start="fadeInUp">
                            <div class="big-text big-text-sm">
                                <span>Save now </span>
                                <span>50%</span>
                                <span>on new kitchen</span>

                                <div>
                                    <a href="#" target="_blank" class="btn btn-info btn-block">Shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="animated d-none" data-start="fadeInUp">
                            <a href="#" target="_blank" class="btn btn-info">Buy this template</a>
                            <a href="#" target="_blank" class="btn btn-outline-light"> Get first discount</a>
                        </div>

                        <div class="animated" data-start="fadeInUp">
                            <div class="promo pt-5">
                                <div class="badge badge-secondary">New arrival</div>
                                <div class="h2 p-0 mt-1">Kitchen Moderna</div>
                                <div class="price">
                                    <span>$7299,99</span>
                                    <span>8399,99</span>
                                </div>
                                <small class="d-none d-sm-block">** Product prices with discount are available until the end of stock </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

                <!--Slide item-->

                <!-- <div class="item d-flex align-items-center" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/slide-3.jpg)">
                <div class="container">
                    <div class="caption">
                        <div class="promo text-center">
                            <div class="animated" data-start="fadeInUp">
                                <div class="title title-sm p-0">Bathroom Furniture</div>
                            </div>
                            <div class="animated" data-start="fadeInUp">
                                Score new arrivals from latest items
                                <br />
                                Multipurpose eCommerce template ready
                            </div>
                            <div class="animated" data-start="fadeInUp">
                                <a href="#" target="_blank" class="btn btn-light">New collection</a>
                                <a href="#" target="_blank" class="btn btn-outline-light"> Get first discount</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            </div>
            <!--/owl-slider-->
        </div>

    <?php else : endif; ?>
</section>

</div>

<!-- ========================  We Section ======================== -->
<style>
    .we-section {
        margin: 75px 0px 0px 0px;
        height: auto;
        overflow-x: hidden;
        max-width: 100vw;
    }

    .we-section .col-12 {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .we-section .we-text {
        max-width: 700px;
        width: 100%;
        padding: 20px;
        color: black;
        text-align: justify;
        font-size: 17px
    }

    .we-section h2 {
        font-size: 35px;
        color: black;
    }
</style>
<div class="we-section">
    <div class="row">

        <div class="col-12 col-md-12">
            <h2 class="text-center">
                What we are?
            </h2>
            <div class="we-text">
                “The Royal Furnishing.”is a Manufacturer of the wide spectrum Window Blind, Window
                Curtain, Bed Sheet, etc. We are manufacturing these products using premium grade raw
                material that is procured from the authentic vendors of the market. We offer these
                products at reasonable rates and deliver these within the promised time-frame.
                </span>
            </div>
        </div>
    </div>
</div>
<div class="wrapper">
    <!-- ========================  Featured categories ======================== -->

    <section class="blog blog-block">

        <!--Header-->

        <header>
            <div class="container">
                <h2 class="title">Featured categories</h2>
                <div class="text">
                    <p>We just keep things minimal. <a href="#" class="btn btn-main">View more</a></p>
                </div>
            </div>
        </header>

        <!--Content-->

        <div class="container">

            <div class="scroll-wrapper">

                <div class="row scroll text-center">

                    <!--Item-->
                    <?php
                    $home_cat = get_field('home_categories');
                    $hospitality_cat = get_field('hospitality_categories');
                    ?>
                    <div class="col-md-4 offset-md-2">
                        <article data-3d>
                            <a href="homes">
                                <div class="image" style="height: 350px;">
                                    <video src="<?php echo $home_cat['url'] ?>" width="100%" height="100%" style="object-fit: cover;" autoplay loop muted>
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                                <div class="entry entry-block">
                                    <div class="title">
                                        <h2 class="h4">Home</h2>
                                    </div>
                                    <div class="description d-none d-sm-block">
                                        <p>
                                            Top picks four your desire
                                        </p>
                                    </div>
                                </div>
                                <div class="show-more">
                                    <span class="btn btn-clean">Shop now</span>
                                </div>
                            </a>
                        </article>
                    </div>

                    <!--Item-->

                    <div class="col-md-4">
                        <article data-3d>
                            <a href="hospitality">
                                <div class="image" style="height: 350px;">
                                    <video src="<?php echo $hospitality_cat['url'] ?>" width="100%" height="100%" style="object-fit: cover;" autoplay loop muted>
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                                <div class="entry entry-block">
                                    <div class="title">
                                        <h2 class="h4">Hospitality</h2>
                                    </div>
                                    <div class="description d-none d-sm-block">
                                        <p>
                                            Explore popular devices
                                        </p>
                                    </div>
                                </div>
                                <div class="show-more">
                                    <span class="btn btn-clean">Shop now</span>
                                </div>
                            </a>
                        </article>
                    </div>

                </div>
                <!--/row-->
            </div>

        </div>
        <!--/container-->

    </section>

    <!-- ========================  Cards ======================== -->

    <section class="cards">

        <!--Header-->

        <header>
            <div class="container">
                <h2 class="title">Our Collections</h2>
                <div class="text">
                    <p>
                        We are counted amongst the known manufacturers and Window Blind, Window Curtain, Bed Sheet,etc.
                        We offer these products at most affordable prices.
                    </p>
                </div>
            </div>
        </header>

        <!--Content-->

        <div class="container">

            <div class="row">

                <!--Item-->
                <?php
                if (have_rows('collections')) :
                    $count = 0;
                ?>
                    <?php while (have_rows('collections')) : the_row();
                        $collections_post = get_sub_field('collection_post');
                        $featured_img_url = get_post_thumbnail_id($collections_post->ID);
                    ?>
                        <div class="col-lg-4">
                            <figure>
                                <figcaption style="background-image:url(<?php echo wp_get_attachment_url($featured_img_url); ?>)">
                                    <img loading="lazy" src="<?php echo wp_get_attachment_url($featured_img_url); ?>" alt="" />
                                </figcaption>
                                <a href="<?php echo get_permalink($collections_post->ID); ?>" class="btn btn-clean"><?php echo esc_html($collections_post->post_title); ?></a>
                            </figure>
                        </div>
                        <!--Item-->

                        <?php $count = $count + 1; ?>
                    <?php endwhile; ?>
                <?php endif; ?>

                <!--Item-->
            </div>
            <!--/row-->

        </div>
        <!--/container-fluid-->

    </section>
</div>

<section class="hero is-info">
    <div class="hero-body">
        <div class="container">
            <div id="customers-testimonials" class="owl-carousel">
                <div class="box">
                    <div class="level-item">
                        <div>
                            <div class="content">
                                Good looking and durable in quality worth the price paid for the purchase. I recommend it to all interior decorating lovers.

                                <h4 class="testimonial-name">
                                    George V A
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="level-item">
                        <div>
                            <div class="content">
                                It's very nice, worth the money, designs are decent and elegant, and I love the product and brand. You'll have built trust by understanding the needs of the customers.
                                <h4 class="testimonial-name">
                                    Adhil
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="level-item">
                        <div>
                            <div class="content">
                                We purchased a leather sofa and it is our favorite piece of furniture. From the shopping experience to the product selection and delivery it is a completely amazing experience from Royal furnishing
                                <h4 class="testimonial-name">
                                    Aaditya
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="hero-foot">
    </div>

</section>


<style>
    .testimonial-name {
        margin-top: 23px !important;
        font-size: 14px;
        font-weight: 500;
    }

    .avatar {
        margin: auto;
        border-radius: 50%;
        max-width: 96px;
    }

    #customers-testimonials .box {
        opacity: .2;
        transform: scale3d(0.8, 0.8, 1);
        transition: all 0.3s ease-in-out;
    }

    #customers-testimonials .owl-item.active.center .box {
        opacity: 1;
        transform: scale3d(1.0, 1.0, 1);
    }

    .hero {
        background-color: #d6f3ff;
        padding: 100px 0px;
    }
</style>
<div class="wrapper">
    <?php get_footer(); ?>
    <script>
        $(document).ready(function($) {

            $('#customers-testimonials').owlCarousel({
                loop: true,
                center: true,
                // autoplay: true,            
                autoplay: true,
                autoplayTimeout: 3500,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    1170: {
                        items: 3
                    }
                }
            });
        });
    </script>