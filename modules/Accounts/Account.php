<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

/*********************************************************************************

 * Description:  Defines the Account SugarBean Account entity with the necessary
 * methods and variables.
 ********************************************************************************/

require_once("include/SugarObjects/templates/company/Company.php");

// Account is used to store account information.
class Account extends Company {
	var $field_name_map = array();
	// Stored fields
	var $date_entered;
	var $date_modified;
	var $modified_user_id;
	var $assigned_user_id;
	var $annual_revenue;
	var $billing_address_street;
	var $billing_address_city;
	var $billing_address_state;
	var $billing_address_country;
	var $billing_address_postalcode;

    var $billing_address_street_2;
    var $billing_address_street_3;
    var $billing_address_street_4;

	var $description;
	var $email1;
	var $email2;
	var $email_opt_out;
	var $invalid_email;
	var $employees;
	var $id;
	var $industry;
	var $name;
	var $ownership;
	var $parent_id;
	var $phone_alternate;
	var $phone_fax;
	var $phone_office;
	var $rating;
	var $shipping_address_street;
	var $shipping_address_city;
	var $shipping_address_state;
	var $shipping_address_country;
	var $shipping_address_postalcode;
    
    var $shipping_address_street_2;
    var $shipping_address_street_3;
    var $shipping_address_street_4;
    
    var $campaign_id;
    
	var $sic_code;
	var $ticker_symbol;
	var $account_type;
	var $website;
	var $custom_fields;

	var $created_by;
	var $created_by_name;
	var $modified_by_name;

	// These are for related fields
	var $opportunity_id;
	var $case_id;
	var $contact_id;
	var $task_id;
	var $note_id;
	var $meeting_id;
	var $call_id;
	var $email_id;
	var $member_id;
	var $parent_name;
	var $assigned_user_name;
	var $account_id = '';
	var $account_name = '';
	var $bug_id ='';
	var $module_dir = 'Accounts';
	var $emailAddress;

	var $team_name;
	var $team_id;
	var $quote_id;
	var $rel_quote_account_table = "quotes_accounts";
	var $quote_table = "quotes";

	var $table_name = "accounts";
	var $object_name = "Account";
	var $importable = true;
	var $new_schema = true;
	// This is used to retrieve related fields from form posts.
	var $additional_column_fields = Array('assigned_user_name', 'assigned_user_id', 'opportunity_id', 'bug_id', 'case_id', 'contact_id', 'task_id', 'note_id', 'meeting_id', 'call_id', 'email_id', 'parent_name', 'member_id'
	, "quote_id"
	);
	var $relationship_fields = Array('opportunity_id'=>'opportunities', 'bug_id' => 'bugs', 'case_id'=>'cases',
									'contact_id'=>'contacts', 'task_id'=>'tasks', 'note_id'=>'notes',
									'meeting_id'=>'meetings', 'call_id'=>'calls', 'email_id'=>'emails','member_id'=>'members',
									'quote_id'=>'quotes',
									'project_id'=>'project',
									);

    //Meta-Data Framework fields
    var $push_billing;
    var $push_shipping;

	function Account() {
        parent::Company();

        $this->setupCustomFields('Accounts');

		foreach ($this->field_defs as $field) 
		{
			if(isset($field['name']))
			{
				$this->field_name_map[$field['name']] = $field;
			}
		}

		global $current_user;
		if(!empty($current_user)) {
			$this->team_id = $current_user->default_team;	//default_team is a team id
		} else {
			$this->team_id = 1; // make the item globally accessible
		}

        //Email logic
		if (!empty($_REQUEST['parent_id']) && !empty($_REQUEST['parent_type']) && $_REQUEST['parent_type'] == 'Emails'
        	&& !empty($_REQUEST['return_module']) && $_REQUEST['return_module'] == 'Emails') {
			$_REQUEST['parent_name'] = '';
			$_REQUEST['parent_id'] = '';
		}
	}

	function get_summary_text()
	{
		return $this->name;
	}

	function get_contacts() {
		return $this->get_linked_beans('contacts','Contact');
	}



	function clear_account_case_relationship($account_id='', $case_id='')
	{
		if (empty($case_id)) $where = '';
		else $where = " and id = '$case_id'";
		$query = "UPDATE cases SET account_name = '', account_id = '' WHERE account_id = '$account_id' AND deleted = 0 " . $where;
		$this->db->query($query,true,"Error clearing account to case relationship: ");
	}

	/**
	* This method is used to provide backward compatibility with old data that was prefixed with http://
	* We now automatically prefix http://
	* @deprecated.
 	*/
	function remove_redundant_http()
	{	/*
		if(preg_match("@http://@", $this->website))
		{
			$this->website = substr($this->website, 7);
		}
		*/
	}

	function fill_in_additional_list_fields()
	{
		parent::fill_in_additional_list_fields();
	// Fill in the assigned_user_name
	//	$this->assigned_user_name = get_assigned_user_name($this->assigned_user_id);

        if (!empty($this->team_id) && empty($this->team_name)) {
		    $this->assigned_name = get_assigned_team_name($this->team_id);
            $this->team_name=$this->assigned_name;
        }
	}

