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
                'animations_classes_generator_description',
                esc_html__('Animation Generator', 'icecubo'),
                'icecubo_settings_animations_classes_generator_description_callback',
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

            add_settings_field(
                'animations_copy_button',
                esc_html__('Copy Animation', 'icecubo'),
                'icecubo_settings_animations_copy_button_callback',
                $tab_settings,
                'section_animations'
            );

            add_settings_field(
                'animation_preview',
                esc_html__('Animation Preview', 'icecubo'),
                'icecubo_settings_animation_preview',
                $tab_settings,
                'section_animations'
            );
            
            // Section Navigation settings
            add_settings_section(
                'section_navigation',
                esc_html__('Menu Navigation Settings', 'icecubo'),
                'icecubo_settings_section_navigation_callback',
                $tab_settings
            );
            add_settings_field(
                'navigation_class_1',
                esc_html__('Navigation overlay button', 'icecubo'),
                'icecubo_settings_navigation_select_class_1_callback',
                $tab_settings,
                'section_navigation'
            );
            add_settings_field(
                'navigation_class_2',
                esc_html__('Hover effect', 'icecubo'),
                'icecubo_settings_navigation_select_class_2_callback',
                $tab_settings,
                'section_navigation'
            );
            add_settings_field(
                'navigation_class_3',
                esc_html__('Hover effect size', 'icecubo'),
                'icecubo_settings_navigation_select_class_3_callback',
                $tab_settings,
                'section_navigation'
            );
            add_settings_field(
                'navigation_class_4',
                esc_html__('Hover effect speed', 'icecubo'),
                'icecubo_settings_navigation_select_class_4_callback',
                $tab_settings,
                'section_navigation'
            );
            add_settings_field(
                'navigation_class_5',
                esc_html__('Submenu style', 'icecubo'),
                'icecubo_settings_navigation_select_class_5_callback',
                $tab_settings,
                'section_navigation'
            );
            add_settings_field(
                'navigation_class_6',
                esc_html__('Submenu animation', 'icecubo'),
                'icecubo_settings_navigation_select_class_6_callback',
                $tab_settings,
                'section_navigation'
            );
            // Copy Navigation button - outputs an HTML button that copies navigation-related values
            add_settings_field(
                'navigation_copy_button',
                esc_html__('Copy generated styles', 'icecubo'),
                'icecubo_settings_navigation_copy_button_callback',
                $tab_settings,
                'section_navigation'
            );

            add_settings_field(
                'navigation_save_globally',
                esc_html__('Add to all menus', 'icecubo'),
                'icecubo_settings_navigation_apply_globally_callback',
                $tab_settings,
                'section_navigation'
            );

            add_settings_field(
                'navigation_global_classes',
                esc_html__('Added navigation classes', 'icecubo'),
                'icecubo_settings_navigation_global_classes_callback',
                $tab_settings,
                'section_navigation'
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
            
            /**
             * Not needed to save these options in the database, 
             * coz their purpose is just to generate the classes for copying
             * -------------------------------------------------------------
             * 
             * register_setting('icecubo-theme-options', 'icecubo_animations_select', 'sanitize_text_field');
             * register_setting('icecubo-theme-options', 'icecubo_animations_select_time_speed', 'sanitize_text_field');
             * register_setting('icecubo-theme-options', 'icecubo_animations_select_time_delay', 'sanitize_text_field');
             * register_setting('icecubo-theme-options', 'icecubo_animation_repeat_checkbox', 'icecubo_sanitize_checkbox');
             * register_setting('icecubo-theme-options', 'icecubo_animations_copy_button', 'sanitize_text_field');
             * 
             * ...it's the same for the navigation classes, they are just for copying and not needed to be saved in the database,
             * except the following two options, which are needed to save the global classes for the navigation block.
             */

            register_setting('icecubo-theme-options', 'icecubo_navigation_apply_globally', 'icecubo_sanitize_checkbox');
            register_setting('icecubo-theme-options', 'icecubo_navigation_global_classes', 'sanitize_text_field');

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
}

