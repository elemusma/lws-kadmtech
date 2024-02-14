<?php

// wp_enqueue_script('jquery-min-slick','//cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js');
// wp_enqueue_script('slick-min-js','//rawgit.com/kenwheeler/slick/master/slick/slick.min.js');

// wp_enqueue_style('master-slick-css','//rawgit.com/kenwheeler/slick/master/slick/slick.css');
// wp_enqueue_style('evil-icons-css','//cdn.jsdelivr.net/evil-icons/1.9.0/evil-icons.min.css');

// wp_enqueue_script('evil-icons-js','//cdn.jsdelivr.net/evil-icons/1.9.0/evil-icons.min.js');

wp_enqueue_style('owl.carousel.min', get_theme_file_uri('/owl-carousel/owl.carousel.min.css'));
wp_enqueue_style('owl.theme.default', get_theme_file_uri('/owl-carousel/owl.theme.default.min.css'));

echo '<section class="position-relative content-section ' . get_field('classes') . '" style="padding:50px 0;' . get_field('style') . '" id="' . get_field('id') . '">';

echo get_template_part('partials/bg-img');

echo get_field('code_block');

echo '<div class="container-fluid">';

echo '<div class="row justify-content-center">';

$image_or_gallery = get_field('image_or_gallery');

echo '<div class="col-lg-6">';

if($image_or_gallery == 'Image') {
    $image = get_field('image');
    echo wp_get_attachment_image($image['id'],'full','',[
        'class'=>'',
        'style'=>''
    ]);
} elseif ($image_or_gallery == 'Gallery') {
    $gallery = get_field('gallery');
if( $gallery ): 
    // echo '<div class="col-lg-6">';
    echo '<div class="listing-carousel owl-carousel owl-theme arrows-middle">';
    // echo '<ul class="slider">';
foreach( $gallery as $image ):

    echo '<div class="h-100 d-flex align-items-center">';
    echo wp_get_attachment_image($image['id'],'full','',[
        'class'=>'w-100 h-auto',
        'style'=>''
    ]);
    echo '</div>';
endforeach;
echo '</div>';
// echo '</div>';
endif;
}
echo '</div>';

echo '<div class="col-lg-6 ' . get_field('column_classes') . '" style="' . get_field('column_style') . '">';
    echo '<div data-aos="fade-up">';
        echo get_field('content');
    echo '</div>';
echo '</div>';

echo '</div>';

echo '</div>';

echo '</section>';

wp_enqueue_script('jquery-min', get_theme_file_uri('/owl-carousel/jquery.min.js'));
wp_enqueue_script('owl-carousel', get_theme_file_uri('/owl-carousel/owl.carousel.min.js'));
wp_enqueue_script('owl-carousel-custom', get_theme_file_uri('/owl-carousel/owl-carousels.js'));

?>