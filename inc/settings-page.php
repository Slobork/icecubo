<?php
// phpcs:ignore
if (! defined('ABSPATH') ) {
    exit;
}
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
    
// Check license key from the database
function icecubo_check_license() {
    
    $is_licensed = class_exists('IceCubo_Pro') ? IceCubo_Pro::getLicense() : false;
    return $is_licensed;
}

/**
 * Register settings, sections and fields for the theme options page.
 * 
 */
if ( ! function_exists( 'icecubo_register_settings' ) ) {
    function icecubo_register_settings() {

        $tab_start    = 'icecubo-theme-options-start';
        $tab_settings = 'icecubo-theme-options-settings';

        // First section settings - empty title for now, just to display the info box
        add_settings_section(
            'section_one',
            '',
            'icecubo_settings_section_one_callback',
            $tab_start
        );

        add_settings_field(
            'info_boxes',
            esc_html__('Get started with IceCubo', 'icecubo'),
            'icecubo_settings_info_boxes_callback',
            $tab_start,
            'section_one'
        );

        // If Pro version is active, register fields under the settings tab, otherwise display the message about buying Pro version.
        if (icecubo_check_license() != false) {

            // Section Animations settings
            add_settings_section(
                'section_animations',
                esc_html__('Animations Settings', 'icecubo'),
                'icecubo_settings_section_animations_callback',
                $tab_settings
            );

            add_settings_field(
                'animations_laod',
                esc_html__('Enable Animations', 'icecubo'),
                'icecubo_settings_animations_load_checkbox_callback',
                $tab_settings,
                'section_animations'
            );

            add_settings_field(
                'animations_select',
                esc_html__('Animation Select', 'icecubo'),
                'icecubo_settings_animations_select_callback',
                $tab_settings,
                'section_animations'
            );
            add_settings_field(
                'animations_select_time_speed',
                esc_html__('Animation Speed', 'icecubo'),
                'icecubo_settings_animations_select_time_speed_callback',
                $tab_settings,
                'section_animations'
            );
            add_settings_field(
                'animations_select_time_delay',
                esc_html__('Animation Delay', 'icecubo'),
                'icecubo_settings_animations_select_time_delay_callback',
                $tab_settings,
                'section_animations'
            );
            add_settings_field(
                'animation_repeat_checkbox',
                esc_html__('Repeat Animation', 'icecubo'),
                'icecubo_settings_animation_repeat_checkbox_callback',
                $tab_settings,
                'section_animations'
            );
            // Copy animations button - outputs an HTML button that copies animation-related values
            add_settings_field(
                'animations_copy_button',
                esc_html__('Copy Animation', 'icecubo'),
                'icecubo_settings_animations_copy_button_callback',
                $tab_settings,
                'section_animations'
            );
            

            // Section templates settings
            add_settings_section(
                'section_templates',
                esc_html__('Design Templates', 'icecubo'),
                'icecubo_settings_section_templates_callback',
                $tab_settings
            );

            add_settings_field(
                'template_agency',
                esc_html__('Agency', 'icecubo'),
                'icecubo_settings_template_checkbox_one_callback',
                $tab_settings,
                'section_templates'
            );

            add_settings_field(
                'template_attorney',
                esc_html__('Attorney', 'icecubo'),
                'icecubo_settings_template_checkbox_two_callback',
                $tab_settings,
                'section_templates'
            );
            add_settings_field(
                'template_barber',
                esc_html__('Barber', 'icecubo'),
                'icecubo_settings_template_checkbox_three_callback',
                $tab_settings,
                'section_templates'
            );
            
            add_settings_field(
                'template_dentist',
                esc_html__('Dentist', 'icecubo'),
                'icecubo_settings_template_checkbox_four_callback',
                $tab_settings,
                'section_templates'
            );

            add_settings_field(
                'template_gym',
                esc_html__('Gym', 'icecubo'),
                'icecubo_settings_template_checkbox_five_callback',
                $tab_settings,
                'section_templates'
            );

            add_settings_field(
                'template_marketer',
                esc_html__('Marketer', 'icecubo'),
                'icecubo_settings_template_checkbox_six_callback',
                $tab_settings,
                'section_templates'
            );

            add_settings_field(
                'template_marketing',
                esc_html__('Marketing', 'icecubo'),
                'icecubo_settings_template_checkbox_seven_callback',
                $tab_settings,
                'section_templates'
            );

            add_settings_field(
                'template_marketing_suit',
                esc_html__('Marketing Suit', 'icecubo'),
                'icecubo_settings_template_checkbox_eight_callback',
                $tab_settings,
                'section_templates'
            );

            add_settings_field(
                'template_seo',
                esc_html__('SEO', 'icecubo'),
                'icecubo_settings_template_checkbox_nine_callback',
                $tab_settings,
                'section_templates'
            );

            add_settings_field(
                'template_yoga',
                esc_html__('Yoga', 'icecubo'),
                'icecubo_settings_template_checkbox_ten_callback',
                $tab_settings,
                'section_templates'
            );

            register_setting('icecubo-theme-options', 'icecubo_animations_laod', 'icecubo_sanitize_checkbox');
            register_setting('icecubo-theme-options', 'icecubo_animations_select', 'sanitize_text_field');
            register_setting('icecubo-theme-options', 'icecubo_animations_select_time_speed', 'sanitize_text_field');
            register_setting('icecubo-theme-options', 'icecubo_animations_select_time_delay', 'sanitize_text_field');
            register_setting('icecubo-theme-options', 'icecubo_animation_repeat_checkbox', 'icecubo_sanitize_checkbox');
            register_setting('icecubo-theme-options', 'icecubo_animations_copy_button', 'sanitize_text_field');

            register_setting('icecubo-theme-options', 'icecubo_template_agency_checkbox_one', 'icecubo_sanitize_checkbox');
            register_setting('icecubo-theme-options', 'icecubo_template_attorney_checkbox_two', 'icecubo_sanitize_checkbox');
            register_setting('icecubo-theme-options', 'icecubo_template_barber_checkbox_three', 'icecubo_sanitize_checkbox');
            register_setting('icecubo-theme-options', 'icecubo_template_dentist_checkbox_four', 'icecubo_sanitize_checkbox');
            register_setting('icecubo-theme-options', 'icecubo_template_gym_checkbox_five', 'icecubo_sanitize_checkbox');
            register_setting('icecubo-theme-options', 'icecubo_template_marketer_checkbox_six', 'icecubo_sanitize_checkbox');
            register_setting('icecubo-theme-options', 'icecubo_template_marketing_checkbox_seven', 'icecubo_sanitize_checkbox');
            register_setting('icecubo-theme-options', 'icecubo_template_marketing_suit_checkbox_eight', 'icecubo_sanitize_checkbox');
            register_setting('icecubo-theme-options', 'icecubo_template_seo_checkbox_nine', 'icecubo_sanitize_checkbox');
            register_setting('icecubo-theme-options', 'icecubo_template_yoga_checkbox_ten', 'icecubo_sanitize_checkbox');

        } else {
            /**
             * If Pro version is not active, we still need to register the settings and sections 
             * to display the info box and the message about buying Pro version,
             * but we won't register any fields since there are no settings to save in the free version.
             */
            add_settings_section(
                'section_settings',
                '',
                'icecubo_settings_section_one_callback',
                $tab_settings
            );

            add_settings_field(
                'settings_info_top',
                esc_html__('You have to activate the Pro version (Pro addon) to access these settings.', 'icecubo'),
                'icecubo_settings_info_boxes_callback_top',
                $tab_settings,
                'section_settings'
            );
            
        }

    }
    
}

