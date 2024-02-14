<?php
echo '<section class="position-relative text-white ' . get_field('classes') . '" style="padding:50px 0;' . get_field('style') . '" id="' . get_field('id') . '">';

echo get_template_part('partials/bg-img');


echo get_field('code_block');


echo '<div class="container-fluid">';

echo '<div class="row justify-content-center">';

    echo get_template_part('partials/content-block');

echo '</div>';

$carouselOptions = get_field('carousel_options');

// print_r($carouselOptions);

if($carouselOptions == 'Relationship') {
    // echo 'relatioinship';
$relationshipCarousel = get_field('relationship_carousel');
if( $relationshipCarousel ): 
    echo '<div class="gallery-carousel owl-carousel owl-theme arrows-middle">';
foreach( $relationshipCarousel as $post ):
    $permalink = get_permalink( $post->ID );
    $title = get_the_title( $post->ID );
    // $custom_field = get_field( 'field_name', $post->ID );
    $featured_image_id = get_post_thumbnail_id($post->ID);

echo '<div class="position-relative img-hover overflow-h">';
echo '<a href="' . $permalink . '" style="" class="d-block">';

echo wp_get_attachment_image($featured_image_id, 'full','',[
    'class'=>'w-100 d-block',
    'style'=>'height:250px;object-fit:cover;'
] );
echo '</a>';
echo '</div>';
endforeach; 
echo '</div>';
endif;

} elseif($carouselOptions == 'Gallery') {
    // echo 'gallery';
$gallery = get_field('gallery_carousel');
if( $gallery ): 
    echo '<div class="gallery-carousel owl-carousel owl-theme arrows-middle">';
foreach( $gallery as $image ):
echo '<div class="position-relative img-hover overflow-h">';
echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set" style="" class="d-block">';

echo wp_get_attachment_image($image['id'], 'full','',[
    'class'=>'w-100 d-block',
    'style'=>'height:250px;object-fit:cover;'
] );
echo '</a>';
echo '</div>';
endforeach; 
echo '</div>';
endif;
}


echo '</div>';

echo '</section>';

?>