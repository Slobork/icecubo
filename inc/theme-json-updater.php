<?php
// phpcs:ignore
if (! defined('ABSPATH') ) {
    exit;
}
/**
 * Update theme.json
 *
 * @package IceCubo
 */


if (! function_exists('icecubo_gradients_list') ) {

    /**
     * List of gradients
     *
     * Set it through a function (instead of the theme.json) to be able to merge it with the pro and child theme gradients.
     * @return array.
     */
    // phpcs:ignore
    function icecubo_gradients_list() {

        $gradients = array(
            array(
                "slug"     => "darko-to-transparent-linear-gradual",
                "gradient" => "linear-gradient(180deg,var(--wp--preset--color--darko) 0%,transparent 100%)",
                "name"     => __("Darko to transparent gradually", 'icecubo')
            ),
            array(
                "slug"     => "transparent-to-darko-linear-gradual",
                "gradient" => "linear-gradient(180deg,transparent 0%,var(--wp--preset--color--darko) 100%)",
                "name"     => __("Transparent to darko gradually", 'icecubo')
            ),
            array(
                "slug"     => "darko-to-primary-linear-gradual",
                "gradient" => "linear-gradient(180deg,var(--wp--preset--color--darko) 0%,var(--wp--preset--color--primary) 100%)",
                "name"     => __("Darko to primary gradually", 'icecubo')
            ),
            array(
                "slug"     => "primary-to-darko-gradual",
                "gradient" => "linear-gradient(180deg,var(--wp--preset--color--primary) 0%,var(--wp--preset--color--darko) 100%)",
                "name"     => __("Primary to darko gradually", 'icecubo')
            ),
            array(
                "slug"     => "primary-to-transparent-linear-gradual",
                "gradient" => "linear-gradient(180deg,var(--wp--preset--color--primary) 0%,transparent 100%)",
                "name"     => __("Primary to transparent gradually", 'icecubo')
            ),
            array(
                "slug"     => "transparent-to-primary-linear-gradual",
                "gradient" => "linear-gradient(180deg,transparent 0%, var(--wp--preset--color--primary) 100%)",
                "name"     => __("Transparent to primary gradually", 'icecubo')
            ),
            array(
                "slug"     => "darko-to-transparent-linear-sharp-corner",
                "gradient" => "linear-gradient(155deg,var(--wp--preset--color--darko) 50%,transparent 50%)",
                "name"     => __("Darko to transparent sharp diagonal", 'icecubo')
            ),
            array(
                "slug"     => "transparent-to-darko-linear-sharp-corner",
                "gradient" => "linear-gradient(155deg, transparent 50%,var(--wp--preset--color--darko) 50%)",
                "name"     => __("Transparent to darko sharp diagonal", 'icecubo')
            ),
            array(
                "slug"     => "primary-to-darko-linear-sharp-corner",
                "gradient" => "linear-gradient(155deg,var(--wp--preset--color--darko) 50%,var(--wp--preset--color--primary) 50%)",
                "name"     => __("Primary to darko sharp diagonal", 'icecubo')
            ),
            array(
                "slug"     => "darko-to-primary-linear-sharp-corner",
                "gradient" => "linear-gradient(155deg,var(--wp--preset--color--primary) 50%,var(--wp--preset--color--darko) 50%)",
                "name"     => __("Darko to primary sharp diagonal", 'icecubo')
            ),
            array(
                "slug"     => "primary-to-transparent-linear-sharp-corner",
                "gradient" => "linear-gradient(155deg,var(--wp--preset--color--primary) 50%,transparent 50%)",
                "name"     => __("Primary to transparent sharp diagonal", 'icecubo')
            ),
            array(
                "slug"     => "transparent-to-primary-linear-sharp-corner",
                "gradient" => "linear-gradient(155deg,transparent 50%,var(--wp--preset--color--primary) 50%)",
                "name"     => __("Transparent to primary sharp diagonal", 'icecubo')
            ),
            array(
                "slug"     => "darko-to-primary-linear-transit-corner",
                "gradient" => "linear-gradient(-30deg,var(--wp--preset--color--primary) 0%,var(--wp--preset--color--primary) 39%,var(--wp--preset--color--shade-2) 48%,var(--wp--preset--color--darko-transit) 58%,var(--wp--preset--color--darko) 62%)",
                "name"     => __("Darko to primary transit diagonal", 'icecubo')
            ),
            array(
                "slug"     => "primary-to-darko-linear-transit-corner",
                "gradient" => "linear-gradient(-30deg,var(--wp--preset--color--darko) 0%,var(--wp--preset--color--darko-transit) 39%,var(--wp--preset--color--shade-2) 48%,var(--wp--preset--color--primary) 58%,var(--wp--preset--color--primary) 62%)",
                "name"     => __("Primary to darko transit diagonal", 'icecubo')
            ),
            array(
                "slug"     => "darko-to-primary-linear-gradual-aside",
                "gradient" => "linear-gradient(90deg,var(--wp--preset--color--darko) 0%,var(--wp--preset--color--primary) 100%)",
                "name"     => __("Darko to primary gradual aside", 'icecubo')
            ),
            array(
                "slug"     => "primary-to-darko-linear-gradual-aside",
                "gradient" => "linear-gradient(90deg,var(--wp--preset--color--primary) 0%,var(--wp--preset--color--darko) 100%)",
                "name"     => __("Primary to darko gradual aside", 'icecubo')
            ),
            array(
                "slug"     => "white-to-primary-radial-gradual",
                "gradient" => "radial-gradient(var(--wp--preset--color--white) 0%,var(--wp--preset--color--primary) 100%)",
                "name"     => __("White to primary radial gradually", 'icecubo')
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
                'slug'     => 'primary-to-transparent-radial-66-break',
                'gradient' => 'radial-gradient(var(--wp--preset--color--primary) 0%,rgba(0,0,0,0) 66%)',
                'name'     => __('Primary to transparent focus', 'icecubo')
            ),
            array(
                'slug'     => 'classy-to-transparent-radial-66-break',
                'gradient' => 'radial-gradient(var(--wp--preset--color--classy-3) 0%,rgba(0,0,0,0) 66%)',
                'name'     => __('Classy to transparent focus', 'icecubo')
            ),
            array(
                'slug'     => 'matching-to-transparent-radial-66-break',
                'gradient' => 'radial-gradient(var(--wp--preset--color--matching-6) 0%,rgba(0,0,0,0) 66%)',
                'name'     => __('Matching to transparent focus', 'icecubo')
            ),
            array(
                'slug'     => 'darko-transparent-sharp-stack',
                'gradient' => 'linear-gradient(180deg,var(--wp--preset--color--darko) 70%,rgba(135,135,135,0) 70%)',
                'name'     => __('Darko to transparent (sharp vertical stack)', 'icecubo')
            ),
            array(
                'slug'     => 'primary-transparent-sharp-stack',
                'gradient' => 'linear-gradient(180deg,var(--wp--preset--color--primary) 70%,rgba(135,135,135,0) 70%)',
                'name'     => __('Primary to transparent (sharp vertical stack)', 'icecubo')
            ),
            array(
                'slug'     => 'primary-light-transparent-sharp-stack',
                'gradient' => 'linear-gradient(180deg,var(--wp--preset--color--primary-light) 70%,rgba(135,135,135,0) 70%)',
                'name'     => __('Primary light to transparent (sharp vertical stack)', 'icecubo')
            ),
            array(
                'slug'     => 'radial-transparent-to-primary',
                'gradient' => 'radial-gradient(transparent 20%, var(--wp--preset--color--primary) 100%)',
                'name'     => __('Edgy primary', 'icecubo')
            ),
            array(
                'slug'     => 'radial-transparent-to-matching',
                'gradient' => 'radial-gradient(transparent 20%, var(--wp--preset--color--matching-6) 100%)',
                'name'     => __('Edgy matching', 'icecubo')
            ),
            array(
                'slug'     => 'radial-transparent-to-classy',
                'gradient' => 'radial-gradient(transparent 20%, var(--wp--preset--color--classy-2) 100%)',
                'name'     => __('Edgy classy', 'icecubo')
            ),
            array(
                'slug'     => 'shade-2-to-primaryish-to-shade-4',
                'gradient' => 'linear-gradient(180deg,var(--wp--preset--color--shade-2) 0%,var(--wp--preset--color--primaryish) 50%,var(--wp--preset--color--shade-4) 100%)',
                'name'     => __('Shading 3 colors with glow in the middle', 'icecubo')
            ),
            array(
                'slug'     => 'shading-1-to-3-to-primaryish',
                'gradient' => 'linear-gradient(180deg,var(--wp--preset--color--shade-1) 0%,var(--wp--preset--color--shade-3) 50%,var(--wp--preset--color--primaryish) 100%)',
                'name'     => __('Shading colors with glow down', 'icecubo')
            ),
            array(
                'slug'     => 'shading-6-to-3-to-primaryish',
                'gradient' => 'linear-gradient(180deg,var(--wp--preset--color--shade-6) 0%,var(--wp--preset--color--shade-3) 50%,var(--wp--preset--color--primaryish) 100%)',
                'name'     => __('Shading colors with glow down - 2', 'icecubo')
            ),
            array(
                'slug'     => 'matching-5-to-3-to-6',
                'gradient' => 'linear-gradient(-180deg,var(--wp--preset--color--matching-5) 0%,var(--wp--preset--color--matching-3) 50%,var(--wp--preset--color--matching-6) 100%)',
                'name'     => __('Matching 3 colors', 'icecubo')
            ),
            array(
                'slug'     => 'matching-1-to-3-to-5',
                'gradient' => 'linear-gradient(180deg,var(--wp--preset--color--matching-1) 0%,var(--wp--preset--color--matching-3) 50%,var(--wp--preset--color--matching-5) 100%)',
                'name'     => __('Transit with 3 matching colors', 'icecubo')
            ),
            array(
                'slug'     => 'matching-colors-reverse',
                'gradient' => 'linear-gradient(180deg,var(--wp--preset--color--matching-5) 0%,var(--wp--preset--color--matching-3) 50%,var(--wp--preset--color--matching-1) 100%)',
                'name'     => __('Transit with 3 matching colors - reverse', 'icecubo')
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
            array(
                'slug'     => 'primary-to-matching-to-primaryish',
                'gradient' => 'linear-gradient(135deg,var(--wp--preset--color--primary) 0%,var(--wp--preset--color--matching-3) 50%,var(--wp--preset--color--primaryish) 100%)',
                'name'     => __('3 colors diagonal - Primary/Matching/Primary Glow', 'icecubo')
            ),
            array(
                'slug'     => 'primary-to-matching-to-primaryish-2',
                'gradient' => 'linear-gradient(30deg,var(--wp--preset--color--primary) 0%,var(--wp--preset--color--matching-3) 50%,var(--wp--preset--color--primaryish) 100%)',
                'name'     => __('3 colors diagonal - Primary/Matching/Primary Glow -2', 'icecubo')
            ),
            array(
                'slug'     => 'generic-1-to-3-to-5',
                'gradient' => 'linear-gradient(135deg,var(--wp--preset--color--generic-1) 0%,var(--wp--preset--color--generic-3) 50%,var(--wp--preset--color--generic-5) 100%)',
                'name'     => __('3 colors diagonal - Generic', 'icecubo')
            ),
            array(
                'slug'     => 'generic-1-to-3-to-5-2',
                'gradient' => 'linear-gradient(30deg,var(--wp--preset--color--generic-1) 0%,var(--wp--preset--color--generic-3) 50%,var(--wp--preset--color--generic-5) 100%)',
                'name'     => __('3 colors diagonal - Generic -2', 'icecubo')
            ),
            array(
                'slug'     => 'diagonal-generic-matching-mesh',
                'gradient' => 'linear-gradient(-190deg,var(--wp--preset--color--generic-1) 0%,var(--wp--preset--color--matching-2) 20%,var(--wp--preset--color--matching-4) 40%,var(--wp--preset--color--matching-6) 60%,var(--wp--preset--color--matching-3) 80%,var(--wp--preset--color--generic-6) 100%)',
                'name'     => __('Wavy Generic - Matching mesh', 'icecubo')
            ),
            array(
                'slug'     => 'diagonal-generic-matching-mesh-reverse',
                'gradient' => 'linear-gradient(-190deg,var(--wp--preset--color--generic-6) 0%,var(--wp--preset--color--matching-3) 20%,var(--wp--preset--color--matching-6) 40%,var(--wp--preset--color--matching-4) 60%,var(--wp--preset--color--matching-2) 80%,var(--wp--preset--color--generic-1) 100%)',
                'name'     => __('Wavy Generic - Matching mesh - reverse', 'icecubo')
            ),
            /**
             * There's an issue when a var() is used inside the gradient:
             * https://github.com/WordPress/gutenberg/issues/28254
             * So, lets offer one gradient that is reflected in the color slider.
             */
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