/**
 * Sanitize checkbox.
 *
 * @param mixed $input Input from checkbox.
 *
 * @return int
 */
function icecubo_sanitize_checkbox( $input ) {
    return ( isset( $input ) && true == $input ) ? 1 : 0;
}


/**
 * Callbacks for the settings sections.
 */

function icecubo_settings_info_boxes_callback() {
    $img = get_theme_file_uri(). "/assets/img/ice-cubes.png";
    echo '<div id="ice-settings" style="color: white; display: flex; flex-wrap: wrap; justify-content: space-around; gap: 30px; background-image: url(' .esc_url($img) . '); width: fit-content; background-size: contain; background-position: center; padding: 60px 30px; border-radius:50%; margin-bottom:10px;">';
    
    echo '<div style="background: rgb(6 9 34 / 88%); color: white; padding: 20px; border-radius:4px; max-width:400px; min-width:380px;">';
    echo '<h3 style="margin:0 0 10px; color: white;">' . esc_html__( 'Documentation', 'icecubo' ) . '</h3>';
    echo '<p style="line-height: 1.75">' . esc_html__( 'See all Icecubo\'s features and how to implement them.', 'icecubo' ) . '</p>';
    echo '<a style="font-size: 16px; line-height: 1.7; color: #a3a3ff;" href="https://maxpressy.com/icecubo-documentation/" target="_blank">See documentation →</a>';
    echo '</div>';
    echo '<div style="background: rgb(6 9 34 / 88%); color: white; padding: 20px; border-radius:4px; max-width:400px; min-width:380px;">';
    echo '<h3 style="margin:0 0 10px; color: white;">' . esc_html__( 'Start Editing', 'icecubo' ) . '</h3>';
    echo '<p style="line-height: 1.75">' . esc_html__( 'Start editing the front page and access other templates from the Editor.', 'icecubo' ) . '</p>';
    echo '<a style="font-size: 16px; line-height: 1.7; color: #a3a3ff;" href="site-editor.php">Go to the Editor →</a>';
    echo '</div>';
    
    // escaped in the function that generates the content of the box
    echo icecubo_buy_pro_box();

    echo '</div>';
}

