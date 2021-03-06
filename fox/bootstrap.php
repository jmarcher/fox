<?php
/**
 * Start framework core
 *
 * @author Joubert <eu+fot@redrat.com.br>
 * @license: MIT
 * @see https://github.com/joubertredrat/fox/
 */

namespace Fox;

error_reporting(E_ALL);
ini_set('display_errors', true);

array_map(
    function ($file) {
        require($file);
    },
    preg_grep(
        '/'.basename(__FILE__).'$/',
        glob(FOX_PATH.DIRECTORY_SEPARATOR.'*.php'),
        PREG_GREP_INVERT
    )
);
