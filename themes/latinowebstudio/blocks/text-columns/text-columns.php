<?php
echo '<section class="position-relative ' . get_field('classes') . '" style="padding: 100px 0px;' . get_field('style') . '">';
echo '<div class="position-absolute" style="top:-50px;" id="' . get_field('id') . '"></div>';

echo get_template_part('partials/bg-img');

echo get_field('code_block');

echo '<div class="' . get_field('container_classes') . '" style="' . get_field('container_style') . '">';
echo '<div class="' . get_field('row_classes') . '" style="' . get_field('row_style') . '">';

if(have_rows('text_columns')):
$textColumns=0;
while(have_rows('text_columns')): the_row();
$textColumns++;
echo '<div class="text-center d-flex align-items-center justify-content-center ' . get_sub_field('column_classes') . '" data-aos="fade-up" data-aos-delay="' . $textColumns . '00" style="padding:50px 0px;' . get_sub_field('column_style') . '">';
// echo '<div class="bg-accent-secondary text-white text-center">';
echo '<span class="position-absolute h1 mb-0 text-columns-big-title cormorant-garamond-regular-italic" style="
opacity: .29;
top: -50%;
left: 50%;
transform: translate(-55%,50%);
font-size: 100px;
color:var(--accent-primary);
">' . get_sub_field('big_title') . '</span>';
echo '<h3 class="" style="letter-spacing:0.5em;color:white;
position:relative;font-size:1rem;">' . get_sub_field('small_title') . '</h3>';
// echo '</div>';
// echo '<div class="overflow-h" style="height: 250px;">';

// $img = get_sub_field('image');
// if($img) {
//     echo wp_get_attachment_image($img['id'],'full','',[
//         'class'=>'w-100 img-intro img-hover',
//         'style'=>'height:250px;object-fit:cover;'
//     ]);
// }

// echo '</div>';
echo '</div>';
endwhile; 
endif;



echo '</div>';
echo '</div>';
echo '</section>';

?>