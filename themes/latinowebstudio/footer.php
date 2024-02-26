<?php
echo '<footer class="">';

echo '<section class="bg-accent-senary" style="padding-top:50px;">';
echo '<div class="container">';

// echo '<div class="row justify-content-center">';

// echo '<div class="col-lg-4 col-md-5 col-12 text-center" style="padding-bottom:25px;">';

// echo '</div>';
// echo '</div>';

echo '<div class="row justify-content-center">';

echo '<div class="col-lg-4 col-md-12 col-12 text-white" style="padding-bottom:25px;">';

echo '<div class="h-100 d-flex">';
echo '<div>';

echo '<a href="' . home_url() . '" class="d-block w-100" style="z-index:1;">';

$logo = get_field('logo','options'); 
$logoFooter = get_field('logo_footer','options'); 

if($logoFooter){
    echo wp_get_attachment_image($logoFooter['id'],'full',"",[
        'class'=>'h-auto position-relative'
    ]); 
} elseif($logo) {
    echo wp_get_attachment_image($logo['id'],'full',"",[
        'class'=>'h-auto',
        'style'=>'width: 300px;'
    ]);
}

echo '</a>';

echo '<div class="text-white position-relative" style="padding-top:0px;">';
echo '<p>Empowering Connectivity, Transforming Businesses. KADM.TECH is your trusted partner for cutting-edge solutions in network infrastructure. With over 15 years of expertise, we deliver excellence in structured cabling, security installations, and innovative technology services. Connect with confidence - choose KADM.TECH for seamless connectivity that drives your success.</p>';

echo '</div>';



echo '</div>';
echo '</div>';

echo '</div>'; // end of col

echo '<div class="col-lg-4 col-md-6 col-12" style="">';
// echo '<div class="position-absolute bg-black w-100" style="top:-30px;left:0;height:30px;"></div>';
echo '<div class="position-absolute bg-black w-100 h-100" style="mix-blend-mode:multiply;top:0;left:0;"></div>';

echo '<div class="position-relative text-center">';

        echo '<p class="text-white">USEFUL LINKS</p>';
        wp_nav_menu(array(
                'menu' => 'footer',
                'menu_class'=>'menu list-unstyled text-white text-uppercase mb-0'
        ));
echo '</div>';

echo '</div>';

echo '<div class="col-lg-1 d-lg-block d-none"></div>';

echo '<div class="col-lg-3 col-md-5 col-12 order-lg-4 order-md-3 order-3 text-white" style="padding-bottom:0 !important;">';

// echo '<div class="h-100 d-flex">';
// echo '<div>';

echo get_template_part('partials/si');

echo '<p>CONTACT</p>';

echo '<div class="d-flex">';
echo '<div class="text-accent">A:</div>';
echo '<p class="" style="margin:0px 0px 0px 15px;">' . get_field('address','options') . '</p>';
echo '</div>';

echo '<div class="d-flex" style="padding-top:25px;">';
echo '<div class="text-accent">T:</div>';
echo '<p style="margin:0px 0px 0px 15px;"><a href="tel:+1' . get_field('phone','options') . '" class="">' . get_field('phone','options') . '</a></p>';
echo '</div>';

the_field('website_message','options');

echo '<a href="https://latinowebstudio.com/" target="_blank" rel="noopener noreferrer" class="d-block position-lg-absolute d-flex align-items-center" style="bottom:25px;padding-top:45px;text-decoration:none;">';
echo '<p style="line-height:1;"><small style="color:#d7d7d7;">Web Development by<br>Latino Web Studio</small></p>';
echo '<img src="https://latinowebstudio.com/wp-content/uploads/2023/09/Logo-Icon-White.png" style="width:50px;height:50px;margin-left:15px;" class="" alt="">';
// echo '<img src="https://insideoutcreative.io/wp-content/uploads/2022/06/created-by-inside-out-creative-black.png" style="width:150px;" class="h-auto ml-2" alt="">';
echo '</a>';

// echo '<div class="pt-4">';
// echo '<p class="text-white">ENQUIRE</p>';
// echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true"]');
// echo '</div>';




// echo '</div>';
// echo '</div>';

echo '</div>'; // end of col


echo '</div>';

echo '</div>';
echo '</section>';


echo '</footer>';

if(get_field('footer', 'options')) { the_field('footer', 'options'); }
if(get_field('footer_code')) { the_field('footer_code'); }

wp_footer();

echo '</body>';
echo '</html>';
?>