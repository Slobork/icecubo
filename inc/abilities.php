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

        // Register the ability to list all block patterns.
        wp_register_ability( 'icecubo/list-patterns', array(
            'label' => __( 'IceCubo - List Patterns', 'icecubo' ),
            'description' => __( 'Lists IceCubo pattern categories by default. Set category to list patterns in that category. Set pattern_name to retrieve one pattern\'s block markup.', 'icecubo' ),
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
                'properties' => [
                    'categories' => [
                        'type'        => 'boolean',
                        'description' => __( 'Return the available IceCubo pattern categories when true. Defaults to true; ignored when category or pattern_name is provided.', 'icecubo' ),
                        'default'     => true,
                    ],
                    'category' => [
                        'type'        => 'string',
                        'description' => __( 'Optional exact category slug. When provided, return all IceCubo patterns assigned to this category.', 'icecubo' ),
                    ],
                    'pattern_name' => [
                        'type'        => 'string',
                        'description' => __( 'Optional exact pattern name, such as "icecubo/box-author-2columns", to return one pattern and its content.', 'icecubo' ),
                    ],
                ],
                'additionalProperties' => false,
            ],
            'output_schema' => [
                'type'  => 'array',
                'items' => [
                    'type'       => [ 'string', 'object' ],
                    'properties' => [
                        'name'       => [ 'type' => 'string' ],
                        'title'      => [ 'type' => 'string' ],
                        'description' => [ 'type' => 'string' ],
                        'categories' => [
                            'type'  => 'array',
                            'items' => [ 'type' => 'string' ],
                        ],
                        'content' => [ 'type' => 'string' ],
                    ],
                    'required' => [ 'name', 'title', 'description', 'categories' ],
                    'additionalProperties' => false,
                ],
                'description' => __( 'Returns category slugs by default. When category or pattern_name is provided, returns pattern objects with name, title, description, and categories. A specified pattern_name returns one pattern and its content. An unmatched category or pattern_name returns an error explaining that the input may be misspelled.', 'icecubo' )
            ],
        ));

        // Register the ability to list all templates.
        wp_register_ability( 'icecubo/list-templates', array(
            'label' => __( 'IceCubo - List Templates', 'icecubo' ),
            'description' => __( 'The result is an array of all registered templates, either provided by the IceCubo theme and its plugins or other plugins. Use true/false for include_content to include/exclude template content.', 'icecubo' ),
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
                'properties'           => array(
                    'include_content' => array(
                        'type'        => 'boolean',
                        'description' => __(
                            'Whether to include each template’s full block markup. Defaults to false. If true, the content property will be included in each template object along with the other template properties.',
                            'icecubo'
                        ),
                        'default'     => false,
                    ),
                ),
                'additionalProperties' => false,
                'default'              => array(),
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
                        //'content',
                    ],
                ],
                'description' => __( 'The result is an array of all registered templates, either provided by the IceCubo theme and its plugins or other plugins. Each template object contains the template slug, title, type, description, theme, source, and content.', 'icecubo' )
            ],
        ));

        // Register the ability to list all template parts.
        wp_register_ability( 'icecubo/list-template-parts', array(
            'label' => __( 'IceCubo - List Template Parts', 'icecubo' ),
            'description' => __( 'Lists template parts by type. Use "header", "footer", "nav", "uncategorized", or "all" as the area. Set include_content to true to include full template markup; it defaults to false.', 'icecubo' ),
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
                    'area' => [
                        'type'        => 'string',
                        'description' => __('Template part type to query', 'icecubo'),
                        'enum'        => ['header', 'footer', 'nav', 'uncategorized', 'all'],
                        'description' => __('The type of template part to query. Besides other options which are "header", "footer", "nav", and "all" (self explanatory), "uncategorized" will return sidebars since "sidebar" is not a supported wp_template_part area value, and as well other template parts that are not assigned to any specific area if created by users.', 'icecubo')
                    ],
                    'include_content' => [
                        'type'        => 'boolean',
                        'description' => __(
                            'Whether to include each template\'s full block markup. Defaults to false. If true, the content property will be included in each template object along with the other template properties.',
                            'icecubo'
                        ),
                        'default'     => false,
                    ],
                ],
                'required'             => [ 'area' ],
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
                            'required' => [
                                'type',
                                'theme',
                                'slug',
                                'id',
                                'title',
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
                'description' => __('The result is an array of template parts matching the requested area, e.g. "header", "footer", etc. Each template part object contains details such as its type, theme, slug, title, content (must be specified with include_content set to true), description, source, and other relevant metadata.', 'icecubo'),
            ],
        ) );

        // Register the ability to list all block styles.
        wp_register_ability( 'icecubo/list-block-styles', array(
            'label' => __( 'IceCubo - List Block Styles', 'icecubo' ),
            'description' => __( 'Lists all block styles by a certain prefix. Use "ice" (default) for IceCubo styles, "other" for non-IceCubo styles, "all" for every style, or "custom" with custom_prefix to match a chosen prefix.', 'icecubo' ),
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
                    'prefix' => [
                        'type'        => 'string',
                        'description' => __( 'Choose "ice" (default) for styles with the IceCubo prefix, "other" for styles without it, "all" for every style, or "custom" to filter by custom_prefix.', 'icecubo' ),
                        'enum'        => [ 'ice', 'other', 'all', 'custom' ],
                        'default'     => 'ice',
                    ],
                    'custom_prefix' => [
                        'type'        => 'string',
                        'description' => __( 'Required when prefix is "custom". Return styles whose style slug begins with this prefix, for example "some-plugin-".', 'icecubo' ),
                    ],
                ],
                'required'             => [ 'prefix' ],
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
                'description' => __( 'The result is an object where each key is a block name (slug) and its value is another object containing matching styles for that block. Each style object contains the style name, label, and source.', 'icecubo' ),
            ],
        ));

        // Register the ability to list all blocks.
        wp_register_ability( 'icecubo/list-blocks', array(
            'label' => __( 'IceCubo - List Blocks', 'icecubo' ),
            'description' => __( 'Lists the names (slugs) of all registered blocks, such as "core/paragraph", "core/heading", etc. Blocks provided by the WordPress core start with "core/"', 'icecubo' ),
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
                'description' => __( 'The result is an array of all registered block names (slugs) available in the current WordPress installation.', 'icecubo' ),
            ],
        ) );

        // Register the ability to get the individual block styles.
        wp_register_ability( 'icecubo/get-individual-block-styles', array(
            'label' => __( 'IceCubo - Get Individual Block Styles', 'icecubo' ),
            'description' => __( 'Gets the styles for a specific block. The request should be a valid block slug i.e. "core/paragraph", "core/heading", "core/query", etc. to get the styles for that specific block. You can utilize the "icecubo/list-blocks" ability to list all available blocks.', 'icecubo' ),
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
                    'block_slug' => [
                        'type'        => 'string',
                        'description' => __( 'Block slug, e.g. "core/heading". You can utilize the "icecubo/list-blocks" ability to list all available blocks. Blocks provided by the WordPress core start with "core/".', 'icecubo' ),
                    ],
                ],
                'required' => [ 'block_slug' ],
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
                'description' => __( 'The result is an array of styles for the specified block. Each style object contains the style name, label, and source.', 'icecubo' ),
            ],
        ) );

        // Register the ability to get theme's global options.
        wp_register_ability( 'icecubo/get-global-options', array(
            'label' => __( 'IceCubo - Get Theme\'s Global Settings', 'icecubo' ),
            'description' => __( 'Retrieve IceCubo theme global settings. Use "colors", "gradients", "spacing_theme", "typography", "font_sizes_theme", "font_families_theme", "custom", "shadows" or "all" as the request.', 'icecubo' ),
            'category' => 'icecubo-ai-tools',
            'execute_callback' => 'icecubo_ability_callback_get_theme_global_settings',
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
                    'group' => [
                        'type'        => 'string',
                        'description' => __('IceCubo theme global settings to query. You can sift through specific group options like "colors", "gradients", "spacing_theme", "typography", "font_sizes_theme", "font_families_theme", "custom", "shadows", or use "all" to query all available options even those that are not available through the specific sort filter.', 'icecubo'),
                        'enum'        => ['colors', 'gradients', 'spacing_theme', 'typography', 'font_sizes_theme', 'font_families_theme', 'custom', 'shadows', 'all'],
                    ],
                ],
                'required'             => [ 'group' ],
                'additionalProperties' => false,
            ],
            'output_schema' => [
                'type'       => 'object',
                'properties' => [
                    'result' => [
                        // Different options return lists or keyed objects, and
                        // their properties can change with the active theme.
                        'type'                 => [ 'object', 'array' ],
                        'additionalProperties' => true,
                        'items' => [
                            'type' => [ 'object', 'array', 'string', 'number', 'integer', 'boolean', 'null' ],
                        ],
                    ],
                ],
                'required' => [ 'result' ],
                'description' => __('The result contains the requested global settings from the IceCubo theme. It may be an array or object depending on the group filter and the active theme settings.', 'icecubo')
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
                            'globally_active' => [ 'type' =>'boolean' ],
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
                            'animation_repeat' => [
                                'type'                 => 'object',
                                'additionalProperties' => [ 'type' => 'string' ],
                            ],
                        ],
                        'required' => [ 'globally_active', 'animations', 'speed', 'delay', 'animation_repeat' ],
                    ],
                ],
                'required' => [ 'result' ],
                'description' => __( 'The result is an object containing the animation values. These values can be used to construct the animation. Animation can be added as additional classes to any block, usage example: "anim-bounce fast del1 animrep". Property "globally_active" checks if the animation is enabled over the site (means CSS files are loaded), other properties can be used to construct the animation.', 'icecubo' ),
            ],
        ) );

    } // function icecubo_register_abilities end
} // function_exists check end

