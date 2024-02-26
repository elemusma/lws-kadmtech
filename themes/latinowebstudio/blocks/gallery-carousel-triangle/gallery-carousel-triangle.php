<?php

wp_enqueue_style('owl.carousel.min', get_theme_file_uri('/owl-carousel/owl.carousel.min.css'));
wp_enqueue_style('owl.theme.default', get_theme_file_uri('/owl-carousel/owl.theme.default.min.css'));
wp_enqueue_style('owl-carousel-css', get_theme_file_uri('/owl-carousel/owl.carousel.css'));

// start of header gallery

echo '<section class="position-relative triangle-carousel-gallery" style="min-height:100vh;">';

$backgroundCarousel = get_field('background_carousel');

if( $backgroundCarousel ):
    echo '<div class="position-absolute w-100 h-100 big-gallery owl-carousel owl-theme overflow-h" style="top:0;left:0;">';
    $galleryCounter=0;
    foreach( $backgroundCarousel as $image ):
        echo '<div class="h-100">';
        $galleryCounter++;
        // if($galleryCounter == 1) {
        //     echo wp_get_attachment_image($image['id'], 'full','',[
        //         'class'=>'w-100 h-100 big-gallery-img skip-lazy',
        //         'style'=>'object-fit:cover;'
        //         ] );
        //     } else {
                echo wp_get_attachment_image($image['id'], 'full','',[
                    'class'=>'w-100 h-100 big-gallery-img',
                    'style'=>'object-fit:cover;'
                    ] );
            // }

        echo '</div>';
    endforeach; 
    echo '</div>';
endif;


echo '<div class="position-absolute bg-black w-100 h-100" style="opacity:.5;z-index:3;"></div>';

$smallGallery = get_field('triangle_carousel');

if( $smallGallery ): 
    echo '<div class="position-absolute h-100 small-gallery owl-carousel owl-theme overflow-h d-flex justify-content-end" style="top:0;right:0;z-index:4;background-repeat:no-repeat;background-size:contain;">';
    $smallGalleryCounter = 0;
    foreach( $smallGallery as $image ):
        $smallGalleryCounter++;
        echo '<div class="h-100 position-relative small-triangle-width" style="width:35%;">';
        echo '<div class="position-absolute h-100 bg-accent clip-path-bg" style="top:0;right:0;width:100%;
        clip-path: polygon(75% 0%, 77% 0, 2% 100%, 0% 100%);
        -ms-clip-path: polygon(75% 0%, 77% 0, 2% 100%, 0% 100%);
        -webkit-clip-path: polygon(75% 0%, 77% 0, 2% 100%, 0% 100%);
        -moz-clip-path: polygon(75% 0%, 77% 0, 2% 100%, 0% 100%);
        "></div>';
        echo '<div class="h-100 position-relative clip-path-img" style="
        clip-path: polygon(77% 0%, 100% 0, 100% 100%, 2% 100%);
        -ms-clip-path: polygon(77% 0%, 100% 0, 100% 100%, 2% 100%);
        -webkit-clip-path: polygon(77% 0%, 100% 0, 100% 100%, 2% 100%);
        -moz-clip-path: polygon(77% 0%, 100% 0, 100% 100%, 2% 100%);">';

        // if($smallGalleryCounter == 1) {
        //     echo wp_get_attachment_image($image['id'], 'full','',[
        //         'class'=>'w-100 h-100 small-gallery-img number-' . $smallGalleryCounter . ' skip-lazy',
        //         'style'=>'object-fit:cover;'
        //         ] );
        // } else {
            echo wp_get_attachment_image($image['id'], 'full','',[
                'class'=>'w-100 h-100 small-gallery-img number-' . $smallGalleryCounter,
                'style'=>'object-fit:cover;'
                ] );
        // }


        echo '</div>';
        echo '</div>';
    endforeach; 
    echo '</div>';
endif;

// echo '<div class="container w-100">';
// echo '<div class="row">';
    
echo '<div class="text-white position-relative triangle-carousel-gallery-content d-flex align-items-center justify-content-start" style="z-index:5;min-height:100vh;">';

echo '<div class="container w-100">';
echo '<div class="row">';

echo get_template_part('partials/content-block');


echo '</div>';
echo '</div>';
echo '</div>';


// echo '</div>';
// echo '</div>';


echo '</section>';

// end of header_gallery

wp_enqueue_script('jquery-min', get_theme_file_uri('/owl-carousel/jquery.min.js'));
wp_enqueue_script('owl-carousel', get_theme_file_uri('/owl-carousel/owl.carousel.min.js'));
wp_enqueue_script('owl-carousel-custom', get_theme_file_uri('/owl-carousel/owl-carousels.js'));

?>