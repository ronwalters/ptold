<?php
$module_name = 'av_Groups';
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
      'useTabs' => true,
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 'delivery_method_av_group',
          1 => 
          array (
            'name' => 'av_offices_name',
            'label' => 'LBL_AV_OFFICES_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'comment' => '',
            'label' => 'LBL_STATUS',
          ),
          1 => 
          array (
            'name' => 'priority',
            'comment' => '',
            'label' => 'LBL_PRIORITY',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'delivery_method',
            'comment' => '',
            'label' => 'LBL_DELIVERY_METHOD',
          ),
          1 => 'membership_expiration_days',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'lastupdated',
            'comment' => 'Date group updated',
            'label' => 'LBL_LASTUPDATED',
          ),
          1 => 
          array (
            'name' => 'date_checked',
            'comment' => '',
            'label' => 'LBL_DATE_CHECKED',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'document_path',
            'comment' => '',
            'label' => 'LBL_DOCUMENT_PATH',
          ),
        ),
        6 => 
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
        7 => 
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