// This is the callback that runs when the ability is executed.
if (! function_exists('icecubo_ability_callback_patterns_list') ) {
    function icecubo_ability_callback_patterns_list( $input = array() ) {
        $input = is_array( $input ) ? $input : array();
        $list_categories = ! array_key_exists( 'categories', $input ) || ! empty( $input['categories'] );
        $category = isset( $input['category'] ) && is_string( $input['category'] ) ? trim( $input['category'] ) : '';
        $pattern_name = isset( $input['pattern_name'] ) && is_string( $input['pattern_name'] ) ? trim( $input['pattern_name'] ) : '';
 
        $registry = WP_Block_Patterns_Registry::get_instance();
        $all_patterns = $registry->get_all_registered();

        $icecubo_patterns = array();
        foreach ( $all_patterns as $pattern ) {
            $name = isset( $pattern['name'] ) && is_string( $pattern['name'] ) ? $pattern['name'] : '';

            if ( ! str_starts_with( $name, 'icecubo/' ) ) {
                continue;
            }

            $icecubo_patterns[] = $pattern;
        }

        if ( '' === $pattern_name && '' === $category && $list_categories ) {
            $categories = array();

            foreach ( $icecubo_patterns as $pattern ) {
                $pattern_categories = isset( $pattern['categories'] ) && is_array( $pattern['categories'] )
                    ? $pattern['categories']
                    : array();

                foreach ( $pattern_categories as $pattern_category ) {
                    if ( is_string( $pattern_category ) && '' !== $pattern_category ) {
                        $categories[ $pattern_category ] = true;
                    }
                }
            }

            $output = array_keys( $categories );
            sort( $output, SORT_NATURAL | SORT_FLAG_CASE );

            return $output;
        }

        $output = array();
        foreach ( $icecubo_patterns as $pattern ) {
            $name = $pattern['name'];

            if ( '' !== $pattern_name && $name !== $pattern_name ) {
                continue;
            }

            $pattern_categories = isset( $pattern['categories'] ) && is_array( $pattern['categories'] )
                ? array_values( array_filter( $pattern['categories'], 'is_string' ) )
                : array();

            if ( '' !== $category && ! in_array( $category, $pattern_categories, true ) ) {
                continue;
            }

            $item = array(
                'name'        => $name,
                'title'       => isset( $pattern['title'] ) ? $pattern['title'] : '',
                'description' => isset( $pattern['description'] ) ? $pattern['description'] : '',
                'categories'  => $pattern_categories,
            );

            if (! empty($pattern_name) && isset( $pattern['content'] ) ) {
                $item['content'] = $pattern['content'];
            }

            $output[] = $item;
        }

        usort( $output, static function ( $a, $b ) {
            return strcmp( $a['name'], $b['name'] );
        } );

        if ( empty( $output ) && '' !== $pattern_name ) {
            if ( '' !== $category ) {
                return new WP_Error(
                    'icecubo_pattern_not_found',
                    sprintf(
                        __( 'No pattern named "%1$s" was found in category "%2$s". The result is empty; check both values for misspellings.', 'icecubo' ),
                        $pattern_name,
                        $category
                    )
                );
            }

            return new WP_Error(
                'icecubo_pattern_not_found',
                sprintf(
                    __( 'No pattern named "%s" was found. The result is empty; check the pattern name for a misspelling, or list patterns in a category to see valid names.', 'icecubo' ),
                    $pattern_name
                )
            );
        }

        if ( empty( $output ) && '' !== $category ) {
            return new WP_Error(
                'icecubo_pattern_category_not_found',
                sprintf(
                    __( 'No IceCubo patterns were found in category "%s". The result is empty; check the category slug for a misspelling, or request the available categories.', 'icecubo' ),
                    $category
                )
            );
        }

        return $output;

    }
}

