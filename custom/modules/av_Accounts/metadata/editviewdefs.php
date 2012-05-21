<?php
$module_name = 'av_Accounts';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
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
      'useTabs' => false,
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'dependent_dropdown',
            'label' => 'LBL_DEPENDENT_DROPDOWN',
          ),
          1 => 
          array (
            'name' => 'value',
            'label' => 'LBL_VALUE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'dependent_bool',
            'label' => 'LBL_DEPENDENT_BOOL',
          ),
          1 => 
          array (
            'name' => 'dependent_varchar',
            'label' => 'LBL_DEPENDENT_VARCHAR',
          ),
        ),
        3 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'display' => true,
            ),
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'accounts_av_accounts_name',
          ),
        ),
      ),
    ),
  ),
);
?>
