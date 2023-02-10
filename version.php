<?php

defined('MOODLE_INTERNAL') || die();

$plugin->release   = '1.00';
$plugin->version   = 2023021000; // The current module version (Date: YYYYMMDDXX)
$plugin->maturity  = MATURITY_STABLE;
$plugin->requires  = 2016120500; // Requires this Moodle version
$plugin->component = 'theme_cooltheme'; // Full name of the plugin (used for diagnostics)
$plugin->dependencies = [                                                                                                           
    'theme_boost' => '2016102100'                                                                                                   
];