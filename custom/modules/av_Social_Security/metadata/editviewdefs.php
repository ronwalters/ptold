<?php
$module_name = 'av_Social_Security';
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
        ),
        1 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'year_of_estimate',
            'comment' => '',
            'label' => 'LBL_YEAR_OF_ESTIMATE',
          ),
        ),
        3 => 
        array (
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'retirement_at_age_62',
            'comment' => '',
            'label' => 'LBL_RETIREMENT_AT_AGE_62',
          ),
          1 => 
          array (
            'name' => 'disability',
            'comment' => '',
            'label' => 'LBL_DISABILITY',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'retirement_at_age_67',
            'comment' => '',
            'label' => 'LBL_RETIREMENT_AT_AGE_67',
          ),
          1 => 
          array (
            'name' => 'child',
            'comment' => '',
            'label' => 'LBL_CHILD',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'retirement_at_age_70',
            'comment' => '',
            'label' => 'LBL_RETIREMENT_AT_AGE_70',
          ),
          1 => 
          array (
            'name' => 'spouse',
            'comment' => '',
            'label' => 'LBL_SPOUSE',
          ),
        ),
        7 => 
        array (
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'retired_spouse',
            'comment' => '',
            'label' => 'LBL_RETIRED_SPOUSE',
          ),
          1 => 
          array (
            'name' => 'taxed_social_security_earnings',
            'comment' => '',
            'label' => 'LBL_TAXED_SOCIAL_SECURITY_EARNINGS',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'family',
            'comment' => '',
            'label' => 'LBL_FAMILY',
          ),
          1 => 
          array (
            'name' => 'taxed_medicare_earnings',
            'comment' => '',
            'label' => 'LBL_TAXED_MEDICARE_EARNINGS',
          ),
        ),
        10 => 
        array (
        ),
        11 => 
        array (
          0 => 'description',
        ),
        12 => 
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
