<?php
// created: 2012-11-04 03:04:25
$dictionary["av_account_owners_contacts_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'av_account_owners_contacts_1' => 
    array (
      'lhs_module' => 'av_Account_Owners',
      'lhs_table' => 'av_account_owners',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'av_account_owners_contacts_1_c',
      'join_key_lhs' => 'av_account_owners_contacts_1av_account_owners_ida',
      'join_key_rhs' => 'av_account_owners_contacts_1contacts_idb',
    ),
  ),
  'table' => 'av_account_owners_contacts_1_c',
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
      'name' => 'av_account_owners_contacts_1av_account_owners_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'av_account_owners_contacts_1contacts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'av_account_owners_contacts_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'av_account_owners_contacts_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'av_account_owners_contacts_1av_account_owners_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'av_account_owners_contacts_1_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'av_account_owners_contacts_1contacts_idb',
      ),
    ),
  ),
);