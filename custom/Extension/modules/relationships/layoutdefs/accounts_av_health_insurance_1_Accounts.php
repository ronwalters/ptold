<?php
 // created: 2012-10-22 02:52:10
$layout_defs["Accounts"]["subpanel_setup"]['accounts_av_health_insurance_1'] = array (
  'order' => 100,
  'module' => 'av_Health_Insurance',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_AV_HEALTH_INSURANCE_1_FROM_AV_HEALTH_INSURANCE_TITLE',
  'get_subpanel_data' => 'accounts_av_health_insurance_1',
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
