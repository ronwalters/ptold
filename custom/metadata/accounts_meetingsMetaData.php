<?php
// created: 2012-09-03 07:22:23
$dictionary["meetings_accounts"] = array (
  'relationships' => 
  array (
    'meetings_accounts' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'Meetings',
      'rhs_table' => 'meetings',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'meetings_accounts',
      'join_key_lhs' => 'account_id',
      'join_key_rhs' => 'meeting_id',
    ),
  ),
  'table' => 'meetings_accounts',
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
      'name' => 'account_id',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'meeting_id',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'meetings_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'meetings_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'account_id',
        1 => 'meeting_id',
      ),
    ),
  ),
);
?>
