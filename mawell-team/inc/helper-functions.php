<?php

/** get date format */
function maxxwll_get_formatted_time($timestamp) {
    // Get the time format from WordPress settings
    $time_format = get_option('time_format');

    // Format the provided timestamp using the retrieved time format
    $formatted_time = date_i18n($time_format, $timestamp);

    return $formatted_time;
}


/**
 * @return void
 * create popular post view
 */
function maxxwell_set_post_views(): void
{
    $post_id = get_queried_object_id();
    $count_key = 'wp_post_views_count';
    $count = get_post_meta($post_id, $count_key, true);

    if ($count == '') {
        delete_post_meta($post_id, $count_key);
        add_post_meta($post_id, $count_key, 1);
    } else {
        $count++;
        update_post_meta($post_id, $count_key, $count);
    }
}

add_action('wp_head', 'maxxwell_set_post_views');

/**
 * @param $post_id
 *
 * @return array of primary category with elementary data if exist. oterwise return firs category
 */
function maxxwell_get_yoast_primary_category($post_id): array
{
    $yoast_primary_key = get_post_meta($post_id, '_yoast_wpseo_primary_category', true);
    $output = [];
    if (!empty($yoast_primary_key)) {
        $term = get_term_by('id', $yoast_primary_key, 'category');
        $category_display = $term->name;
        $category_link = get_category_link($term->term_id);
        $slug = $term->slug;

        $output = ['name' => $category_display, 'link' => $category_link, 'uri' => $slug];
    } else {
        // Default, display the first category in WP's list of assigned categories
        $category = get_the_category($post_id);
        if(!empty($category)) {
            $category_display = $category[0]->name;
            $category_link = get_category_link($category[0]->term_id);
            $slug = $category[0]->slug;

            $output = ['name' => $category_display, 'link' => $category_link, 'uri' => $slug];
        }
    }
    return $output;
}

/**
 * @param $post_id
 * get post excerpt by 260 karacer
 *
 * @return bool|string
 */
function maxxwell_get_the_excerpt($post_id)
{

    $excerpt = get_the_excerpt($post_id);

    $excerpt = substr($excerpt, 0, 95);
    $result = substr($excerpt, 0, strrpos($excerpt, ' '));

    return $result;
}

/**
 * @param $post_id
 *
 * @return string of rifing time
 */
function maxxwell_get_post_reading_time($post_id)
{
    $the_content = get_post_field('post_content', $post_id);
    $words = str_word_count(strip_tags($the_content));
    $minute = floor($words / 200);
    $estimate = $minute . ($minute == 1 ? '' : 's');

    return $minute . ' Mins Read';
}

/**
 * @param $image_id
 *
 * @return array of image
 */
function get_image($image_id): array
{
    return [
        'url' => wp_get_attachment_url($image_id),
        'alt' => get_post_meta($image_id, '_wp_attachment_image_alt', true),
		'srcset' => wp_get_attachment_image_srcset($image_id),
    ];
}

/** get main menu with submenu */
function maxwell_return_menu($menu_name) {
	$locations = get_nav_menu_locations();

	if (empty($menu_name)) return [];
	if (isset($locations[$menu_name])) {
		$menu_id = $locations[$menu_name];
	} else {
		return [];
	}
	$menu_items = wp_get_nav_menu_items($menu_id);
	$output = [];

	foreach ( $menu_items as $menu_item ) {
		if ($menu_item->menu_item_parent == 0) {
			$output[$menu_item->ID] = [
				'title' => $menu_item->title,
				'url' => $menu_item->url,
				"sub_item" => [],
			];
		}
	}

	foreach ( $menu_items as $menu_sub_item ) {

		if ($menu_sub_item->menu_item_parent > 0) {
			$output[$menu_sub_item->menu_item_parent]['sub_item'][] = [
				'title' => $menu_sub_item->title,
				'url' => $menu_sub_item->url,
			];
		}
	}

	return $output;
}