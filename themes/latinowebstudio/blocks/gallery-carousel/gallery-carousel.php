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
    $relationshipCarouselCounter = 0;
    echo '<div class="gallery-carousel owl-carousel owl-theme arrows-middle">';
foreach( $relationshipCarousel as $post ):
    $permalink = get_permalink( $post->ID );
    $title = get_the_title( $post->ID );
    // $custom_field = get_field( 'field_name', $post->ID );
    $featured_image_id = get_post_thumbnail_id($post->ID);
    $relationshipCarouselCounter++;
    if($relationshipCarouselCounter > 3) {
        $relationshipCarouselCounter = 0;
    }

echo '<div class="position-relative img-hover overflow-h" data-aos="fade-up" data-aos-delay="' . $relationshipCarouselCounter . '00">';
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
    $galleryCarouselCounter = 0;
    echo '<div class="gallery-carousel owl-carousel owl-theme arrows-middle">';
foreach( $gallery as $image ):
    $galleryCarouselCounter++;
    if($galleryCarouselCounter > 3) {
        $galleryCarouselCounter = 0;
    }
echo '<div class="position-relative img-hover overflow-h" data-aos="fade-up" data-aos-delay="' . $galleryCarouselCounter . '00">';
echo '<a href="' . get_permalink(63) . '" style="" class="d-block">';
// echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set-gallery-carousel" style="" class="d-block">';
// echo '</a>';

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

echo '<div class="row justify-content-center">';
echo '<div class="col-lg-6 text-center" data-aos="fade-up">';

    echo get_field('content_bottom');

echo '</div>';
echo '</div>';


echo '</div>';

echo '</section>';

?>