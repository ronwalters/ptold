<?php
$dictionary["Account"]["fields"]["current_net_worth"] = array (
  'required' => false,
  'name' => 'current_net_worth',
  'vname' => 'LBL_CURRENT_NET_WORTH',
  'type' => 'currency',
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
  'calculated' => 'true',
  'formula' => 'rollupSum($accounts_av_accounts, "value")',
  'enforced' => true,
  'dependency' => '',
  'enable_range_search' => false,
);