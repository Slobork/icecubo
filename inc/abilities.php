<?php
// phpcs:ignore
if (! defined('ABSPATH') ) {
    exit;
}
/**
 * Register new abilities and categories beneath.
 *
 * @package IceCubo
 */


// First, register a category, or use one of the existing categories.
add_action( 'wp_abilities_api_categories_init', 'icecubo_register_ability_category' );
/**
 * Register a custom ability category.
 *
 * @return void
 */
if (! function_exists('icecubo_register_ability_category') ) {
    
    function icecubo_register_ability_category() {
        wp_register_ability_category(
            'icecubo-ai-tools',
            array(
                'label'       => __( 'IceCubo AI Tools', 'icecubo' ),
                'description' => __( 'Abilities of the IceCubo theme that provide AI-powered functionality.', 'icecubo' ),
            )
        );
    }

}

// Register an ability and apply it to the previously registered category.
add_action( 'wp_abilities_api_init', 'icecubo_register_abilities' );

if (! function_exists('icecubo_register_abilities') ) {

    function icecubo_register_abilities() {
        if ( ! function_exists( 'wp_register_ability' ) ) {
            return;
        }

        // Register the ability to list all block patterns.
        wp_register_ability( 'icecubo/list-patterns', array(
            'label' => __( 'IceCubo - List Patterns', 'icecubo' ),
            'description' => __( 'Lists all patterns provided by the IceCubo theme.', 'icecubo' ),
            'category' => 'icecubo-ai-tools',
            'execute_callback' => 'icecubo_ability_callback_patterns_list',
            'permission_callback' => function() {
                return current_user_can( 'edit_posts' );
            },
            //'meta' => array(
            //    'public'       => false,
            //    'show_in_rest' => true,
            //),
            
            //'input_schema' => array(
            //    'type' => 'object',
            //    'properties' => array(
            //        'prompt' => array( 'type' => 'string' )
            //    ),
            //),
        ) );

        // Register the ability to list all block styles.
        wp_register_ability( 'icecubo/list-block-styles', array(
            'label' => __( 'IceCubo - List Block Styles', 'icecubo' ),
            'description' => __( 'Lists all block styles. Use "ice", "other" or "all" as the prompt.', 'icecubo' ),
            'category' => 'icecubo-ai-tools',
            'execute_callback' => 'icecubo_ability_callback_block_styles_list',
            'permission_callback' => function() {
                return current_user_can( 'edit_posts' );
            },
            //'meta' => array(
            //    'public'       => false,
            //    'show_in_rest' => true,
            //),
            'input_schema' => array(
                'type' => 'object',
                'properties' => array(
                    'prompt' => array( 'type' => 'string' )
                ),
            ),
        ) );

        // Register the ability to list all templates.
        wp_register_ability( 'icecubo/list-templates', array(
            'label' => __( 'IceCubo - List Templates', 'icecubo' ),
            'description' => __( 'Lists all templates provided by the IceCubo theme.', 'icecubo' ),
            'category' => 'icecubo-ai-tools',
            'execute_callback' => 'icecubo_ability_callback_templates_list',
            'permission_callback' => function() {
                return current_user_can( 'edit_posts' );
            },
            //'meta' => array(
            //    'public'       => false,
            //    'show_in_rest' => true,
            //),

            //'input_schema' => array(
            //    'type' => 'object',
            //    'properties' => array(
            //        'prompt' => array( 'type' => 'string' )
            //    ),
            //),
        ) );

        // Register the ability to list all template parts.
        wp_register_ability( 'icecubo/list-template-parts', array(
            'label' => __( 'IceCubo - List Template Parts', 'icecubo' ),
            'description' => __( 'Lists all template parts. Use "header", "footer", "nav", or "all" as the prompt.', 'icecubo' ),
            'category' => 'icecubo-ai-tools',
            'execute_callback' => 'icecubo_ability_callback_template_parts_list',
            'permission_callback' => function() {
                return current_user_can( 'edit_posts' );
            },
            //'meta' => array(
            //    'public'       => false,
            //    'show_in_rest' => true,
            //),
            'input_schema' => array(
                'type' => 'object',
                'properties' => array(
                    'prompt' => array( 'type' => 'string' )
                ),
            ),
        ) );

        // Register the ability to list all blocks.
        wp_register_ability( 'icecubo/list-blocks', array(
            'label' => __( 'IceCubo - List Blocks', 'icecubo' ),
            'description' => __( 'Lists all available blocks.', 'icecubo' ),
            'category' => 'icecubo-ai-tools',
            'execute_callback' => 'icecubo_ability_callback_get_all_registered_blocks',
            'permission_callback' => function() {
                return current_user_can( 'edit_posts' );
            },
            //'meta' => array(
            //    'public'       => false,
            //    'show_in_rest' => true,
            //),

            //'input_schema' => array(
            //    'type' => 'object',
            //    'properties' => array(
            //        'prompt' => array( 'type' => 'string' )
            //    ),
            //),
        ) );

        // Register the ability to get the individual block styles.
        wp_register_ability( 'icecubo/get-individual-block-styles', array(
            'label' => __( 'IceCubo - Get Individual Block Styles', 'icecubo' ),
            'description' => __( 'Gets the styles for a specific block.', 'icecubo' ),
            'category' => 'icecubo-ai-tools',
            'execute_callback' => 'icecubo_ability_callback_get_individual_block_styles',
            'permission_callback' => function() {
                return current_user_can( 'edit_posts' );
            },
            //'meta' => array(
            //    'public'       => false,
            //    'show_in_rest' => true,
            //),
            'input_schema' => array(
                'type' => 'object',
                'properties' => array(
                    'prompt' => array( 'type' => 'string' )
                ),
            ),
        ) );

    } // function icecubo_register_abilities end
} // function_exists check end

