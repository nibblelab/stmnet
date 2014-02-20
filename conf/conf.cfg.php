<?php

define('MODE', 'dev');
define('VERSION', '');

$confs = array(
    'dev' => array(
        'url_base' => 'http://johnatas/sinodo',
        'img_url_base' => '',
        'static_url' => '',
        'img_path' => '',
        'jquery_url' => 'http://johnatas/cache/jquery',
        'bootstrap_url' => 'http://johnatas/cache/bootstrap'
    ),
    'test' => array(
        'url_base' => 'http://www.smnet.nibblelab.com',
        'img_url_base' => '',
        'static_url' => '',
        'img_path' => '',
        'jquery_url' => 'http://code.jquery.com',
        'bootstrap_url' => 'http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1'
    ),
    'prod' => array(
        'url_base' => '',
        'img_url_base' => '',
        'static_url' => '',
        'img_path' => '',
        'jquery_url' => 'http://code.jquery.com',
        'bootstrap_url' => 'http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1'
    )
);


define('URL_BASE', $confs[MODE]['url_base']);
define('IMG_URL_BASE', $confs[MODE]['img_url_base']);
define('CSS_BASE_URL', URL_BASE . '/css');
define('JS_BASE_URL', URL_BASE . '/js');
define('STATIC_URL', $confs[MODE]['static_url']);
define('IMG_PATH', $confs[MODE]['img_path']);

define('JQUERY_URL', $confs[MODE]['jquery_url']);
define('BOOTSTRAP_URL', $confs[MODE]['bootstrap_url']);


?>