/**
 * Set the content of the info box about buying Pro version in a function,
 * coz we need to display it in multiple places (top of the settings tab and in the start tab).
 */
function icecubo_buy_pro_box() {

    $output = '';
    if (! class_exists('IceCubo_Pro') ) {
        $output .= '<div style="background: rgb(6 9 34 / 88%); color: white; padding: 20px; border-radius:4px; max-width:400px; min-width:380px; border: 10px solid #a3a3ff;">';
        $output .= '<h3 style="margin:0 0 10px; color: white;">' . esc_html__( 'Get Pro', 'icecubo' ) . '</h3>';
        $output .= '<p style="line-height: 1.75">' . esc_html__( 'With Pro addon get advanced features and templates.', 'icecubo' ) . '</p>';
        $output .= '<a style="font-size: 16px; line-height: 1.7; color: #a3a3ff;" href="https://maxpressy.com/icecubo/" target="_blank">Get IceCubo Companion →</a>';
        $output .= '</div>';
    } else {
        $output .= '<div style="background: rgb(6 9 34 / 88%); color: white; padding: 20px; border-radius:4px; max-width:400px; min-width:380px;">';
        $output .= '<h3 style="margin:0 0 10px; color: white;">' . esc_html__( 'Adjust the settings', 'icecubo' ) . '</h3>';
        if(icecubo_check_license() != false) {
            $output .= '<p style="line-height: 1.75">' . esc_html__( 'Enable additional functionality and templates.', 'icecubo' ) . '</p>';

            // in order to make the link to the Settings tab work, we need to add a class and a data attribute to the link. 
            // JavaScript will handle the click event and show the settings tab.
            $output .= '<a style="font-size: 16px; line-height: 1.7; color: #a3a3ff;" href="#icecubo-tab-settings" class="icecubo-tab-control" data-tab="icecubo-tab-settings">Use the Settings →</a>';
        } else {
            $output .= '<a style="font-size: 15px; line-height: 2.5; background: #a3a3ff; color: black; padding: 3px; border-radius: 3px; margin: 0 30px 0 0;" href="admin.php?page=icecubo-licenses">Activate License first to access additional settings →</a>';
        }
        
        $output .= '</div>';
    }

    $output .= '</div>';

    return $output;
}

