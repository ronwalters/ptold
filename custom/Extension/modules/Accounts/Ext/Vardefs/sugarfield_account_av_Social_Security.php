<?php$dictionary["Account"]["fields"]["account_av_social_security"] = array (	'name' => 'account_av_social_security',	'type' => 'link',	'relationship' => 'account_av_social_security',	'module' => 'Accounts',	'bean_name' => 'Accounts',	'source' => 'non-db',	'vname' => 'LBL_AV_SOCIAL_SECURITY',);$dictionary["Account"]["relationships"]["account_av_social_security"] = array (	'lhs_module' => 'Accounts',	'lhs_table' => 'accounts',	'lhs_key' => 'id',	'rhs_module' => 'av_Social_Security',	'rhs_table' => 'av_social_security',	'rhs_key' => 'account_id',	'relationship_type' => 'one-to-many',);?>