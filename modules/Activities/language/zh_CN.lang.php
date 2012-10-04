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

	

$mod_strings = array (
  'ERR_DELETE_RECORD' => '您必须指定一个记录编号才能删除客户。',
  'LBL_ACCEPT' => '接受',
  'LBL_ACCEPT_THIS' => '接受？',
  'LBL_COLON' => '：',
  'LBL_CONTACT_NAME' => '联系人姓名：',
  'LBL_DATE' => '开始日期：',
  'LBL_DATE_TIME' => '开始日期和时间：',
  'LBL_DEFAULT_SUBPANEL_TITLE' => '未完成的活动',
  'LBL_DESCRIPTION' => '描述：',
  'LBL_DESCRIPTION_INFORMATION' => '描述信息',
  'LBL_DIRECTION' => '方向',
  'LBL_DURATION' => '活动时间:',
  'LBL_DURATION_MINUTES' => '持续时间：',
  'LBL_HISTORY' => '历史',
  'LBL_HOURS_MINS' => '(小时/分钟)',
  'LBL_INVITEE' => '受邀者',
  'LBL_LIST_ASSIGNED_TO_NAME' => '负责人',
  'LBL_LIST_CLOSE' => '关闭',
  'LBL_LIST_CONTACT' => '联系人',
  'LBL_LIST_DATE' => '日期',
  'LBL_LIST_DIRECTION' => '方向',
  'LBL_LIST_DUE_DATE' => '完成日期',
  'LBL_LIST_FORM_TITLE' => '活动列表',
  'LBL_LIST_LAST_MODIFIED' => '最后修改',
  'LBL_LIST_RELATED_TO' => '相关',
  'LBL_LIST_STATUS' => '状态',
  'LBL_LIST_SUBJECT' => '主题',
  'LBL_LIST_TIME' => '开始时间',
  'LBL_LOCATION' => '地点：',
  'LBL_MEETING' => '会议：',
  'LBL_MODULE_NAME' => '活动',
  'LBL_MODULE_TITLE' => '活动: 主页',
  'LBL_NEW_NOTE_BUTTON_KEY' => 'T',
  'LBL_NEW_NOTE_BUTTON_LABEL' => '新增备忘录或附件',
  'LBL_NEW_NOTE_BUTTON_TITLE' => '新增备忘录或附件',
  'LBL_NEW_TASK_BUTTON_KEY' => 'N',
  'LBL_NEW_TASK_BUTTON_LABEL' => '新建任务',
  'LBL_NEW_TASK_BUTTON_TITLE' => '新建任务',
  'LBL_OPEN_ACTIVITIES' => '新建活动',
  'LBL_SCHEDULE_CALL_BUTTON_KEY' => 'C',
  'LBL_SCHEDULE_CALL_BUTTON_LABEL' => '记录电话',
  'LBL_SCHEDULE_CALL_BUTTON_TITLE' => '记录电话',
  'LBL_SCHEDULE_MEETING_BUTTON_KEY' => 'M',
  'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => '安排会议',
  'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => '安排会议 [Alt+M]',
  'LBL_SEARCH_FORM_TITLE' => '活动查找',
  'LBL_STATUS' => '状态：',
  'LBL_SUBJECT' => '主题:',
  'LBL_TIME' => '开始时间：',
  'LBL_TODAY' => '至',
  'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
  'LBL_TRACK_EMAIL_BUTTON_LABEL' => '存档电子邮件',
  'LBL_TRACK_EMAIL_BUTTON_TITLE' => '存档电子邮件 [Alt+K]',
  'LBL_UPCOMING' => '我的近期会议',
  'LNK_CALL_LIST' => '查看电话',
  'LNK_EMAIL_LIST' => '查看邮件',
  'LNK_IMPORT_CALLS' => '导入电话',
  'LNK_IMPORT_MEETINGS' => '导入会议',
  'LNK_IMPORT_NOTES' => '导入备忘录',
  'LNK_IMPORT_TASKS' => '导入任务',
  'LNK_MEETING_LIST' => '查看会议',
  'LNK_NEW_APPOINTMENT' => '新会议',
  'LNK_NEW_CALL' => '记录电话',
  'LNK_NEW_EMAIL' => '新增存档电子邮件l',
  'LNK_NEW_MEETING' => '安排会议',
  'LNK_NEW_NOTE' => '新增备忘录或附件',
  'LNK_NEW_TASK' => '新增任务',
  'LNK_NOTE_LIST' => '查看备忘录',
  'LNK_TASK_LIST' => '查看任务',
  'LNK_VIEW_CALENDAR' => '查看日程',
  'NTC_NONE' => '无',
  'NTC_NONE_SCHEDULED' => '未安排。',
  'NTC_REMOVE_INVITEE' => '您确定要从这个会议删除受邀者吗？',
  'appointment_filter_dom' => 
  array (
    'last next_month' => '下月',
    'last this_month' => '本月',
    'next Saturday' => '下周',
    'this Saturday' => '本周',
    'today' => '今天',
    'tomorrow' => '明天',
  ),
);

