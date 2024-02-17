<?php
echo '<section class="position-relative overflow-h ' . get_field('classes') . '" style="padding:50px 0px;' . get_field('style') . '">';
echo '<div class="position-absolute" style="top:-50px;" id="' . get_field('id') . '"></div>';
echo '<div class="container-fluid">';
echo '<div class="row justify-content-center">';

echo '<div class="col-12 text-center" style="padding-bottom:100px;" data-aos="fade-up">';
echo '<h2 class="text-white">' . get_field('title_top') . '</h2>';
echo '</div>';

if(have_rows('process_repeater')): 
$columnsRepeater = 0;
while(have_rows('process_repeater')): the_row();
$columnsRepeater++;

echo '<div class="col-lg-4 col-md-10 col-11 text-white col-services" style="text-decoration:none;">';
echo '<div class="h-100" style="background:#292927;" data-aos="fade-up" data-aos-delay="' . $columnsRepeater . '00">';

if($columnsRepeater == 2) {
    echo '<div class="position-absolute" style="background:#b7b7b7;height:110%;width:1px;right:-15px;bottom:0px;"></div>'; // vertical right
    echo '<div class="position-absolute" style="background:#b7b7b7;height:115%;width:1px;left:-15px;bottom:0px;"></div>'; // vertical left

    // echo '<div class="position-absolute" style="background:#b7b7b7;height:1px;width:50%;right:0px;top:-10%;"></div>';

    echo '<div class="position-absolute" style="background:#b7b7b7;height:1px;width:150%;right:-15px;top:-10%;"></div>'; // horizontal lower
    echo '<div class="position-absolute" style="background:#b7b7b7;height:1px;width:150%;left:-15px;top:-15%;"></div>'; // horizontal higher
}

echo '<div class="position-relative pl-5 pr-5 h-100 col-services-hover" style="padding-top:75px;padding-bottom:75px;">';

echo '<div class="hover-box bg-accent position-absolute w-100 h-100 z-1 d-flex align-items-center justify-content-center pl-5 pr-5 col-services-hover-content" style="border:6px solid var(--accent-tertiary);top:0;left:0;transition:all .25s ease-in-out;">';
echo '<div>';

echo get_sub_field('content');

echo '</div>';
echo '</div>';

echo '<div class="position-absolute bg-accent-quaternary" style="width:99%;height:99%;top:0;left:0;mix-blend-mode:overlay;opacity:.28;border:2px solid var(--accent-primary);"></div>';

echo '<div class="position-relative pb-3 h-100">';
echo '<span class="h1 d-block montserrat-thin" style="font-size:3.25rem;margin-bottom:1.5rem;">Step ' . $columnsRepeater . '</span>';

echo '<span class="d-block protest" style="padding-bottom:6.5rem;padding-left:1.5rem;font-size:2rem;">' . get_sub_field('title') . '</span>';

echo '<div class="d-flex align-items-end position-absolute" style="bottom:0;">';

echo '<div style="height: 35px;
width: 35px;
border: 1px solid var(--accent-primary);
display: flex;
align-items: center;
justify-content: center;
border-radius: 50%;
margin-right: 15px;">';

echo '<span class="plus-sign">+</span>';
echo '</div>';
echo '<div class="position-relative">';
echo '<h3 class="cormorant-garamond-regular-italic" style="margin-bottom:.5rem;">More Information</h3>';
echo '<div class="" style="border-bottom:8px solid var(--accent-primary);width:75px;bottom:-15px;left:0;"></div>';

echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';


echo '</div>';
echo '</div>';
endwhile; 
endif;

echo '<div class="col-12 text-center" style="padding-top:50px;" data-aos="fade-up">';
echo '<h3 class="text-black cormorant-garamond-light" style="letter-spacing:.2em;font-size:2rem;">' . get_field('title_bottom') . '</h3>';
echo '</div>';

echo '</div>';
echo '</div>';
echo '</section>';

?>