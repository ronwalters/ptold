<?php
// created: 2012-12-19 11:35:17
$layout_defs["av_Tax_Forms"]["subpanel_setup"]["av_tax_returns_av_tax_forms"] = array (
	'order' => 100,
	'module' => 'av_Tax_Returns',
	'subpanel_name' => 'default',
	'title_key' => 'LBL_AV_TAX_RETURNS',
	'get_subpanel_data' => 'av_tax_returns_av_tax_forms',
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

