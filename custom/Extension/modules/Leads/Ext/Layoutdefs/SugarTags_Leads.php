<?php
$layout_defs["Leads"]["subpanel_setup"]["tags"] = array (
  'order' => 100,
  'module' => 'Tags',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_TAGS_LEADS_FROM_TAGS_TITLE',
  'get_subpanel_data' => 'tags_leads',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'Tags',
      'mode' => 'MultiSelect',
    ),
  ),
);
?>
