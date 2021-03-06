<?php
$module_name = 'av_Cashflow';
$OBJECT_NAME = 'AV_CASHFLOW';
$listViewDefs [$module_name] = 
array (
  'YEAR' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_YEAR',
    'width' => '5%',
	'link' => 'true',
  ),
  'DOCUMENT_NAME' => 
  array (
    'width' => '15%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
  ),
  'ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_NAME',
    'id' => 'ACCOUNT_ID',
    'width' => '10%',
    'default' => true,
  ),
  'INCOME_PER_MONTH' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_INCOME_PER_MONTH',
    'currency_format' => true,
	'align' => 'right',
    'width' => '10%',
  ),
  'SAVINGS_PER_MONTH' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_SAVINGS_PER_MONTH',
    'currency_format' => true,
	'align' => 'right',
    'width' => '10%',
  ),
  'FIXED_EXPENSES_PER_MONTH' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_FIXED_EXPENSES_PER_MONTH',
    'currency_format' => true,
	'align' => 'right',
    'width' => '10%',
  ),
  'VARIABLE_EXPENSES_PER_MONTH' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_VARIABLE_EXPENSES_PER_MONTH',
    'currency_format' => true,
	'align' => 'right',
    'width' => '10%',
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
  ),
  'ACTIVE_DATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ACTIVE_DATE',
    'default' => false,
  ),
  'STATUS_ID' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_DOC_STATUS',
    'width' => '5%',
    'default' => false,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
  'INCOME_PER_YEAR' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_INCOME_PER_YEAR',
    'currency_format' => true,
    'width' => '10%',
  ),
  'SAVINGS_PER_YEAR' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_SAVINGS_PER_YEAR',
    'currency_format' => true,
	'align' => 'right',
    'width' => '10%',
  ),
  'FIXED_EXPENSES_PER_YEAR' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_FIXED_EXPENSES_PER_YEAR',
    'currency_format' => true,
	'align' => 'right',
    'width' => '10%',
  ),
  'VARIABLE_EXPENSES_PER_YEAR' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_VARIABLE_EXPENSES_PER_YEAR',
    'currency_format' => true,
	'align' => 'right',
    'width' => '10%',
  ),
  'CATEGORY_ID' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_CATEGORY',
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_LAST_REV_CREATOR',
    'default' => false,
    'sortable' => false,
  ),
  'EXP_DATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_EXP_DATE',
    'default' => false,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '20%',
    'default' => false,
  ),
  'UPLOADFILE' => 
  array (
    'type' => 'file',
    'label' => 'LBL_FILE_UPLOAD',
    'width' => '10%',
    'default' => false,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
  'FILE_EXT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FILE_EXTENSION',
    'width' => '10%',
    'default' => false,
  ),
  'FILE_MIME_TYPE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MIME',
    'width' => '10%',
    'default' => false,
  ),
  'SUBCATEGORY_ID' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_SUBCATEGORY',
    'default' => false,
  ),
  'TEAM_NAME' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_TEAM',
    'default' => false,
    'sortable' => false,
  ),
);
?>
