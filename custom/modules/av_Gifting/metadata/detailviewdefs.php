<?php
$module_name = 'av_Gifting';
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
          0 => 'name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'recipient',
            'comment' => '',
            'label' => 'LBL_RECIPIENT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'contacts_name',
            'label' => 'LBL_CONTACTS_NAME',
          ),
          1 => 
          array (
            'name' => 'accounts_name',
            'label' => 'LBL_ACCOUNTS_NAME',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'date_of_gift',
            'comment' => '',
            'label' => 'LBL_DATE_OF_GIFT',
          ),
          1 => 
          array (
            'name' => 'value',
            'comment' => '',
            'label' => 'LBL_VALUE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'is_709_required',
            'comment' => '',
            'label' => 'LBL_IS_709_REQUIRED',
          ),
          1 => 
          array (
            'name' => 'date_709_filed',
            'comment' => '',
            'label' => 'LBL_DATE_709_FILED',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'date_crummey_sent',
            'comment' => '',
            'label' => 'LBL_DATE_CRUMMEY_SENT',
          ),
          1 => '',
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