function icecubo_settings_animations_load_checkbox_callback() {
    $animation = get_option('icecubo_animations_laod');
    echo '<input type="checkbox" name="icecubo_animations_laod" value="1" style="margin-bottom: 10px;" ' . checked($animation, 1, false) . '/>';
    echo '<p style="font-size: 16px; margin-bottom: 30px; max-width: 600px;">' .esc_html__('Do not forget to save the changes at the bottom of the page, once you enable the animations here!', 'icecubo') . '</p>';

}

function icecubo_settings_animations_classes_generator_description_callback() {
    echo '<p style="font-size: 16px; max-width: 600px;">' .esc_html__('Beneath you can generate animation classes for your content. Just select the animation and its complementary options, then click on the "Copy Animation Classes" button. You can paste it into any WordPress block from its "Additional CSS classes" option.', 'icecubo') . '</p>';
}

function icecubo_settings_animations_select_callback() {

    /*
     * This isn't saving to the database since it's only used for the on-screen classes generation.
     * That's why it's not getting the option value from the database. In that case it would be:
     * $animations_select = get_option('icecubo_animations_select');
     * if ($animations_select === false) {
     *   $animations_select = '';
     * }
     * ...and each option would have its value from the variable:
     *   echo '<option value="anim-bounce" ' . selected($animations_select, 'anim-bounce', false) . '>bounce</option>';
     */


    echo '<select name="icecubo_animations_select">';
    echo '<option value="" ' . selected('', '', false) . '>Select Animation</option>';
    
    echo '<option value="anim-bounce" ' . selected('', 'anim-bounce', false) . '>bounce</option>';
    echo '<option value="anim-fadeIn" ' . selected('', 'anim-fadeIn', false) . '>fadeIn</option>';
    echo '<option value="anim-fadeInUp" ' . selected('', 'anim-fadeInUp', false) . '>fadeInUp</option>';
    echo '<option value="anim-blurOut" ' . selected('', 'anim-blurOut', false) . '>blurOut</option>';
    
    echo '<option value="anim-pushUp" ' . selected('', 'anim-pushUp', false) . '>pushUp</option>';
    echo '<option value="anim-pushDown" ' . selected('', 'anim-pushDown', false) . '>pushDown</option>';
    echo '<option value="anim-pushLeft" ' . selected('', 'anim-pushLeft', false) . '>pushLeft</option>';
    echo '<option value="anim-pushRight" ' . selected('', 'anim-pushRight', false) . '>pushRight</option>';
    echo '<option value="anim-yankUp" ' . selected('', 'anim-yankUp', false) . '>yankUp</option>';
    echo '<option value="anim-yankDown" ' . selected('', 'anim-yankDown', false) . '>yankDown</option>';
    echo '<option value="anim-yankLeft" ' . selected('', 'anim-yankLeft', false) . '>yankLeft</option>';
    echo '<option value="anim-yankRight" ' . selected('', 'anim-yankRight', false) . '>yankRight</option>';
    echo '<option value="anim-flipX" ' . selected('', 'anim-flipX', false) . '>flipX</option>';
    echo '<option value="anim-flipY" ' . selected('', 'anim-flipY', false) . '>flipY</option>';
    echo '<option value="anim-flipXspin" ' . selected('', 'anim-flipXspin', false) . '>flipXspin</option>';
    echo '<option value="anim-flipYspin" ' . selected('', 'anim-flipYspin', false) . '>flipYspin</option>';
    echo '<option value="anim-rotateIn-left" ' . selected('', 'anim-rotateIn-left', false) . '>rotateIn-left</option>';
    echo '<option value="anim-rotateIn-right" ' . selected('', 'anim-rotateIn-right', false) . '>rotateIn-right</option>';
    echo '<option value="anim-to-transform" ' . selected('', 'anim-to-transform', false) . '>to-transform</option>';
    echo '<option value="anim-to-blob" ' . selected('', 'anim-to-blob', false) . '>to-blob</option>';
    echo '<option value="anim-scale-in-center" ' . selected('', 'anim-scale-in-center', false) . '>scale-in-center</option>';
    echo '<option value="anim-scale-in-hor-center" ' . selected('', 'anim-scale-in-hor-center', false) . '>scale-in-hor-center</option>';
    echo '<option value="anim-scale-in-ver-center" ' . selected('', 'anim-scale-in-ver-center', false) . '>scale-in-ver-center</option>';
    echo '<option value="anim-scale-in-top" ' . selected('', 'anim-scale-in-top', false) . '>scale-in-top</option>';
    echo '<option value="anim-scale-in-tr" ' . selected('', 'anim-scale-in-tr', false) . '>scale-in-tr</option>';
    echo '<option value="anim-scale-in-right" ' . selected('', 'anim-scale-in-right', false) . '>scale-in-right</option>';
    echo '<option value="anim-scale-in-br" ' . selected('', 'anim-scale-in-br', false) . '>scale-in-br</option>';
    echo '<option value="anim-scale-in-bottom" ' . selected('', 'anim-scale-in-bottom', false) . '>scale-in-bottom</option>';
    echo '<option value="anim-scale-in-bl" ' . selected('', 'anim-scale-in-bl', false) . '>scale-in-bl</option>';
    echo '<option value="anim-scale-in-left" ' . selected('', 'anim-scale-in-left', false) . '>scale-in-left</option>';
    echo '<option value="anim-scale-in-tl" ' . selected('', 'anim-scale-in-tl', false) . '>scale-in-tl</option>';
    echo '<option value="anim-slide-bg" ' . selected('', 'anim-slide-bg', false) . '>slide-bg</option>';
    echo '<option value="anim-slide-ch" ' . selected('', 'anim-slide-ch', false) . '>slide-ch</option>';
    echo '<option value="anim-text-accordion" ' . selected('', 'anim-text-accordion', false) . '>text-accordion</option>';
    echo '<option value="anim-text-accordion-minus" ' . selected('', 'anim-text-accordion-minus', false) . '>text-accordion-minus</option>';
    echo '<option value="anim-text-glow" ' . selected('', 'anim-text-glow', false) . '>text-glow</option>';
    echo '<option value="anim-text-glowOff" ' . selected('', 'anim-text-glowOff', false) . '>text-glowOff</option>';
    echo '<option value="anim-text-glowMatch" ' . selected('', 'anim-text-glowMatch', false) . '>text-glowMatch</option>';
    echo '<option value="anim-text-glowMatchOff" ' . selected('', 'anim-text-glowMatchOff', false) . '>text-glowMatchOff</option>';
    echo '</select>';
}

