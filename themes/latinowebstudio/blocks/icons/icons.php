<?php
echo '<section class="position-relative content-section ' . get_field('classes') . '" style="padding:50px 0;' . get_field('style') . '" id="' . get_field('id') . '">';

echo get_template_part('partials/bg-img');


echo get_field('code_block');


echo '<div class="container">';

echo '<div class="row justify-content-center">';

    echo get_template_part('partials/content-block');

echo '</div>';


if(have_rows('icons_repeater')):
$iconsRepeater=0;
echo '<div class="row justify-content-center" style="padding-top:75px;">';
while(have_rows('icons_repeater')): the_row();

if ($iconsRepeater > 3) {
    $iconsRepeater=0;
}
$iconsRepeater++;

$image = get_sub_field('image');
echo '<div class="col-lg-3 col-md-4 col-6 text-center text-white" style="padding:5px;" data-aos="fade-up" data-aos-delay="' . $iconsRepeater . '00">';
echo '<div class="position-relative">';
// echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-inventory" style="" class="d-block">';

if($image){
    echo wp_get_attachment_image($image['id'], 'full','',[
        'class'=>'w-100 d-block img-gallery' . get_sub_field('image_class'),
        'style'=>'height:65px;object-fit:contain;' . get_sub_field('image_style')
        ] );
    }
// echo '</a>';

echo '<div 
class="position-absolute" 
style="top:50%;left:50%;transform:translate(-50%,-50%);width:110px;height:110px;border-radius:50%;border:1px solid var(--accent-primary);"></div>';

echo '</div>';




// echo '<div class="position-absolute text-white" style="top:50%;left:50%;transform:translate(-50%,-50%);">';
echo '<span style="padding-top:40px;padding-bottom:60px;letter-spacing:.2em;" class="d-block">' . get_sub_field('title') . '</span>';
// echo '</div>';

echo '</div>';

endwhile;
echo '</div>';
endif;

echo '</div>';

echo '</section>';

?>