// This is the callback that runs when the ability is executed.
if (! function_exists('icecubo_ability_callback_templates_list') ) {
    function icecubo_ability_callback_templates_list( $input = array() ): array {
        $include_content = ! empty( $input['include_content'] );

        // Keep the ability's existing code for fetching and shaping templates.
        $templates = icecubo_get_templates_for_ability();

        // unset the 'content' property from each template if $include_content is false
        if ( ! $include_content ) {
            foreach ( $templates as &$template ) {
                unset( $template['content'] );
            }
            unset( $template ); // Clear the reference used by foreach.
        }

        return $templates;
    }
}

function icecubo_get_templates_for_ability() {
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
    function icecubo_ability_callback_template_parts_list( $input = array() ): array {
        $input = is_array( $input ) ? $input : array();
        $area = $input['area'] ?? '';
        $include_content = ! empty( $input['include_content'] );
        $parts = icecubo_get_template_parts_for_ability()[$area] ?? null;

        if ( null === $parts ) {
            return array( 'result' => array() );
        }

        return array(
            'result' => array_map(
                static function( $part ) use ( $include_content ) {
                    $part = is_object( $part ) ? get_object_vars( $part ) : (array) $part;

                    if ( ! $include_content ) {
                        unset( $part['content'] );
                    }

                    return $part;
                },
                $parts
            ),
        );
    }
}

