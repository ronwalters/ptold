<?php
// created: 2013-06-26 19:08:01
$subpanel_layout['list_fields'] = array (
  'account_number' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_ACCOUNT_NUMBER',
    'width' => '10%',
  ),
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '15%',
    'default' => true,
  ),
  'av_account_types_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_AV_ACCOUNT_TYPES_NAME',
    'id' => 'ACCOUNT_TYPE_ID',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'av_Account_Types',
    'target_record_key' => 'account_type_id',
  ),
  'ownership_type' => 
  array (
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_OWNERSHIP_TYPE',
    'width' => '10%',
  ),
  'contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_CONTACTS_NAME',
    'id' => 'OWNER_ID',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Contacts',
    'target_record_key' => 'owner_id',
  ),
  'custodian_id_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_CUSTODIAN_ID_NAME',
    'id' => 'CUSTODIAN_ID',
    'width' => '10%',
    'default' => false,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'av_Companies',
    'target_record_key' => 'custodian_id',
  ),
  'value' => 
  array (
    'type' => 'currency',
    'vname' => 'LBL_VALUE',
    'currency_format' => true,
    'align' => 'right',
    'width' => '8%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelCstmEditAccount',
    'module' => 'av_Accounts',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'av_Accounts',
    'width' => '5%',
    'default' => true,
  ),
);