<?php get_header();?>

<main>
    <style>
        #gallery {
            padding-top: 40px;
            margin: 50px 0px 60px 0px;
        }

        @media screen and (min-width: 991px) {
            #gallery {
                padding: 100px 30px 0 30px;
            }
        }

        .img-wrapper {
            position: relative;
            margin-top: 15px;
            height: 100%;
        }

        .img-wrapper img {
            width: 100%;
            object-fit: cover;
            height: 100%;
        }

        .img-overlay {
            background: rgba(0, 0, 0, 0.7);
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
        }

        .img-overlay i {
            color: #fff;
            font-size: 3em;
        }

        #overlay {
            background: rgba(0, 0, 0, 0.7);
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 999999999;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        #overlay img {
            margin: 0;
            width: 80%;
            height: auto;
            -o-object-fit: contain;
            object-fit: contain;
            padding: 5%;
        }

        @media screen and (min-width: 768px) {
            #overlay img {
                width: 60%;
            }
        }

        @media screen and (min-width: 1200px) {
            #overlay img {
                width: 50%;
            }
        }

        #nextButton {
            color: #fff;
            font-size: 2em;
            transition: opacity 0.8s;
        }

        #nextButton:hover {
            opacity: 0.7;
        }

        @media screen and (min-width: 768px) {
            #nextButton {
                font-size: 3em;
            }
        }

        #prevButton {
            color: #fff;
            font-size: 2em;
            transition: opacity 0.8s;
        }

        #prevButton:hover {
            opacity: 0.7;
        }

        @media screen and (min-width: 768px) {
            #prevButton {
                font-size: 3em;
            }
        }

        #exitButton {
            color: #fff;
            font-size: 2em;
            transition: opacity 0.8s;
            position: absolute;
            top: 15px;
            right: 15px;
        }

        #exitButton:hover {
            opacity: 0.7;
        }

        @media screen and (min-width: 768px) {
            #exitButton {
                font-size: 3em;
            }
        }
    </style>
    <!-- breadcrumb end -->
    <!-- Portfolio Page Start -->

    <section id="gallery">
        <div class="container">
            <div id="image-gallery">
                <div class="row">
                    <?php if (have_rows('gallery')) : ?>
                        <?php while (have_rows('gallery')) : the_row();
                            $image = get_sub_field('image');
                            // $text = get_sub_field('text');
                        ?>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 image">
                                <div class="img-wrapper">
                                    <a href="<?php echo esc_url($image['url']); ?>"><img src="<?php echo esc_url($image['url']); ?>" class="img-responsive"></a>
                                    <div class="img-overlay">
                                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div><!-- End row -->
            </div><!-- End image gallery -->
        </div><!-- End container -->
    </section>
    <!-- Portfolio Page End -->
</main>
<?php get_footer(); ?>
<script id="rendered-js">
    // Gallery image hover
    $(".img-wrapper").hover(
        function() {
            $(this).find(".img-overlay").animate({
                opacity: 1
            }, 600);
        },
        function() {
            $(this).find(".img-overlay").animate({
                opacity: 0
            }, 600);
        });


    // Lightbox
    var $overlay = $('<div id="overlay"></div>');
    var $image = $("<img>");
    var $prevButton = $('<div id="prevButton"><i class="fa fa-chevron-left"></i></div>');
    var $nextButton = $('<div id="nextButton"><i class="fa fa-chevron-right"></i></div>');
    var $exitButton = $('<div id="exitButton"><i class="fa fa-times"></i></div>');

    // Add overlay
    $overlay.append($image).prepend($prevButton).append($nextButton).append($exitButton);
    $("#gallery").append($overlay);

    // Hide overlay on default
    $overlay.hide();

    // When an image is clicked
    $(".img-overlay").click(function(event) {
        // Prevents default behavior
        event.preventDefault();
        // Adds href attribute to variable
        var imageLocation = $(this).prev().attr("href");
        // Add the image src to $image
        $image.attr("src", imageLocation);
        // Fade in the overlay
        $overlay.fadeIn("slow");
    });

    // When the overlay is clicked
    $overlay.click(function() {
        // Fade out the overlay
        $(this).fadeOut("slow");
    });

    // When next button is clicked
    $nextButton.click(function(event) {
        // Hide the current image
        $("#overlay img").hide();
        // Overlay image location
        var $currentImgSrc = $("#overlay img").attr("src");
        // Image with matching location of the overlay image
        var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
        // Finds the next image
        var $nextImg = $($currentImg.closest(".image").next().find("img"));
        // All of the images in the gallery
        var $images = $("#image-gallery img");
        // If there is a next image
        if ($nextImg.length > 0) {
            // Fade in the next image
            $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
        } else {
            // Otherwise fade in the first image
            $("#overlay img").attr("src", $($images[0]).attr("src")).fadeIn(800);
        }
        // Prevents overlay from being hidden
        event.stopPropagation();
    });

    // When previous button is clicked
    $prevButton.click(function(event) {
        // Hide the current image
        $("#overlay img").hide();
        // Overlay image location
        var $currentImgSrc = $("#overlay img").attr("src");
        // Image with matching location of the overlay image
        var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
        // Finds the next image
        var $nextImg = $($currentImg.closest(".image").prev().find("img"));
        // Fade in the next image
        $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
        // Prevents overlay from being hidden
        event.stopPropagation();
    });

    // When the exit button is clicked
    $exitButton.click(function() {
        // Fade out the overlay
        $("#overlay").fadeOut("slow");
    });
    //# sourceURL=pen.js
</script>