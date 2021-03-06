<?php
$dictionary["tags_accounts"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'tags_accounts' => 
    array (
      'lhs_module' => 'Tags',
      'lhs_table' => 'tags',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'tags_accounts',
      'join_key_lhs' => 'tags_id',
      'join_key_rhs' => 'accounts_id',
    ),
  ),
  'table' => 'tags_accounts',
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
      'name' => 'tags_id',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'accounts_id',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'tags_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'tags_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'tags_id',
        1 => 'accounts_id',
      ),
    ),
  ),
);
?>
