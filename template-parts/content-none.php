<?php
/**
 * No content template file.
 *
 * @package Aquila
 */
?>

<div class="no-content">
    <h2><?php esc_html_e( 'No content found', 'aquila' ); ?></h2>
</div>

<div class="page-content">
    <?php
    if ( is_home() && current_user_can( 'publish_posts' ) ) { ?>
        <p>
            <?php
            printf(
                wp_kses(
                    /* translators: 1: link to WP admin new post page. */
                    __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'aquila' ),
                    [
                        'a' =>[
                            'href'=>[]
                        ]
                    ]
                 ),
                 esc_url(admin_url( 'post-new.php', 'aquila' ))
            )
            ?>
        </p>
    <?php
    }

    elseif ( is_search() ) { ?>
        <p>
            <?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'aquila' ); ?>
            <?php get_search_form(); ?>
        </p>
    <?php

    } else { ?>
        <p>
            <?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'aquila' ); ?>
        </p>

        <?php get_search_form(); ?>
    <?php
    } ?>        
</div>