<?php

if(have_rows('sections')): 
    $sectionsCounter = 0;
    while(have_rows('sections')): the_row();
$sectionsCounter++;
$label = get_sub_field('label');
$section = sanitize_title_with_dashes($label);
$rowIndex=get_row_index();


if($sectionsCounter == 1) {
    echo '<section class="position-relative d-flex align-items-center justify-content-center full-height active ' . get_sub_field('classes') . '" style="min-height:400px;height:88vh;padding: 100px 0;' . get_sub_field('style') . '" id="section-' . $section . '">';
    // echo '</section>';
} else {
    echo '<section class="position-relative d-flex align-items-center justify-content-center full-height ' . get_sub_field('classes') . '" style="min-height:400px;height:88vh;padding: 100px 0;' . get_sub_field('style') . '" id="section-' . $section . '">';
}

echo get_template_part('partials/bg-img');

echo get_sub_field('code_block');

echo '<div class="position-relative w-100">';

echo '<div class="w-100 h-100 position-absolute slides-show-on-active" style="top:0;left:0;background:rgba(0,0,0,.5);opacity:0;"></div>';

echo '<div class="container">';


echo '<div class="row justify-content-center ' . get_sub_field('row_classes') . '" style="' . get_sub_field('row_style') . '">';

echo '<div class="col-lg-9 text-center text-shadow ' . get_sub_field('column_classes') . '" style="padding-top:25px;padding-bottom: 25px;' . get_sub_field('column_style') . '">';

echo '<div class="slides-show-on-active bg-accent w-100 position-absolute" style="height:15px;left:0;top:-30px;opacity:0;"></div>';

echo '<div data-aos="fade-up">';

    echo get_sub_field('content');

echo '</div>'; // end of data aos

echo '<div class="slides-show-on-active bg-accent w-100 position-absolute" style="height:15px;left:0;bottom:-30px;opacity:0;"></div>';

echo '</div>';

echo '</div>';

echo '</div>'; // end of container

echo '</div>';


echo '</section>';

endwhile; endif;

// start of labels
if(have_rows('sections')):
echo '<div class="position-fixed side-navbar d-lg-block d-none" style="top:0%;right:25px;transform:translate(0, 40%);z-index:2;">';
echo '<ul class="list-unstyled text-right" style="max-width:200px;">';
$sectionsCounter = 0;
while(have_rows('sections')): the_row();
$sectionsCounter++;

$label = get_sub_field('label');
$section = sanitize_title_with_dashes($label);
$rowIndex=get_row_index();
// if($rowIndex == '1'){}

if($sectionsCounter == 1) {
echo '<li id="anchor-section-' . $section . '" class="position-relative active" style="margin-top:10px;margin-bottom:10px;">';
// echo '</li>';
} else {
    echo '<li id="anchor-section-' . $section . '" class="position-relative" style="margin-top:10px;margin-bottom:10px;">';
}
echo '<a href="#section-' . $section . '" class="text-white position-relative h5 slides-link text-shadow" style="text-decoration:none;padding: 5px 20px;display:inline-block;">';
echo '<small>';
echo $label;
echo '</small>';

echo '</a>';

echo '<div class="bg-white h-100 position-absolute li-border-label" style="top:0;right:0;width:4px;"></div>';

echo '</li>';

endwhile;

echo '</ul>';

echo '</div>';

endif;
// end of labels

// start of old slides

// if(have_rows('sections')): while(have_rows('sections')): the_row();
// $image = get_sub_field('image');
// $label = get_sub_field('label');
// $dataAos = get_sub_field('data_aos');
// $background = get_sub_field('background');
// $section = sanitize_title_with_dashes($label);
// $content = get_sub_field('content');


// echo '<section id="section-' . $section . '" class="full-height pt-5 pb-5 position-relative overflow-h section-full d-flex align-items-center" style="min-height:100vh;">';

// echo '<div class="container">';
// echo '<div class="row align-items-center">';
// echo '<div class="col-md-6" data-aos="' . $dataAos . '" data-aos-delay="200" style="background:' . $background . '">';
// echo '<div class="text-white" style="margin-bottom:-1rem;">';

// echo $content;

// echo '</div>';
// echo '</div>';

// echo '<div class="col-md-6">';
// echo '<div class="position-relative">';

// echo '<div style="background: #9bbec7;top: -25px;right: 20px;position: absolute;height: 65%;width: 65%;opacity:.25;"></div>';

// echo '<div style="background: #e2c391;width: 25%;height: 90%;position: absolute;bottom: -20px;right: -35px;opacity: 85%;z-index: 0 !important;"></div>';

// echo '<div class="position-relative z-1">';

// echo wp_get_attachment_image($image['id'],'full', '',['class'=>'w-100 h-auto img-bg','style'=>'object-fit:contain;top:0;left:0;']);

// echo '</div>';

// echo '</div>';

// echo '</div>';



// echo '</div>';

// echo '</div>';


// echo '</section>';


// endwhile; 
// endif;


// if(have_rows('sections')):
// echo '<div class="position-fixed side-navbar" style="top:25%;right:25px;transform:translate(0, 50%);z-index:2;">';
// echo '<ul class="list-unstyled text-right mr-md-4 mr-0">';

// while(have_rows('sections')): the_row();
// $label = get_sub_field('label');
// $section = sanitize_title_with_dashes($label);
// $rowIndex=get_row_index();
// // if($rowIndex == '1'){}

// echo '<li id="anchor-section-' . $section . '" class="mt-2 mb-2 position-relative">';

// echo '<a href="#section-' . $section . '" class="pl-md-5 pl-2 pr-2 text-white position-relative h5">';

// echo $label;

// echo '</a>';

// echo '</li>';

// endwhile;

// echo '</ul>';

// echo '</div>';

// endif;

// end of old slides

wp_enqueue_script('slides', get_theme_file_uri('/blocks/slides/slides.js'));

?>