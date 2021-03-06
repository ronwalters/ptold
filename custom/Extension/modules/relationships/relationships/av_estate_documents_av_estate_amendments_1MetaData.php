<?php
// created: 2012-10-18 20:36:50
$dictionary["av_estate_documents_av_estate_amendments_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'av_estate_documents_av_estate_amendments_1' => 
    array (
      'lhs_module' => 'av_Estate_Documents',
      'lhs_table' => 'av_estate_documents',
      'lhs_key' => 'id',
      'rhs_module' => 'av_Estate_Amendments',
      'rhs_table' => 'av_estate_amendments',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'av_estate_documents_av_estate_amendments_1_c',
      'join_key_lhs' => 'av_estate_96d1cuments_ida',
      'join_key_rhs' => 'av_estate_668andments_idb',
    ),
  ),
  'table' => 'av_estate_documents_av_estate_amendments_1_c',
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
      'name' => 'av_estate_96d1cuments_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'av_estate_668andments_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'av_estate_documents_av_estate_amendments_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'av_estate_documents_av_estate_amendments_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'av_estate_96d1cuments_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'av_estate_documents_av_estate_amendments_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'av_estate_668andments_idb',
      ),
    ),
  ),
);