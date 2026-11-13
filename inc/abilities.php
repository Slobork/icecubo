<?php
// phpcs:ignore
if (! defined('ABSPATH') ) {
    exit;
}
/**
 * Register new abilities and their categories beneath.
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

        $desc =  __( 'Lists all patterns provided by the IceCubo (both, provided by the theme and Pro plugin).', 'icecubo' );

        // Register the ability to list all block patterns.
        wp_register_ability( 'icecubo/list-patterns', array(
            'label' => __( 'IceCubo - List Patterns', 'icecubo' ),
            'description' => $desc,
            'category' => 'icecubo-ai-tools',
            'execute_callback' => 'icecubo_ability_callback_patterns_list',
            'permission_callback' => function() {
                return current_user_can( 'edit_posts' );
            },
            'meta' => array(
                'public'       => true,
                'show_in_rest' => true,
                'mcp'          => array(
                    'public' => true,
                ),
                'annotations'  => array(
                    'readonly'    => true,
                    'destructive' => false,
                    'idempotent'  => true, // Idempotent describes what happens if the same ability runs more than once with the same input:
                                           // true — means repeating it has no additional effect after the first run. For example, “set the page title to About” is idempotent: running it again leaves the title as About. 
                                           // Esencially, check is it the same result (effect) each time? Idempotent does not check if the returned data is identical each time. Idempotence describes repeated calls’ effects, not whether the returned data is permanently identical.
                ),
            ),
            'input_schema' => [
                'type'       => 'object',
                'properties' => [],
                'additionalProperties' => false,
                'description' => __( 'No input is required.', 'icecubo' ),
            ],
            'output_schema' => [
                'type'  => 'array',
                'items' => [
                    'type'       => 'object',
                    'properties' => [
                        'name'       => [ 'type' => 'string' ],
                        'title'      => [ 'type' => 'string' ],
                        'description' => [ 'type' => 'string' ],
                        'categories' => [
                            'type'  => 'array',
                            'items' => [ 'type' => 'string' ],
                        ],
                    ],
                    'required' => [ 'name', 'title', 'description', 'categories' ],
                ],
                'description' => $desc,
            ],
        ));

        // Register the ability to list all templates.
        wp_register_ability( 'icecubo/list-templates', array(
            'label' => __( 'IceCubo - List Templates', 'icecubo' ),
            'description' => __( 'Lists all templates, either provided by the IceCubo (both, provided by the theme and Pro plugin), or some other plugin.', 'icecubo' ),
            'category' => 'icecubo-ai-tools',
            'execute_callback' => 'icecubo_ability_callback_templates_list',
            'permission_callback' => function() {
                return current_user_can( 'edit_posts' );
            },
            'meta' => array(
                'public'       => true,
                'show_in_rest' => true,
                'mcp'          => array(
                    'public' => true,
                ),
                'annotations'  => array(
                    'readonly'    => true,
                    'destructive' => false,
                    'idempotent'  => true, // Idempotent describes what happens if the same ability runs more than once with the same input:
                                           // true — means repeating it has no additional effect after the first run. For example, “set the page title to About” is idempotent: running it again leaves the title as About. 
                                           // Esencially, check is it the same result (effect) each time? Idempotent does not check if the returned data is identical each time. Idempotence describes repeated calls’ effects, not whether the returned data is permanently identical.
                ),
            ),
            'input_schema' => [
                'type'       => 'object',
                'properties' => [],
                'additionalProperties' => false,
                'description' => __( 'No input is required.', 'icecubo' ),
            ],
            'output_schema' => [
                'type'  => 'array',
                'items' => [
                    'type'       => 'object',
                    'properties' => [
                        'slug'        => [ 'type' => 'string' ],
                        'title'       => [ 'type' => 'string' ],
                        'type'        => [ 'type' => 'string' ],
                        'description' => [ 'type' => 'string' ],
                        'theme'       => [ 'type' => 'string' ],
                        'source'      => [ 'type' => 'string' ],
                        'content'     => [ 'type' => 'string' ],
                    ],
                    'required' => [
                        'slug',
                        'title',
                        'type',
                        'description',
                        'theme',
                        'source',
                        'content',
                    ],
                ],
            ],
        ));

        // Register the ability to list all template parts.
        wp_register_ability( 'icecubo/list-template-parts', array(
            'label' => __( 'IceCubo - List Template Parts', 'icecubo' ),
            'description' => __( 'Lists all template parts. Use "header", "footer", "nav", "uncategorized", or "all" as the prompt.', 'icecubo' ),
            'category' => 'icecubo-ai-tools',
            'execute_callback' => 'icecubo_ability_callback_template_parts_list',
            'permission_callback' => function() {
                return current_user_can( 'edit_posts' );
            },
            'meta' => array(
                'public'       => true,
                'show_in_rest' => true,
                'mcp'          => array(
                    'public' => true,
                ),
                'annotations'  => array(
                    'readonly'    => true,
                    'destructive' => false,
                    'idempotent'  => true, // Idempotent describes what happens if the same ability runs more than once with the same input:
                                           // true — means repeating it has no additional effect after the first run. For example, “set the page title to About” is idempotent: running it again leaves the title as About. 
                                           // Esencially, check is it the same result (effect) each time? Idempotent does not check if the returned data is identical each time. Idempotence describes repeated calls’ effects, not whether the returned data is permanently identical.
                ),
            ),
            /**
             * JSON Schema describing the data the ability expects when it runs.
             * WordPress uses it to validate the input and to tell clients,
             * including AI tools, which arguments they can provide
             */
            'input_schema' => [
                'type'       => 'object',
                'properties' => [
                    'prompt' => [
                        'type'        => 'string',
                        'description' => __('Template part type to query', 'icecubo'),
                        'enum'        => ['header', 'footer', 'nav', 'uncategorized', 'all'],
                        'description' => __('The type of template part to query. Besides other options which are "header", "footer", "nav", and "all" (self explanatory), "uncategorized" will return sidebars as "sidebar" is not a supported wp_template_part area value, and as well other template parts that are not assigned to any specific area if created by users.', 'icecubo')
                    ],
                ],
                'required'             => [ 'prompt' ],
                'additionalProperties' => false,
            ],
            'output_schema' => [
                'type'       => 'object',
                'properties' => [
                    'result' => [
                        'type'  => 'array',
                        'items' => [
                            'type'       => 'object',
                            'properties' => [
                                'type'           => [ 'type' => 'string' ],
                                'theme'          => [ 'type' => 'string' ],
                                'slug'           => [ 'type' => 'string' ],
                                'id'             => [ 'type' => 'string' ],
                                'title'          => [ 'type' => 'string' ],
                                'content'        => [ 'type' => 'string' ],
                                'description'    => [ 'type' => 'string' ],
                                'source'         => [ 'type' => 'string' ],
                                'origin'          => [ 'type' => [ 'string', 'null' ] ],
                                'wp_id'           => [ 'type' => [ 'integer', 'null' ] ],
                                'status'          => [ 'type' => 'string' ],
                                'has_theme_file'  => [ 'type' => 'boolean' ],
                                'is_custom'       => [ 'type' => 'boolean' ],
                                'author'          => [ 'type' => [ 'integer', 'string', 'null' ] ],
                                'plugin'          => [ 'type' => [ 'string', 'null' ] ],
                                'post_types'      => [
                                    'type'  => [ 'array', 'null' ],
                                    'items' => [ 'type' => 'string' ],
                                ],
                                'area'            => [ 'type' => 'string' ],
                                'modified'        => [ 'type' => [ 'string', 'null' ] ],
                                'date'            => [ 'type' => [ 'string', 'null' ] ],
                            ],
                            //'required' => [ 'type', 'slug', 'id', 'wp_id' ],
                            'required' => [
                                'type',
                                'theme',
                                'slug',
                                'id',
                                'title',
                                'content',
                                'description',
                                'source',
                                'origin',
                                'wp_id',
                                'status',
                                'has_theme_file',
                                'is_custom',
                                'author',
                                'plugin',
                                'post_types',
                                'area',
                                'modified',
                                'date',
                            ],
                        ],
                    ],
                ],
                'required' => [ 'result' ],
            ],
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
            'meta' => array(
                'public'       => true,
                'show_in_rest' => true,
                'mcp'          => array(
                    'public' => true,
                ),
                'annotations'  => array(
                    'readonly'    => true,
                    'destructive' => false,
                    'idempotent'  => true, // Idempotent describes what happens if the same ability runs more than once with the same input:
                                           // true — means repeating it has no additional effect after the first run. For example, “set the page title to About” is idempotent: running it again leaves the title as About. 
                                           // Esencially, check is it the same result (effect) each time? Idempotent does not check if the returned data is identical each time. Idempotence describes repeated calls’ effects, not whether the returned data is permanently identical.
                ),
            ),
            'input_schema' => [
                'type'       => 'object',
                'properties' => [],
                'additionalProperties' => false,
                'description' => __( 'No input is required.', 'icecubo' ),
            ],
            'output_schema' => [
                'type'       => 'object',
                'properties' => [
                    'result' => [
                        'type'  => 'array',
                        'items' => [ 'type' => 'string' ],
                    ],
                ],
                'required' => [ 'result' ],
            ],
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
            'meta' => array(
                'public'       => true,
                'show_in_rest' => true,
                'mcp'          => array(
                    'public' => true,
                ),
                'annotations'  => array(
                    'readonly'    => true,
                    'destructive' => false,
                    'idempotent'  => true, // Idempotent describes what happens if the same ability runs more than once with the same input:
                                           // true — means repeating it has no additional effect after the first run. For example, “set the page title to About” is idempotent: running it again leaves the title as About. 
                                           // Esencially, check is it the same result (effect) each time? Idempotent does not check if the returned data is identical each time. Idempotence describes repeated calls’ effects, not whether the returned data is permanently identical.
                ),
            ),
            /**
             * JSON Schema describing the data the ability expects when it runs.
             * WordPress uses it to validate the input and to tell clients,
             * including AI tools, which arguments they can provide
             */
            'input_schema' => [
                'type'       => 'object',
                'properties' => [
                    'prompt' => [
                        'type'        => 'string',
                        'description' => __( 'Lists all available block styles. Sort it with a prompt by using the "ice" (will return block styles provided by the icecubo theme and its plugins), "other" (will return block styles provided by other plugins) or "all" (will return all block styles currently available on the site).', 'icecubo' ),
                        'enum'        => [ 'ice', 'other', 'all' ],
                    ],
                ],
                'required'             => [ 'prompt' ],
                'additionalProperties' => false,
            ],
            'output_schema' => [
                'type'       => 'object',
                'properties' => [
                    'result' => [
                        'type'                 => 'object',
                        'additionalProperties' => [
                            'type'                 => 'object',
                            'additionalProperties' => [
                                'type'       => 'object',
                                'properties' => [
                                    'name'   => [ 'type' => 'string' ],
                                    'label'  => [ 'type' => 'string' ],
                                    'source' => [ 'type' => 'string' ],
                                ],
                                'required' => [ 'name', 'label', 'source' ],
                            ],
                        ],
                    ],
                ],
                'required' => [ 'result' ],
            ],
        ));

        // Register the ability to get the individual block styles.
        wp_register_ability( 'icecubo/get-individual-block-styles', array(
            'label' => __( 'IceCubo - Get Individual Block Styles', 'icecubo' ),
            'description' => __( 'Gets the styles for a specific block. The prompt should be a valid block slug i.e. "core/paragraph", "core/heading", "core/query", etc. to get the styles for that specific block. You can utilize the "icecubo/list-blocks" ability to list all available blocks.', 'icecubo' ),
            'category' => 'icecubo-ai-tools',
            'execute_callback' => 'icecubo_ability_callback_get_individual_block_styles',
            'permission_callback' => function() {
                return current_user_can( 'edit_posts' );
            },
            'meta' => array(
                'public'       => true,
                'show_in_rest' => true,
                'mcp'          => array(
                    'public' => true,
                ),
                'annotations'  => array(
                    'readonly'    => true,
                    'destructive' => false,
                    'idempotent'  => true, // Idempotent describes what happens if the same ability runs more than once with the same input:
                                           // true — means repeating it has no additional effect after the first run. For example, “set the page title to About” is idempotent: running it again leaves the title as About. 
                                           // Esencially, check is it the same result (effect) each time? Idempotent does not check if the returned data is identical each time. Idempotence describes repeated calls’ effects, not whether the returned data is permanently identical.
                ),
            ),
            /**
             * JSON Schema describing the data the ability expects when it runs.
             * WordPress uses it to validate the input and to tell clients,
             * including AI tools, which arguments they can provide
             */
            'input_schema' => [
                'type'       => 'object',
                'properties' => [
                    'prompt' => [
                        'type'        => 'string',
                        'description' => __( 'Block slug, e.g. "core/heading". You can utilize the "icecubo/list-blocks" ability to list all available blocks. Blocks provided by the WordPress core start with "core/".', 'icecubo' ),
                    ],
                ],
                'required' => [ 'prompt' ],
                'additionalProperties' => false,
            ],
            'output_schema' => [
                'type'       => 'object',
                'properties' => [
                    'result' => [
                        'type'  => 'array',
                        'items' => [
                            'type'       => 'object',
                            'properties' => [
                                'name'   => [ 'type' => 'string' ],
                                'label'  => [ 'type' => 'string' ],
                                'source' => [ 'type' => 'string' ],
                            ],
                            'required' => [ 'name', 'label', 'source' ],
                        ],
                    ],
                ],
                'required' => [ 'result' ],
            ],
        ) );

        // Register the ability to get theme's global options.
        wp_register_ability( 'icecubo/get-global-options', array(
            'label' => __( 'IceCubo - Get Theme\'s Global Options', 'icecubo' ),
            'description' => __( 'Retrieve IceCubo theme global options. Use "colors", "gradients", "spacing_theme", "typography", "font_sizes_theme", "font_families_theme", "custom", "shadows" or "all" as the prompt.', 'icecubo' ),
            'category' => 'icecubo-ai-tools',
            'execute_callback' => 'icecubo_ability_callback_get_theme_global_options',
            'permission_callback' => function() {
                return current_user_can( 'edit_posts' );
            },
            'meta' => array(
                'public'       => true,
                'show_in_rest' => true,
                'mcp'          => array(
                    'public' => true,
                ),
                'annotations'  => array(
                    'readonly'    => true,
                    'destructive' => false,
                    'idempotent'  => true, // Idempotent describes what happens if the same ability runs more than once with the same input:
                                           // true — means repeating it has no additional effect after the first run. For example, “set the page title to About” is idempotent: running it again leaves the title as About. 
                                           // Esencially, check is it the same result (effect) each time? Idempotent does not check if the returned data is identical each time. Idempotence describes repeated calls’ effects, not whether the returned data is permanently identical.
                ),
            ),
            /**
             * JSON Schema describing the data the ability expects when it runs.
             * WordPress uses it to validate the input and to tell clients,
             * including AI tools, which arguments they can provide
             */
            'input_schema' => [
                'type'       => 'object',
                'properties' => [
                    'prompt' => [
                        'type'        => 'string',
                        'description' => __('IceCubo theme global options to query. You can sift through specific options like "colors", "gradients", "spacing_theme", "typography", "font_sizes_theme", "font_families_theme", "custom", "shadows", or use "all" to query all available options even those that are not available through the specific sort filter.', 'icecubo'),
                        'enum'        => ['colors', 'gradients', 'spacing_theme', 'typography', 'font_sizes_theme', 'font_families_theme', 'custom', 'shadows', 'all'],
                    ],
                ],
                'required'             => [ 'prompt' ],
                'additionalProperties' => false,
            ],
            'output_schema' => [
                'type'       => 'object',
                'properties' => [
                    'result' => [
                        'type'  => 'object',
                        'items' => [
                            'type'       => 'object',
                            'properties' => [],
                        ],
                    ],
                ],
                'required' => [ 'result' ],
            ],
        ) );

        // Register the ability to list all animations.
        wp_register_ability( 'icecubo/list-animations', array(
            'label' => __( 'IceCubo - List Animations And Related Options', 'icecubo' ),
            'description' => __( 'Lists all available IceCubo animations. Add animation as additional classes to any block, usage example: "anim-bounce fast del1 animrep"', 'icecubo' ),
            'category' => 'icecubo-ai-tools',
            'execute_callback' => 'icecubo_ability_callback_get_all_animations',
            'permission_callback' => function() {
                return current_user_can( 'edit_posts' );
            },
            'meta' => array(
                'public'       => true,
                'show_in_rest' => true,
                'mcp'          => array(
                    'public' => true,
                ),
                'annotations'  => array(
                    'readonly'    => true,
                    'destructive' => false,
                    'idempotent'  => true, // Idempotent describes what happens if the same ability runs more than once with the same input:
                                           // true — means repeating it has no additional effect after the first run. For example, “set the page title to About” is idempotent: running it again leaves the title as About. 
                                           // Esencially, check is it the same result (effect) each time? Idempotent does not check if the returned data is identical each time. Idempotence describes repeated calls’ effects, not whether the returned data is permanently identical.
                ),
            ),
            'input_schema' => [
                'type'       => 'object',
                'properties' => [],
                'additionalProperties' => false,
                'description' => __( 'No input is required.', 'icecubo' ),
            ],
            'output_schema' => [
                'type'       => 'object',
                'properties' => [
                    'result' => [
                        'type'       => 'object',
                        'properties' => [
                            'globally_active' => [ 'type' => 'string', 'default' => 'false' ],
                            'animations'      => [
                                'type'  => 'array',
                                'items' => [ 'type' => 'string' ],
                            ],
                            'speed' => [
                                'type'                 => 'object',
                                'additionalProperties' => [ 'type' => 'string' ],
                            ],
                            'delay' => [
                                'type'                 => 'object',
                                'additionalProperties' => [ 'type' => 'string' ],
                            ],
                            'animrep' => [ 'type' => 'string' ],
                        ],
                        'required' => [ 'globally_active', 'animations', 'speed', 'delay', 'animrep' ],
                    ],
                ],
                'required' => [ 'result' ],
                'description' => __( 'You can use this result to construct the animation. Add animation as additional classes to any block, usage example: "anim-bounce fast del1 animrep". Option "globally_active" checks if the animation is enabled over the site (means CSS files are loaded).', 'icecubo' ),
            ],
        ) );

    } // function icecubo_register_abilities end
} // function_exists check end

