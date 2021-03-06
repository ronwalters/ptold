<?php
$module_name = 'av_Cashflow';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'enctype' => 'multipart/form-data',
        'hidden' => 
        array (
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'javascript' => '{sugar_getscript file="include/javascript/popup_parent_helper.js"}
	{sugar_getscript file="cache/include/javascript/sugar_grp_jsolait.js"}
	{sugar_getscript file="modules/Documents/documents.js"}',
      'useTabs' => false,
      'syncDetailEditViews' => true,
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'custom/include/js/inherit_parent_team.js',
        ),
      ),
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'account_name',
            'label' => 'LBL_ACCOUNTS_NAME',
            'displayParams' => 
            array (
              'call_back_function' => 'call_back_account_team',
            ),
          ),
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 'document_name',
          1 => 
          array (
            'name' => 'year',
            'comment' => '',
            'label' => 'LBL_YEAR',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'uploadfile',
            'displayParams' => 
            array (
              'onchangeSetFileNameTo' => 'document_name',
            ),
          ),
          1 => 'active_date',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'description',
          ),
          1 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'income_per_month',
            'comment' => '',
            'label' => 'LBL_INCOME_PER_MONTH',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'savings_per_month',
            'comment' => '',
            'label' => 'LBL_SAVINGS_PER_MONTH',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'fixed_expenses_per_month',
            'comment' => '',
            'label' => 'LBL_FIXED_EXPENSES_PER_MONTH',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'variable_expenses_per_month',
            'comment' => '',
            'label' => 'LBL_VARIABLE_EXPENSES_PER_MONTH',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