function icecubo_get_template_parts_for_ability() {

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
    $input = is_array( $input ) ? $input : array();
    $prefix = isset( $input['prefix'] ) && is_string( $input['prefix'] ) ? $input['prefix'] : '';
    $allowed_prefixs = array( 'ice', 'other', 'all', 'custom' );

    if ( ! in_array( $prefix, $allowed_prefixs, true ) ) {
        return new WP_Error(
            'icecubo_invalid_block_style_filter',
            __( 'Choose a valid block style filter: "ice", "other", "all", or "custom".', 'icecubo' )
        );
    }

    $custom_prefix = '';
    if ( 'custom' === $prefix ) {
        $custom_prefix = isset( $input['custom_prefix'] ) && is_string( $input['custom_prefix'] )
            ? trim( $input['custom_prefix'] )
            : '';

        if ( '' === $custom_prefix ) {
            return new WP_Error(
                'icecubo_custom_prefix_required',
                __( 'Provide a non-empty custom_prefix when prefix is "custom".', 'icecubo' )
            );
        }
    }

    $styles = icecubo_get_registered_block_styles( $custom_prefix );

    return array( 'result' => isset( $styles[ $prefix ] ) ? $styles[ $prefix ] : array() );
}

function icecubo_get_registered_block_styles( $custom_prefix = '' ) {

    $icecubo_styles = array();
    $other_styles   = array();
    $custom_styles  = array();
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

            if ( '' !== $custom_prefix && str_starts_with( $style_slug, $custom_prefix ) ) {
                $custom_styles[ $block_name ][ $style_slug ] = $style;
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

                        if ( '' !== $custom_prefix && str_starts_with( $variation_slug, $custom_prefix ) && ! isset( $custom_styles[ $block_name ][ $variation_slug ] ) ) {
                            $custom_styles[ $block_name ][ $variation_slug ] = $style;
                        }
                    }
                }
            }
        }
    }

    $sort_styles = static function ( &$styles ) {
        ksort( $styles, SORT_STRING );
        foreach ( $styles as &$block_styles ) {
            ksort( $block_styles, SORT_STRING );
        }
        unset( $block_styles );
    };

    $sort_styles( $icecubo_styles );
    $sort_styles( $other_styles );
    $sort_styles( $custom_styles );
    $sort_styles( $all_styles );

    return array(
        'ice'   => $icecubo_styles,
        'other' => $other_styles,
        'custom' => $custom_styles,
        'all'   => $all_styles,
    );
}

