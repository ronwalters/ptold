<?php
$module_name = 'av_Final_Arrangements';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '1',
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
    ),
    'panels' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'accounts_name',
          'label' => 'LBL_ACCOUNTS_NAME',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'contacts_name',
          'label' => 'LBL_CONTACTS_NAME',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'document_name',
          'label' => 'LBL_DOC_NAME',
        ),
      ),
      3 => 
      array (
        0 => 'active_date',
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'funeral_description',
          'comment' => '',
          'label' => 'LBL_FUNERAL_DESCRIPTION',
        ),
      ),
    ),
  ),
);
?>
