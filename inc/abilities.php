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

// Then, register an ability within that category.
add_action( 'wp_abilities_api_init', 'icecubo_register_ability' );

if (! function_exists('icecubo_register_ability') ) {

    function icecubo_register_ability() {
        if ( ! function_exists( 'wp_register_ability' ) ) {
            return;
        }

        wp_register_ability( 'icecubo/list-patterns', array(
            'label' => __( 'IceCubo - List Patterns', 'icecubo' ),
            'description' => __( 'Lists all patterns provided by the IceCubo theme.', 'icecubo' ),
            'category' => 'icecubo-ai-tools',
            'execute_callback' => 'icecubo_ability_callback_patterns_list',
            'permission_callback' => function() {
                return current_user_can( 'edit_posts' );
            },
            'input_schema' => array(
                'type' => 'object',
                'properties' => array(
                    'prompt' => array( 'type' => 'string' )
                ),
            ),
        ) );
    }

}

// This is the callback that runs when the ability is executed.
if (! function_exists('icecubo_ability_callback_patterns_list') ) {
    function icecubo_ability_callback_patterns_list( $input ) {
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
