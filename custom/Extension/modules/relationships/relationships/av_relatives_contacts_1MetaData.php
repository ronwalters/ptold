<?php
// created: 2012-10-29 16:15:56
$dictionary["av_relatives_contacts_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'av_relatives_contacts_1' => 
    array (
      'lhs_module' => 'av_Relatives',
      'lhs_table' => 'av_relatives',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'av_relatives_contacts_1_c',
      'join_key_lhs' => 'av_relatives_contacts_1av_relatives_ida',
      'join_key_rhs' => 'av_relatives_contacts_1contacts_idb',
    ),
  ),
  'table' => 'av_relatives_contacts_1_c',
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
      'name' => 'av_relatives_contacts_1av_relatives_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'av_relatives_contacts_1contacts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'av_relatives_contacts_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'av_relatives_contacts_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'av_relatives_contacts_1av_relatives_ida',
        1 => 'av_relatives_contacts_1contacts_idb',
      ),
    ),
  ),
);