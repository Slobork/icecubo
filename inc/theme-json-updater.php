<?php
// phpcs:ignore
/**
 * Update theme.json
 *
 * @package IceCubo
 */


if (! function_exists('icecubo_gradients_list') ) {

    /**
     * List of gradients
     *
     * @return array.
     */
    // phpcs:ignore
    function icecubo_gradients_list() {

        $gradients = array(
            array(
                "slug"     => "darko-to-white-linear-gradual",
                "gradient" => "linear-gradient(180deg,var(--wp--preset--color--darko) 0%,var(--wp--preset--color--white) 100%)",
                "name"     => __("Darko to white gradually", 'icecubo')
            ),
            array(
                "slug"     => "darko-to-whiteice-linear-gradual",
                "gradient" => "linear-gradient(180deg,var(--wp--preset--color--darko) 0%,var(--wp--preset--color--white-ice) 100%)",
                "name"     => __("Darko to white ice gradually", 'icecubo')
            ),
            array(
                "slug"     => "darko-to-transparent-linear-gradual",
                "gradient" => "linear-gradient(180deg,var(--wp--preset--color--darko) 0%,transparent 100%)",
                "name"     => __("Darko to transparent gradually", 'icecubo')
            ),
            array(
                "slug"     => "darko-to-primary-linear-gradual",
                "gradient" => "linear-gradient(180deg,var(--wp--preset--color--darko) 0%,var(--wp--preset--color--primary) 100%)",
                "name"     => __("Darko to primary gradually", 'icecubo')
            ),
            array(
                "slug"     => "primary-to-transparent-linear-gradual",
                "gradient" => "linear-gradient(180deg,var(--wp--preset--color--primary) 0%,transparent 100%)",
                "name"     => __("Primary to transparent gradually", 'icecubo')
            ),
            array(
                "slug"     => "primary-to-darko-gradual",
                "gradient" => "linear-gradient(180deg,var(--wp--preset--color--primary) 0%,var(--wp--preset--color--darko) 100%)",
                "name"     => __("Primary to darko gradually", 'icecubo')
            ),
            array(
                "slug"     => "darko-to-white-linear-sharp-corner",
                "gradient" => "linear-gradient(155deg,var(--wp--preset--color--darko) 50%,var(--wp--preset--color--white) 50%)",
                "name"     => __("Darko to white sharp diagonal", 'icecubo')
            ),
            array(
                "slug"     => "darko-to-whiteice-linear-sharp-corner",
                "gradient" => "linear-gradient(155deg,var(--wp--preset--color--darko) 50%,var(--wp--preset--color--white-ice) 50%)",
                "name"     => __("Darko to white ice sharp diagonal", 'icecubo')
            ),
            array(
                "slug"     => "darko-to-transparent-linear-sharp-corner",
                "gradient" => "linear-gradient(155deg,var(--wp--preset--color--darko) 50%,transparent 50%)",
                "name"     => __("Darko to transparent sharp diagonal", 'icecubo')
            ),
            array(
                "slug"     => "darko-to-primary-linear-sharp-corner",
                "gradient" => "linear-gradient(155deg,var(--wp--preset--color--darko) 50%,var(--wp--preset--color--primary) 50%)",
                "name"     => __("Darko to primary sharp diagonal", 'icecubo')
            ),
            array(
                "slug"     => "primary-to-white-linear-sharp-corner",
                "gradient" => "linear-gradient(155deg,var(--wp--preset--color--primary) 50%,var(--wp--preset--color--white) 50%)",
                "name"     => __("Primary to white sharp diagonal", 'icecubo')
            ),
            array(
                "slug"     => "primary-to-whiteice-linear-sharp-corner",
                "gradient" => "linear-gradient(155deg,var(--wp--preset--color--primary) 50%,var(--wp--preset--color--white-ice) 50%)",
                "name"     => __("Primary to white ice sharp diagonal", 'icecubo')
            ),
            array(
                "slug"     => "primary-to-transparent-linear-sharp-corner",
                "gradient" => "linear-gradient(155deg,var(--wp--preset--color--primary) 50%,transparent 50%)",
                "name"     => __("Primary to transparent sharp diagonal", 'icecubo')
            ),
            array(
                "slug"     => "darko-to-primary-linear-transit-corner",
                "gradient" => "linear-gradient(-30deg,var(--wp--preset--color--primary) 0%,var(--wp--preset--color--primary) 39%,var(--wp--preset--color--shade-2) 48%,var(--wp--preset--color--darko-transit) 58%,var(--wp--preset--color--darko) 62%)",
                "name"     => __("Darko to primary transit diagonal", 'icecubo')
            ),
            array(
                "slug"     => "darko-to-primary-linear-gradual-aside",
                "gradient" => "linear-gradient(90deg,var(--wp--preset--color--darko) 0%,var(--wp--preset--color--primary) 100%)",
                "name"     => __("Darko to primary gradual aside", 'icecubo')
            ),
            array(
                "slug"     => "white-to-primary-radial-gradual",
                "gradient" => "radial-gradient(var(--wp--preset--color--white) 0%,var(--wp--preset--color--primary) 100%)",
                "name"     => __("White to primary radial gradually", 'icecubo')
            ),
            array(
                "slug"     => "white-to-primary-radial-sharp",
                "gradient" => "radial-gradient(var(--wp--preset--color--primary) 50%,var(--wp--preset--color--white) 50%)",
                "name"     => __("White to primary radial sharp", 'icecubo')
            ),
            array(
                "slug"     => "transparent-to-primary-radial-sharp",
                "gradient" => "radial-gradient(var(--wp--preset--color--primary) 50%,transparent 50%)",
                "name"     => __("Transparent to primary radial sharp", 'icecubo')
            ),
            array(
                "slug"     => "darko-to-primary-radial-gradual",
                "gradient" => "radial-gradient(var(--wp--preset--color--primary) 0%,var(--wp--preset--color--darko) 100%)",
                "name"     => __("Darko to primary radial gradually", 'icecubo')
            ),
            array(
                "slug"     => "darko-to-primary-radial-sharp",
                "gradient" => "radial-gradient(var(--wp--preset--color--primary) 50%,var(--wp--preset--color--darko) 50%)",
                "name"     => __("Darko to primary radial sharp", 'icecubo')
            ),
            array(
                'slug'     => 'primary-to-transparent-rushly-radial',
                'gradient' => 'radial-gradient(60% 50% at 50% 20%,var(--wp--preset--color--primary) 0%,transparent 100%)',
                'name'     => __('Primary to transparent rushly', 'icecubo')
            ),
            array(
                'slug'     => 'primary-to-transparent-gradual-radial',
                'gradient' => 'radial-gradient(var(--wp--preset--color--primary) 0%,transparent 100%)',
                'name'     => __('Primary to transparent gradually', 'icecubo')
            ),
            array(
                'slug'     => 'shade-2-to-primaryish-to-shade-4-diagonal',
                'gradient' => 'linear-gradient(135deg,var(--wp--preset--color--shade-2) 0%,var(--wp--preset--color--primaryish) 50%,var(--wp--preset--color--shade-4) 100%)',
                'name'     => __('Diagonal 3 colors shading with glow in the middle', 'icecubo')
            ),
            array(
                'slug'     => 'matching-colors-diagonal',
                'gradient' => 'linear-gradient(135deg,var(--wp--preset--color--matching-1) 0%,var(--wp--preset--color--matching-3) 50%,var(--wp--preset--color--matching-5) 100%)',
                'name'     => __('Diagonal with 3 matching colors', 'icecubo')
            ),
            /**
             * There's an issue when a var() is used inside the gradient:
             * https://github.com/WordPress/gutenberg/issues/28254
             * So, lets offer one gradient that is reflected in the color slider.
             **/
            array(
                'slug'     => 'adjustable-color-radial',
                'gradient' => 'radial-gradient(#888 0%,transparent 100%)',
                'name'     => __('Adjust color to transparent', 'icecubo')
            ),
        );

        return $gradients;

    }

}

if (! function_exists('icecubo_gradients_filter_theme_json_theme') ) {

    /**
     * Hook to the theme's theme.json
     *
     * @return array. Gradient list for the theme.json
     */
    // phpcs:ignore
    function icecubo_gradients_filter_theme_json_theme($theme_json) {

        $gradients_pro_list   = function_exists('icecubo_pro_gradients_list')   ? icecubo_pro_gradients_list()   : array();
        $gradients_child_list = function_exists('icecubo_child_gradients_list') ? icecubo_child_gradients_list() : array();
        $merged_list          = array_merge(icecubo_gradients_list(), $gradients_pro_list, $gradients_child_list);

        $new_data = array(
            'version'  => 2,
            'settings' => array(

                'color' => array(
                    'gradients' => $merged_list
                )

            ),
        );

        return $theme_json->update_with($new_data);

    }

}

if (! function_exists('icecubo_apply_theme_json_theme_filters') ) {

    // For the filter to work properly, it must be run after theme setup.
    // phpcs:ignore
    function icecubo_apply_theme_json_theme_filters() {
        add_filter('wp_theme_json_data_theme', 'icecubo_gradients_filter_theme_json_theme');
    }

}
add_action('after_setup_theme', 'icecubo_apply_theme_json_theme_filters');