// This is the callback that runs when the ability is executed.
if (! function_exists('icecubo_ability_callback_patterns_list') ) {
    function icecubo_ability_callback_patterns_list() {
        
        $registry = WP_Block_Patterns_Registry::get_instance();
        $all_patterns = $registry->get_all_registered();

        $output = [];
        
        foreach ( $all_patterns as $pattern ) {
            if ( strpos( $pattern['name'], 'icecubo/' ) !== 0 ) {
                continue;
            }

            $output[] = [
                'name'        => $pattern['name'],
                'title'       => $pattern['title'],
                'description' => isset( $pattern['description'] ) ? $pattern['description'] : '',
                'categories'  => isset( $pattern['categories'] ) ? $pattern['categories'] : [],
            ];
        }

        usort( $output, function ( $a, $b ) {
            return strcmp( $a['name'], $b['name'] );
        } );

        return $output;

    }
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
        $parts = icecubo_get_template_parts()[$input['prompt']] ?? null;

        if ( null === $parts ) {
            return array( 'result' => array() );
        }

        return array(
            'result' => array_map(
                static function( $part ) {
                    return is_object( $part ) ? get_object_vars( $part ) : $part;
                },
                $parts
            ),
        );
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

    $query_uncategorized = array(
        'area' => 'uncategorized' // Get only uncategorized parts
    );

    $header_parts = get_block_templates( $query_headers, 'wp_template_part' );
    $footer_parts = get_block_templates( $query_footers, 'wp_template_part' );
    $navigation_overlay_parts = get_block_templates( $query_navigation_overlays, 'wp_template_part' );
    $uncategorized_parts = get_block_templates( $query_uncategorized, 'wp_template_part' );

    return array(
        'header' => $header_parts,
        'footer' => $footer_parts,
        'nav' => $navigation_overlay_parts,
        'uncategorized' => $uncategorized_parts,
        //'all'    => array_merge( $header_parts, $footer_parts, $navigation_overlay_parts, $uncategorized_parts ),
        'all'    => $template_parts,
    );
}

