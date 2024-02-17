<?php
echo '<section class="position-relative content-section ' . get_field('classes') . '" style="padding:50px 0;' . get_field('style') . '" id="' . get_field('id') . '">';

echo get_template_part('partials/bg-img');

echo get_field('code_block');

echo '<div class="' . get_field('container_classes') . '" style="' . get_field('container_style') . '">';

echo '<div class="' . get_field('row_classes') . '" style="' . get_field('row_style') . '">';

    echo get_template_part('partials/content-block');

echo '</div>';

echo '</div>';

echo '</section>';

?>