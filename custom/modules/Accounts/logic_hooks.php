<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['after_ui_frame'] = Array(); 
$hook_array['after_ui_frame'][] = Array(1, 'Accounts InsideView frame', 'modules/Connectors/connectors/sources/ext/rest/insideview/InsideViewLogicHook.php','InsideViewLogicHook', 'showFrame'); 
$hook_array['process_record'] = Array(); 
$hook_array['process_record'][] = Array(1, 'make html for relationship fields', 'custom/modules/Accounts/theHook4Accounts.php','theHook4Accounts', 'makeHTML4RelateFields'); 


?>