<?php
$viewdefs ['Tasks'] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="isSaveAndNew" value="false">',
        ),
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
          2 => 
          array (
            'customCode' => '{if $fields.status.value != "Completed"}<input title="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}" class="button" onclick="document.getElementById(\'status\').value=\'Completed\'; this.form.action.value=\'Save\'; this.form.return_module.value=\'Tasks\'; this.form.isDuplicate.value=true; this.form.isSaveAndNew.value=true; this.form.return_action.value=\'EditView\'; this.form.return_id.value=\'{$fields.id.value}\'; return check_form(\'EditView\');" type="submit" name="button" value="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_LABEL}">{/if}',
          ),
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'include/javascript/tiny_mce/tiny_mce.js',
        ),
      ),
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'lbl_task_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'parent_name',
            'label' => 'LBL_LIST_RELATED_TO',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'av_activity_types_name',
            'label' => 'LBL_AV_ACTIVITY_TYPES_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'customCode' => '<textarea id="description_tasks" name="description">{$fields.description.value}</textarea>{literal}

<script type="text/javascript" language="Javascript">
<!--
if (!SUGAR.util.isTouchScreen()) {
    tinyMCE.init({"convert_urls":false,"height":600,"width":"100%","theme":"advanced","theme_advanced_toolbar_align":"left","theme_advanced_toolbar_location":"top","theme_advanced_buttons1":"code,help,separator,bold,italic,underline,strikethrough,separator,justifyleft,justifycenter,justifyright,\\n\\t                     \\t\\t\\t\\t\\tjustifyfull,separator,forecolor,backcolor,separator,styleselect,formatselect,fontselect,fontsizeselect,","theme_advanced_buttons2":"cut,copy,paste,pastetext,pasteword,selectall,separator,search,replace,separator,bullist,numlist,separator,outdent,\\n\\t                     \\t\\t\\t\\t\\tindent,separator,ltr,rtl,separator,undo,redo,separator, link,unlink,anchor,image,separator,sub,sup,separator,charmap,\\n\\t                     \\t\\t\\t\\t\\tvisualaid","theme_advanced_buttons3":"tablecontrols,separator,advhr,hr,removeformat,separator,insertdate,inserttime,separator,preview","strict_loading_mode":true,"mode":"exact","language":"en","plugins":"advhr,insertdatetime,table,preview,paste,searchreplace,directionality","elements":"description_tasks","extended_valid_elements":"style,hr[class|width|size|noshade],@[class|style]","content_css":"include\\/javascript\\/tiny_mce\\/themes\\/advanced\\/skins\\/default\\/content.css","cleanup_on_startup":true,"directionality":"ltr"});
		
}
else {    document.getElementById(\'description_tasks\').style.width = \'100%\';
    document.getElementById(\'description_tasks\').style.height = \'100px\';}
-->
</script>
<script>focus_obj = document.getElementById("description_tasks");</script>{/literal}',
            'displayParams' => 
            array (
              'rows' => 8,
              'cols' => 60,
            ),
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'date_due',
            'type' => 'datetimecombo',
            'displayParams' => 
            array (
              'showNoneCheckbox' => true,
              'showFormats' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'priority',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
      ),
    ),
  ),
);
?>
