<?php get_header(); ?>

<!-- ========================  Contact ======================== -->

<section class="contact">
    <div id="map" style="background-position: bottom !important;background-size: cover !important;background: url(<?php bloginfo('template_directory'); ?>/assets/img/contact/contact.jpg);"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="contact-block">
                    <div class="contact-info">
                        <div class="row">
                            <div class="col-sm-5">
                                <figure class="text-center">
                                    <span class="icon icon-map-marker"></span>
                                    <figcaption>
                                        <strong>Where are we?</strong>
                                        <span>#915, 5th Main,Sector 7, HSR Layout, <br/>Near Salarpuria Apartment,<br />
                                            Opp.Food One Hypermarket, Bengaluru - 560 102
                                        </span>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-sm-4">
                                <figure class="text-center">
                                    <span class="icon icon-phone"></span>
                                    <figcaption>
                                        <strong>Call us</strong>
                                        <span>
                                            <strong></strong> +91 8618075451 <br />
                                            <strong></strong> +91 8048657909
                                        </span>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-sm-3">
                                <figure class="text-center">
                                    <span class="icon icon-clock"></span>
                                    <figcaption>
                                        <strong>Working hours</strong>
                                        <span>
                                            <strong>Mon</strong> - Sat: 10 am - 6 pm <br />
                                            <strong>Sun</strong> 12pm - 2 pm
                                        </span>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>

                    <div class="contact-info">
                        <h2 class="title">Send an email</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus quisquam reprehenderit, quae corrupti ad blanditiis provident corporis doloremque aliquam deserunt autem eligendi optio voluptate quia.
                        </p>

                        <div class="contact-form-wrapper">

                            <div class="contact-form clearfix">
                                <?php echo do_shortcode('[contact-form-7 id="49" title="contact"]');?>
                            </div>
                        </div>
                    </div>

                </div>
                <!--/contact-block-->
            </div>
            <!--col-sm-8-->
        </div>
        <!--/row-->
    </div>
    <!--/container-->
</section>


<?php get_footer(); ?>