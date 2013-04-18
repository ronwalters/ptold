<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Master Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/master-subscription-agreement
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2012 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/

/*********************************************************************************

 * Description:
 ********************************************************************************/

global $theme;







global $app_strings;
global $app_list_strings;
global $mod_strings;

global $urlPrefix;
global $currentModule;


$seed_object = new DataSet();


$where = "";
if(isset($_REQUEST['query']))
{
	$search_fields = Array("name", "description");

	$where_clauses = Array();

	append_where_clause($where_clauses, "name", "data_sets.name");

	$where = generate_where_statement($where_clauses);
	$GLOBALS['log']->info($where);
}




////////////////////////////////////////////////////////
// Start the output
////////////////////////////////////////////////////////
if (!isset($_REQUEST['html'])) {
	$form =new XTemplate ('modules/DataSets/Popup_picker.html');
	$GLOBALS['log']->debug("using file modules/DataSets/Popup_picker.html");
}
else {
	$GLOBALS['log']->debug("_REQUEST['html'] is ".$_REQUEST['html']);
	$form =new XTemplate ('modules/DataSets/'.$_REQUEST['html'].'.html');
	$GLOBALS['log']->debug("using file modules/DataSets/".$_REQUEST['html'].'.html');
}

$form->assign("MOD", $mod_strings);
$form->assign("APP", $app_strings);

// the form key is required
if(!isset($_REQUEST['form']))
	sugar_die("Missing 'form' parameter");

// This code should always return an answer.
// The form name should be made into a parameter and not be hard coded in this file.

if ($_REQUEST['form'] == 'EditView')
{
        $the_javascript  = "<script type='text/javascript' language='JavaScript'>\n";
        $the_javascript .= "function set_return(parent_id, parent_name, list_order_x, list_order_y) {\n";
        $the_javascript .= "    window.opener.document.EditView.parent_name.value = parent_name;\n";
        $the_javascript .= "    window.opener.document.EditView.parent_id.value = parent_id;\n";
        $the_javascript .= "}\n";
        $the_javascript .= "</script>\n";
        $button  = "<form action='index.php' method='post' name='form' id='form'>\n";

        $button .= "<input title='".$app_strings['LBL_CLEAR_BUTTON_TITLE']."' class='button' LANGUAGE=javascript onclick=\"window.opener.document.EditView.parent_name.value = '';window.opener.document.EditView.parent_id.value = ''; window.close()\" type='submit' name='button' value='  Clear  '>\n";
        $button .= "<input title='".$app_strings['LBL_CANCEL_BUTTON_TITLE']."' accessKey='".$app_strings['LBL_CANCEL_BUTTON_KEY']."' class='button' LANGUAGE=javascript onclick=\"window.close()\" type='submit' name='button' value='  ".$app_strings['LBL_CANCEL_BUTTON_LABEL']."  '>\n";
        $button .= "</form>\n";
}

//if requesting from the add data_set form in the detailview of the reportmaker
if ($_REQUEST['form'] == 'AddDataSetEditView')
{
        $the_javascript  = "<script type='text/javascript' language='JavaScript'>\n";
        $the_javascript .= "function set_return(data_set_id, name) {\n";
        $the_javascript .= "    window.opener.document.AddDataSetEditView.name.value = name;\n";
        $the_javascript .= "    window.opener.document.AddDataSetEditView.data_set_id.value = data_set_id;\n";
        $the_javascript .= "    window.opener.document.AddDataSetEditView.submit()\n";
        $the_javascript .= "    window.close();\n";
        $the_javascript .= "}\n";
        $the_javascript .= "</script>\n";
        $button  = "<form action='index.php' method='post' name='form' id='form'>\n";
        $button .= "<input title='".$app_strings['LBL_CANCEL_BUTTON_TITLE']."' accessKey='".$app_strings['LBL_CANCEL_BUTTON_KEY']."' class='button' LANGUAGE=javascript onclick=\"window.close()\" type='submit' name='button' value='  ".$app_strings['LBL_CANCEL_BUTTON_LABEL']."  '>\n";
        $button .= "</form>\n";
}

$form->assign("SET_RETURN_JS", $the_javascript);

$form->assign("MODULE_NAME", $currentModule);
$form->assign("FORM", $_REQUEST['form']);

insert_popup_header($theme);

// Quick search.
echo get_form_header($mod_strings['LBL_SEARCH_FORM_TITLE'], "", false);

if (isset($_REQUEST['description']))
{
	$last_search['DESCRIPTION'] = $_REQUEST['description'];

}

if (isset($_REQUEST['name']))
{
	$last_search['NAME'] = $_REQUEST['name'];

}

if (isset($last_search))
{
	$form->assign("LAST_SEARCH", $last_search);
}

$form->parse("main.SearchHeader");
$form->out("main.SearchHeader");

$form->parse("main.SearchHeaderEnd");
$form->out("main.SearchHeaderEnd");

// Reset the sections that are already in the page so that they do not print again later.
$form->reset("main.SearchHeader");
$form->reset("main.SearchHeaderEnd");

// Stick the form header out there.


if ($_REQUEST['form'] == 'AddDataSetEditView'){

	if(!empty($where)){
		$where .= "AND ( report_id='' OR report_id IS NULL ) AND ( parent_id='' OR parent_id IS NULL )";
	} else {
		$where = " ( report_id='' OR report_id IS NULL ) AND ( parent_id='' OR parent_id IS NULL )";	
	}

}



if ($_REQUEST['form'] == 'EditView'){
	
	
	//ensuring you don't pick yourself as your parent
	if(empty($_REQUEST['self_id'])) $_REQUEST['self_id'] = "";	

	//Don't allow picking of parents that are itself
	if(!empty($where)){
		$where .= "AND data_sets.id!='".$_REQUEST['self_id']."' AND data_sets.deleted=0 ";
	} else {
		$where = "data_sets.id!='".$_REQUEST['self_id']."' AND data_sets.deleted=0 ";	
	}
	
	if(!empty($_REQUEST['self_id'])){
		$special_where_part = "WHERE id!='".$_REQUEST['self_id']."' AND data_sets.deleted=0";
	} else {
		$special_where_part = "WHERE data_sets.deleted=0";
	}
	//Don't allow picking of parents that already have children
	if(!empty($where)){
		$where .= " AND data_sets.id NOT IN
					 (SELECT DISTINCT parent_id from data_sets ".$special_where_part." and parent_id is not null )";
	} else {
		$where = " data_sets.id NOT IN
					 (SELECT DISTINCT parent_id from data_sets ".$special_where_part." and parent_id is not null )";	
	}
	

	
//if form is editview
}
$ListView = new ListView();
$ListView->show_delete_button = false;
$ListView->show_select_menu = false;
$ListView->show_export_button = false;
$ListView->setXTemplate($form);
$ListView->setHeaderTitle($mod_strings['LBL_LIST_FORM_TITLE']);
$ListView->setHeaderText($button);
$ListView->setQuery($where, "", "name", "DATA_SET");
$ListView->setModStrings($mod_strings);
$ListView->processListView($seed_object, "main", "DATA_SET");
?>

<?php insert_popup_footer(); ?>
