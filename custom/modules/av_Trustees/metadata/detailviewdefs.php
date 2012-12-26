<?php
$module_name = 'av_Trustees';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
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
      'useTabs' => false,
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          1 => 'assigned_user_name',
        ),
        2 => 
        array (
          0 => 'name',
        ),
        3 => 
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
        4 => 
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
        5 => 
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
        6 => 
        array (
          0 => 'description',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
    ),
  ),
);
?>
