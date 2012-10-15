<?php
class TreeData{
	static $workflowName;
	public static function getData($wfID, $wfName = '') {
		self::$workflowName=$wfName;
		$added_nodes = array($wfID);
		$tree = array();
		
		$tree['id'] = $wfID;
		$tree['html'] = '<div style="background-color:#fff">'.$wfName.'</div>';
		$tree['type'] = 'HTML';
		$tree['label'] = $wfName;
		$tree['href'] = "index.php?module=av_Workflow&action=DetailView&record={$wfID}";
		$tree['expanded'] = true;
		$tree['children'] = TreeData::getChilds($wfID, $added_nodes, true);
		return $tree;
	}
	
	private static function getChilds($id, &$added_nodes = array(), $fromWF = false) {
		global $db, $users, $timedate, $app_list_strings;
		
		$field = 'parent_tasks_id';
		$customWhere='';
		if($fromWF){
			$field = 'av_Workflow_id';
			$customWhere=' AND parent_tasks_id="" ';
		}
		
		$sql = "SELECT id, name, subject, task_category, assign_to, days_out FROM av_task_template WHERE {$field} = '{$id}' {$customWhere} AND deleted=0";
		$result = $db->query($sql);
		$childs_array = array();
		while ($row = $db->fetchByAssoc($result)){
			if(!in_array($row['id'], $added_nodes)){
				$added_nodes[] = $row['id'];
			
				$node = array();
				$node['id'] = $row['id'];
				$node['html'] ="<table><tr><td id='name' title='Name' >{$row['name']}</td>
				                <td width='250px' title='Subject'>{$row['subject']}</td>
								<td width='200px' title='Category'>{$row['task_category']}</td>
								<td width='125px' title='Assign To'>{$app_list_strings['task_assign_to_list'][$row['assign_to']]}</td>
								<td width='60px' title='Days Out'>{$row['days_out']}
								<input type='hidden' value={$row['id']}</td>
								</tr></table>";
				$node['type'] = 'HTML';
				$node['label'] = $row['name'];
				$node['highlightState']='1';
				$node['href'] = "index.php?module=av_Task_Template&action=DetailView&record={$row['id']}";
				$node['expanded'] = true;
				$node['workflowName'] = self::$workflowName;
				$node['children'] = TreeData::getChilds($row['id'], $added_nodes);
			
				$childs_array[] = $node;
				
			}
		}
		foreach ($childs_array as $child) {
			if(empty($child['children']) && !$fromWF) {
				$node = array();
				$node['id'] = '';
				$node['label'] = 'parent';
				$node['html'] ='<div id="parent" name="parent_blank" style="background-color:#fff"> &nbsp;</div>';
				$node['type'] = 'HTML';
				$node['highlightState']='1';
				$node['href'] = "";
				$node['expanded'] = true;
				
				$childs_array[] = $node;
				break;
			}
		}
		return $childs_array;
	}
}
?>