function icecubo_settings_info_boxes_callback_top() {
    /**
     * Escaped in the function that generates the content of the box,
     * since we need to return the content as a string to display it in multiple places (top of the settings tab and in the start tab).
     */
    echo icecubo_buy_pro_box();
}

function icecubo_settings_section_one_callback() {
    // Empty for now, we don't need any text here since the info box has its own title and description. 
    // But we need this callback to register the section and display the info box field.
    echo '';
}

function icecubo_settings_section_animations_callback() {
    // alternative bordr-color may be: #0e0ed7, for now keep the current:
    echo '<hr id="icecubo-animations-settings-sep" style="margin-bottom: 20px; border-color: #40248e; border-width: 2px;">';
    echo '<p style="font-size: 18px;">' .esc_html__('You can enable or disable animations that come with the theme for the entire site.', 'icecubo') . '</p>';
    echo '<p style="font-size: 16px;">' .esc_html__('You can generate animation classes for your content here. Just select the animation and its adjacent options, then click on the "Copy Animation Classes" button. You can paste it into any block from its "Additional classes" option.', 'icecubo') . '</p>';
}

function icecubo_settings_animations_load_checkbox_callback() {
    $animation = get_option('icecubo_animations_laod');
    echo '<input type="checkbox" name="icecubo_animations_laod" value="1" style="margin-bottom: 40px;" ' . checked($animation, 1, false) . '/>';
}

