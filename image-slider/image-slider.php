<?php
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register the Image Slider block using blocks-manifest.php
 */
function portfolio_image_slider_register_block() {
    $build_path = __DIR__ . '/build';

    // WordPress 6.8+
    if (function_exists('wp_register_block_types_from_metadata_collection')) {
        wp_register_block_types_from_metadata_collection(
            $build_path,
            $build_path . '/blocks-manifest.php'
        );
        return;
    }

    // Older fallback
    $manifest_data = require $build_path . '/blocks-manifest.php';
    foreach (array_keys($manifest_data) as $block_type) {
        register_block_type($build_path . "/{$block_type}");
    }
}
add_action('init', 'portfolio_image_slider_register_block');

/**
 * Enqueue Swiper assets and block frontend script
 */
function portfolio_image_slider_assets() {
    if (!is_admin()) {
        // Swiper CSS & JS
        wp_enqueue_style(
            'swiper-css',
            'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css'
        );
        wp_enqueue_script(
            'swiper-js',
            'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js',
            [],
            null,
            true
        );

        // Block frontend initialization (your custom JS)
        wp_enqueue_script(
            'image-slider-init',
            get_theme_file_uri('image-slider/build/image-slider/view.js'),
            ['swiper-js'],
            wp_get_theme()->get('Version'),
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'portfolio_image_slider_assets');

/**
 * Optional: Render callback if you want dynamic PHP rendering
 */
function portfolio_image_slider_render($attributes, $content) {
    ob_start(); ?>

    <div class="wp-block-portfolio-blocks-image-slider">
        <?php
        // Example: attributes['items'] could hold images/videos from editor
        if (!empty($attributes['items']) && is_array($attributes['items'])) :
            ?>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($attributes['items'] as $item) : ?>
                        <div class="swiper-slide">
                            <?php if (!empty($item['url'])) : ?>
                                <img src="<?php echo esc_url($item['url']); ?>" alt="<?php echo esc_attr($item['alt'] ?? ''); ?>">
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Optional Pagination / Navigation -->
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        <?php endif; ?>
    </div>

    <?php return ob_get_clean();
}

// If you want to register this render callback for your block
add_filter('register_block_type_args', function($args, $name) {
    if ($name === 'portfolio/image-slider') {
        $args['render_callback'] = 'portfolio_image_slider_render';
    }
    return $args;
}, 10, 2);
