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

 * Description:  TODO: To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/





global $app_strings;
//we don't want the parent module's string file, but rather the string file specifc to this subpanel
global $current_language;
$current_module_strings = return_module_language($current_language, 'DataSets');

global $currentModule;
global $theme;
global $focus;
global $action;




// focus_list is the means of passing data to a SubPanelView.
global $focus_list;

global $current_user;
$header_text = '';

//if(is_admin($current_user) && $_REQUEST['module'] != 'DynamicLayout' && !empty($_SESSION['editinplace'])){	
//		$header_text = "&nbsp;<a href='index.php?action=index&module=DynamicLayout&from_action=SubPanelView&from_module=Leads&record=". $_REQUEST['record']."'>".SugarThemeRegistry::current()->getImage("EditLayout","border='0' align='bottom'",null,null,'.gif',$mod_strings['LBL_EDIT_LAYOUT'])."</a>";
//}

$button  = "<table cellspacing='0' border='0' width='100%'><tr><td nowrap><form  action='index.php' method='post' name='form' id='form'>\n";
$button .= "<input type='hidden' name='module' value='DataSets'>\n";
$button .= "<input type='hidden' name='return_module' value='".$currentModule."'>\n";
$button .= "<input type='hidden' name='return_action' value='".$action."'>\n";
$button .= "<input type='hidden' name='return_id' value='".$focus->id."'>\n";
$button .= "<input type='hidden' name='record' value=''>\n";
$button .= "<input type='hidden' name='action'>\n";
$button .= "<input title='".$mod_strings['LBL_NEW_BUTTON_TITLE']."' class='button' onclick=\"this.form.action.value='EditView'\" type='submit' name='button' value='  ".$mod_strings['LBL_NEW_BUTTON_LABEL']."  '>\n";
$button .= "<input title='".$mod_strings['LBL_ADD_BUTTON_TITLE']."' class='button' onclick='return window.open(\"index.php?module=DataSets&action=Popup&form=AddDataSetEditView&form_submit=true\",\"test\",\"width=600,height=400,resizable=1,scrollbars=1\");' type='button' name='button' value='  ".$mod_strings['LBL_ADD_BUTTON_LABEL']."  '>\n";
$button .= "</td></tr></form></table>\n";


$ListView = new ListView();
$ListView->initNewXTemplate( 'modules/DataSets/SubPanelView.html',$current_module_strings);
$ListView->xTemplateAssign('UPARROW_INLINE', SugarThemeRegistry::current()->getImage('uparrow_inline','align="absmiddle" border="0"', null,null,'.gif',$mod_strings['LNK_UP']));
$ListView->xTemplateAssign('DOWNARROW_INLINE', SugarThemeRegistry::current()->getImage('downarrow_inline','align="absmiddle" border="0"', null,null,'.gif',$mod_strings['LNK_DOWN']));
$ListView->xTemplateAssign('DELETE_INLINE', SugarThemeRegistry::current()->getImage('delete_inline','align="absmiddle" border="0"', null,null,'.gif',$app_strings['LNK_DELETE']));
$ListView->xTemplateAssign('UPARROW_TEXT', $mod_strings['LNK_UP']);
$ListView->xTemplateAssign('DOWNARROW_TEXT', $mod_strings['LNK_DOWN']);
$ListView->xTemplateAssign('DELETE_TEXT', $app_strings['LNK_DELETE']);
$ListView->xTemplateAssign('REPORT_ID', $focus->id);
$ListView->setHeaderTitle($current_module_strings['LBL_MODULE_NAME'] . $header_text);
$ListView->setHeaderText($button);
$ListView->setQuery("", "", "list_order_y  ASC", "DATA_SET", false);

//need to pass the main id to have the dataset subpanel href properly
if(!empty($focus->id)) $ListView->xTemplateAssign("RECORD", $focus->id);
$ListView->xTemplateAssign("EDIT_INLINE_PNG",  SugarThemeRegistry::current()->getImage('edit_inline','align="absmiddle" border="0"', null,null,'.gif',$app_strings['LNK_EDIT']));

$ListView->processListView($focus_list, "main", "DATA_SET");
?>
