<?php

echo '<div class="' . get_field('column_classes') . '" style="' . get_field('column_style') . '">';
    echo '<div data-aos="fade-up">';
        echo get_field('content');
    echo '</div>';
echo '</div>';

?>