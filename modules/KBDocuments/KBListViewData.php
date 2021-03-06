<?php
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

require_once('include/ListView/ListViewData.php');
class KBListViewData extends ListViewData{
	
	function KBListViewData() {
		parent::ListViewData();
	}
	
	function getTotalCount($main_query){
		$count_query = $this->seed->create_list_count_query($main_query);
		$result = $GLOBALS['db']->query($count_query);
		if($row = $GLOBALS['db']->fetchByAssoc($result)){
		return $row['c'];
		}           
		return 0;
	}	
}
?>