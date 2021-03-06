<?php
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

require_once('include/SugarFields/Fields/Base/SugarFieldBase.php');

class SugarFieldDownload extends SugarFieldBase {
   
	function getDetailViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex) {
      
        $vardef['value'] = urlencode(basename($vardef['value']));
        $this->setup($parentFieldArray, $vardef, $displayParams, $tabindex);
        return $this->fetch($this->findTemplate('DetailView.tpl'));
    }
}
?>