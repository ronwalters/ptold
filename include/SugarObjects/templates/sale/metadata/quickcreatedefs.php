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

/*********************************************************************************

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$module_name = '<module_name>';
$_object_name = '<_object_name>';
$viewdefs[$module_name]['QuickCreate'] = array(
    'templateMeta' => array('maxColumns' => '2',
                            'widths' => array(
                                            array('label' => '10', 'field' => '30'),
                                            array('label' => '10', 'field' => '30')
                                            ),
    'javascript' => '{$PROBABILITY_SCRIPT}',
),
 'panels' =>array (
  'lbl_sale_information' =>array (
  	array(
		'name',
		array('name'=>'assigned_user_name','displayParams'=>array('required'=>true)),
	),
	
    array(
		'amount',
    	array('name'=>'team_name','displayParams'=>array('required'=>true)),
	),
	
	array($_object_name.'_type', 'date_closed'),
	
    array('lead_source',array('name'=>'sales_stage', 'displayParams'=>array('required'=>true))),

    array (
      'next_step',
      'probability'
    ),
    
    array (
      'description',''
    ),
  ),
)

);
?>
