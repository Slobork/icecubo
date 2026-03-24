<?php
// phpcs:ignore
/**
 * Settings Page
 *
 * @package IceCubo
 */


/**
 * Set transient for the theme options page redirection upon activation.
 */
if ( ! function_exists( 'icecubo_activation_redirect' ) ) {
    function icecubo_activation_redirect() {
        set_transient( 'icecubo_do_activation_redirect', true, 30 );
    }
    add_action( 'after_switch_theme', 'icecubo_activation_redirect' );
}

/**
 * Redirect to the theme options page right after theme activation.
 */
if ( ! function_exists( 'icecubo_redirect_after_activation' ) ) {

    function icecubo_redirect_after_activation() {
        if ( ! is_admin() ) {
            return;
        }

        if ( ! get_transient( 'icecubo_do_activation_redirect' ) ) {
            return;
        }

        delete_transient( 'icecubo_do_activation_redirect' );

        if ( wp_doing_ajax() ) {
            return;
        }

        if ( current_user_can( 'manage_options' ) ) {
            wp_safe_redirect( admin_url( 'themes.php?page=icecubo-theme-options' ) );
            exit;
        }
    }
    add_action( 'admin_init', 'icecubo_redirect_after_activation' );
}

/**
 * Add theme options page to the admin menu.
 */
if ( ! function_exists( 'icecubo_theme_options' ) ) {

    function icecubo_theme_options() {

        add_theme_page(
            esc_html__('IceCubo Theme Options', 'icecubo'),
            esc_html__('IceCubo Theme', 'icecubo'),
            'manage_options',
            'icecubo-theme-options',
            'icecubo_theme_options_page_content'
        );

        add_action('admin_init', 'icecubo_register_settings');
    }

    add_action('admin_menu', 'icecubo_theme_options');
}
    


function icecubo_register_settings() {
    // First section settings - empty title for now, just to display the info box
    add_settings_section(
        'section_one',
        '',
        'section_one_callback',
        'icecubo-theme-options'
    );
    // Info box field
    add_settings_field(
        'info_boxes',
        esc_html__('Get started with IceCubo', 'icecubo'),
        'icecubo_info_boxes_callback',
        'icecubo-theme-options',
        'section_one'
    );
}


function section_one_callback() {
    // empty for now, we don't need any text here since the info box has its own title and description. But we need this callback to register the section and display the info box field.
    echo '';
}

// Content of the theme options page
function icecubo_theme_options_page_content() {
    ?>
    <div class="wrap">
        <h1>IceCubo Theme Options</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('icecubo-theme-options');
            do_settings_sections('icecubo-theme-options');
            ?>
        </form>
    </div>
    <?php
}

// Get license key from the database
function icecubo_get_license() {
    $licenseKey = get_option("IceCubo_Pro-lic_Key", "");
    return $licenseKey;
}

/**
 * Render an info box with a background image.
 * The callback is available when settings are registered.
 */
function icecubo_info_boxes_callback() {
    $img = get_theme_file_uri(). "/assets/img/ice-cubes.png";
    echo '<div id="ice-settings" style="color: white; display: flex; flex-wrap: wrap; justify-content: space-around; gap: 30px; background-image: url(' .esc_url($img) . '); width: fit-content; background-size: contain; background-position: center; padding: 60px 30px; border-radius:50%; margin-bottom:10px;">';
    
    echo '<div style="background: rgb(6 9 34 / 88%); color: white; padding: 20px; border-radius:4px; max-width:400px;">';
    echo '<h3 style="margin:0 0 10px; color: white;">' . esc_html__( 'Documentation', 'icecubo' ) . '</h3>';
    echo '<p style="line-height: 1.75">' . esc_html__( 'See all Icecubo\'s features and how to implement them.', 'icecubo' ) . '</p>';
    echo '<a style="font-size: 16px; line-height: 1.7; color: #a3a3ff;" href="https://maxpressy.com/icecubo-documentation/" target="_blank">See documentation →</a>';
    echo '</div>';
    echo '<div style="background: rgb(6 9 34 / 88%); color: white; padding: 20px; border-radius:4px; max-width:400px;">';
    echo '<h3 style="margin:0 0 10px; color: white;">' . esc_html__( 'Start Editing', 'icecubo' ) . '</h3>';
    echo '<p style="line-height: 1.75">' . esc_html__( 'Start editing the front page and access other templates from the Editor.', 'icecubo' ) . '</p>';
    echo '<a style="font-size: 16px; line-height: 1.7; color: #a3a3ff;" href="site-editor.php">Go to the Editor →</a>';
    echo '</div>';
    if (! class_exists('IceCubo_Pro') ) {
        echo '<div style="background: rgb(6 9 34 / 88%); color: white; padding: 20px; border-radius:4px; max-width:400px; border: 10px solid #a3a3ff;">';
        echo '<h3 style="margin:0 0 10px; color: white;">' . esc_html__( 'Buy Pro', 'icecubo' ) . '</h3>';
        echo '<p style="line-height: 1.75">' . esc_html__( 'With Pro version get advanced features and templates.', 'icecubo' ) . '</p>';
        echo '<a style="font-size: 16px; line-height: 1.7; color: #a3a3ff;" href="https://maxpressy.com/icecubo/" target="_blank">Get Pro Version →</a>';
        echo '</div>';
    } else {
        echo '<div style="background: rgb(6 9 34 / 88%); color: white; padding: 20px; border-radius:4px; max-width:400px;">';
        echo '<h3 style="margin:0 0 10px; color: white;">' . esc_html__( 'Install And Activate Icecubo Plugins', 'icecubo' ) . '</h3>';
        if(icecubo_get_license() !='') {
            echo '<p style="line-height: 1.75">' . esc_html__( 'Enable additional addons and templates. Once installed, Icecubo plugins will be available from the regular WP Plugins page.', 'icecubo' ) . '</p>';
            echo '<a style="font-size: 16px; line-height: 1.7; color: #a3a3ff;" href="plugins.php?page=icecubo-install-plugins&plugin_status=activate">Go to the Ice plugins →</a>';
        } else {
            echo '<a style="font-size: 16px; line-height: 2.5; background: #a3a3ff; color: black; padding: 5px; border-radius: 3px; margin: 0 30px 0 10px;" href="admin.php?page=icecubo-licenses">Activate License first to access aaddons →</a>';
        }
        
        echo '</div>';
    }

    echo '</div>';
}
