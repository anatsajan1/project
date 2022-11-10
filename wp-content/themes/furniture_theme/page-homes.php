<?php get_header(); ?>

<div class="container-fluid" style="padding: 0;">
    <div class="image">
        <img src="<?php bloginfo('template_directory'); ?>/assets/img/home.jpg" style="width: 100%;object-fit: cover;height: 100vh;" alt="Alternate Text" />
    </div>
</div>
<section class="blog blog-category blog-animated py-5">
    <!--Content-->

    <div class="container">


        <!--Blog content-->

        <div class="row">

            <!--Blog item-->
            <?php

                $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                $condition = array(
                    "post_type"=>"products",
                    'category_name'  => 'home-cat',
                    'posts_per_page' => 9,
                     'paged' => $paged 
                );
                $the_query = new WP_Query($condition);
                if($the_query->have_posts()){
                    while($the_query->have_posts()){
                        $the_query->the_post();?>
                        <?php $id=get_the_ID();?>
                <div class="col-sm-6 col-md-4">
                    <article>
                        <a href="<?php echo (get_permalink($id)); ?>" class="blog-link">
                            <div class="image" style="background-image:url(<?= get_the_post_thumbnail_url($id)?>)">
                                <img src="<?= get_the_post_thumbnail_url($id)?>" alt="" />
                            </div>
                            <div class="entry entry-table">
                                <div class="title">
                                    <h2 class="h5"><?php the_title_attribute();?></h2>
                                </div>
                            </div>
                        </a>
                    </article>
                </div>
            <?php 
                    }
                    wp_reset_postdata();
                }?>
            

        </div>

        <!--Pagination-->

        <div class="pagination-wrapper">
            <?php echo paginate_links();?>
            <?php
                $prev_arrow = is_rtl() ? '&raquo;' : '&laquo;';
                $next_arrow = is_rtl() ? '&laquo;' : '&raquo;';
                echo paginate_links(array(
                'total' => $the_query->max_num_pages,
                'prev_text'		=> $prev_arrow,
                'next_text'		=> $next_arrow,			
                'type' 			=> 'list',	
                ));
            ?>
        </div>
    </div>
    <!--/container-->
</section>
<style>
    span.current{
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