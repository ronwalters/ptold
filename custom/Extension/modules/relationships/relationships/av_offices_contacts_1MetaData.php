<?php
// created: 2012-08-25 10:40:34
$dictionary["av_offices_contacts_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'av_offices_contacts_1' => 
    array (
      'lhs_module' => 'av_Offices',
      'lhs_table' => 'av_offices',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'av_offices_contacts_1_c',
      'join_key_lhs' => 'av_offices_contacts_1av_offices_ida',
      'join_key_rhs' => 'av_offices_contacts_1contacts_idb',
    ),
  ),
  'table' => 'av_offices_contacts_1_c',
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
      'name' => 'av_offices_contacts_1av_offices_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'av_offices_contacts_1contacts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'av_offices_contacts_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'av_offices_contacts_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'av_offices_contacts_1av_offices_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'av_offices_contacts_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'av_offices_contacts_1contacts_idb',
      ),
    ),
  ),
);