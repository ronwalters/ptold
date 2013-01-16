<?php
$module_name = 'av_Task_Template';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'syncDetailEditViews' => false,
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'include/javascript/tiny_mce/tiny_mce.js',
        ),
		1 => 
        array (
          'file' => 'modules/av_Task_Template/custom_javascript.js',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'subject',
            'label' => 'LBL_SUBJECT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'display' => true,
            ),
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'task_category',
            'studio' => 'visible',
            'label' => 'LBL_TASK_CATEGORY',
          ),
          1 => 
          array (
            'name' => 'relate_to',
            'studio' => 'visible',
            'label' => 'LBL_RELATE_TO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'assign_to',
            'studio' => 'visible',
            'label' => 'LBL_ASSIGN_TO',
            'displayParams' => 
            array (
              'javascript' => 'onchange="customHide(this.value);"',
            ),
          ),
          1 => 'assigned_user_name',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'notify_child_completion',
            'label' => 'LBL_NOTIFY_CHILD_COMPLETION',
          ),
          1 => 
          array (
            'name' => 'priority',
            'studio' => 'visible',
            'label' => 'LBL_PRIORITY',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'private',
            'label' => 'LBL_PRIVATE',
          ),
          1 => 
          array (
            'name' => 'parent_tasks_name',
            'studio' => 'visible',
            'label' => 'LBL_PARENT_TASKS',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'av_Workflow_name',
            'studio' => 'visible',
            'label' => 'LBL_WORKFLOW',
          ),
          1 => 
          array (
            'name' => 'days_out',
            'label' => 'LBL_DAYS_OUT',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'assigned_to_client',
            'label' => 'LBL_ASSIGNED_TO_CLIENT',
          ),
          1 => 'on_task_list',
        ),
		8 => 
        array (
		 0 => '',
         1 => 'client_task',
        ),
		9 => 
        array (
          0 =>  'description',
		),
      ),
    ),
  ),
);
?>
