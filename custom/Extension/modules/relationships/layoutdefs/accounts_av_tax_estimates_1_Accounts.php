<?php
 // created: 2012-10-18 19:38:07
$layout_defs["Accounts"]["subpanel_setup"]['accounts_av_tax_estimates_1'] = array (
  'order' => 100,
  'module' => 'av_Tax_Estimates',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_AV_TAX_ESTIMATES_1_FROM_AV_TAX_ESTIMATES_TITLE',
  'get_subpanel_data' => 'accounts_av_tax_estimates_1',
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
