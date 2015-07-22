<?php
/*
Plugin Name: Bulk URL shortener
Plugin URI: https://github.com/tdakanalis/bulk_api_bulkshortener
Description: Shorten URLs in bulk (a single request with many URLs to shorten).
Version: 1.0
Author: Stelios Mavromichalis
Author URI: http://www.cytech.gr
*/

yourls_add_action('api', 'bulk_api_bulkshortener');

function bulk_api_bulkshortener($action) {
    if ($action[0] != 'bulkshortener') {
        return;
    }

    if (!isset($_REQUEST['urls'])) {
        $return = array(
            'errorCode' => 400,
            'message' => 'bulkshortener: missing URLS parameter',
            'simple' => 'bulkshortener: missing URLS parameter',
        );
        echo $return['errorCode'] . ": " . $return['simple'];
        die();
    }

    $keyword = (isset($_REQUEST['keyword']) ? $_REQUEST['keyword'] : '');
    $title = (isset($_REQUEST['title']) ? $_REQUEST['title'] : '');
    $urls = (isset($_REQUEST['urls']) ? $_REQUEST['urls'] : array());
    
    foreach ($urls as $url) {
        $return = yourls_add_new_link($url, $keyword, $title);
        echo $return['shorturl'] . "\n";
    }
    
    die();
}
