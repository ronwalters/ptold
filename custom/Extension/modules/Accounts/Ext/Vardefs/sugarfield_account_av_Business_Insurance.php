<?php$dictionary["Account"]["fields"]["account_av_business_insurance"] = array (	'name' => 'account_av_business_insurance',	'type' => 'link',	'relationship' => 'account_av_business_insurance',	'module' => 'Accounts',	'source' => 'non-db',	'vname' => 'LBL_AV_BUSINESS_INSURANCE',);$dictionary["Account"]["relationships"]["account_av_business_insurance"] = array (	'lhs_module' => 'Accounts',	'lhs_table' => 'accounts',	'lhs_key' => 'id',	'rhs_module' => 'av_Business_Insurance',	'rhs_table' => 'av_business_insurance',	'rhs_key' => 'account_id',	'relationship_type' => 'one-to-many',);?>