function icecubo_settings_animations_select_callback() {
    $animations_select = get_option('icecubo_animations_select');
    if ($animations_select === false) {
        $animations_select = '';
    }
    echo '<select name="icecubo_animations_select">';
    echo '<option value="" ' . selected($animations_select, '', false) . '>Select Animation</option>';
    
    echo '<option value="anim-bounce" ' . selected($animations_select, 'anim-bounce', false) . '>bounce</option>';
    echo '<option value="anim-fadeIn" ' . selected($animations_select, 'anim-fadeIn', false) . '>fadeIn</option>';
    echo '<option value="anim-fadeInUp" ' . selected($animations_select, 'anim-fadeInUp', false) . '>fadeInUp</option>';
    echo '<option value="anim-blurOut" ' . selected($animations_select, 'anim-blurOut', false) . '>blurOut</option>';
    echo '<option value="anim-pushUp" ' . selected($animations_select, 'anim-pushUp', false) . '>pushUp</option>';
    echo '<option value="anim-pushDown" ' . selected($animations_select, 'anim-pushDown', false) . '>pushDown</option>';
    echo '<option value="anim-pushLeft" ' . selected($animations_select, 'anim-pushLeft', false) . '>pushLeft</option>';
    echo '<option value="anim-pushRight" ' . selected($animations_select, 'anim-pushRight', false) . '>pushRight</option>';
    echo '<option value="anim-flipX" ' . selected($animations_select, 'anim-flipX', false) . '>flipX</option>';
    echo '<option value="anim-flipY" ' . selected($animations_select, 'anim-flipY', false) . '>flipY</option>';
    echo '<option value="anim-rotaterev-left" ' . selected($animations_select, 'anim-rotaterev-left', false) . '>rotaterev-left</option>';
    echo '<option value="anim-rotaterev-right" ' . selected($animations_select, 'anim-rotaterev-right', false) . '>rotaterev-right</option>';
    echo '<option value="anim-to-transform" ' . selected($animations_select, 'anim-to-transform', false) . '>to-transform</option>';
    echo '<option value="anim-to-blob" ' . selected($animations_select, 'anim-to-blob', false) . '>to-blob</option>';
    echo '<option value="anim-scale-in-center" ' . selected($animations_select, 'anim-scale-in-center', false) . '>scale-in-center</option>';
    echo '<option value="anim-scale-in-hor-center" ' . selected($animations_select, 'anim-scale-in-hor-center', false) . '>scale-in-hor-center</option>';
    echo '<option value="anim-scale-in-ver-center" ' . selected($animations_select, 'anim-scale-in-ver-center', false) . '>scale-in-ver-center</option>';
    echo '<option value="anim-scale-in-top" ' . selected($animations_select, 'anim-scale-in-top', false) . '>scale-in-top</option>';
    echo '<option value="anim-scale-in-tr" ' . selected($animations_select, 'anim-scale-in-tr', false) . '>scale-in-tr</option>';
    echo '<option value="anim-scale-in-right" ' . selected($animations_select, 'anim-scale-in-right', false) . '>scale-in-right</option>';
    echo '<option value="anim-scale-in-br" ' . selected($animations_select, 'anim-scale-in-br', false) . '>scale-in-br</option>';
    echo '<option value="anim-scale-in-bottom" ' . selected($animations_select, 'anim-scale-in-bottom', false) . '>scale-in-bottom</option>';
    echo '<option value="anim-scale-in-bl" ' . selected($animations_select, 'anim-scale-in-bl', false) . '>scale-in-bl</option>';
    echo '<option value="anim-scale-in-left" ' . selected($animations_select, 'anim-scale-in-left', false) . '>scale-in-left</option>';
    echo '<option value="anim-scale-in-tl" ' . selected($animations_select, 'anim-scale-in-tl', false) . '>scale-in-tl</option>';
    echo '<option value="anim-slide-bg" ' . selected($animations_select, 'anim-slide-bg', false) . '>slide-bg</option>';
    echo '<option value="animd-slide-ch" ' . selected($animations_select, 'animd-slide-ch', false) . '>slide-ch</option>';
    echo '</select>';
}

function icecubo_settings_animations_select_time_speed_callback() {
    $animations_select = get_option('icecubo_animations_select_time_speed');
    if ($animations_select === false) {
        $animations_select = '';
    }
    echo '<select name="icecubo_animations_select_time_speed">';
    echo '<option value="" ' . selected($animations_select, '', false) . '>Normal</option>';
    
    echo '<option value="fastest" ' . selected($animations_select, 'fastest', false) . '>fastest</option>';
    echo '<option value="fast" ' . selected($animations_select, 'fast', false) . '>fast</option>';
    echo '<option value="slow" ' . selected($animations_select, 'slow', false) . '>slow</option>';
    echo '<option value="slowest" ' . selected($animations_select, 'slowest', false) . '>slowest</option>';
    echo '</select>';
}

function icecubo_settings_animations_select_time_delay_callback() {
    $animations_select = get_option('icecubo_animations_select_time_delay');
    if ($animations_select === false) {
        $animations_select = '';
    }
    echo '<select name="icecubo_animations_select_time_delay">';
    echo '<option value="" ' . selected($animations_select, '', false) . '>No Delay</option>';
    
    echo '<option value="del025" ' . selected($animations_select, 'del025', false) . '>Delay 250 ms</option>';
    echo '<option value="del050" ' . selected($animations_select, 'del050', false) . '>Delay 500 ms</option>';
    echo '<option value="del075" ' . selected($animations_select, 'del075', false) . '>Delay 750 ms</option>';
    echo '<option value="del1" '   . selected($animations_select, 'del1', false)   . '>Delay 1s</option>';
    echo '<option value="del2" '   . selected($animations_select, 'del2', false)   . '>Delay 2s</option>';
    echo '<option value="del3" '   . selected($animations_select, 'del3', false)   . '>Delay 3s</option>';
    echo '</select>';
}