// This is the callback that runs when the ability is executed.
if (! function_exists('icecubo_ability_callback_get_all_registered_blocks') ) {
    function icecubo_ability_callback_get_all_registered_blocks(): array {

        // Get the instance of the block registry
        $registry = WP_Block_Type_Registry::get_instance();
        
        // Get all block objects as an associative array
        $all_blocks = $registry->get_all_registered();
        
        // Get just the block slugs (e.g., 'core/paragraph')
        $block_slugs = array_keys( $all_blocks );
        sort( $block_slugs, SORT_STRING );

        return array('result' => $block_slugs);
        
    }
}

// This is the callback that runs when the ability is executed.
if (! function_exists('icecubo_ability_callback_get_individual_block_styles') ) {
    function icecubo_ability_callback_get_individual_block_styles($input) {
        
        $block_name = $input['block_slug']; // Your target block
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
                'name' => __( 'No value.', 'icecubo' ),
                'label' => __( 'No value.', 'icecubo' ),
                'source' => __( 'none', 'icecubo' ),
                'error' => __( 'No value. Either the block does not exist or has no styles registered. Please use a valid block slug i.e. "core/paragraph", "core/heading", "core/query", etc. to get the styles for that specific block. If the block exists but has no styles, it returns as empty here.', 'icecubo' ),

            ]
        ];

        return array('result' => $all_individual_styles );

    }
}

// This is the callback that runs when the ability is executed.
if (! function_exists('icecubo_ability_callback_get_theme_global_settings') ) {
    function icecubo_ability_callback_get_theme_global_settings( $input = array() ): array {
        $input = is_array( $input ) ? $input : array();
        $group = $input['group'] ?? '';
        $get_settings = icecubo_get_theme_global_settings();

        if ( ! array_key_exists( $group, $get_settings ) ) {
            return array( 'result' => array() );
        }

        $parts = $get_settings[ $group ];

        return array( 'result' => is_object( $parts ) ? get_object_vars( $parts ) : $parts );
    }
}

function icecubo_get_theme_global_settings() {

    // $global_settings = wp_get_global_settings();
    $global_settings = WP_Theme_JSON_Resolver::get_merged_data()->get_settings();

    $colors        = $global_settings['color']['palette'] ?? array();
    $gradients     = $global_settings['color']['gradients'] ?? array();
    $spacing_theme = $global_settings['spacing']['spacingSizes']['theme'] ?? array();
    $typography    = $global_settings['typography'] ?? array();
    $typography_font_sizes_theme    = $typography['fontSizes']['theme'] ?? array();
    $typography_font_families_theme = $typography['fontFamilies']['theme'] ?? array();
    $custom        = $global_settings['custom'] ?? array();
    $shadows       = $global_settings['shadow']['presets'] ?? array();

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
        $is_anim_load = !empty($anim_load) ? true : false;

        return array(
            'result' => array(
                'globally_active' => $is_anim_load,
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
                    'fastest' => __( 'Fastest', 'icecubo' ),
                    'fast' => __( 'Fast', 'icecubo' ),
                    '' => __( 'Normal', 'icecubo' ),
                    'slow' => __( 'Slow', 'icecubo' ),
                    'slowest' => __( 'Slowest', 'icecubo' ),
                ),
                'delay' => array(
                    'del025' => __( 'Delay 250 ms', 'icecubo' ),
                    'del05' => __( 'Delay 500 ms', 'icecubo' ),
                    'del075' => __( 'Delay 750 ms', 'icecubo' ),
                    'del1' => __( 'Delay 1s', 'icecubo' ),
                    'del2' => __( 'Delay 2s', 'icecubo' ),
                    'del3' => __( 'Delay 3s', 'icecubo' ),
                ),
                'animation_repeat' => array(
                    'animrep' => __( 'Animation Repeat - makes the animation play again when the block re-enters the viewport', 'icecubo' ),
                ),
            )
        );
        
    }
}
