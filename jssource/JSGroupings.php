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

/*
 * This is the array that is used to determine how to group/concatenate js files together
 * The format is to define the location of the file to be concatenated as the array element key
 * and the location of the file to be created that holds the child files as the array element value.
 * So: $original_file_location => $Concatenated_file_location
 *
 * If you wish to add a grouping that contains a file that is part of another group already,
 * add a '.' after the .js in order to make the element key unique.  Make sure you pare the extension out
 *
 */

       $js_groupings = array(
           $sugar_grp1 = array(
                //scripts loaded on first page
                'include/javascript/sugar_3.js'         => 'include/javascript/sugar_grp1.js',
                'include/javascript/ajaxUI.js'          => 'include/javascript/sugar_grp1.js',
                'include/javascript/cookie.js'          => 'include/javascript/sugar_grp1.js',
                'include/javascript/menu.js'            => 'include/javascript/sugar_grp1.js',
                'include/javascript/calendar.js'        => 'include/javascript/sugar_grp1.js',
                'include/javascript/quickCompose.js'    => 'include/javascript/sugar_grp1.js',
                'include/javascript/yui/build/yuiloader/yuiloader-min.js' => 'include/javascript/sugar_grp1.js',
                //HTML decode
                'include/javascript/phpjs/get_html_translation_table.js' => 'include/javascript/sugar_grp1.js',
                'include/javascript/phpjs/html_entity_decode.js' => 'include/javascript/sugar_grp1.js',
                'include/javascript/phpjs/htmlentities.js' => 'include/javascript/sugar_grp1.js',
	            //Expression Engine
	            'include/Expressions/javascript/expressions.js'  => 'include/javascript/sugar_grp1.js',
	            'include/Expressions/javascript/dependency.js'   => 'include/javascript/sugar_grp1.js',
               'include/EditView/Panels.js'   => 'include/javascript/sugar_grp1.js',
            ),
			//jquery libraries
			$sugar_grp_jquery = array(
			'include/javascript/jquery/jquery-min.js'              => 'include/javascript/sugar_grp1_jquery.js',
			'include/javascript/jquery/jquery-ui-min.js'          => 'include/javascript/sugar_grp1_jquery.js',
			'include/javascript/jquery/jquery.json-2.3.js'        => 'include/javascript/sugar_grp1_jquery.js',
			//bootstrap
            //'include/javascript/jquery/bootstrap/bootstrap.min.js'              => 'include/javascript/sugar_grp1_jquery.js',			
            //jquery for moddule menus
            'include/javascript/jquery/jquery.hoverIntent.js'              => 'include/javascript/sugar_grp1_jquery.js',
            'include/javascript/jquery/jquery.hoverscroll.js'              => 'include/javascript/sugar_grp1_jquery.js',
            'include/javascript/jquery/jquery.hotkeys.js'              => 'include/javascript/sugar_grp1_jquery.js',
            'include/javascript/jquery/jquery.superfish.js'              => 'include/javascript/sugar_grp1_jquery.js',
            'include/javascript/jquery/jquery.tipTip.js'              => 'include/javascript/sugar_grp1_jquery.js',
            'include/javascript/jquery/jquery.sugarMenu.js'              => 'include/javascript/sugar_grp1_jquery.js',
            'include/javascript/jquery/jquery.highLight.js'              => 'include/javascript/sugar_grp1_jquery.js',
            'include/javascript/jquery/jquery.showLoading.js'              => 'include/javascript/sugar_grp1_jquery.js',
            
            
			),
           $sugar_field_grp = array(
               'include/SugarFields/Fields/Collection/SugarFieldCollection.js' => 'include/javascript/sugar_field_grp.js',
               'include/SugarFields/Fields/Teamset/Teamset.js' => 'include/javascript/sugar_field_grp.js',
               'include/SugarFields/Fields/Datetimecombo/Datetimecombo.js' => 'include/javascript/sugar_field_grp.js',
           ),
            $sugar_grp1_yui = array(
			//YUI scripts loaded on first page
            'include/javascript/yui3/build/yui/yui-min.js'              => 'include/javascript/sugar_grp1_yui.js',
            'include/javascript/yui3/build/loader/loader-min.js'        => 'include/javascript/sugar_grp1_yui.js',
			'include/javascript/yui/build/yahoo/yahoo-min.js'           => 'include/javascript/sugar_grp1_yui.js',
            'include/javascript/yui/build/dom/dom-min.js'               => 'include/javascript/sugar_grp1_yui.js',
			'include/javascript/yui/build/yahoo-dom-event/yahoo-dom-event.js'
			    => 'include/javascript/sugar_grp1_yui.js',
			'include/javascript/yui/build/event/event-min.js'           => 'include/javascript/sugar_grp1_yui.js',
			'include/javascript/yui/build/logger/logger-min.js'         => 'include/javascript/sugar_grp1_yui.js',
            'include/javascript/yui/build/animation/animation-min.js'   => 'include/javascript/sugar_grp1_yui.js',
            'include/javascript/yui/build/connection/connection-min.js' => 'include/javascript/sugar_grp1_yui.js',
            'include/javascript/yui/build/dragdrop/dragdrop-min.js'     => 'include/javascript/sugar_grp1_yui.js',
            //Ensure we grad the SLIDETOP custom container animation
            'include/javascript/yui/build/container/container-min.js'   => 'include/javascript/sugar_grp1_yui.js',
            'include/javascript/yui/build/element/element-min.js'       => 'include/javascript/sugar_grp1_yui.js',
            'include/javascript/yui/build/tabview/tabview-min.js'       => 'include/javascript/sugar_grp1_yui.js',
            'include/javascript/yui/build/selector/selector.js'     => 'include/javascript/sugar_grp1_yui.js',
            //This should probably be removed as it is not often used with the rest of YUI
            'include/javascript/yui/ygDDList.js'                        => 'include/javascript/sugar_grp1_yui.js',
            //YUI based quicksearch
            'include/javascript/yui/build/datasource/datasource-min.js' => 'include/javascript/sugar_grp1_yui.js',
            'include/javascript/yui/build/json/json-min.js'             => 'include/javascript/sugar_grp1_yui.js',
            'include/javascript/yui/build/autocomplete/autocomplete-min.js'=> 'include/javascript/sugar_grp1_yui.js',
            'include/javascript/quicksearch.js'                         => 'include/javascript/sugar_grp1_yui.js',
            'include/javascript/yui/build/menu/menu-min.js'             => 'include/javascript/sugar_grp1_yui.js',
			'include/javascript/sugar_connection_event_listener.js'     => 'include/javascript/sugar_grp1_yui.js',
			'include/javascript/yui/build/calendar/calendar.js'     => 'include/javascript/sugar_grp1_yui.js',
            'include/javascript/yui/build/history/history.js'     => 'include/javascript/sugar_grp1_yui.js',
            'include/javascript/yui/build/resize/resize-min.js'     => 'include/javascript/sugar_grp1_yui.js',
            ),

            $sugar_grp_yui_widgets = array(
			//sugar_grp1_yui must be laoded before sugar_grp_yui_widgets
            'include/javascript/yui/build/datatable/datatable-min.js'   => 'include/javascript/sugar_grp_yui_widgets.js',
            'include/javascript/yui/build/treeview/treeview-min.js'     => 'include/javascript/sugar_grp_yui_widgets.js',
			'include/javascript/yui/build/button/button-min.js'         => 'include/javascript/sugar_grp_yui_widgets.js',
            'include/javascript/yui/build/calendar/calendar-min.js'     => 'include/javascript/sugar_grp_yui_widgets.js',
			'include/javascript/sugarwidgets/SugarYUIWidgets.js'        => 'include/javascript/sugar_grp_yui_widgets.js',
            // Include any Sugar overrides done to YUI libs for bugfixes
            'include/javascript/sugar_yui_overrides.js'   => 'include/javascript/sugar_grp_yui_widgets.js',
            ),

			$sugar_grp_yui_widgets_css = array(
				"include/javascript/yui/build/fonts/fonts-min.css" => 'include/javascript/sugar_grp_yui_widgets.css',
				"include/javascript/yui/build/treeview/assets/skins/sam/treeview.css"
					=> 'include/javascript/sugar_grp_yui_widgets.css',
				"include/javascript/yui/build/datatable/assets/skins/sam/datatable.css"
					=> 'include/javascript/sugar_grp_yui_widgets.css',
				"include/javascript/yui/build/container/assets/skins/sam/container.css"
					=> 'include/javascript/sugar_grp_yui_widgets.css',
                "include/javascript/yui/build/button/assets/skins/sam/button.css"
					=> 'include/javascript/sugar_grp_yui_widgets.css',
				"include/javascript/yui/build/calendar/assets/skins/sam/calendar.css"
					=> 'include/javascript/sugar_grp_yui_widgets.css',
			),

            $sugar_grp_yui2 = array(
            //YUI combination 2
            'include/javascript/yui/build/dragdrop/dragdrop-min.js'    => 'include/javascript/sugar_grp_yui2.js',
            'include/javascript/yui/build/container/container-min.js'  => 'include/javascript/sugar_grp_yui2.js',
            ),

            //Grouping for emails module.
            $sugar_grp_emails = array(
            'include/javascript/yui/ygDDList.js' => 'include/javascript/sugar_grp_emails.js',
            'include/SugarEmailAddress/SugarEmailAddress.js' => 'include/javascript/sugar_grp_emails.js',
            'include/SugarFields/Fields/Collection/SugarFieldCollection.js' => 'include/javascript/sugar_grp_emails.js',
            'include/SugarRouting/javascript/SugarRouting.js' => 'include/javascript/sugar_grp_emails.js',
            'include/SugarDependentDropdown/javascript/SugarDependentDropdown.js' => 'include/javascript/sugar_grp_emails.js',
            'modules/InboundEmail/InboundEmail.js' => 'include/javascript/sugar_grp_emails.js',
            'modules/Emails/javascript/EmailUIShared.js' => 'include/javascript/sugar_grp_emails.js',
            'modules/Emails/javascript/EmailUI.js' => 'include/javascript/sugar_grp_emails.js',
            'modules/Emails/javascript/EmailUICompose.js' => 'include/javascript/sugar_grp_emails.js',
            'modules/Emails/javascript/ajax.js' => 'include/javascript/sugar_grp_emails.js',
            'modules/Emails/javascript/grid.js' => 'include/javascript/sugar_grp_emails.js',
            'modules/Emails/javascript/init.js' => 'include/javascript/sugar_grp_emails.js',
            'modules/Emails/javascript/complexLayout.js' => 'include/javascript/sugar_grp_emails.js',
            'modules/Emails/javascript/composeEmailTemplate.js' => 'include/javascript/sugar_grp_emails.js',
            'modules/Emails/javascript/displayOneEmailTemplate.js' => 'include/javascript/sugar_grp_emails.js',
            'modules/Emails/javascript/viewPrintable.js' => 'include/javascript/sugar_grp_emails.js',
            'include/javascript/quicksearch.js' => 'include/javascript/sugar_grp_emails.js',

            ),

            //Grouping for the quick compose functionality.
            $sugar_grp_quick_compose = array(
            'include/javascript/jsclass_base.js' => 'include/javascript/sugar_grp_quickcomp.js',
            'include/javascript/jsclass_async.js' => 'include/javascript/sugar_grp_quickcomp.js',
            'modules/Emails/javascript/vars.js' => 'include/javascript/sugar_grp_quickcomp.js',
            'include/SugarFields/Fields/Collection/SugarFieldCollection.js' => 'include/javascript/sugar_grp_quickcomp.js', //For team selection
            'modules/Emails/javascript/EmailUIShared.js' => 'include/javascript/sugar_grp_quickcomp.js',
            'modules/Emails/javascript/ajax.js' => 'include/javascript/sugar_grp_quickcomp.js',
            'modules/Emails/javascript/grid.js' => 'include/javascript/sugar_grp_quickcomp.js', //For address book
            'modules/Emails/javascript/EmailUICompose.js' => 'include/javascript/sugar_grp_quickcomp.js',
            'modules/Emails/javascript/composeEmailTemplate.js' => 'include/javascript/sugar_grp_quickcomp.js',
            'modules/Emails/javascript/complexLayout.js' => 'include/javascript/sugar_grp_quickcomp.js',
            ),

            $sugar_grp_jsolait = array(
                'include/javascript/jsclass_base.js'    => 'include/javascript/sugar_grp_jsolait.js',
                'include/javascript/jsclass_async.js'   => 'include/javascript/sugar_grp_jsolait.js',
                'modules/Meetings/jsclass_scheduler.js'   => 'include/javascript/sugar_grp_jsolait.js',
            ),
        );

    /**
     * Check for custom additions to this code
     */
    if(file_exists("custom/application/Ext/JSGroupings/jsgroups.ext.php")) {
        require("custom/application/Ext/JSGroupings/jsgroups.ext.php");
    }
