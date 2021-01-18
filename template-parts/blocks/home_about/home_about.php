<?php

/**
 * Home About Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'home-about-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'home-about';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.

?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="container">

            <div class="home-about__intro">
                <h2>Who we are</h2>
                <p>We have a combin experience of things with a lot of time and care and good stuff hire us</p>
            </div>


            <?php if( have_rows('home_about_repeater') ): ?>

                <div class="home-about__repeater">

                    <?php while( have_rows('home_about_repeater') ): the_row();
                    
                    //vars
                    $image = get_sub_field('image');
                    $name = get_sub_field('name');
                    $title = get_sub_field('title');
                    
                    ?>

                        <div class="col">
                            <div class="home-about__profile">
                            <div class="img-wrap">
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                            </div>
                            <h3><?php echo $name; ?></h3>
                            <p><?php echo $title; ?></p>
                            </div>
                        </div>

                    <?php endwhile; ?>

                </div>
                
            <?php endif; ?>

        </div>
    </div>
</section>