	function fill_in_additional_detail_fields()
	{
        parent::fill_in_additional_detail_fields();

        //rrs bug: 28184 - instead of removing this code altogether just adding this check to ensure that if the parent_name
        //is empty then go ahead and fill it.
        if(empty($this->parent_name) && !empty($this->id)){
			$query = "SELECT a1.name from accounts a1, accounts a2 where a1.id = a2.parent_id and a2.id = '$this->id' and a1.deleted=0";
			$result = $this->db->query($query,true," Error filling in additional detail fields: ");

			// Get the id and the name.
			$row = $this->db->fetchByAssoc($result);

			if($row != null)
			{
				$this->parent_name = $row['name'];
			}
			else
			{
				$this->parent_name = '';
			}
        }		
        
        // Set campaign name if there is a campaign id
		if( !empty($this->campaign_id)){
			
			$camp = new Campaign();
		    $where = "campaigns.id='{$this->campaign_id}'";
		    $campaign_list = $camp->get_full_list("campaigns.name", $where, true);
		    $this->campaign_name = $campaign_list[0]->name;
		}
	}

	function get_list_view_data(){

		$temp_array = parent::get_list_view_data();

		$temp_array["ENCODED_NAME"] = $this->name;

		if(!empty($this->billing_address_state))
		{
			$temp_array["CITY"] = $this->billing_address_city . ', '. $this->billing_address_state;
		}
		else
		{
			$temp_array["CITY"] = $this->billing_address_city;
		}
		$temp_array["BILLING_ADDRESS_STREET"]  = $this->billing_address_street;
		$temp_array["SHIPPING_ADDRESS_STREET"] = $this->shipping_address_street;
    	
		
//Marking dates ----------------------------------------- PROTRACK-152 ---- Abdul
		if(isset($temp_array['EXPIRATION_DATE']) && !empty($temp_array['EXPIRATION_DATE'])){
			global $timedate;
			
			$today = $timedate->nowDb();
			$nextday = $timedate->asDbDate($timedate->getNow()->modify("+1 day"));
	
			$date_db = $timedate->to_db($temp_array['EXPIRATION_DATE']);
			
			if( $date_db < $today){
				$temp_array['EXPIRATION_DATE']= "<font class='overdueTask'>".$temp_array['EXPIRATION_DATE']."</font>";
			}else if($date_db < $nextday){
				$temp_array['EXPIRATION_DATE'] = "<font class='todaysTask'>".$temp_array['EXPIRATION_DATE']."</font>";
			}else{
				$temp_array['EXPIRATION_DATE'] = "<font class='futureTask'>".$temp_array['EXPIRATION_DATE']."</font>";
			}
		}
//----------------------------------------------------------------------------------------------------------------
		
		return $temp_array;
	}
	/**
		builds a generic search based on the query string using or
		do not include any $this-> because this is called on without having the class instantiated
	*/
	function build_generic_where_clause ($the_query_string) {
	$where_clauses = Array();
	$the_query_string = $this->db->quote($the_query_string);
	array_push($where_clauses, "accounts.name like '$the_query_string%'");
	if (is_numeric($the_query_string)) {
		array_push($where_clauses, "accounts.phone_alternate like '%$the_query_string%'");
		array_push($where_clauses, "accounts.phone_fax like '%$the_query_string%'");
		array_push($where_clauses, "accounts.phone_office like '%$the_query_string%'");
	}

	$the_where = "";
	foreach($where_clauses as $clause)
	{
		if(!empty($the_where)) $the_where .= " or ";
		$the_where .= $clause;
	}

	return $the_where;
}


        function create_export_query(&$order_by, &$where, $relate_link_join='')
        {
            $custom_join = $this->getCustomJoin(true, true, $where);
            $custom_join['join'] .= $relate_link_join;
                         $query = "SELECT
                                accounts.*,email_addresses.email_address email_address,
                                accounts.name as account_name,
                                users.user_name as assigned_user_name ";
						 $query .= ", teams.name AS team_name ";
            $query .= $custom_join['select'];
						 $query .= " FROM accounts ";
								// We need to confirm that the user is a member of the team of the item.
								$this->add_team_security_where_clause($query);
                         $query .= "LEFT JOIN users
	                                ON accounts.assigned_user_id=users.id ";
						 $query .= getTeamSetNameJoin('accounts');

						//join email address table too.
						$query .=  ' LEFT JOIN  email_addr_bean_rel on accounts.id = email_addr_bean_rel.bean_id and email_addr_bean_rel.bean_module=\'Accounts\' and email_addr_bean_rel.deleted=0 and email_addr_bean_rel.primary_address=1 ';
						$query .=  ' LEFT JOIN email_addresses on email_addresses.id = email_addr_bean_rel.email_address_id ' ;

            $query .= $custom_join['join'];

		        $where_auto = "( accounts.deleted IS NULL OR accounts.deleted=0 )";

                if($where != "")
                        $query .= "where ($where) AND ".$where_auto;
                else
                        $query .= "where ".$where_auto;

                if(!empty($order_by))
                        $query .=  " ORDER BY ". $this->process_order_by($order_by, null);

                return $query;
        }

	function set_notification_body($xtpl, $account)
	{
		$xtpl->assign("ACCOUNT_NAME", $account->name);
		$xtpl->assign("ACCOUNT_TYPE", $account->account_type);
		$xtpl->assign("ACCOUNT_DESCRIPTION", $account->description);

		return $xtpl;
	}

	function bean_implements($interface){
		switch($interface){
			case 'ACL':return true;
		}
		return false;
	}
	function get_unlinked_email_query($type=array()) {

		return get_unlinked_email_query($type, $this);
	}

}
