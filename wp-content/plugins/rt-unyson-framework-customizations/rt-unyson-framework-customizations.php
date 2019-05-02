<?php
/*
Plugin Name: Rt Unyson Framework Customizations
Plugin URI: http://themeforest.net/user/rayoflightt
Description: Unyson Framework Customizations
Version: 1.0.3
Author: rayoflightthemes.com
Author http://themeforest.net/user/rayoflightt
License: http://themeforest.net/licenses
*/


function _wdm_filter_rt_unyson_framework_cust_extensions($locations) {
    $locations[dirname(__FILE__) . '/extensions'] 
    =
    plugin_dir_url( __FILE__ ) . 'extensions';

    return $locations;
}
add_filter('fw_extensions_locations', '_wdm_filter_rt_unyson_framework_cust_extensions');
