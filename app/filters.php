<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});

add_filter('upload_mimes', function(){
    $mimes['svg'] = 'image/svg+xml';
    $mimes['jpg'] = 'image/jpg';
    $mimes['jpge'] = 'image/jpge';
    $mimes['png'] = 'image/png';
    $mimes['pdf'] = 'application/pdf';
    return $mimes;
});