// This is the callback that runs when the ability is executed.
function icecubo_ability_callback_block_styles_list( $input ) {
    return array('result' => icecubo_get_registered_block_styles()[$input['prompt']]);
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
if (! function_exists('icecubo_ability_callback_get_all_registered_blocks') ) {
    function icecubo_ability_callback_get_all_registered_blocks() {

        // Get the instance of the block registry
        $registry = WP_Block_Type_Registry::get_instance();
        
        // Get all block objects as an associative array
        $all_blocks = $registry->get_all_registered();
        
        // Get just the block slugs (e.g., 'core/paragraph')
        $block_slugs = array_keys( $all_blocks );

        return array('result' => $block_slugs);
        
    }
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
        $all_individual_styles = !empty($all_individual_styles) ? $all_individual_styles : [
            [
                'name' => __( 'No value. Either the block does not exist or has no styles registered. Please use a valid block slug i.e. "core/paragraph", "core/heading", "core/query", etc. to get the styles for that specific block. If the block exists but has no styles, it returns as empty here.', 'icecubo' ),
                'label' => __( 'No value.', 'icecubo' ),
                'source' => __( 'none', 'icecubo' )
            ]
        ];

        return array('result' => $all_individual_styles );

    }
}

// This is the callback that runs when the ability is executed.
if (! function_exists('icecubo_ability_callback_get_theme_global_options') ) {
    function icecubo_ability_callback_get_theme_global_options( $input ) {
        $parts = icecubo_get_theme_global_settings()[$input['prompt']] ?? null;

        if ( null === $parts ) {
            return array( 'result' => array() );
        }

        return array(
            'result' => array_map(
                static function( $part ) {
                    return is_object( $part ) ? get_object_vars( $part ) : $part;
                },
                $parts
            ),
        );
    }
}

