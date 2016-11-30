<?php

// Get rid of annoying error on localhost dev
if (!ini_get('date.timezone')) {
    date_default_timezone_set('UTC');
}

// Fix OSX Line Endings

if (!ini_get('auto_detect_line_endings')) {
    ini_set('auto_detect_line_endings', '1');
}

ini_set('memory_limit', '500M');
ini_set('max_execution_time', 500);
