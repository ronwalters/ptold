<?php
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Enterprise Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/products/sugar-enterprise-eula.html
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
 * by SugarCRM are Copyright (C) 2004-2009 SugarCRM, Inc.; All Rights Reserved.
 * *******************************************************************************/
require_once('include/SugarFields/Fields/Base/SugarFieldBase.php');
require_once('custom/include/SugarFields/Fields/Maskedinput/SugarFieldMaskedinputjs.php');

class SugarFieldMaskedinput extends SugarFieldBase {

    function SugarFieldMaskedinput($type) {
    	$this->type = $type;
        $this->ss = new Sugar_Smarty();
    }

    function getWirelessDetailViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex) {
        return $this->getWirelessSmartyView($parentFieldArray, $vardef, $displayParams, $tabindex, 'WirelessDetailView');
    }   

    function getWirelessEditViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex) {   	
       	return $this->getWirelessSmartyView($parentFieldArray, $vardef, $displayParams, $tabindex, 'WirelessEditView');
    }    
    
    function getSearchViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex) {
		if(!empty($vardef['auto_increment']))$vardef['len']=255;
    	return $this->getSmartyView($parentFieldArray, $vardef, $displayParams, $tabindex, 'EditView');    
    }
    
    function getPopupViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex){
    	 return $this->getSearchViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex);
    }
    
    function getEditViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex){
    	//This only runs when the cached TPL file is created
        $this->setup($parentFieldArray, $vardef, $displayParams, $tabindex);;
        return $this->fetch('custom/include/SugarFields/Fields/Maskedinput/EditView.tpl');
    }
    
    function getDetailViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex){
    	//This only runs when the cached TPL file is created
        $this->setup($parentFieldArray, $vardef, $displayParams, $tabindex);;
        return $this->fetch('custom/include/SugarFields/Fields/Maskedinput/DetailView.tpl');
    }
    
	public function save(&$bean, $params, $field, $properties, $prefix = '') {
		//This is run whenever this custom field is being saved from an editview
		//Here you would include any pre-save processing that needs to be done
		foreach($bean->field_name_map as $fields){
			if($fields['type'] =='maskedinput'){
				$bean->$fields['name'] = $params[$fields['name']];
			}
		}
	}

}
?>
