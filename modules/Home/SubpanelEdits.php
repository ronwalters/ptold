<?php
//FILE SUGARCRM flav=pro || flav=sales
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/


$mod_strings   = return_module_language($current_language, $_REQUEST['target_module']);
$target_module = $_REQUEST['target_module']; // target class

if(file_exists('modules/'. $_REQUEST['target_module'] . '/EditView.php')) {
    $tpl = $_REQUEST['tpl'];
	if(is_file('modules/' . $target_module . '/' . $target_module . 'QuickCreate.php')) { // if there is a quickcreate override
	    require_once('modules/' . $target_module . '/' . $target_module . 'QuickCreate.php');
	    $editviewClass     = $target_module . 'QuickCreate'; // eg. OpportunitiesQuickCreate 
	    $editview          = new $editviewClass($target_module, 'modules/' . $target_module . '/tpls/' . $tpl);
	    $editview->viaAJAX = true;
	}
	else { // else use base class
	    require_once('include/EditView/EditViewQuickCreate.php');
	    $editview = new EditViewQuickCreate($target_module, 'modules/' . $target_module . '/tpls/' . $tpl);
	}
	$editview->process();
	echo $editview->display();
} else{
	
	$subpanelView = 'modules/'. $target_module . '/views/view.subpanelquickedit.php';
	$view = (!empty($_REQUEST['target_view'])) ? $_REQUEST['target_view'] : 'QuickEdit';
	//Check if there is a custom override, then check for module override, finally use default (SubpanelQuickCreate)
	if(file_exists('custom/' . $subpanelView)) {
		require_once('custom/' . $subpanelView);
		$subpanelClass =  'Custom' . $target_module . 'SubpanelQuickEdit';
		$sqc  = new $subpanelClass($target_module, $view);
	} else if(file_exists($subpanelView)) {
		require_once($subpanelView);
		$subpanelClass = $target_module . 'SubpanelQuickEdit';
		$sqc  = new $subpanelClass($target_module, $view);
	} else {
		require_once('include/EditView/SubpanelQuickEdit.php');
		$sqc  = new SubpanelQuickEdit($target_module, $view);
	}
}	

?>
