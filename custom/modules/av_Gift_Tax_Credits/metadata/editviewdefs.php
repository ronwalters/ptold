<?php
$module_name = 'av_Gift_Tax_Credits';
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
	   'includes' => 
      array (
        0 => 
        array (
          'file' => 'custom/include/js/inherit_parent_team.js',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'contact_id',
            'comment' => '',
            'label' => 'LBL_CONTACT_ID',
          ),
          1 => 
          array (
            'name' => 'accounts_name',
            'label' => 'LBL_ACCOUNTS_NAME',
			'displayParams' => 
            array (
              'call_back_function' => 'call_back_account_team',
            ),
			
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'credit_amount',
            'comment' => '',
            'label' => 'LBL_CREDIT_AMOUNT',
          ),
          1 => 
          array (
            'name' => 'date_credit_used',
            'comment' => '',
            'label' => 'LBL_DATE_CREDIT_USED',
          ),
        ),
        3 => 
        array (
          0 => 'description',
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
    ),
  ),
);
?>
