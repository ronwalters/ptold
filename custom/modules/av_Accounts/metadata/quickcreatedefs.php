<?php
// created: 2013-04-10 13:54:26
$viewdefs['av_Accounts']['QuickCreate'] = array (
  'templateMeta' => 
  array (
    'maxColumns' => '2',
    'form' => 
    array (
      'hidden' => 
      array (
        0 => '<input type="hidden" id="name" name="name" value="Account">',
      ),
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
    'tabDefs' => 
    array (
      'DEFAULT' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
  ),
  'panels' => 
  array (
    'default' => 
    array (
      0 => 
      array (
        0 => '',
        1 => 
        array (
          'name' => 'value',
          'label' => 'LBL_VALUE',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'managed_c',
          'studio' => 'visible',
          'label' => 'LBL_MANAGED',
        ),
        1 => 
        array (
          'name' => 'opened_c',
          'label' => 'LBL_OPENED',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'ownership_c',
          'studio' => 'visible',
          'label' => 'LBL_OWNERSHIP',
        ),
        1 => 
        array (
          'name' => 'as_of_c',
          'label' => 'LBL_AS_OF',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'asset_category_c',
          'studio' => 'visible',
          'label' => 'LBL_ASSET_CATEGORY',
        ),
        1 => 
        array (
          'name' => 'account_number_c',
          'label' => 'LBL_ACCOUNT_NUMBER',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'asset_type_c',
          'studio' => 'visible',
          'label' => 'LBL_ASSET_TYPE',
        ),
        1 => 
        array (
          'name' => 'cost_basis_c',
          'label' => 'LBL_COST_BASIS',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'account_type_c',
          'studio' => 'visible',
          'label' => 'LBL_ACCOUNT_TYPE',
        ),
        1 => '',
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'institution_c',
          'studio' => 'visible',
          'label' => 'LBL_INSTITUTION',
        ),
        1 => '',
      ),
      7 => 
      array (
        0 => 
        array (
          'name' => 'asset_class_c',
          'studio' => 'visible',
          'label' => 'LBL_ASSET_CLASS',
        ),
        1 => '',
      ),
      8 => 
      array (
        0 => 'description',
        1 => '',
      ),
      9 => 
      array (
        0 => 
        array (
          'name' => 'accounts_av_accounts_name',
          'label' => 'LBL_ACCOUNTS_AV_ACCOUNTS_FROM_ACCOUNTS_TITLE',
        ),
        1 => 
        array (
          'name' => 'av_net_worth_av_accounts_name',
          'label' => 'LBL_AV_NET_WORTH_AV_ACCOUNTS_FROM_AV_NET_WORTH_TITLE',
        ),
      ),
    ),
  ),
);