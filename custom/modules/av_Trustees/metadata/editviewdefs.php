<?php
$module_name = 'av_Trustees';
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
          0 => 
          array (
            'name' => 'av_accounts_name',
            'label' => 'LBL_AV_ACCOUNTS_NAME',
          ),
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'contacts_name',
            'label' => 'LBL_CONTACTS_NAME',
          ),
          1 => 'name',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'type',
            'comment' => '',
            'label' => 'LBL_TYPE',
          ),
          1 => 
          array (
            'name' => 'date_verified',
            'comment' => '',
            'label' => 'LBL_DATE_VERIFIED',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'cc_statements',
            'comment' => '',
            'label' => 'LBL_CC_STATEMENTS',
          ),
          1 => 
          array (
            'name' => 'cc_mail',
            'comment' => '',
            'label' => 'LBL_CC_MAIL',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'cc_reports',
            'comment' => '',
            'label' => 'LBL_CC_REPORTS',
          ),
          1 => 
          array (
            'name' => 'ok_to_speak_to',
            'comment' => '',
            'label' => 'LBL_OK_TO_SPEAK_TO',
          ),
        ),
        5 => 
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
        6 => 
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
    ),
  ),
);
?>
