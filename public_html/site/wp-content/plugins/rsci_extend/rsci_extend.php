<?php
/*
Plugin Name:  rsciext
 */

add_filter('really_simple_csv_importer_save_meta', function($meta, $post, $is_update) {
    foreach ($meta as $key => $value) {
        if ($key == '****') {
            $meta[$key] = $value;
        } elseif (strpos($value, ',') !== false) {
            $_value = preg_split("/,+/", $value);
            $meta[$key] = $_value;
        }
    }
    return $meta;
}, 10, 3);