// This is the callback that runs when the ability is executed.
if (! function_exists('icecubo_ability_callback_patterns_list') ) {
    //function icecubo_ability_callback_patterns_list( $input ) {
    function icecubo_ability_callback_patterns_list() {
        return icecubo_get_block_patterns();
    }
}

if (! function_exists('icecubo_get_block_patterns') ) {

    function icecubo_get_block_patterns() {

        $registry = WP_Block_Patterns_Registry::get_instance();
        $all_patterns = $registry->get_all_registered();

        $output = [];
        
        foreach ( $all_patterns as $pattern ) {
            if ( strpos( $pattern['name'], 'icecubo/' ) !== 0 ) {
                continue;
            }

            $output[] = [
                'name'       => $pattern['name'],
                'title'      => $pattern['title'],
                'categories' => isset( $pattern['categories'] ) ? $pattern['categories'] : [],
            ];
        }

        usort( $output, function ( $a, $b ) {
            return strcmp( $a['name'], $b['name'] );
        } );

        //return json_encode( $output, JSON_PRETTY_PRINT );
        return $output;

    }
}


// This is the callback that runs when the ability is executed.
function icecubo_ability_callback_block_styles_list( $input ) {
    return array('result' => icecubo_get_registered_block_styles()[$input['prompt']] ?? ['result' => 'Invalid prompt. Please use "ice", "other", or "all".']);
    
    /* 
    * Alternative approach to handle the prompt input and return the corresponding block styles:
    
    return array('result' => !empty($input['prompt']) ? icecubo_get_registered_block_styles()[$input['prompt']] : icecubo_get_registered_block_styles()['all']);
    return array('result' => icecubo_get_registered_block_styles()['all']);
    return array('result' => icecubo_get_registered_block_styles()['ice']);
    return array('result' => icecubo_get_registered_block_styles()['other']);
     */
}

