<?php
 // created: 2012-10-29 16:01:22
$layout_defs["Contacts"]["subpanel_setup"]['av_professionals_contacts_1'] = array (
  'order' => 100,
  'module' => 'av_Professionals',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AV_PROFESSIONALS_CONTACTS_1_FROM_AV_PROFESSIONALS_TITLE',
  'get_subpanel_data' => 'av_professionals_contacts_1',
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
