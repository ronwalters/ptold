<?php
$viewdefs ['Meetings'] = 
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
      ),
      'useTabs' => false,
    ),
    'panels' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'name',
          'displayParams' => 
          array (
            'required' => true,
            'wireless_edit_only' => true,
          ),
        ),
      ),
      1 => 
      array (
        0 => 'date_start',
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'date_end',
          'comment' => 'Date meeting ends',
          'label' => 'LBL_DATE_END',
        ),
      ),
	  3 => 
      array (
        0 => 
        array (
          'name' => 'duration_hours',
        ),
      ),
	  4 => 
      array (
        0 => 
        array (
          'name' => 'duration_minutes',
        ),
      ),
      5 => 
      array (
        0 => 'status',
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'location',
          'comment' => 'Meeting location',
          'label' => 'LBL_LOCATION',
        ),
      ),
      7 => 
      array (
        0 => 'description',
      ),
	  8 => 
      array (
        0 => 'assigned_user_name',
      ),
    ),
  ),
);
?>