function icecubo_settings_animation_repeat_checkbox_callback() {
    $option = get_option('icecubo_animation_repeat_checkbox');

    echo '<input type="checkbox" name="icecubo_animation_repeat_checkbox" value="animrep" ' . checked($option, 1, false) . '/>';
}

function icecubo_settings_animations_copy_button_callback() {
    echo '<button type="button" id="icecubo-copy-animations-button" class="button button-primary" style="margin-top: 10px; border-radius: 10px;">' . esc_html__('Copy Animation Classes', 'icecubo') . '</button>';
    echo '<p id="icecubo-copy-animations-message" style="display:none; color: #0000c4; margin-top: 10px;">' . esc_html__('Animation classes copied to clipboard!', 'icecubo') . '</p>';
    echo '<p id="icecubo-copy-animations-message-false" style="display:none; color: #cf0b0b; margin-top: 10px;">' . esc_html__('Animation must be selected!', 'icecubo') . '</p>';
}


function icecubo_settings_section_templates_callback() {
    echo '<hr id="icecubo-templates-settings-sep" style="margin-bottom: 20px; border-color: #40248e; border-width: 2px;">';
    echo '<p style="font-size: 18px;">' .esc_html__('Select the design templates you want to use.', 'icecubo') . '</p>';
    echo '<p style="font-size: 16px;">' .esc_html__('Each template has its own set of patterns, sections and customization options.', 'icecubo') . '</p>';
}

function icecubo_settings_template_checkbox_one_callback() {
    $option = get_option('icecubo_template_agency_checkbox_one');
    echo '<input type="checkbox" name="icecubo_template_agency_checkbox_one" value="1" ' . checked($option, 1, false) . '/>';
}

function icecubo_settings_template_checkbox_two_callback() {
    $option = get_option('icecubo_template_attorney_checkbox_two');
    echo '<input type="checkbox" name="icecubo_template_attorney_checkbox_two" value="1" ' . checked($option, 1, false) . '/>';
}

function icecubo_settings_template_checkbox_three_callback() {
    $option = get_option('icecubo_template_barber_checkbox_three');
    echo '<input type="checkbox" name="icecubo_template_barber_checkbox_three" value="1" ' . checked($option, 1, false) . '/>';
}

function icecubo_settings_template_checkbox_four_callback() {
    $option = get_option('icecubo_template_dentist_checkbox_four');
    echo '<input type="checkbox" name="icecubo_template_dentist_checkbox_four" value="1" ' . checked($option, 1, false) . '/>';
}

function icecubo_settings_template_checkbox_five_callback() {
    $option = get_option('icecubo_template_gym_checkbox_five');
    echo '<input type="checkbox" name="icecubo_template_gym_checkbox_five" value="1" ' . checked($option, 1, false) . '/>';
}

function icecubo_settings_template_checkbox_six_callback() {
    $option = get_option('icecubo_template_marketer_checkbox_six');
    echo '<input type="checkbox" name="icecubo_template_marketer_checkbox_six" value="1" ' . checked($option, 1, false) . '/>';
}

function icecubo_settings_template_checkbox_seven_callback() {
    $option = get_option('icecubo_template_marketing_checkbox_seven');
    echo '<input type="checkbox" name="icecubo_template_marketing_checkbox_seven" value="1" ' . checked($option, 1, false) . '/>';
}

function icecubo_settings_template_checkbox_eight_callback() {
    $option = get_option('icecubo_template_marketing_suit_checkbox_eight');
    echo '<input type="checkbox" name="icecubo_template_marketing_suit_checkbox_eight" value="1" ' . checked($option, 1, false) . '/>';
}

function icecubo_settings_template_checkbox_nine_callback() {
    $option = get_option('icecubo_template_seo_checkbox_nine');
    echo '<input type="checkbox" name="icecubo_template_seo_checkbox_nine" value="1" ' . checked($option, 1, false) . '/>';
}

