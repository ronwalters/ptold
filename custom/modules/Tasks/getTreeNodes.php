<?php

global $db, $current_user, $timedate;
$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$final = array();

$GLOBALS['users'] = getUserList();
$final = getStart($id);

function getUserList()
{
	global $db;
	$users=array();
	$users_res = $db->query("SELECT id, first_name, last_name FROM users WHERE deleted=0");
	while($user = $db->fetchByAssoc($users_res))
	{
		$user['full_name'] = $user['first_name'].' '.$user['last_name'];
		$users[$user['id']] = $user;
	}
	return $users;
}

function getStart($id, $visited_parent=array()){
	global $db, $final, $users, $timedate;
	
	$visited_parent[] = $id;
	
	$query = "SELECT id, name, parent_tasks_id, assigned_user_id, date_due FROM tasks WHERE id='{$id}' AND deleted=0";
	$res = $db->query($query);
	$row = $db->fetchByAssoc($res);
	if(!empty($row['parent_tasks_id']) && !in_array($row['parent_tasks_id'], $visited_parent)){
		return getStart($row['parent_tasks_id'], $visited_parent);
	}else{
		$tree = array();
		
		$tree['id'] = $row['id'];
		$tree['type'] = 'text';
		$tree['label'] = $row['name'];
		$tree['href'] = "index.php?module=Tasks&action=DetailView&record={$row['id']}";
		$tree['title'] = "Assignee: ".get_assigned_user_name($row['assigned_user_id'])." | Due: ".$timedate->to_display_date_time($row['date_due']);
		$tree['expanded'] = true;
		$tree['children'] = build_child_tree($row['id'], array($row['id']));
		
		return $tree;
	}
}

function build_child_tree($id, $added_nodes = array()) {
    global $db, $users, $timedate;
    
	$sql = "SELECT id, name, parent_tasks_id, assigned_user_id, date_due FROM tasks WHERE parent_tasks_id = '{$id}' AND deleted=0";
    $result = $db->query($sql);

	$childs_array = array();
	while ($row = $db->fetchByAssoc($result)){
		if(!in_array($row['id'], $added_nodes)){
			$added_nodes[] = $row['id'];
		
			$node = array();
			
			$node['id'] = $row['id'];
			$node['type'] = 'text';
			$node['label'] = $row['name'];
			$node['href'] = "index.php?module=Tasks&action=DetailView&record={$row['id']}";
			$node['title'] = "Assignee: ".get_assigned_user_name($row['assigned_user_id'])." | Due: ".$timedate->to_display_date_time($row['date_due']);
			$node['expanded'] = true;
			$node['children'] = build_child_tree($row);
			
			$childs_array[] = $node;
		}
	}
	
    return $childs_array;
}

if($_REQUEST['included']===true)
{
	echo "
	<script type='text/javascript'>
		tree_data1 = ".json_encode($final).";
	</script>";
}
else
{
	ob_clean();
	echo json_encode($final);
	exit();
}

?>