function icecubo_settings_animations_select_time_speed_callback() {

    // This isn't saving to the database since it's only used for the on-screen classes generation.

    echo '<select name="icecubo_animations_select_time_speed">';
    echo '<option value="" ' . selected('', '', false) . '>Normal</option>';
    
    echo '<option value="fastest" ' . selected('', 'fastest', false) . '>fastest</option>';
    echo '<option value="fast" ' . selected('', 'fast', false) . '>fast</option>';
    echo '<option value="slow" ' . selected('', 'slow', false) . '>slow</option>';
    echo '<option value="slowest" ' . selected('', 'slowest', false) . '>slowest</option>';
    echo '</select>';
}

function icecubo_settings_animations_select_time_delay_callback() {

    // This isn't saving to the database since it's only used for the on-screen classes generation.

    echo '<select name="icecubo_animations_select_time_delay">';
    echo '<option value="" ' . selected('', '', false) . '>No Delay</option>';
    
    echo '<option value="del025" ' . selected('', 'del025', false) . '>Delay 250 ms</option>';
    echo '<option value="del05" '  . selected('', 'del05',  false) . '>Delay 500 ms</option>';
    echo '<option value="del075" ' . selected('', 'del075', false) . '>Delay 750 ms</option>';
    echo '<option value="del1" '   . selected('', 'del1', false)   . '>Delay 1s</option>';
    echo '<option value="del2" '   . selected('', 'del2', false)   . '>Delay 2s</option>';
    echo '<option value="del3" '   . selected('', 'del3', false)   . '>Delay 3s</option>';
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

function icecubo_settings_animation_preview() {
    echo '<div id="animation-preview-box" style="position: relative; width: 320px; height: 220px; background: #14145b; color: white; border-radius: 50px;"><p style="position: absolute; top: 50%; transform: translate(50px, -50%);">' . esc_html__('This is the animation box example!', 'icecubo') . '</p></div>';
    echo '<button type="button" id="icecubo-animation-preview-button" class="button button-primary" style="margin-top: 10px; border-radius: 10px;">' . esc_html__('Preview Animation', 'icecubo') . '</button>';
    echo '<p id="icecubo-animation-preview-false" style="display:none; color: #cf0b0b; margin-top: 10px;">' . esc_html__('Animation must be selected!', 'icecubo') . '</p>';
    echo '<p style="font-size: 16px; margin-top: 10px; max-width: 600px;">' . esc_html__('In this preview, complementary options (speed, delay and repeat) are not applied.', 'icecubo') . '</p>';
    echo '<p style="font-size: 16px; margin-top: 10px; max-width: 600px;">' . esc_html__('Some animations cannot be previewed because they require specific CSS previously applied (anim-to-transform) or to be a direct text target (anim-slide-ch, anim-text-glow, anim-text-glowOff, anim-text-glowMatch, anim-text-glowMatchOff).', 'icecubo') . '</p>';

}

function icecubo_settings_section_navigation_callback() {
    // alternative bordr-color may be: #0e0ed7, for now keep the current:
    echo '<hr id="icecubo-animations-settings-sep" style="margin-bottom: 20px; border-color: #40248e; border-width: 2px;">';
    echo '<p style="font-size: 18px; margin-bottom: 3px;">' .esc_html__('You can generate navigation classes here, copy them and add them to each navigation block separately on the site.', 'icecubo') . '</p>';
    echo '<p style="font-size: 18px; margin-top: 3px;">' .esc_html__('Alternatively, from here, you can apply the classes globally to all navigation blocks at once.', 'icecubo') . '</p>';
}

function icecubo_settings_navigation_select_class_1_callback() {
    
    // This isn't saving to the database since it's only used for the on-screen classes generation.

    echo '<select name="icecubo_navigation_select_class_1">';
    echo '<option value="" ' . selected('', '', false) . '>Default</option>';
    
    echo '<option value="ice-modal-button-round" ' . selected('', 'ice-modal-button-round', false) . '>Round</option>';
    echo '<option value="ice-modal-button-square" ' . selected('', 'ice-modal-button-square', false) . '>Square</option>';
    echo '</select>';
}

function icecubo_settings_navigation_select_class_2_callback() {
        
    // This isn't saving to the database since it's only used for the on-screen classes generation.

    echo '<select name="icecubo_navigation_select_class_2">';
    echo '<option value="" ' . selected('', '', false) . '>None</option>';
    
    echo '<option value="ice-hover-transit-from-left" ' . selected('', 'ice-hover-transit-from-left', false) . '>Transit from left</option>';
    echo '<option value="ice-hover-transit-from-right" ' . selected('', 'ice-hover-transit-from-right', false) . '>Transit from right</option>';
    echo '<option value="ice-hover-transit-from-center" ' . selected('', 'ice-hover-transit-from-center', false) . '>Transit from center</option>';
    echo '<option value="ice-hover-transit-pulse" ' . selected('', 'ice-hover-transit-pulse', false) . '>Pulse</option>';
    echo '</select>';

}

function icecubo_settings_navigation_select_class_3_callback() {
        
    // This isn't saving to the database since it's only used for the on-screen classes generation.

    echo '<select name="icecubo_navigation_select_class_3">';
    echo '<option value="" ' . selected('', '', false) . '>Default</option>';
    
    echo '<option value="ice-hov-huge" ' . selected('', 'ice-hov-huge', false) . '>Huge</option>';
    echo '</select>';

}

function icecubo_settings_navigation_select_class_4_callback() {
        
    // This isn't saving to the database since it's only used for the on-screen classes generation.

    echo '<select name="icecubo_navigation_select_class_4">';
    echo '<option value="" ' . selected('', '', false) . '>Default</option>';
    
    echo '<option value="ice-hov-slow" ' . selected('', 'ice-hov-slow', false) . '>Slow</option>';
    echo '</select>';

}

function icecubo_settings_navigation_select_class_5_callback() {
    
    // This isn't saving to the database since it's only used for the on-screen classes generation.

    echo '<select name="icecubo_navigation_select_class_5">';
    echo '<option value="" ' . selected('', '', false) . '>None</option>';
    
    echo '<option value="ice-submenu-shade" ' . selected('', 'ice-submenu-shade', false) . '>Shade 1</option>';
    echo '<option value="ice-submenu-shade-2" ' . selected('', 'ice-submenu-shade-2', false) . '>Shade 2</option>';
    echo '<option value="ice-submenu-shade-3" ' . selected('', 'ice-submenu-shade-3', false) . '>Shade 3</option>';
    echo '</select>';
}

function icecubo_settings_navigation_select_class_6_callback() {
        
    // This isn't saving to the database since it's only used for the on-screen classes generation.

    echo '<select name="icecubo_navigation_select_class_6">';
    echo '<option value="" ' . selected('', '', false) . '>None</option>';
    
    echo '<option value="ice-submenu-anim-pushUp" ' . selected('', 'ice-submenu-anim-pushUp', false) . '>Push Up</option>';
    echo '<option value="ice-submenu-anim-pushLeft" ' . selected('', 'ice-submenu-anim-pushLeft', false) . '>Push Left</option>';
    echo '<option value="ice-submenu-anim-pushRight" ' . selected('', 'ice-submenu-anim-pushRight', false) . '>Push Right</option>';
    echo '<option value="ice-submenu-anim-pushDown" ' . selected('', 'ice-submenu-anim-pushDown', false) . '>Push Down</option>';
    echo '</select>';

}

function icecubo_settings_navigation_copy_button_callback() {
    echo '<button type="button" id="icecubo-copy-navigation-button" class="button button-primary" style="margin-top: 10px; border-radius: 10px;">' . esc_html__('Copy Navigation Classes', 'icecubo') . '</button>';
    echo '<p id="icecubo-copy-navigation-message" style="display:none; color: #0000c4; margin-top: 10px;">' . esc_html__('Navigation classes copied to clipboard!', 'icecubo') . '</p>';
    echo '<p id="icecubo-copy-navigation-message-false" style="display:none; color: #cf0b0b; margin-top: 10px;">' . esc_html__('At least one navigation option must be selected!', 'icecubo') . '</p>';
}

function icecubo_settings_navigation_apply_globally_callback() {
        
    //$option = get_option('icecubo_navigation_apply_globally');
    //echo '<input type="checkbox" name="icecubo_navigation_apply_globally" value="1" ' . checked($option, 1, false) . '/>';
        
    echo '<button type="button" id="icecubo-navigation-apply-button" class="button button-primary" style="margin-top: 10px; border-radius: 10px; margin-right: 15px;">' . esc_html__('Apply Globally', 'icecubo') . '</button>';
    echo '<button type="button" id="icecubo-navigation-reset-button" class="button button-primary" style="margin-top: 10px; border-radius: 10px;">' . esc_html__('Reset Global', 'icecubo') . '</button>';

}

function icecubo_settings_navigation_global_classes_callback() {
        
    $option = get_option('icecubo_navigation_global_classes');
    echo '<input type="text" name="icecubo_navigation_global_classes" value="' . esc_attr($option) . '" readonly />';
    echo '<p id="icecubo-navigation-global-apply-message" style="font-size: 16px; margin-top: 10px; max-width: 600px;">' . esc_html__('If you click on the button "Apply Globally", the current selections will be copied to this field. Those classes will be applied to all navigation blocks on the site. Just do not forget to save your changes at the end of the page!', 'icecubo') . '</p>';
    echo '<p id="icecubo-navigation-copy-classes-message" style="font-size: 16px; margin-top: 10px; max-width: 600px;">' . esc_html__('If you click on the button "Copy Navigation Classes", the current selections will be copied to your clipboard and you can paste them to any navigation block individually. This can be done from the block\'s settings → Advanced tab → Additional CSS Classes.', 'icecubo') . '</p>';

}

function icecubo_settings_section_templates_callback() {
    echo '<hr id="icecubo-templates-settings-sep" style="margin-bottom: 20px; border-color: #40248e; border-width: 2px;">';
    echo '<p style="font-size: 18px; margin-bottom: 3px;">' .esc_html__('Select the design templates you want to use.', 'icecubo') . '</p>';
    echo '<p style="font-size: 18px; margin-top: 3px; margin-bottom: 3px;">' .esc_html__('Each template has its own set of patterns, sections and customization options.', 'icecubo') . '</p>';
    echo '<p style="font-size: 18px; margin-top: 3px;">' .esc_html__('Enable them all or select individual ones to de-clutter the space inside the Editor, it\'s up to you.', 'icecubo') . '</p>';
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
    <?php // JavaScript for handling the theme options' tab navigation and showing the submit button only on the Settings tab: ?>
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
        const messageElementFalse2 = document.getElementById('icecubo-animation-preview-false');
        const animationsEnableCheckbox = document.querySelector('input[name="icecubo_animations_laod"]');
   
        // Get values from animation fields
        const animationSelect = document.querySelector('select[name="icecubo_animations_select"]');
        const speedSelect = document.querySelector('select[name="icecubo_animations_select_time_speed"]');
        const delaySelect = document.querySelector('select[name="icecubo_animations_select_time_delay"]');
        const animRepeat  = document.querySelector('input[name="icecubo_animation_repeat_checkbox"]');
 
        // Preview vars
        const animationPreviewBox = document.getElementById('animation-preview-box');
        const animationPreviewButton = document.getElementById('icecubo-animation-preview-button');


        // Copy anim classes
        if (copyButton) {
            copyButton.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Check if animation is selected
                if (animationSelect.value === '') {
                    //messageElementFalse.textContent = 'Animation must be selected';
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
        

        // Preview animation
        if (animationPreviewButton) {
            animationPreviewButton.addEventListener('click', function(e) {
                e.preventDefault();

                // Check if animation is selected
                if (animationSelect.value === '') {
                    messageElementFalse2.style.display = 'block';
                    setTimeout(function() {
                        messageElementFalse2.style.display = 'none';
                    }, 3000);
                    return;
                } else {
                    animationPreviewBox.className = '';
                    const addedAnimClass = animationSelect.value;
                    animationPreviewBox.classList.add(addedAnimClass);
                    // Remove the added animation class after 1 second
                    setTimeout(function() {
                        animationPreviewBox.classList.remove(addedAnimClass);
                    }, 1000);
                }
            });
        }
        
        
        // Function to show/hide animation options based on "Enable Animations" checkbox
        function updateAnimationControlsVisibility() {
            const enabled = animationsEnableCheckbox && animationsEnableCheckbox.checked;
            const checkboxRow = animationsEnableCheckbox ? animationsEnableCheckbox.closest('tr') : null;
            if (!checkboxRow) {
                return;
            }
            const table = checkboxRow.closest('table');
            if (!table) {
                return;
            }
            const rows = table.querySelectorAll('tr');
            rows.forEach(function(row) {
                if (row === checkboxRow) {
                    return;
                }
                row.style.display = enabled ? '' : 'none';
            });
        }

        // Initialize fields visibility on load
        if (animationsEnableCheckbox) {
            updateAnimationControlsVisibility();
            animationsEnableCheckbox.addEventListener('change', updateAnimationControlsVisibility);
        }

        const copyButtonNav = document.getElementById('icecubo-copy-navigation-button');
        const messageElementNav = document.getElementById('icecubo-copy-navigation-message');
        const messageElementNavFalse = document.getElementById('icecubo-copy-navigation-message-false');
        
        // Get values from navigation fields
        const navigationSelect1 = document.querySelector('select[name="icecubo_navigation_select_class_1"]');
        const navigationSelect2 = document.querySelector('select[name="icecubo_navigation_select_class_2"]');
        const navigationSelect3 = document.querySelector('select[name="icecubo_navigation_select_class_3"]');
        const navigationSelect4 = document.querySelector('select[name="icecubo_navigation_select_class_4"]');
        const navigationSelect5 = document.querySelector('select[name="icecubo_navigation_select_class_5"]');
        const navigationSelect6 = document.querySelector('select[name="icecubo_navigation_select_class_6"]');
        
        const navigationApplyGloballyButton = document.getElementById('icecubo-navigation-apply-button');
        const navigationApplyGloballyResetButton = document.getElementById('icecubo-navigation-reset-button');
        const navigationGlobalClassesInput = document.querySelector('input[name="icecubo_navigation_global_classes"]');

        // Copy navigation classes
        if (copyButtonNav) {
            copyButtonNav.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Check if navigation classes are selected
                if (navigationSelect1.value === '' && navigationSelect2.value === '' && navigationSelect3.value === '' && navigationSelect4.value === '' && navigationSelect5.value === '' && navigationSelect6.value === '') {
                    messageElementNavFalse.style.display = 'block';
                    setTimeout(function() {
                        messageElementNavFalse.style.display = 'none';
                    }, 3000);
                    return;
                } else {
                    messageElementNav.style.display = 'block';
                    setTimeout(function() {
                        messageElementNav.style.display = 'none';
                    }, 3000);
                }
        
                // Collect the values and filter out empty ones
                const classes = [];
                if (navigationSelect1 && navigationSelect1.value) {
                    classes.push(navigationSelect1.value);
                }
                if (navigationSelect2 && navigationSelect2.value) {
                    classes.push(navigationSelect2.value);
                }
                if (navigationSelect3 && navigationSelect3.value) {
                    classes.push(navigationSelect3.value);
                }
                if (navigationSelect4 && navigationSelect4.value) {
                    classes.push(navigationSelect4.value);
                }
                if (navigationSelect5 && navigationSelect5.value) {
                    classes.push(navigationSelect5.value);
                }
                if (navigationSelect6 && navigationSelect6.value) {
                    classes.push(navigationSelect6.value);
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

        // Set the width of the global classes field to 100%, so all classes can be seen
        if (navigationGlobalClassesInput) {
            navigationGlobalClassesInput.style.width = '100%';
        }

        // Add the selected navigation classes to the global classes field on button click
        if (navigationApplyGloballyButton && navigationGlobalClassesInput) {
            navigationApplyGloballyButton.addEventListener('click', function(e) {
                e.preventDefault();
                const classes = [
                    navigationSelect1,
                    navigationSelect2,
                    navigationSelect3,
                    navigationSelect4,
                    navigationSelect5,
                    navigationSelect6
                ]
                    .filter(function(select) {
                        return select && select.value;
                    })
                    .map(function(select) {
                        return select.value;
                    });

                if (classes.length === 0) {
                    messageElementNavFalse.style.display = 'block';
                    setTimeout(function() {
                        messageElementNavFalse.style.display = 'none';
                    }, 3000);
                    return;
                }

                // Join the selected classes with a space
                navigationGlobalClassesInput.value = classes.join(' ');
            });
        }

        // Clear the global classes field on reset button click
        if (navigationApplyGloballyResetButton && navigationGlobalClassesInput) {
            navigationApplyGloballyResetButton.addEventListener('click', function(e) {
                e.preventDefault();
                navigationGlobalClassesInput.value = '';
            });
        }

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
