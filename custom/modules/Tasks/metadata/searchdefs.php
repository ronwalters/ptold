<?php
$searchdefs ['Tasks'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'favorites_only' => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'open_only' => 
      array (
        'name' => 'open_only',
        'label' => 'LBL_OPEN_ITEMS',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'favorites_only' => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'parent_name' => 
      array (
        'type' => 'parent',
        'label' => 'LBL_LIST_RELATED_TO',
        'width' => '10%',
        'default' => true,
        'name' => 'parent_name',
      ),
      'av_activity_types_tasks_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_AV_ACTIVITY_TYPES_TASKS_1_FROM_AV_ACTIVITY_TYPES_TITLE',
        'id' => 'AV_ACTIVITY_TYPES_TASKS_1AV_ACTIVITY_TYPES_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'av_activity_types_tasks_1_name',
      ),
      'parent_tasks_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_PARENT_TASKS',
        'id' => 'PARENT_TASKS_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'parent_tasks_name',
      ),
      'status' => 
      array (
        'name' => 'status',
        'default' => true,
        'width' => '10%',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'type' => 'enum',
        'label' => 'LBL_ASSIGNED_TO',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
      'modified_user_id' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_MODIFIED',
        'width' => '10%',
        'default' => true,
        'name' => 'modified_user_id',
      ),
      'date_due' => 
      array (
        'type' => 'datetimecombo',
        'studio' => 
        array (
          'required' => true,
          'no_duplicate' => true,
        ),
        'label' => 'LBL_DUE_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'date_due',
      ),
      'date_modified' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_MODIFIED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_modified',
      ),
      'date_complete' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DTE_CMP',
        'width' => '10%',
        'default' => true,
        'name' => 'date_complete',
      ),
      'open_only' => 
      array (
        'label' => 'LBL_OPEN_ITEMS',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
        'name' => 'open_only',
      ),
      'closed_status' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_CLOSED_STATUS',
        'width' => '10%',
        'name' => 'closed_status',
      ),
      'team_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_TEAMS',
        'id' => 'TEAM_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'team_name',
      ),
      'on_meeting_agenda' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_ON_MEETING_AGENDA',
        'width' => '10%',
        'name' => 'on_meeting_agenda',
      ),
      'on_client_task_list' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_ON_CLIENT_TASK_LIST',
        'width' => '10%',
        'name' => 'on_client_task_list',
      ),
      'on_report_card' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_ON_REPORT_CARD',
        'width' => '10%',
        'name' => 'on_report_card',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
