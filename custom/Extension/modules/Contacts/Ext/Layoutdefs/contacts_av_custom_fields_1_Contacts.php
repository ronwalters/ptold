<?php
 // created: 2012-11-09 16:38:47
$layout_defs["Contacts"]["subpanel_setup"]['contacts_av_custom_fields_1'] = array (
  'order' => 100,
  'module' => 'av_Custom_Fields',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CONTACTS_AV_CUSTOM_FIELDS_1_FROM_AV_CUSTOM_FIELDS_TITLE',
  'get_subpanel_data' => 'contacts_av_custom_fields_1',
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
