<?php
/**
 * Template part for displaying page content header in page.php
 *
 * @package Aquila
 */

 $the_post_id = get_the_ID();
 $has_post_thumbnail = get_the_post_thumbnail( $the_post_id );

?>

<header class="entry-header">
    <!-- post thumbnail -->
    <?php if ( $has_post_thumbnail ) : ?>
        <div class="entry-post-thumbnail">
            <a href="<?php the_permalink(); ?>">
                <!-- <?php the_post_thumbnail(); ?> -->
                <?php the_post_custom_thumbnail($the_post_id, 'featured-thumbnail', [ 'class' => 'attachment-featured-thumbnail size-featured-thumbnail', 'sizes' => '(max-width: 350px) 350px, 235px' ]); ?>
            </a>
        </div>
    <?php endif; ?>
    <!-- post title  -->
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
</header>