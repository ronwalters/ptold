<?php
// created: 2012-10-22 02:54:43
$dictionary["av_Disability_Insurance"]["fields"]["accounts_av_disability_insurance_1"] = array (
  'name' => 'accounts_av_disability_insurance_1',
  'type' => 'link',
  'relationship' => 'accounts_av_disability_insurance_1',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_AV_DISABILITY_INSURANCE_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_av_disability_insurance_1accounts_ida',
);
$dictionary["av_Disability_Insurance"]["fields"]["accounts_av_disability_insurance_1_name"] = array (
  'name' => 'accounts_av_disability_insurance_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_AV_DISABILITY_INSURANCE_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_av_disability_insurance_1accounts_ida',
  'link' => 'accounts_av_disability_insurance_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["av_Disability_Insurance"]["fields"]["accounts_av_disability_insurance_1accounts_ida"] = array (
  'name' => 'accounts_av_disability_insurance_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_av_disability_insurance_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_AV_DISABILITY_INSURANCE_1_FROM_AV_DISABILITY_INSURANCE_TITLE',
);
