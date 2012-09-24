<?php
require_once('include/MVC/Controller/SugarController.php');
require_once('modules/rt_Workflow/TreeData.php');

class rt_WorkflowController extends SugarController {
		
	function getTaskTemplateIds($tasks_templates, &$ids){
		foreach($tasks_templates as $tasks_template){
			$ids[] = $tasks_template['id'];
			
			//Calling recursively for childrens
			if(isset($tasks_template['children']) && !empty($tasks_template['children'])){
				$this->getTaskTemplateIds($tasks_template['children'], $ids);
			}
		}
	}
	
	function action_assign(){
		global $db;
			
		if(isset($_REQUEST['parent_id']) && !empty($_REQUEST['parent_id'])){
			$ids = array();
			
			$tasks_templates = TreeData::getData($this->bean->id);
			if(isset($tasks_templates['children']) && !empty($tasks_templates['children'])){
				$this->getTaskTemplateIds($tasks_templates['children'], $ids);
			}
			
			$sql = "SELECT ".
						"id, name, date_entered, date_modified, ".
						"modified_user_id, created_by, description, ".
						"team_id, team_set_id, assigned_user_id, task_category as 'category', ".
						"private, notify_child_completion, assigned_to_client, parent_tasks_id, days_out ".
					"FROM ".
						"rt_task_template ".
					"WHERE ".
						"id IN ('" . implode("','", $ids) . "')";
					
			$result=$db->query($sql);
			while($row = $db->fetchByAssoc($result)){
				if(!isset($array_new_ids[$row['id']])){
					$array_new_ids[$row['id']] = create_guid();
				}
				
				$taskTemplateRecords[] = $row;
			}
			
			foreach($taskTemplateRecords as $record){
				$record['id'] = $array_new_ids[$record['id']];
				
				if(!empty($record['parent_tasks_id'])){
					$record['parent_tasks_id'] = $array_new_ids[$record['parent_tasks_id']];
				}
				
				if(empty($record['parent_tasks_id'])){
					$status='Not Started';
				}else{
					$status='Pending';
				}
								
				//Making SQL statement
				$record['parent_type'] = $_REQUEST['parent_type'];
				$record['parent_id'] = $_REQUEST['parent_id'];
				if(isset($record['days_out'])){
					unset($record['days_out']);
				}
				
				$keys = implode(',' , array_keys($record));
				$values = implode("','" , array_values($record));
				if(!empty($values)){
					$values = "'" . $values . "'";
				}
				
				$query = "INSERT INTO tasks (" . $keys . ") VALUES (" . $values . ")";
				$db->query($query, true);
			}
			
			SugarApplication::redirect('index.php?module=rt_Workflow&action=DetailView&record='.$this->bean->id);
		}
		
		$this->view = "assign";
	}
}

?>