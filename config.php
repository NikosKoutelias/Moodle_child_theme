<?php
defined('MOODLE_INTERNAL')||die;

$THEME->doctype = 'html5';
$THEME->name = 'cooltheme';
$THEME->sheets = array('child'); // Stylesheets for theme
$THEME->parents = ['boost'];
$THEME->enable_dock = false;
$THEME->yuicssmodules = array();
$THEME->javascripts = array('');
$THEME->rendererfactory = 'theme_overridden_renderer_factory';
$THEME->csspostprocess = 'theme_remui_css';
$THEME->requireblocks = '';
$THEME->addblockposition = BLOCK_ADDBLOCK_POSITION_FLATNAV;
$THEME->hidefromselector = false;