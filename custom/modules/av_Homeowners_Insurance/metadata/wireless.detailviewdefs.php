<?php
$module_name = 'av_Homeowners_Insurance';
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
        ),
      ),
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
          'name' => 'av_companies_name',
          'label' => 'LBL_AV_COMPANIES_NAME',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'policy_number',
          'comment' => '',
          'label' => 'LBL_POLICY_NUMBER',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'type',
          'comment' => '',
          'label' => 'LBL_TYPE',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'status',
          'comment' => '',
          'label' => 'LBL_STATUS',
        ),
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'issue_date',
          'comment' => '',
          'label' => 'LBL_ISSUE_DATE',
        ),
      ),
      7 => 
      array (
        0 => 
        array (
          'name' => 'endorsements',
          'comment' => '',
          'label' => 'LBL_ENDORSEMENTS',
        ),
      ),
      8 => 
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
