<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(1, 'Leads push feed', 'modules/Leads/SugarFeeds/LeadFeed.php','LeadFeed', 'pushFeed'); 
$hook_array['after_save'] = Array(); 
$hook_array['before_save'][] = Array(1, 'convert lead things', 'custom/modules/Leads/LeadsHook.php','LeadsHook', 'createClientHistoryOnLeadConvert'); 
$hook_array['after_ui_frame'] = Array(); 



?>