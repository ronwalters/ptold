<?php
// created: 2012-12-19 11:35:15
$layout_defs["av_Tax_Forms"]["subpanel_setup"]["av_tax_estimates_av_tax_forms"] = array (
	'order' => 100,
	'module' => 'av_Tax_Estimates',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_TAX_ESTIMATES',
	'get_subpanel_data' => 'av_tax_estimates_av_tax_forms',
	'top_buttons' => 
	array (
		0 => 
		array (
			'widget_class' => 'SubPanelTopButtonQuickCreate',
		),
		1 => 
		array (
			'widget_class' => 'SubPanelTopSelectButton',
			'mode' => 'MultiSelect',
		),
	),
);