function icecubo_get_theme_global_settings() {

    // $global_settings = wp_get_global_settings();
    $global_settings = WP_Theme_JSON_Resolver::get_merged_data()->get_settings();

    $colors        = $global_settings["color"]["palette"];
    $gradients     = $global_settings["color"]["gradients"];
    $spacing_theme = $global_settings["spacing"]["spacingSizes"]["theme"];
    $typography    = $global_settings["typography"];
    $typography_font_sizes_theme    = $global_settings["typography"]["fontSizes"]["theme"];
    $typography_font_families_theme = $global_settings["typography"]["fontFamilies"]["theme"];
    $custom  = $global_settings["custom"];
    $shadows = $global_settings["shadow"]["presets"];

    return array(
        'colors' => $colors,
        'gradients' => $gradients,
        'spacing_theme' => $spacing_theme,
        'typography' => $typography,
        'font_sizes_theme' => $typography_font_sizes_theme,
        'font_families_theme' => $typography_font_families_theme,
        'custom' => $custom,
        'shadows' => $shadows,
        'all'    => $global_settings,
    );
}


// This is the callback that runs when the ability is executed.
if (! function_exists('icecubo_ability_callback_get_all_animations') ) {
    function icecubo_ability_callback_get_all_animations() {

        $anim_load = get_option('icecubo_animations_load');

        return array(
            'result' => array(
                'globally_active' => $anim_load,
                'animations' => array(
                    'anim-bounce',
                    'anim-fadeIn',
                    'anim-fadeInUp',
                    'anim-blurOut',
                    'anim-pushUp',
                    'anim-pushDown',
                    'anim-pushLeft',
                    'anim-pushRight',
                    'anim-yankUp',
                    'anim-yankDown',
                    'anim-yankLeft',
                    'anim-yankRight',
                    'anim-flipX',
                    'anim-flipY',
                    'anim-flipXspin',
                    'anim-flipYspin',
                    'anim-rotateIn-left',
                    'anim-rotateIn-right',
                    'anim-to-transform',
                    'anim-to-blob',
                    'anim-scale-in-center',
                    'anim-scale-in-hor-center',
                    'anim-scale-in-ver-center',
                    'anim-scale-in-top',
                    'anim-scale-in-tr',
                    'anim-scale-in-right',
                    'anim-scale-in-br',
                    'anim-scale-in-bottom',
                    'anim-scale-in-bl',
                    'anim-scale-in-left',
                    'anim-scale-in-tl',
                    'anim-slide-bg',
                    'anim-slide-ch',
                    'anim-text-accordion',
                    'anim-text-accordion-minus',
                    'anim-text-glow',
                    'anim-text-glowOff',
                    'anim-text-glowMatch',
                    'anim-text-glowMatchOff',
                ),
                'speed' => array(
                    'fastest' => 'Fastest',
                    'fast' => 'Fast',
                    '' => 'Normal',
                    'slow' => 'Slow',
                    'slowest' => 'Slowest',
                ),
                'delay' => array(
                    'del025' => 'Delay 250 ms',
                    'del05' => 'Delay 500 ms',
                    'del075' => 'Delay 750 ms',
                    'del1' => 'Delay 1s',
                    'del2' => 'Delay 2s',
                    'del3' => 'Delay 3s',
                ),
                'animrep' => 'animation repeats in a repeated viewport',
            )
        );
        
    }
}
