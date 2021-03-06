<?php
// created: 2013-01-22 22:01:50
$dictionary["av_Vehicle_Insurance"]["fields"]["commission_schedule_id"] = array (
	'name' => 'commission_schedule_id',
	'rname' => 'id',
	'vname' => 'LBL_COMMISSION_SCHEDULE_ID',
	'type' => 'id',
	'table' => 'av_commission_schedules',
	'isnull' => 'true',
	'module' => 'av_Commission_Schedules',
	'dbtype' => 'id',
	'required' => false,
	'massupdate' => false,
	'reportable' => false,
	'importable' => false,
	'duplicate_merge' => 'disabled',
);
$dictionary["av_Vehicle_Insurance"]["fields"]["av_commission_schedules_name"] = array (
	'required' => false,
	'source' => 'non-db',
	'name' => 'av_commission_schedules_name',
	'vname' => 'LBL_AV_COMMISSION_SCHEDULES_NAME',
	'type' => 'relate',
	'rname' => 'name',
	'id_name' => 'commission_schedule_id',
	'join_name' => 'av_commission_schedules',
	'link' => 'av_commission_schedules',
	'table' => 'av_commission_schedules',
	'isnull' => 'true',
	'module' => 'av_Commission_Schedules',
);
$dictionary["av_Vehicle_Insurance"]["fields"]["av_commission_schedules"] = array (
	'name' => 'av_commission_schedules',
	'type' => 'link',
	'relationship' => 'av_vehicle_insurance_av_commission_schedules',
	'module' => 'av_Commission_Schedules',
	'bean_name' => 'av_Commission_Schedules',
	'source' => 'non-db',
	'vname' => 'LBL_AV_COMMISSION_SCHEDULES',
);
$dictionary["av_Vehicle_Insurance"]["relationships"]["av_vehicle_insurance_av_commission_schedules"] = array (
	'lhs_module' => 'av_Vehicle_Insurance',
	'lhs_table' => 'av_vehicle_insurance',
	'lhs_key' => 'commission_schedule_id',
	'rhs_module' => 'av_Commission_Schedules',
	'rhs_table' => 'av_commission_schedules',
	'rhs_key' => 'id',
	'relationship_type' => 'one-to-many',
);
?>
