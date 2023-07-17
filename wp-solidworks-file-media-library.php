<?php

/**
 * Add support for SOLIDWORKS (.sldprt) file type to be uploaded in Media Library
 * Add to functions.php
 */
function solidworks_mime_types($mime_types){
    $mime_types['sldprt'] = 'application/octet-stream'; //Adding svg extension
    return $mime_types;
}
add_filter('upload_mimes', 'solidworks_mime_types', 1, 1);