<?php
$module_name = 'av_Tax_Forms';
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
        0 => 'name',
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'return_type',
          'comment' => '',
          'label' => 'LBL_RETURN_TYPE',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'district',
          'comment' => '',
          'label' => 'LBL_DISTRICT',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'residency',
          'comment' => '',
          'label' => 'LBL_RESIDENCY',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'description',
          'comment' => 'Full text of the note',
          'label' => 'LBL_DESCRIPTION',
        ),
      ),
    ),
  ),
);
?>
