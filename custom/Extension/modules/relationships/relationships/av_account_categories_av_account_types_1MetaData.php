<?php
// created: 2012-11-15 06:01:31
$dictionary["av_account_categories_av_account_types_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'av_account_categories_av_account_types_1' => 
    array (
      'lhs_module' => 'av_Account_Categories',
      'lhs_table' => 'av_account_categories',
      'lhs_key' => 'id',
      'rhs_module' => 'av_Account_Types',
      'rhs_table' => 'av_account_types',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'av_account_categories_av_account_types_1_c',
      'join_key_lhs' => 'av_account296eegories_ida',
      'join_key_rhs' => 'av_account_categories_av_account_types_1av_account_types_idb',
    ),
  ),
  'table' => 'av_account_categories_av_account_types_1_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'av_account296eegories_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'av_account_categories_av_account_types_1av_account_types_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'av_account_categories_av_account_types_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'av_account_categories_av_account_types_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'av_account296eegories_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'av_account_categories_av_account_types_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'av_account_categories_av_account_types_1av_account_types_idb',
      ),
    ),
  ),
);