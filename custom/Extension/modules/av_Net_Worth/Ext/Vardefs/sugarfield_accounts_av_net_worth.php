<?php
// created: 2012-05-21 17:10:30
$dictionary["av_Net_Worth"]["fields"]["account_id"] = array (
  'name' => 'account_id',
  'type' => 'id',
  'relationship' => 'accounts_av_net_worth',
  'module'=>'av_Net_Worth',
  'vname' => 'LBL_ACCOUNTS_ID',
  'duplicate_merge' => 'disabled',
  'len' => 36,
  'size' => '20',
);
$dictionary["av_Net_Worth"]["fields"]["account_name"] = array (
  'name' => 'account_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_NAME',
  'id_name' => 'account_id',
  'module' => 'Accounts',
  'ext2' => 'Accounts',
  'studio' => 'visible',
  'rname' => 'name',
);