<?php
$module_name = 'rt_Group_Membership';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
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
	  'javascript' => '
	  	<script type="text/javascript">
			document.getElementById(\'opted_out\').setAttribute(\'onclick\',\'return false\');
		</script>
	  ',
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 'description',
          1 => 
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
            'name' => 'parent_name',
            'studio' => 'visible',
            'label' => 'LBL_FLEX_RELATE',
          ),
          1 => 'include',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'rt_group_membership_av_groups_name',
            'displayParams' => 
            array (
              'field_to_name_array' => 
              array (
                'id' => 'rt_group_membership_av_groupsav_groups_ida',
                'name' => 'rt_group_membership_av_groups_name',
                'delivery_method' => 'delivery_method',
              ),
              'additionalFields' => 
              array (
                'delivery_method' => 'delivery_method',
              ),
            ),
          ),
          1 => 'delivery_method',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'envelope',
            'label' => 'LBL_ENVELOPE',
          ),
          1 =>
		  array(
		  	'name' => 'opted_out',
			'displayParams' => array('javascript' => 'onchange="return false;"' ),
		  ),
        ),
      ),
    ),
  ),
);
?>