function icecubo_get_registered_block_styles() {

    $icecubo_styles = array();
    $other_styles   = array();
    $all_styles     = array();
    $prefix = 'icecubo-';

    // 1. Grab PHP/JS registered styles matching the prefix
    $registry = WP_Block_Styles_Registry::get_instance();
    $registered_styles = $registry->get_all_registered();

    foreach ( $registered_styles as $block_name => $styles ) {
        foreach ( $styles as $style_slug => $style_data ) {
            $style = array(
                    'name'   => $style_slug,
                    'label'  => isset( $style_data['label'] ) ? $style_data['label'] : $style_slug,
                    'source' => 'php_registration'
                );

            $all_styles[ $block_name ][ $style_slug ] = $style;

            if ( str_starts_with( $style_slug, $prefix ) ) {
                $icecubo_styles[ $block_name ][ $style_slug ] = $style;
            } else {
                $other_styles[ $block_name ][ $style_slug ] = $style;
            }
        }
    }

    /** 
     * 2. Get theme-defined styles (theme.json + theme styles folder)
     * WP_Theme_JSON_Resolver::get_theme_data() automatically parses theme.json 
     * AND all individual block JSON files inside the theme's "styles" directory.
     */
    if ( class_exists( 'WP_Theme_JSON_Resolver' ) ) {
        $theme_json = WP_Theme_JSON_Resolver::get_theme_data();
        $raw_data   = $theme_json->get_raw_data();

        if ( isset( $raw_data['styles']['blocks'] ) ) {
            foreach ( $raw_data['styles']['blocks'] as $block_name => $block_config ) {
                if ( isset( $block_config['variations'] ) && is_array( $block_config['variations'] ) ) {
                    foreach ( $block_config['variations'] as $variation_slug => $variation_data ) {
                        
                        $style = array(
                            'name'   => $variation_slug,
                            'label'  => isset( $variation_data['label'] ) ? $variation_data['label'] : ucfirst( str_replace('-', ' ', $variation_slug) ),
                            'source' => 'theme_json'
                        );

                        if ( ! isset( $all_styles[ $block_name ][ $variation_slug ] ) ) {
                            $all_styles[ $block_name ][ $variation_slug ] = $style;
                        }

                        if ( str_starts_with( $variation_slug, $prefix ) ) {
                            if ( ! isset( $icecubo_styles[ $block_name ][ $variation_slug ] ) ) {
                                $icecubo_styles[ $block_name ][ $variation_slug ] = $style;
                            }
                        } elseif ( ! isset( $other_styles[ $block_name ][ $variation_slug ] ) ) {
                            $other_styles[ $block_name ][ $variation_slug ] = $style;
                        }
                    }
                }
            }
        }
    }

    return array(
        'ice'   => $icecubo_styles,
        'other' => $other_styles,
        'all'   => $all_styles,
    );
}


// This is the callback that runs when the ability is executed.
if (! function_exists('icecubo_ability_callback_templates_list') ) {
    function icecubo_ability_callback_templates_list() {
        return icecubo_get_templates();
    }
}

function icecubo_get_templates() {
    $templates = get_block_templates(array(), 'wp_template');

    return array_map( function( $template ) {
        return array(
            'slug' => $template->slug,
            'title' => $template->title,
            'type' => $template->type,
            'description' => $template->description,
            'theme' => $template->theme,
            'source' => $template->source,
            'content' => $template->content,
        );
    }, $templates );
}

// This is the callback that runs when the ability is executed.
if (! function_exists('icecubo_ability_callback_template_parts_list') ) {
    function icecubo_ability_callback_template_parts_list( $input ) {
        //return icecubo_get_template_parts();
        return array('result' => icecubo_get_template_parts()[$input['prompt']] ?? ['result' => 'Invalid prompt. Please use "header", "footer", "nav", or "all".']);
    }
}

