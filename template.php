<?php

function archuletaTheme_preprocess_html(&$vars) {
    // change doctype to html5
    $vars['doctype'] = '<!DOCTYPE html>' . "\n";
    // create variable containing the path to the theme
    $vars['path'] = drupal_get_path('theme', 'archuletaTheme');
}

function archuletaTheme_js_alter(&$javascript) {

    // update jquery for non-administrative pages
    if (!(module_exists('jquery_update'))) {
    	if (arg(0) != 'admin' && arg(0) != 'panels' && arg(0) != 'ctools' {
		$jquery_file = drupal_get_path('theme', 'archuletaTheme');
        	$jquery_file .= '/js/jquery-1.11.1.min.js';
        	$jquery_version = '1.11.1';

        	$javascript['misc/jquery.js']['data'] = $jquery_file;
        	$javascript['misc/jquery.js']['version'] = $jquery_version;
        	$javascript['misc/jquery.js']['weight'] = 0;
        	$javascript['misc/jquery.js']['group'] = -101;
	}
    }
}

