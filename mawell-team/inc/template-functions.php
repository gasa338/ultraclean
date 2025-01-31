<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package MaxxWell
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function maxxwell_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'maxxwell_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function maxxwell_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'maxxwell_pingback_header' );



/** ====================================
 * general purpose function
 * ==================================
 */
function mw_get_image($image_id): array {
    return [
        'url' => wp_get_attachment_url($image_id),
        'alt' => get_post_meta($image_id, '_wp_attachment_image_alt', TRUE),
        'srcset' => wp_get_attachment_image_srcset($image_id),
    ];
}

function mw_return_cf7_shortcode(): array {
    $args = [
        'post_type' => 'wpcf7_contact_form',
        'post_status' => 'publish',
        'posts_per_page' => -1,
    ];

    $the_query = new WP_Query($args);
    $output = [];
    if ($the_query->have_posts()) {
        while ($the_query->have_posts()) {
            $the_query->the_post();
            $output["[contact-form-7 id='" . get_the_ID() . "' title='" . get_the_title() . "']"] = get_the_title();
        }
    }
    wp_reset_postdata();
    return $output;
}



function maxwell_get_post_latest_extended( $type = 'latest', $posts = [], $post_type = 'post', int $post_number = 3 ): array {
    $time_format = get_option('time_format');

    $output = [];
    if ( $type == 'choose_myself') {
        var_dump($posts);
        if (!empty( $posts )) {
            foreach ($posts as $post_id) {
                $output[] = [
                    'title' => get_the_title($post_id),
                    'slug' => get_the_permalink($post_id),
                    'date' => get_the_date($time_format),
                    'thumbnail' => get_image(get_post_thumbnail_id($post_id)),
                    'time_reading' => maxxwell_get_post_reading_time($post_id),
                    'primary_category' => maxxwell_get_yoast_primary_category($post_id),
                    'excerpt' => maxxwell_get_the_excerpt($post_id),
                ];
            }
        }

    } else {
        $args = [];
        switch ($type) {
            case $type == 'most_read':
                $args = array(
                    'posts_per_page' => $post_number,
                    'meta_key' => 'wp_post_views_count',
                    'orderby' => 'meta_value_num',
                    'order' => 'DESC'
                );
                break;
            default:
                $args = array(
                    'post_type' => $post_type,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'posts_per_page' => $post_number,
                );
                break;
        }
        $query = new WP_Query($args);
        // The Loop.
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                $post_id = get_the_ID();
                $output[] = [
                    'title' => get_the_title(),
                    'slug' => get_the_permalink(),
                    'date' => get_the_date($time_format),
                    'thumbnail' => get_image(get_post_thumbnail_id($post_id)),
                    'time_reading' => maxxwell_get_post_reading_time($post_id),
                    'primary_category' => maxxwell_get_yoast_primary_category($post_id),
                    'excerpt' => maxxwell_get_the_excerpt($post_id),

                ];
            }

            wp_reset_postdata();
        }
    }

    return $output;
}



function maxwell_get_post_list_development( $posts = [] ): array {
    $time_format = get_option('time_format');
    $output = [];
    if (!empty( $posts )) {
        foreach ($posts as $post_id) {
            $output[] = [
                'title' => get_the_title($post_id),
                'permalink' => get_the_permalink($post_id),
                'date' => get_the_date($time_format),
                'thumbnail' => get_image(get_post_thumbnail_id($post_id)),
                'primary_category' => maxxwell_get_yoast_primary_category($post_id),
                'excerpt' => maxxwell_get_the_excerpt($post_id),
            ];
        }
    }

    return $output;
}