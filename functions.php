<?php
/**
 * redefaunav2 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package redefaunav2
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'redefaunav2_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function redefaunav2_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on redefaunav2, use a find and replace
		 * to change 'redefaunav2' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'redefaunav2', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'redefaunav2' ),
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
				'redefaunav2_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'redefaunav2_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function redefaunav2_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'redefaunav2_content_width', 640 );
}
add_action( 'after_setup_theme', 'redefaunav2_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function redefaunav2_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'redefaunav2' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'redefaunav2' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'redefaunav2_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function redefaunav2_scripts() {
	wp_enqueue_style( 'redefaunav2-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'redefaunav2-style', 'rtl', 'replace' );

	wp_enqueue_script( 'redefaunav2-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'redefaunav2_scripts' );

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
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function projetos() {
    $args = array(
		'post_type'=> 'projetos-internos',
		'posts_per_page' => '2'
	);              
	
	$the_query = new WP_Query( $args );
	if($the_query->have_posts() ) : 
		while ( $the_query->have_posts() ) : 
		   $the_query->the_post(); 
		?> 

				<div class="col-md-8 justify-content-end">
					<div class="box-post-projeto ">
						<img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>" srcset="<?php the_post_thumbnail_url('full'); ?>">
						<h3> <?php the_title(); ?></h3>
							<a href="<?php the_permalink(); ?>">SAIBA MAIS</a>
					</div>
				</div>	

		<?php   
		endwhile; 
		wp_reset_postdata(); 
	endif;
}

function publicacoes() {
    $args = array(
		'posts_per_page' => '2'
	);              
	
	$the_query = new WP_Query( $args );
	if($the_query->have_posts() ) : 
		while ( $the_query->have_posts() ) : 
		   $the_query->the_post(); 
		?> 
				<div class="col-md-8 justify-content-end">                    
						<div class="box-post-blog ">
							<h3> <?php the_title(); ?></h3>
							<p> <?php the_author(); ?></p>
							<p><?php the_excerpt(); ?>.</p>
							<div class="row">
								<div class="col-6">
									<p><?php the_date(); ?> </p>
								</div>
								<div class="col-6">
									<a href="<?php the_permalink(); ?>">SAIBA MAIS</a>
								</div>
							</div>                        
						</div> <!-- BOX POST BLOG -->
				</div>	

		<?php   
		endwhile; 
		wp_reset_postdata(); 
	endif;
}


