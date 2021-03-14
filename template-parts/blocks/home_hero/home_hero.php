<?php

/**
 * Home Hero Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'home-hero-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'home-hero';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$bg = get_field('background_image');
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> h-screen" style="background-image: url('<?php echo $bg; ?>');">
    <div class="overlay"></div>
    <div class="max-w-6xl mx-auto relative px-7 z-20">
        <h1 class="text-2xl md:text-7xl text-lu-blue">We are a Chicago based creative digital agency</h1>
        <a href="#" class="border-lu-blue border text-white bg-lu-blue hover:bg-white hover:text-lu-blue hover:border-white inline-block mt-4 px-6 py-2 text-base rounded transition duration-300">Contact Us</a>
    </div>
</section>


