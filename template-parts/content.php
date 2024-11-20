<?php
/**
 * Content template file.
 *
 * @package Aquila
 */
?>


     <!-- <div class="post-box border border-primary rounded-2 p-3 mb-4">
        <?php
        if (is_home() && !is_front_page()) {
        ?>
        <h3> <?php the_title(); ?> </h3>
        <?php 
        }
        ?>
        <div class="post-meta">
            <span> <?php echo get_the_date('F j, Y'); ?> </span>
            <span> <?php echo get_the_author(); ?> </span>
        </div>
        <div class="post-thumbnail">
            <?php the_post_thumbnail(); ?>
        </div>
        <p class="post-excerpt"> <?php the_excerpt(); ?> </p>
        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
    </div> -->

    <article id="post-<?php the_ID(); ?>" <?php post_class('post-box mb-4'); ?>>
        <?php
        get_template_part('template-parts/components/blog/entry-header', );
        get_template_part('template-parts/components/blog/entry-meta', );
        get_template_part('template-parts/components/blog/entry-content', );
        get_template_part('template-parts/components/blog/entry-footer', );
        ?>
    </article>