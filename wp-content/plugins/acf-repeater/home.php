<?php
/**
 * Template Name: Home page
 *
 * Description: BrandMe Cambodia loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage BrandMe_Cambodia
 * @since BrandeMe Technology 1.1
 */

get_header(); ?>

    <div class="container products-and-services">
        <div class="row">
            <?php $my_post = get_post(6); ?>

            <h2>Products We Sell &amp; Services We Offer</h2>
            <p><?php echo $my_post->post_content; ?></p>

            <div class="cols clearfix">
                <?php
                    $args = array('cat'=> '3', 'orderby'=> 'title', 'order'=> 'ASC');
                    query_posts( $args );
                ?>
                <?php $count = 0; ?>
                <?php if (have_posts()) : while (have_posts()): the_post(); ?>
                    <?php
                        $count++;
                        if ($count == 1) { $icon = "fa-lemon-o"; }
                        if ($count == 2) { $icon = "fa-tint"; }
                        if ($count == 3) { $icon = "fa-tree"; }
                        if ($count == 4) { $icon = "fa-ship"; };
                    ?>

                    <div class="col-md-3 col-xs-6">
                        <span class="fa <?php echo $icon; ?>"></span>
                        <h3 class="text-center"><?php the_title(); ?></h3>
                        <p id="products-clamp-<?php echo $count; ?>" class="line-clamp"><?php echo get_the_content(); ?></p>
                    </div>
                <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>
            </div>
            <a class="cta round" href="<?php echo $my_post->guid; ?>" title="">More Products &amp; Services</a>
        </div>
    </div>

    <div class="grey-bg full-width">
        <div class="container">
            <!-- get our partners page -->
            <?php $my_post = get_post(12); ?>

            <h2>Our Partners</h2>
            <p><?php echo $my_post->post_content; ?></p>

            <div class="partner-contents clearfix">
                <?php
                    $args = array('cat'=> '4', 'orderby'=> 'title', 'order'=> 'DESC');
                    query_posts( $args );
                    $count = 0;
                ?>
                <?php if (have_posts()) : while (have_posts()): the_post(); ?>
                    <?php $count++ ?>
                    <div class="partner col-md-4 col-xs-6">
                        <?php
                            $thumb_id = get_post_thumbnail_id();
                            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                            $thumb_url = $thumb_url_array[0];
                        ?>
                        <img class="img-responsive" src="<?php echo $thumb_url; ?>" alt="" width="358" height="253" />
                        <div class="partner-wrapper">
                            <h3 class="text-center"><?php the_title(); ?></h3>
                            <p id="partner-clamp-<?php echo $count;  ?>" class="line-clamp"><?php echo get_the_content(); ?></p>
                            <a class="cta" href="<?php the_permalink(); ?>" title="">Read More</a>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>
            </div>
            <a class="cta round" href="<?php echo $my_post->guid; ?>" title="">More Our Partners</a>
        </div>
    </div>

    <div class="container latest-news">
        <div class="row">
            <!-- get latest news page -->
            <?php $my_post = get_post(14); ?>

            <h2>Latest News &amp; Events</h2>
            <p><?php echo $my_post->post_content; ?></p>

            <div class="blog">

                <?php
                    $args = array('cat'=> '5', 'orderby'=> 'title', 'order'=> 'DESC');
                    query_posts( $args );
                    $count = 0;
                ?>
                <?php if (have_posts()) : while (have_posts()): the_post(); ?>
                    <?php $count++ ?>
                    <div class="news col-md-6 col-xs-6">
                        <h3><?php the_title(); ?></h3>

                        <?php
                            $thumb_id = get_post_thumbnail_id();
                            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                            $thumb_url = $thumb_url_array[0];
                        ?>
                        <img class="img-responsive" src="<?php echo bloginfo('template_directory') ?>/images/blank.gif" alt="" width="564" height="467" style="background-image: url('<?php echo $thumb_url; ?>');" />
                        <em>By: <?php echo get_the_author(); ?>, <?php echo the_date(); ?></em>
                        <p id="news-clamp-<?php echo $count; ?>" class="line-clamp"><?php echo get_the_content(); ?></p>
                        <a class="cta" href="<?php the_permalink(); ?>">Read More</a>
                    </div>
                <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </div>

    <div class="grey-bg full-width">
        <div class="container">
            <!-- get gallery page -->
            <?php $my_post = get_post(70); ?>
            <h2>Gallary</h2>
            <div class="gallery clearfix">
                <?php if( have_rows('images', 70) ): ?>
                    <section>
                        <?php $count = 0; ?>
                        <?php while( have_rows('images', 70) ): the_row(); ?>
                            <?php $count++; ?>
                            <?php $image = get_sub_field('image', 'full'); ?>
                            <?php $title = get_sub_field('title'); ?>
                            <?php if ($count <= 6): ?>
                                <article class="fancybox-thumb" rel="fancybox-thumb" href="<?php echo $image; ?>" title="<?php echo $title; ?>">
                                    <div class="gallery-container">
                                        <figure class="image-frame">
                                            <span class="image-holder">
                                                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/blank.gif" width="730" height="465" alt="" style="background-image: url('<?php echo $image; ?>')" />
                                            </span>
                                        </figure>
                                        <div class="gallery-detail">
                                            <?php if ($title): ?>
                                                <h4> <?php echo $title; ?></h4>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </article>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </section>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
            <a class="cta round" href="<?php echo $my_post->guid; ?>" title="">More Our Partners</a>
        </div>
    </div>

<?php get_footer(); ?>