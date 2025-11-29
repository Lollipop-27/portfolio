<?php
if (!defined('ABSPATH'))
    exit;

$images = $attributes['items'] ?? [];
$loop = !empty($attributes['loop']);
$autoplay = $attributes['autoplay'] ?? 0;
$width = $attributes['width'] ?? '400px';
$height = $attributes['height'] ?? '300px';

if (empty($images))
    return '<p>No images selected for the slider.</p>';
?>

<div class="wp-block-portfolio-blocks-image-slider">
    <<div class="swiper" data-loop="<?php echo esc_attr($attributes['loop'] ? '1' : '0'); ?>" data-autoplay="0">
        <div class="swiper-wrapper">
            <?php foreach ($images as $img): ?>
                <div class="swiper-slide">
                    <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt'] ?? ''); ?>"
                        loading="lazy">

                </div>
            <?php endforeach; ?>
        </div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination"></div>
</div>
</div>