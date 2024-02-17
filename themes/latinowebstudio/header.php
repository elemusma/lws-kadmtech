<?php
echo '<!DOCTYPE html>';
echo '<html ';
language_attributes();
echo '>';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';

if(get_field('header', 'options')) { the_field('header', 'options'); }
if(get_field('header_code')) { the_field('header_code'); }

if(get_field('custom_css')) { 

echo '<style>';

the_field('custom_css');

echo '</style>';

}
wp_head(); 

echo '</head>';
echo '<body '; 
body_class(); 
echo '>';

if(get_field('body','options')) { the_field('body','options'); }
if(get_field('body_code')) { the_field('body_code'); }
// echo '<div class="blank-space"></div>';
echo '<header class="position-fixed w-100" style="top:0;z-index:10;">';

echo '<div class="position-absolute w-100 bg-black" style="top:0;left:0;height:75%;opacity:.5;"></div>';

echo '<div class="nav">';
echo '<div class="container">';
echo '<div class="row">';

echo '<div class="col-lg-3 col-6">';
echo '<a href="' . home_url() . '">';

$logo = get_field('logo','options'); 
if($logo){
echo wp_get_attachment_image($logo['id'],'full',"",[
    'class'=>'h-auto',
    'style'=>'width:100%;max-width:100%;transition:all 1s ease-in-out;',
    'id'=>'logo-main'
]); 
}

echo '</a>';
echo '</div>';

echo '<div class="col-lg-6 col-6 text-center mobile-hidden">';
wp_nav_menu(array(
    'menu' => 'primary',
    'menu_class'=>'menu d-flex align-items-center justify-content-start list-unstyled mb-0'
    )); 
echo '</div>';

echo '<div class="col-lg-4 col-6 desktop-hidden">';
echo '<a id="navToggle" class="nav-toggle d-block" style="padding-top:11px;">';
echo '<div>';
echo '<div class="line-1 bg-accent"></div>';
echo '<div class="line-2 bg-accent"></div>';
echo '<div class="line-3 bg-accent"></div>';
echo '</div>';
echo '</a>';
echo '</div>';

echo '<div class="col-lg-3 col-5 text-right mobile-hidden">';
echo '<a href="tel:+1' . get_field('phone','options') . '" class="text-shadow btn-main box-shadow" style="color:white;font-size:1.25rem;text-decoration:none;border-radius:8px;margin-top:1rem;">' . get_field('phone','options') . '</a>';
echo '</div>';



echo '<div id="navMenuOverlay" class="position-fixed z-2"></div>';
echo '<div class="col-lg-4 col-md-8 col-11 nav-items bg-accent-secondary desktop-hidden" id="navItems">';

echo '<div class="pt-5 pb-5">';
echo '<div class="close-menu">';
echo '<div>';
echo '<span id="navMenuClose" class="close h2 text-gray" style="float:right;">X</span>';
echo '</div>';
echo '</div>';
echo '<a href="' . home_url() . '">';

$logo = get_field('logo','options'); 
if($logo){
echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto','style'=>'max-width:250px;']);
}

echo '</a>';
echo '</div>';
wp_nav_menu(array(
'menu' => 'primary',
'menu_class'=>'menu list-unstyled mb-0'
)); 

echo '<a href="tel:+1' . get_field('phone','options') . '" class="text-shadow btn-main box-shadow" style="color:white;font-size:1.25rem;text-decoration:none;border-radius:8px;margin-top:1rem;">' . get_field('phone','options') . '</a>';

echo '<div style="padding-top:50px;">';
echo '<h2 class="text-white protest">About KADM.TECH</h2>';
echo '<div class="text-accent">';
echo '<p>Empowering Connectivity, Transforming Businesses. KADM.TECH is your trusted partner for cutting-edge solutions in network infrastructure. With over 15 years of expertise, we deliver excellence in structured cabling, security installations, and innovative technology services. Connect with confidence - choose KADM.TECH for seamless connectivity that drives your success.</p>';
echo '</div>';
echo '</div>';

// echo '<p class="text-white" style="padding-top:25px;">ENQUIRE</p>';
// echo '<div class="text-white position-relative">';
// echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true"]');
// echo '</div>';
// echo '</div>';

echo '<div class="text-white position-relative">';
the_field('website_message','options');
echo '</div>';

echo '</div>'; // end of col for navigation



echo '</div>';
echo '</div>';
echo '</div>';

echo '</header>';

// echo '<section class="hero position-relative">';
// $globalPlaceholderImg = get_field('global_placeholder_image','options');
// if(is_page()){
// if(has_post_thumbnail()){
//     the_post_thumbnail('full', array(
//         'class' => 'w-100 h-100 bg-img position-absolute'
//     ));
// } else {
//     echo wp_get_attachment_image($globalPlaceholderImg['id'],'full','',[
//         'class'=>'w-100 h-100 bg-img position-absolute'
//     ]);
// }
// } elseif ($globalPlaceholderImg) {
//     echo wp_get_attachment_image($globalPlaceholderImg['id'],'full','',[
//         'class'=>'w-100 h-100 bg-img position-absolute'
//     ]);
// }



// if(!is_front_page()) {
// echo '<div class="container pt-5 pb-5 text-white text-center">';
// echo '<div class="row">';
// echo '<div class="col-md-12">';
// if(is_page() || !is_front_page()){
// echo '<h1 class="">' . get_the_title() . '</h1>';
// } elseif(is_single()){
// echo '<h1 class="">' . single_post_title() . '</h1>';
// } elseif(is_author()){
// echo '<h1 class="">Author: ' . get_the_author() . '</h1>';
// } elseif(is_tag()){
// echo '<h1 class="">' . get_single_tag_title() . '</h1>';
// } elseif(is_category()){
// echo '<h1 class="">' . get_single_cat_title() . '</h1>';
// } elseif(is_archive()){
// echo '<h1 class="">' . get_archive_title() . '</h1>';
// }
// elseif(!is_front_page() && is_home()){
// echo '<h1 class="">' . get_the_title(133) . '</h1>';
// }
// echo '</div>';
// echo '</div>';
// echo '</div>';
// }

// echo '</section>';
?>