<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
$module_name='av_Groups';

$subpanel_layout = array(
	'top_buttons' => array(
		array('widget_class' => 'SubPanelTopCreateButton'),
		array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' => $module_name),
	),

	'where' => '',

	'list_fields' => array(
		'name'=>array(
	 		'vname' => 'LBL_NAME',
			'widget_class' => 'SubPanelDetailViewLink',
	 		'width' => '30%',
		),
		'accounts_fields' => array(
			'vname' => 'LBL_JOIN_FIELD',
			'usage'=>'query_only',
		),
		'membership_id' => array(
			'vname' => 'LBL_ID',
			'usage'=>'query_only',
		),
		'envelope' => 
		array (
			'type' => 'text',
			'vname' => 'LBL_ENVELOPE',
			'sortable' => false,
			'width' => '10%',
			'default' => true,
		),
		'include' => 
		array (
			'type' => 'bool',
			'default' => true,
			'vname' => 'LBL_INCLUDE',
			'width' => '10%',
		),
		'opted_out' => 
		array (
			'type' => 'bool',
			'vname' => 'LBL_OPTED_OUT',
			'width' => '10%',
			'default' => true,
		),
		'expiration_date' => 
		array (
			'type' => 'date',
			'vname' => 'LBL_EXPIRATION_DATE',
			'width' => '10%',
			'default' => true,
		),
		'delivery_method' => 
		array (
			'type' => 'enum',
			'vname' => 'LBL_DELIVERY_METHOD',
			'width' => '10%',
			'default' => true,
		),
		'comments' => 
		array (
			'type' => 'text',
			'vname' => 'LBL_COMMENTS',
			'sortable' => false,
			'width' => '10%',
			'default' => true,
		),
		'edit_button'=>array(
			'vname' => 'LBL_EDIT_BUTTON',
			'widget_class' => 'SubPanelCstmEditRoleButton',
		 	'target' => 'av_Group_Membership',
			'action' => 'EditView',
			'id_field' => 'membership_id',
			'width' => '5%',
		),
		'remove_button'=>array(
			'widget_class' => 'SubPanelRemoveButton',
		 	'module' => $module_name,
			'width' => '5%',
		),
	),
);

?>