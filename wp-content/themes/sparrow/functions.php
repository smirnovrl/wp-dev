<?  
    add_action('wp_enqueue_scripts', 'theme_style');
    add_action('wp_footer', 'theme_scripts');
    add_action('after_setup_theme', 'my_menu');
    add_action('widgets_init', 'register_my_widgets');
    add_filter( 'get_search_form', 'my_search_form' );
    add_filter('document_title_separator', 'my_separator');
    add_filter('the_content', 'test_content');

    function test_content ($content) {
        $content .= ' Благодарим';
        return $content;
    }

    function my_separator ( $sep ) {
        $sep = '%';
        return $sep;
    }

    function my_search_form() {
        $form = '
        <form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
            <input type="text" class="text-search" value="' . get_search_query() . '" name="s" id="s" />
            <input type="submit" class="submit-search" id="searchsubmit" value="" />
        </form>';

        return $form;
    }

    function register_my_widgets () {
        register_sidebar( [
            'name' => 'Right Sidebar',
            'id' => 'right_sidebar',
            'description' => 'Правый сайдбар',
            'before_widget' => '<div class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h5 class="widgettitle">',
            'after_title' => '</h5>'
        ] );
    }

    function my_menu () {
        register_nav_menu( 'top_menu', 'Моё верхнее меню' );
        register_nav_menu( 'footer_menu', 'Моё нижнее меню' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails', array( 'post' ) );
        add_image_size( 'post-thumb', 1300, 500, true );
    }

     function theme_style () {
        wp_enqueue_style( 'style', get_stylesheet_uri() );
        wp_enqueue_style( 'default', get_template_directory_uri() . '/assets/css/default.css' );
        wp_enqueue_style( 'layout', get_template_directory_uri() . '/assets/css/layout.css' );
        wp_enqueue_style( 'media-queries', get_template_directory_uri() . '/assets/css/media-queries.css' );
        wp_deregister_script( 'jquery-core' );
        wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
        wp_enqueue_script( 'jquery' );
    }

    function theme_scripts () {
        wp_enqueue_script( 'jquery_flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js' );
        wp_enqueue_script( 'doubletaptogo', get_template_directory_uri() . '/js/doubletaptogo.js' );
        wp_enqueue_script( 'init', get_template_directory_uri() . '/js/init.js' );

    }
?>