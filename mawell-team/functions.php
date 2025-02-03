<?php
/**
 * MaxxWell functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package MaxxWell
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}


/** test print funcitons */
function dd($array, $array2 = null): void
{
    if ($array2 == null) {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    } else {
        echo '<div class="flex-container" style="display: flex"> <div class="column" style="background-color:#f5f5f5;"><pre>';
        print_r($array);
        echo '</pre></div> <pre class="column" style="background-color:#f5eded;"><pre>';
        print_r($array2);
        echo '</pre></div> </div>';
    }
}

/** log function */
if (!function_exists('maxxwell_log')) {
    function maxxwell_log($entry, $mode = 'a', $file = 'maxwell_log'): bool
    {
        // Get WordPress uploads directory.
        $upload_dir = wp_upload_dir();

        $upload_dir = $upload_dir['basedir'];
        $upload_dir = dirname(__FILE__);
        // If the entry is array, json_encode.
        if (is_array($entry)) {
            $entry = json_encode($entry);
        }
        // Write the log file.
        $file = $upload_dir . '/' . $file . '.log';
        $file = fopen($file, $mode);
        $bytes = fwrite($file, current_time('mysql') . "::" . $entry . "\n");
        fclose($file);

        return $bytes;
    }
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function maxxwell_setup()
{
    /*
        * Make theme available for translation.
        * Translations can be filed in the /languages/ directory.
        * If you're building a theme based on MaxxWell, use a find and replace
        * to change 'maxxwell' to the name of your theme in all the template files.
        */
    load_theme_textdomain('maxxwell', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
    add_theme_support('title-tag');

    /*
        * Enable support for Post Thumbnails on posts and pages.
        *
        * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
        */
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'primary' => esc_html__('Primary', 'maxxwell'),
            'menu-2' => esc_html__('Menu 1', 'maxxwell'),
            'menu-3' => esc_html__('Menu 2', 'maxxwell'),
            'menu-4' => esc_html__('Menu 3', 'maxxwell'),
            'menu-5' => esc_html__('Menu 4', 'maxxwell'),
            'menu-6' => esc_html__('Menu 5', 'maxxwell'),
        )
    );

    /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Set up the WordPress core custom background feature.
    add_theme_support(
        'custom-background',
        apply_filters(
            'maxxwell_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        )
    );

	// Dodavanje prilagođenih veličina slika
	add_image_size( 'custom-thumbnail', 150, 150, true ); // Za male prikaze (thumbnail)
	add_image_size( 'custom-small', 480, 320, true ); // Manji ekrani (mobilni uređaji u portretnom režimu)
	add_image_size( 'custom-medium', 768, 512, true ); // Srednji ekrani (tableti, manji laptopovi)
	add_image_size( 'custom-large', 1024, 768, true ); // Veći ekrani (tableti u landscape, laptopovi)
	add_image_size( 'custom-xlarge', 1280, 960, true ); // Desktop računari, laptopovi sa većom rezolucijom
	add_image_size( 'custom-full', 1920, 1080, true ); // Full HD rezolucija za veće monitore
	add_image_size( 'custom-retina', 2400, 1600, true ); // Za Retina/HiDPI ekrane

}

add_action('after_setup_theme', 'maxxwell_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function maxxwell_content_width()
{
    $GLOBALS['content_width'] = apply_filters('maxxwell_content_width', 640);
}

add_action('after_setup_theme', 'maxxwell_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */function maxxwell_widgets_init()
{
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar', 'maxxwell'),
            'id' => 'sidebar-1',
            'description' => esc_html__('Add widgets here.', 'maxxwell'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
}

add_action('widgets_init', 'maxxwell_widgets_init');

/**
 * Add SVG Mime Types
 */
function add_file_types_to_uploads( $file_types ) {
    $new_filetypes        = array();
    $new_filetypes['svg'] = 'image/svg';
    $file_types           = array_merge( $file_types, $new_filetypes );

    return $file_types;
}

add_action( 'upload_mimes', 'add_file_types_to_uploads' );

/**
 * Enqueue scripts and styles. */
function maxxwell_scripts()
{
    wp_enqueue_style('maxxwell-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_style_add_data('maxxwell-style', 'rtl', 'replace');

	// Dodavanje lokalnih CSS fajlova (Swiper i GLightbox)
	wp_enqueue_style('swiper-style', get_template_directory_uri() . '/assets/dist/css/swiper-bundle.css', array(), null);
	wp_enqueue_style('glightbox-style', get_template_directory_uri() . '/assets/dist/css/lightbox.css', array(), null);

	// Dodavanje eksternog CSS fajla (Tabler Icons)
	wp_enqueue_style('tabler-icons', get_template_directory_uri() . '/assets/dist/css/tabler-icons.min.css', array(), null);


	wp_enqueue_script('maxxwell-navigation', get_template_directory_uri() . '/assets/dist/js/navigation.js', array(), _S_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    /** enqueue  custom file CSS */
    wp_enqueue_script('alpine-js', 'https://cdn.jsdelivr.net/npm/alpinejs@2'); // TODO: DRAGAN: Prebaci lokalno

	// Dobijanje URL-a teme ili child teme
	$theme_url = get_template_directory_uri(); // Ako koristite child temu, zamenite sa get_stylesheet_directory_uri()

	// Enqueue JavaScript fajlova za frontend
//	wp_enqueue_script('auth-js', get_template_directory_uri() . '/assets/dist/js/auth.js', array('jquery'), null, true);
//	wp_enqueue_script('glightbox-js', get_template_directory_uri() . '/assets/dist/js/glightbox.js', array('jquery'), null, true);
	wp_enqueue_script('head-js', get_template_directory_uri() . '/assets/dist/js/head.js', array('jquery'), null, true);
	wp_enqueue_script('swiper-js', get_template_directory_uri() . '/assets/dist/js/swiper.js', array('jquery'), null, true);
	wp_enqueue_script('theme-js', get_template_directory_uri() . '/assets/dist/js/theme.js', array('jquery'), null, true);


}
add_action('wp_enqueue_scripts', 'maxxwell_scripts');


/**
 * @param $hook
 * registrovanej asseta za admin deo. Ovde se kreira tailwind sa komandom
 *
 * @code npx tailwindcss -i  ./asset/src/input.css -o ./assets/dist/output.css --watch @endcode
 */
function tailwind_dashboards_script($hook): void
{
    $screen = get_current_screen();
    if ($screen->is_block_editor) {
        wp_enqueue_style('tailwind-dashboard', get_template_directory_uri() . '/style.css');
        wp_enqueue_script('alpine-js', 'https://cdn.jsdelivr.net/npm/alpinejs@2'); // TODO: DRAGAN: Prebaci lokalno
        //wp_enqueue_script('auth', get_template_directory_uri() . '/assets/dist/js/main.js', array(), _S_VERSION, false); // TODO: Ovo nije dobro, sve mi se pakuje ovde a mozda ne treba
        //wp_enqueue_script('dashboard-maxwell', get_template_directory_uri() . '/assets/dashboard/dashboard.js', array(), _S_VERSION, false); // TODO: Iskljucivo za funkcije dahboarda
    }
}
add_action('admin_enqueue_scripts', 'tailwind_dashboards_script');
/** ======================================================================= */


/**
 * Walker_Nav_Menu
 */
require get_template_directory() . '/inc/classes/Walker_Nav_Menu.php';

/**
 * Implement Helper functions for theme
 */
require get_template_directory() . '/inc/helper-functions.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Functions which enhance the tACF function in WordPress.
 */
require get_template_directory() . '/inc/acf-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

/** Automatic include register blocks  from folder inc/register-blocks */
// define folder path
$directory_path = get_template_directory() . '/inc/register-blocks/';

// use glob function for getting all file
$php_files = glob($directory_path . '*.php');

if ($php_files) {
    // Including file
    foreach ($php_files as $php_file) {
        include $php_file;
    }
}