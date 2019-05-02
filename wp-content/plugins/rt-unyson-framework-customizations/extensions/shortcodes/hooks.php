<?php if (!defined('FW')) die('Forbidden');

function disable_default_shortcodes($to_disable)
{
	 $to_disable[] = 'icon';		
	 $to_disable[] = 'map';	
    $to_disable[] = 'widget_area';	
    $to_disable[] = 'call_to_action';
    $to_disable[] = 'special_heading';
     $to_disable[] = 'team_member';
     $to_disable[] = 'contact_form';
    $to_disable[] = 'calendar';
    $to_disable[] = 'table';
    $to_disable[] = 'button';
    return $to_disable;
}
add_filter('fw_ext_shortcodes_disable_shortcodes', 'disable_default_shortcodes');