function icecubo_get_template_parts() {

    $template_parts = get_block_templates( array(), 'wp_template_part' );

    $query_headers = array(
        'area' => 'header' // Get only header parts
    );

    $query_footers = array(
        'area' => 'footer' // Get only footer parts
    );

    $query_navigation_overlays = array(
        'area' => 'navigation-overlay' // Get only navigation-overlay parts
    );

    $header_parts = get_block_templates( $query_headers, 'wp_template_part' );
    $footer_parts = get_block_templates( $query_footers, 'wp_template_part' );
    $navigation_overlay_parts = get_block_templates( $query_navigation_overlays, 'wp_template_part' );

    return array(
        'header' => $header_parts,
        'footer' => $footer_parts,
        'nav' => $navigation_overlay_parts,
        //'all'    => array_merge( $header_parts, $footer_parts, $navigation_overlay_parts ),
        'all'    => $template_parts,
    );
}

// This is the callback that runs when the ability is executed.
if (! function_exists('icecubo_ability_callback_get_all_registered_blocks') ) {
    //function icecubo_ability_callback_get_all_registered_blocks( $input ) {
    function icecubo_ability_callback_get_all_registered_blocks() {
        return array('result' => icecubo_get_all_registered_blocks());
    }
}

//add_action( 'init', 'icecubo_get_all_registered_blocks' );
function icecubo_get_all_registered_blocks() {
    // Get the instance of the block registry
    $registry = WP_Block_Type_Registry::get_instance();
    
    // Get all block objects as an associative array
    $all_blocks = $registry->get_all_registered();
    
    // Get just the block slugs (e.g., 'core/paragraph')
    $block_slugs = array_keys( $all_blocks );

    return $block_slugs;
    
}

// This is the callback that runs when the ability is executed.
if (! function_exists('icecubo_ability_callback_get_individual_block_styles') ) {
    function icecubo_ability_callback_get_individual_block_styles($input) {
        
        $block_name = $input['prompt']; // Your target block
        $get_styles = array();

        // 1. Fetch styles registered via PHP / Plugins
        $registry = WP_Block_Styles_Registry::get_instance();
        $php_styles = $registry->get_registered_styles_for_block( $block_name );

        if ( ! empty( $php_styles ) ) {
            foreach ( $php_styles as $name => $properties ) {
                $get_styles[ $name ] = array(
                    'name'   => $name,
                    'label'  => $properties['label'] ?? $name,
                    'source' => 'php',
                );
            }
        }

        // 2. Fetch styles registered via theme.json and block style variations
        if ( class_exists( 'WP_Theme_JSON_Resolver' ) ) {
            $merged_data = WP_Theme_JSON_Resolver::get_merged_data()->get_raw_data();
            
            // Drill down to find theme.json specific block variations
            $json_variations = $merged_data['styles']['blocks'][ $block_name ]['variations'] ?? array();

            if ( ! empty( $json_variations ) ) {
                foreach ( $json_variations as $slug => $settings ) {
                    // Prevent duplicate keys if already recorded via PHP
                    if ( ! isset( $get_styles[ $slug ] ) ) {
                        $get_styles[ $slug ] = array(
                            'name'   => $slug,
                            // theme.json slugs usually rely on the client for formatting, 
                            // but we convert slugs like 'my-style' to 'My Style' for a cleaner fallback label
                            'label'  => $settings['label'] ?? ucwords( str_replace( '-', ' ', $slug ) ),
                            'source' => 'theme.json',
                        );
                    } else {
                        // If it exists in both, flag it as a merged/overridden asset
                        $get_styles[ $slug ]['source'] = 'php + theme.json';
                    }
                }
            }
        }

        // Flatten the array keys before returning the JSON payload
        $all_individual_styles = array_values( $get_styles );
        return !empty($all_individual_styles) ? array( 'result' => $all_individual_styles ) : array('result' => 'Invalid prompt. Please use block slug i.e. "core/paragraph", "core/heading", "core/query", etc. to get the styles for that specific block.'  );
    }
}
