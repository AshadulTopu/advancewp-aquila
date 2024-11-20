<?php
/*
* Main template file.
*
* @package Aquila 
*/

?>

<?php get_header(); ?>
    
<!-- <main>
    <h1>content</h1>
</main> -->
<div class="container">
    <?php if ( have_posts() ) : ?>
    <div class="row g-4">
    <?php
    // $index = 0;
    // $no_of_columns = 3;
    
    while ( have_posts() ) : the_post();

    // var_dump( get_the_ID() );
    // var_dump( the_post() );
    // if ($index % $no_of_columns == 0) {
    ?>
    <div class="col-lg-4 col-md-6 col-sm-12">
        <?php get_template_part( 'template-parts/content'); ?>
    <?php
    // }
    // $index++;
    // if ($index !== 0 && $index % $no_of_columns == 0) {
    ?>
    </div>
    <?php
    // }
    ?>
    <?php endwhile; ?>
    </div>
    <?php else : 
        get_template_part( 'template-parts/content-none', 'none' );
    endif;
    // get_template_part( 'template-parts/content-none', 'none' );
    ?>
</div>

<?php get_footer(); ?>

    