function icecubo_settings_template_checkbox_ten_callback() {
    $option = get_option('icecubo_template_yoga_checkbox_ten');
    echo '<input type="checkbox" name="icecubo_template_yoga_checkbox_ten" value="1" ' . checked($option, 1, false) . '/>';
}


/**
 * Assemble  the content of the theme options page, i.e. basically the form and 
 * the HTML structure of the page and the JavaScript 
 * for handling the tab navigation and showing the submit button only on the Settings tab.
 */ 
function icecubo_theme_options_page_content() {
    ?>
    <div class="wrap">
        <h1><?php esc_html_e('IceCubo Theme Options', 'icecubo'); ?></h1>

        <h2 class="nav-tab-wrapper">
            <a href="#icecubo-tab-start" class="nav-tab icecubo-tab-control" data-tab="icecubo-tab-start"><?php esc_html_e('Start', 'icecubo'); ?></a>
            <a href="#icecubo-tab-settings" class="nav-tab icecubo-tab-control" data-tab="icecubo-tab-settings"><?php esc_html_e('Settings', 'icecubo'); ?></a>
            <a href="https://maxpressy.com/icecubo-documentation/" class="nav-tab" target="_blank"><?php esc_html_e('Documentation', 'icecubo'); ?></a>
        </h2>

        <form method="post" action="options.php">
            <?php
            settings_fields('icecubo-theme-options');
            ?>

            <div id="icecubo-tab-start" class="icecubo-tab-panel" style="display:none;">
                <?php do_settings_sections('icecubo-theme-options-start'); ?>
            </div>

            <div id="icecubo-tab-settings" class="icecubo-tab-panel" style="display:none; margin-top:40px;">
                <?php do_settings_sections('icecubo-theme-options-settings'); ?>
            </div>

            <div id="icecubo-submit-container" style="display:none;">
                <?php
                // Show submit button only if Pro version is active, since free version doesn't have any settings to save.
                if (icecubo_check_license() != false) {
                    submit_button();
                }
                ?>
            </div>
        </form>
    </div>
    <?php // JavaScript for handling the tab navigation and showing the submit button only on the Settings tab: ?>
    <script type="text/javascript">
    (function() {
        const tabsControl = document.querySelectorAll('.icecubo-tab-control');
        const panels = document.querySelectorAll('.icecubo-tab-panel');
        const submitContainer = document.getElementById('icecubo-submit-container');
        
        // Function to activate a tab
        function activateTab(tabId) {
            tabsControl.forEach(function(item) {
                item.classList.remove('nav-tab-active');
            });
            panels.forEach(function(panel) {
                panel.style.display = panel.id === tabId ? 'block' : 'none';
            });
            if (submitContainer) {
                submitContainer.style.display = tabId === 'icecubo-tab-settings' ? 'block' : 'none';
            }
            const activeTab = document.querySelector('[data-tab="' + tabId + '"]');
            if (activeTab) {
                activeTab.classList.add('nav-tab-active');
            }
        }

        // On page load, activate the current tab on the page save (reload) from localStorage or default (Start)
        const savedTab = localStorage.getItem('icecubo_active_tab') || 'icecubo-tab-start';
        activateTab(savedTab);

        // Add event listeners to tabs
        tabsControl.forEach(function(tab) {
            tab.addEventListener('click', function(event) {
                event.preventDefault();
                localStorage.setItem('icecubo_active_tab', tab.dataset.tab);
                activateTab(tab.dataset.tab);
            });
        });
    })();
    </script>

    <?php // JavaScript for handling animation class copying ?>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const copyButton = document.getElementById('icecubo-copy-animations-button');
        const messageElement = document.getElementById('icecubo-copy-animations-message');
        const messageElementFalse = document.getElementById('icecubo-copy-animations-message-false');
        //const animationsEnableCheckbox = document.querySelector('input[name="icecubo_animations_laod"]');
        
        if (copyButton) {
            copyButton.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Get values from animation fields
                const animationSelect = document.querySelector('select[name="icecubo_animations_select"]');
                const speedSelect = document.querySelector('select[name="icecubo_animations_select_time_speed"]');
                const delaySelect = document.querySelector('select[name="icecubo_animations_select_time_delay"]');
                const animRepeat  = document.querySelector('input[name="icecubo_animation_repeat_checkbox"]');

                // Check if animation is selected
                if (animationSelect.value === '') {
                    messageElementFalse.textContent = 'Animation must be selected';
                    messageElementFalse.style.display = 'block';
                    setTimeout(function() {
                        messageElementFalse.style.display = 'none';
                    }, 3000);
                    return;
                } else {
                    //messageElement.textContent = 'Animations classes copied to clipboard!';
                    messageElement.style.display = 'block';
                    setTimeout(function() {
                        messageElement.style.display = 'none';
                    }, 3000);
                }
        
                // Collect the values and filter out empty ones
                const classes = [];
                if (animationSelect && animationSelect.value) {
                    classes.push('ice-anim', animationSelect.value);
                }
                if (speedSelect && speedSelect.value) {
                    classes.push(speedSelect.value);
                }
                if (delaySelect && delaySelect.value) {
                    classes.push(delaySelect.value);
                }
                if (animRepeat && animRepeat.checked) {
                    classes.push('animrep');
                }
                
                // Join classes with space and copy to clipboard
                const classString = classes.join(' ');
                if (classString !== '') {
                    navigator.clipboard.writeText(classString)
                        .catch(err => {
                            console.error('Error copying to clipboard:', err);
                        });
                }
            });
        }
        
        /*        
        // Function to show/hide animation controls based on "Enable Animations" checkbox
        function updateAnimationControlsVisibility() {
            const enabled = animationsEnableCheckbox && animationsEnableCheckbox.checked;
            const controls = [
                document.querySelector('select[name="icecubo_animations_select"]'),
                document.querySelector('select[name="icecubo_animations_select_time_speed"]'),
                document.querySelector('select[name="icecubo_animations_select_time_delay"]'),
                document.querySelector('input[name="icecubo_animation_repeat_checkbox"]'),
                copyButton,
                messageElement,
                messageElementFalse
            ];
            controls.forEach(function(el) {
                if (!el) return;
                el.style.display = enabled ? '' : 'none';
                // also hide parent label/container if exists for cleaner UI
                if (el.parentElement && el.parentElement.classList) {
                    // keep default display unless hiding
                    el.parentElement.style.display = enabled ? '' : 'none';
                }
            });
        }

        // Initialize visibility on load
        if (animationsEnableCheckbox) {
            updateAnimationControlsVisibility();
            animationsEnableCheckbox.addEventListener('change', updateAnimationControlsVisibility);
        }
        
        */
    });
    </script>

    <?php
}


/**
 * Enqueue styles for the theme options page, but only on that page, not on other admin pages.
 */
if ( ! function_exists( 'icecubo_scripts_and_styles_admin_theme_options' ) ) {
    function icecubo_scripts_and_styles_admin_theme_options() {

        $current_screen = get_current_screen()->base;
        $is_theme_options_page = $current_screen === 'appearance_page_icecubo-theme-options' || $current_screen === 'appearance_page_icecubo-theme-options-account' || $current_screen === 'appearance_page_icecubo-theme-options-addons' ? true : false;

        if (is_admin() && $is_theme_options_page === true) {
            wp_enqueue_style("icecubo-theme-options", get_template_directory_uri() . '/assets/css/theme-options.css', array(), ICECUBO_VERSION, 'all');
        }
    }
    add_action('admin_enqueue_scripts', 'icecubo_scripts_and_styles_admin_theme_options');
}
