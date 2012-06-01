<?php
$dictionary["Account"]["fields"]["managed_assets"] = array (
  'required' => false,
  'name' => 'managed_assets',
  'vname' => 'LBL_MANAGED_ASSETS',
  'type' => 'function',
  'massupdate' => 0,
  'comments' => '',
  'help' => '',
  'importable' => 'false',
  'duplicate_merge' => 'disabled',
  'duplicate_merge_dom_value' => '0',
  'audited' => false,
  'reportable' => true,
  'len' => 26,
  'size' => '20',
  'source' => 'function',
  'function_name' => 'getManagedAssets',
  'function_params' => array('id'),
  'function_params_source' => 'this',
  'function_require' => 'custom/modules/Accounts/MyFunction.php',
  'comment' => 'Gets the managed assets.',
  'enforced' => true,
  'dependency' => '',
  'enable_range_search' => false,
  'studio' => 'visible',
);