<?php
$module_name = 'av_Homeowners_Insurance';
$_object_name = 'av_homeowners_insurance';
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
            'name' => 'accounts_name',
            'label' => 'LBL_ACCOUNTS_NAME',
          ),
          1 => 
          array (
            'name' => 'contacts_name',
            'label' => 'LBL_CONTACTS_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'av_companies_name',
            'label' => 'LBL_AV_COMPANIES_NAME',
          ),
          1 => 
          array (
            'name' => 'policy_number',
            'comment' => '',
            'label' => 'LBL_POLICY_NUMBER',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'type',
            'comment' => '',
            'label' => 'LBL_TYPE',
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
        3 => 
        array (
          0 => 'status',
          1 => 
          array (
            'name' => 'issue_date',
            'comment' => '',
            'label' => 'LBL_ISSUE_DATE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'start_date',
            'comment' => '',
            'label' => 'LBL_START_DATE',
          ),
          1 => 
          array (
            'name' => 'end_date',
            'comment' => '',
            'label' => 'LBL_END_DATE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'endorsements',
            'comment' => '',
            'label' => 'LBL_ENDORSEMENTS',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DOC_DESCRIPTION',
          ),
          1 => 'team_name',
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
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'policy_form',
            'comment' => '',
            'label' => 'LBL_POLICY_FORM',
          ),
          1 => 
          array (
            'name' => 'deductible',
            'comment' => '',
            'label' => 'LBL_DEDUCTIBLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'property',
            'comment' => '',
            'label' => 'LBL_PROPERTY',
          ),
          1 => 
          array (
            'name' => 'year_built',
            'comment' => '',
            'label' => 'LBL_YEAR_BUILT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'dwelling_style',
            'comment' => '',
            'label' => 'LBL_DWELLING_STYLE',
          ),
          1 => 
          array (
            'name' => 'dwelling_construction',
            'comment' => '',
            'label' => 'LBL_DWELLING_CONSTRUCTION',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'dwelling_type',
            'comment' => '',
            'label' => 'LBL_DWELLING_TYPE',
          ),
          1 => 
          array (
            'name' => 'loss_of_use',
            'comment' => '',
            'label' => 'LBL_LOSS_OF_USE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'dwelling',
            'comment' => '',
            'label' => 'LBL_DWELLING',
          ),
          1 => 
          array (
            'name' => 'personal_liability',
            'comment' => '',
            'label' => 'LBL_PERSONAL_LIABILITY',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'dwelling_source_value',
            'comment' => '',
            'label' => 'LBL_DWELLING_SOURCE_VALUE',
          ),
          1 => 
          array (
            'name' => 'medical_payments',
            'comment' => '',
            'label' => 'LBL_MEDICAL_PAYMENTS',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'dwelling_80_percent',
            'comment' => '',
            'label' => 'LBL_DWELLING_80_PERCENT',
          ),
          1 => 
          array (
            'name' => 'inflation_guard',
            'comment' => '',
            'label' => 'LBL_INFLATION_GUARD',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'dwelling_replacement',
            'comment' => '',
            'label' => 'LBL_DWELLING_REPLACEMENT',
          ),
          1 => 
          array (
            'name' => 'extended_theft',
            'comment' => '',
            'label' => 'LBL_EXTENDED_THEFT',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'other_structures',
            'comment' => '',
            'label' => 'LBL_OTHER_STRUCTURES',
          ),
          1 => 
          array (
            'name' => 'living_area',
            'comment' => '',
            'label' => 'LBL_LIVING_AREA',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'contents_replacement',
            'comment' => '',
            'label' => 'LBL_CONTENTS_REPLACEMENT',
          ),
          1 => 
          array (
            'name' => 'personal_property',
            'comment' => '',
            'label' => 'LBL_PERSONAL_PROPERTY',
          ),
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'premium_frequency',
            'comment' => '',
            'label' => 'LBL_PREMIUM_FREQUENCY',
          ),
          1 => 
          array (
            'name' => 'premium_due_date',
            'comment' => '',
            'label' => 'LBL_PREMIUM_DUE_DATE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'premium',
            'comment' => '',
            'label' => 'LBL_PREMIUM',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'agent_name',
            'comment' => '',
            'label' => 'LBL_AGENT_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'agent_phone',
            'comment' => '',
            'label' => 'LBL_AGENT_PHONE',
          ),
          1 => 
          array (
            'name' => 'agent_fax',
            'comment' => '',
            'label' => 'LBL_AGENT_FAX',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'agent_email',
            'comment' => '',
            'label' => 'LBL_AGENT_EMAIL',
          ),
        ),
      ),
    ),
  ),
);
?>
