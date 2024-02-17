<?php

// start of testimonials
// echo '<section class="position-relative bg-accent-quinary" style="padding:100px 0;">';
// echo '</section>';

echo '<section class="position-relative testimonials ' . get_field('classes') . '" style="padding:100px 0;' . get_field('style') . '">';
echo '<div class="position-absolute" style="top:-50px;" id="' . get_field('id') . '"></div>';
// echo get_template_part('partials/bg-img');



    // echo wp_get_attachment_image(173,'full','',['class'=>'w-100 position-absolute','style'=>'height:80%;top:10%;left:0;mix-blend-mode:multiply;']);

    echo '<img src="https://buildupuniversity.com/wp-content/uploads/2024/02/Old-Paper-Background.jpg" class="w-100 position-absolute" style="height:80%;top:10%;left:0;mix-blend-mode:multiply;" alt="">';
    echo '<img src="https://buildupuniversity.com/wp-content/uploads/2024/02/Quotes-Icon-Gold.png" class="h-auto z-1 img-quote position-absolute" style="width:50px;object-fit:contain;top:4.5%;left:50%;transform:translate(-50%,0);" alt="">';

    echo get_field('code_block');
    
    echo '<div class="container">';
    echo '<div data-aos="fade-up">';
    echo '<div class="row justify-content-center">';
    // echo '<div class="col-12 text-center pb-4">';
    // // echo wp_get_attachment_image(218,'full','',['class'=>'h-100 z-1 img-quote','style'=>'object-fit:contain;']);


    // echo get_sub_field('content');

    // echo '</div>';

    echo get_template_part('partials/content-block');

if(have_rows('testimonials_repeater')):

echo '<div class="testimonial-carousel owl-carousel owl-theme arrows-middle">';
while(have_rows('testimonials_repeater')): the_row();


    echo '<div class="text-center col-lg-8" style="margin:auto;" data-aos="fade-up">';
    echo '<div class="text-accent raleway" style="letter-spacing:.2em;padding-bottom:50px;">';
    echo get_sub_field('content');
    echo '</div>';

    $headshot = get_sub_field('headshot');
    if($headshot) {
        echo wp_get_attachment_image($headshot['id'],'full','',[
            'class'=>'',
            'style'=>'width:50px;height:50px;object-fit:cover;border-radius:50%;margin: auto;'
        ]);
    }

    echo '<span class="d-block h5 cormorant-garamond-regular" style="text-transform:uppercase;padding-top:15px;">' . get_sub_field('name') . '</span>';
    echo '<span class="d-block text-accent raleway-regular" style="letter-spacing:.2em;font-size:75%;">' . get_sub_field('title') . '</span>';
    
    echo '</div>';


endwhile;
endif;
echo '</div>';
echo '</div>';

echo '</div>';
echo '</div>';
echo '</section>';
// end of testimonials

?>