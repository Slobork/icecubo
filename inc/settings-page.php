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
                esc_html__('You have to upgrade to the Pro version (Pro addon) to access these settings.', 'icecubo'),
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
        $output .= '<h3 style="margin:0 0 10px; color: white;">' . esc_html__( 'Buy Pro', 'icecubo' ) . '</h3>';
        $output .= '<p style="line-height: 1.75">' . esc_html__( 'With Pro addon get advanced features and templates.', 'icecubo' ) . '</p>';
        $output .= '<a style="font-size: 16px; line-height: 1.7; color: #a3a3ff;" href="' . admin_url( 'themes.php?page=icecubo-theme-options-addons' ) . '" target="_self">Get IceCubo Companion →</a>';
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
            /** 
             * Output of this message is not displayed anywhere coz Freemius is preventing access to the settings for users
             * who have not activated the license (with a License box prompt), but we will keep it here just in case.
             */
            $output .= '<a style="font-size: 16px; line-height: 2.5; background: #a3a3ff; color: black; padding: 5px; border-radius: 3px; margin: 0 30px 0 10px;" href="admin.php?page=icecubo-licenses">Activate License first to access additional settings →</a>';
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
    echo '<input type="checkbox" name="icecubo_animations_laod" value="1" style="margin-bottom: 40px;" ' . checked($animation, 1, false) . '/>';
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
                if (class_exists('IceCubo_Pro') && icecubo_check_license() !='') {
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
