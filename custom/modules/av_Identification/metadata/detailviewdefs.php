<?php
$module_name = 'av_Identification';
$_object_name = 'av_identification';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'form' => 
      array (
      ),
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
            'name' => 'document_name',
            'label' => 'LBL_DOC_NAME',
          ),
          1 => 
          array (
            'name' => 'uploadfile',
            'displayParams' => 
            array (
              'link' => 'uploadfile',
              'id' => 'id',
            ),
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'type',
            'comment' => '',
            'label' => 'LBL_TYPE',
          ),
          1 => 
          array (
            'name' => 'issued_by',
            'comment' => '',
            'label' => 'LBL_ISSUED_BY',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'id_number',
            'comment' => '',
            'label' => 'LBL_ID_NUMBER',
          ),
          1 => 
          array (
            'name' => 'date_issued',
            'comment' => '',
            'label' => 'LBL_DATE_ISSUED',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'is_on_file',
            'comment' => '',
            'label' => 'LBL_IS_ON_FILE',
          ),
          1 => 
          array (
            'name' => 'date_expires',
            'comment' => '',
            'label' => 'LBL_DATE_EXPIRES',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DOC_DESCRIPTION',
          ),
        ),
        5 => 
        array (
          0 => 'team_name',
          1 => 'active_date',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'accounts_av_identification_1_name',
          ),
        ),
      ),
    ),
  ),
);
?>
