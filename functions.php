<?php 

class Wpgeekshubs{

    public function __construct() {
        $this->define();
        add_action( 'wp_enqueue_scripts', [$this, 'cx_enqueue_assets'] );
        // add_action( 'admin_enqueue_scripts', [$this, 'cx_admin_enqueue_assets'] );



    }

     /**
    * Constants
    */
    public function define() {

        define( 'WPGEEKSHUB_THEME', get_stylesheet_directory_uri() . "/assets" );

        if( site_url() != 'http://codexpert-inc.local' ) {
            define( 'WPGEEKSHUB_VERSION', wp_get_theme()->get('Version') );
        } 
        else {
            define( 'WPGEEKSHUB_VERSION', time() );
        }
    }

    /**
     * Load assets
     */
    public function cx_enqueue_assets() {
        // Load all Stylesheet
        wp_enqueue_style( 'cx-google-font', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700;800&display=swap' );
        wp_enqueue_style( 'font-awsome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css' );
        wp_enqueue_style( 'boostrap', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css' );

        wp_enqueue_style( 'animate', get_stylesheet_directory_uri() . '/assets/lib/animate/animate.min.css', [], WPGEEKSHUB_VERSION );
        wp_enqueue_style( 'lightbox', get_stylesheet_directory_uri() . '/assets/lib/lightbox/css/lightbox.min.css', [], WPGEEKSHUB_VERSION );
        wp_enqueue_style( 'owlcarousel', get_stylesheet_directory_uri() . '/assets/lib/owlcarousel/assets/owl.carousel.min.css', [], WPGEEKSHUB_VERSION );
        wp_enqueue_style( 'bootstrap-min', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', [], WPGEEKSHUB_VERSION );
        wp_enqueue_style( 'main-style', get_stylesheet_directory_uri() . '/assets/css/style.css', [], WPGEEKSHUB_VERSION );

        // JavaScript Libraries

        wp_enqueue_script( 'jquery' );

        wp_enqueue_script( 'wow-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js', ['jquery'], WPGEEKSHUB_VERSION, true );
        wp_enqueue_script( 'boostrap-js', get_stylesheet_directory_uri() . '/assets/lib/wow/wow.min.js', ['jquery'], WPGEEKSHUB_VERSION, true );
        wp_enqueue_script( 'easing-js', get_stylesheet_directory_uri() . '/assets/lib/easing/easing.min.js', [], WPGEEKSHUB_VERSION, true );
        wp_enqueue_script( 'waypoints-js', get_stylesheet_directory_uri() . '/assets/lib/waypoints/waypoints.min.js', [], WPGEEKSHUB_VERSION, true );
        wp_enqueue_script( 'typed-js', get_stylesheet_directory_uri() . '/assets/lib/typed/typed.min.js', [], WPGEEKSHUB_VERSION, true );
        wp_enqueue_script( 'counterup-js', get_stylesheet_directory_uri() . '/assets/lib/counterup/counterup.min.js', [], WPGEEKSHUB_VERSION, true );
        wp_enqueue_script( 'owlcarousel-js', get_stylesheet_directory_uri() . '/assets/lib/owlcarousel/owl.carousel.min.js', [], WPGEEKSHUB_VERSION, true );
        wp_enqueue_script( 'isotope-js', get_stylesheet_directory_uri() . '/assets/lib/isotope/isotope.pkgd.min.js', [], WPGEEKSHUB_VERSION, true );
        wp_enqueue_script( 'lightbox-js', get_stylesheet_directory_uri() . '/assets/lib/lightbox/js/lightbox.min.js', [], WPGEEKSHUB_VERSION, true );
        // Template Javascript
        wp_enqueue_script( 'main-js', get_stylesheet_directory_uri() . '/assets/js/main.js', [], WPGEEKSHUB_VERSION, true );
       
    }

}

new Wpgeekshubs();

?> 