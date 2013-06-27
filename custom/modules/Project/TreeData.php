<?php
class TreeData{
	public static function getData($projectID, $projectName = '') {
		$added_nodes = array($projectID);
		$tree = array();
		
		$tree['id'] = $projectID;
		$tree['type'] = 'HTML';
		$tree['html'] = "<table><tr style='color:#000;'><th id='name' title='Name'><span style='float:left;'>{$projectName} |</span>";
		$tree['html'] .= "".
					 "Name</th>".
					 "<th width='200px' title='Activity Type'>Activity Type</th>
									<th width='180px' title='Assignee'>Assignee</th>
									<th width='135px' title='Due Date'>Due Date</th>
									</tr></table>";
		$tree['label'] = $projectName;
		$tree['href'] = "index.php?module=Project&action=DetailView&record={$projectID}";
		$tree['expanded'] = true;
		$tree['children'] = TreeData::getChilds($projectID, $added_nodes, $projectID, $projectName, true);
		return $tree;
	}
	
	private static function getChilds($id, &$added_nodes = array(), $projectID, $projectName, $fromProject = false) {
		global $db, $app_list_strings, $timedate;
		
		$field = 'tasks.parent_tasks_id';
		$addWhere = "";
		if($fromProject){
			$field = 'tasks.project_id';
			$addWhere = " AND (tasks.parent_tasks_id IS NULL OR TRIM(tasks.parent_tasks_id)='')";
		}
		
		$sql = "SELECT tasks.id, tasks.name, tasks.status, tasks.activity_type_id, assigned_user_id, date_due, IF(date_due IS NOT NULL AND TRIM(date_due) != '' AND date_due != '0000-00-00 00:00:00' AND date_due < now() AND status != 'Completed', 1, 0) as over_due
				FROM tasks
				WHERE {$field} = '{$id}' AND tasks.deleted=0" . $addWhere. " ORDER BY tasks.date_due ASC";
		$result = $db->query($sql);
		$childs_array = array();
		$assign_to_default_value='';
		while ($row = $db->fetchByAssoc($result)){
			if(!in_array($row['id'], $added_nodes)){
				$added_nodes[] = $row['id'];
				$activity_type_bean = BeanFactory::getBean('av_Activity_Types', $row['activity_type_id']);
				$row['activity_type_id'] = $activity_type_bean->name;;	
				$node = array();
				$node['id'] = $row['id'];
				$node['type'] = 'html';
				$node['html'] = "<table>";
				$node['contentStyle'] = "ygtvhtml";
				
				/*if(count($added_nodes) == 2){
					$node['html'] .= "<tr style='color:#000'>
									<th id='name' title='Name'>Name</th>
									<th width='200px' title='Category'>Category</th>
									<th width='180px' title='Assignee'>Assignee</th>
									<th width='135px' title='Due Date'>Due Date</th>
									</tr>";
				}*/
				if($row['status'] == 'Not Started' || $row['status'] == 'In Progress'){
					$node['contentStyle'] = " active_task";
				}else if($row['status'] == 'Completed'){
					$node['contentStyle'] = " completed_task";
				}
				if($row['over_due'] == '1'){
					$node['contentStyle'] = " overdue_task";
				}
				$node['html'] .= "<tr>
								<td id='name' title='Name' style='cursor:pointer;' onclick=\"window.location='index.php?module=Tasks&action=DetailView&record={$row['id']}';\" ><div class={$node['contentStyle']}>{$row['name']}</div></td>
								<td width='200px' title='Activity Type'>{$row['activity_type_id']}</td>
								<td width='180px' title='Assignee'>".get_assigned_user_name($row['assigned_user_id'])."</td>
								<td width='135px' title='Due Date'><div class={$node['contentStyle']}>".$timedate->to_display_date_time($row['date_due'])."</div></td>
							</tr>
						 </table>";
				$node['label'] = $row['name'];
				$node['href'] = "index.php?module=Tasks&action=DetailView&record={$row['id']}";
				$node['expanded'] = true;
				$node['children'] = TreeData::getChilds($row['id'], $added_nodes, $projectID, $projectName, false);
			
				$childs_array[] = $node;
				
			}
		}
		
		return $childs_array;
	}
}
?>