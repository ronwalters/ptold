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

	

$mod_strings = array (
  'ERR_REPORT_INVALID_SUBJECT' => 'Справката е невалидна',
  'ERR_REPORT_INVALID' => 'Справката "{0}" съдържа невалидни полета: {1}',
  'LBL_REPORT_GRAND_TOTAL' => 'Общо',
  'LBL_PUBLISHED_QUOTE_REPORTS' => 'Published Quote Reports',
  'LBL_QUARTER_ABBREVIATION' => 'Q',
  'LBL_ROLLOVER_SQUARE' => 'Rollover a square for details.',
  'LBL_REPORT_MODULE_VIEWER_TITLE' => 'Report Viewer',
  'DEFAULT_REPORT_TITLE_5' => 'Call List By Last Date Contacted',
  'DEFAULT_REPORT_TITLE_43' => 'Customer Account Owners',
  'LBL_CONTENT' => 'Content',
  'LBL_SCHEDULE_TYPE' => 'Schedule Type',
  'LBL_RUN_TIME_LABEL' => 'Run-time',
  'LBL_OPTIONAL_MODULES' => 'Optional Modules',
  'LBL_MATRIX_LAYOUT' => 'Layout Options:',
  'LBL_1X2' => '1 X 2',
  'LBL_2X1' => '2 X 1',
  'LBL_DCE_LICENSING_REPORT' => 'Licensing Report',
  'DEFAULT_REPORT_TITLE_33' => 'Template Usage',
  'LBL_MODULE_NAME' => 'Справки',
  'LBL_REPORT_MODULES' => 'Модули',
  'LBL_REPORT_ATT_MODULES' => 'Модули',
  'LBL_REPORT_EXPAND_ALL' => 'Разшири всички',
  'LBL_REPORT_COLLAPSE_ALL' => 'Свиване на всички',
  'LBL_REPORT_SHOW_CHART' => 'Показване на графика',
  'LBL_REPORT_HIDE_CHART' => 'Скриване на графиката',
  'LBL_REPORT_SHOW_DETAILS' => 'Показване на допълнителна информация',
  'LBL_REPORT_HIDE_DETAILS' => 'Скриване на допълнителна информация',
  'LNK_NEW_CONTACT' => 'Създаване на контакт',
  'LNK_NEW_ACCOUNT' => 'Въвеждане на организация',
  'LNK_NEW_OPPORTUNITY' => 'Създаване на възможност',
  'LNK_NEW_CASE' => 'Въвеждане на казус',
  'LNK_NEW_NOTE' => 'Добавяне на бележка или приложение',
  'LNK_NEW_CALL' => 'Планиране на обаждане',
  'LNK_NEW_EMAIL' => 'Създаване на запис за изпратена поща',
  'LNK_NEW_MEETING' => 'Насрочване на среща',
  'LNK_NEW_TASK' => 'Добавяне на задача',
  'LBL_REPORTS' => 'Справки',
  'LBL_TITLE' => 'Заглавие',
  'LBL_UNTITLED' => 'неозаглавен',
  'LBL_MODULE' => 'Модул',
  'LBL_ACCOUNTS' => 'Организации',
  'LBL_OPPORTUNITIES' => 'Възможности',
  'LBL_CONTACTS' => 'Контакти',
  'LBL_LEADS' => 'Потенциални клиенти',
  'LBL_ACCOUNT' => 'Организация',
  'LBL_OPPORTUNITY' => 'Свързан с възможност:',
  'LBL_CONTACT' => 'Контакт',
  'LBL_LEAD' => 'Потенциален клиент',
  'LBL_DELETE_ERROR' => 'Единствено отговорници на справки и Администратори могат да изтриват справки.',
  'LBL_ROWS_AND_COLUMNS_REPORT' => 'Списъчна справка',
  'LBL_ROWS_AND_COLUMNS_REPORT_DESC' => 'Създаване на справка за изброяване на стойности на избраните полета за записите въз основа на предварително зададени критерии.',
  'LBL_SUMMATION_REPORT' => 'Обобщаваща справка',
  'LBL_SUMMATION_REPORT_DESC' => 'Създаване на справка за обобщено визуализиране на избрано съдържание от базата данни, въз основа на дефинирани за целта критерии. Модулът осигурява средства за графично представяне на данните.',
  'LBL_MATRIX_REPORT' => 'Матрична справка',
  'LBL_MATRIX_REPORT_DESC' => 'Създаване на обобщаваща справка за визуализиране на резултатите в grid формат с включване до 3 условия за групиране.',
  'LBL_SUMMATION_REPORT_WITH_DETAILS_DESC' => 'Създаване на справка за обобщено визуализиране на информацията за записите с допълнителна разбивка на резултатите.',
  'LBL_SUMMATION_REPORT_WITH_DETAILS' => 'Обобщаваща справка с детайли',
  'LBL_SHOW_QUERY' => 'Визуализация на заявката',
  'LBL_DO_ROUND' => 'Кръгло число, над 100000',
  'LBL_SAVE_AS' => 'Съхрани като',
  'LBL_FILTERS' => 'Филтри',
  'LBL_NO_CHART_DRAWN_MESSAGE' => 'Графиката не може да бъде визуализирана поради некоректно въведена информация',
  'LBL_RUNTIME_FILTERS' => 'Runtime Filters',
  'LBL_VIEWER_RUNTIME_HELP' => 'Дефинирайте стойности за <b>Runtime Filters</b> и натиснете <b>Потвърди</b> за ново изпълнение на справката.',
  'LBL_REPORT_RESULTS' => 'Резултати:',
  'LBL_REPORT_RESULTS_MESSAGE' => 'Натиснете Изпълни, за да видите резултати.',
  'LBL_REPORT_FILTER_MODIFIED_MESSAGE' => 'Филтрите на справката са били модифицирани.',
  'LBL_REPORT_MODIFIED_MESSAGE' => 'Справката е била модифицирана.',
  'LBL_ADD_NEW_FILTER' => 'Добавяне на нов филтър',
  'LBL_DISPLAY_COLUMNS' => 'Показвани колони',
  'LBL_SUMMARY_COLUMNS' => 'Обобщаващи колони',
  'LBL_HIDE_COLUMNS' => 'Скрити колони',
  'LBL_SUBMIT_QUERY' => 'Качи заявката',
  'LBL_QUERY' => 'Заявка',
  'LBL_CHANGE' => 'Промени',
  'LBL_REMOVE' => 'Изтрий',
  'LBL_CREATE_CUSTOM_REPORT' => 'Справки: електронен помощник',
  'LBL_CREATE_REPORT' => 'Създаване на справка',
  'LBL_MY_SAVED_REPORTS' => 'Съхранени справки',
  'LBL_MY_TEAMS_REPORTS' => 'Справки на моят екип',
  'LBL_REPORT_NAME' => 'Име на справката',
  'LBL_REPORT_ATT_NAME' => 'Име',
  'LBL_CURRENT_QUARTER_FORECAST' => 'Водени възможности за текущия времеви период',
  'LBL_ALL_PUBLISHED_REPORTS' => 'Всички публикувани справки',
  'LBL_DETAILED_FORECAST' => 'Подробна прогноза',
  'LBL_PARTNER_ACCOUNT_LIST' => 'Организации със статус партньор',
  'LBL_CUSTOMER_ACCOUNT_LIST' => 'Организации със статус клиент',
  'LBL_CALL_LIST_BY_LAST_DATE_CONTACTED' => 'Списък с обаждания',
  'LBL_OPPORTUNITIES_BY_LEAD_SOURCE' => 'Възможности в зависимост от източника',
  'LBL_CURRENT_QUARTER_COMMITTED_DEALS' => 'Сключени сделки за текущото тримесечие',
  'LBL_VIEW' => 'изглед',
  'LBL_DELETE' => 'Изтриване',
  'LBL_PUBLISH' => 'публикувай',
  'LBL_UN_PUBLISH' => 'непубликувай',
  'LBL_SCHEDULE_REPORT' => 'Отложено изпълнение на',
  'LBL_START_DATE' => 'Начална дата',
  'LBL_END_DATE' => 'Крайна дата',
  'LBL_FILTER_DATE_RANGE_START' => 'Подател',
  'LBL_FILTER_DATE_RANGE_FINISH' => 'До',
  'LBL_SELECT_RECORD' => 'Изберете запис',
  'LBL_TIME_INTERVAL' => 'Интервал от време',
  'LBL_SCHEDULE_ACTIVE' => 'Активен',
  'LBL_SCHEDULE_EMAIL' => 'Отложено изпълнение на',
  'LBL_NEXT_RUN' => 'Седващ имейл',
  'LBL_UPDATE_SCHEDULE' => 'Актуализирай',
  'LBL_YOU_HAVE_NO_SAVED_REPORTS.' => 'Не са намерени съхранени справки.',
  'LBL_MY_REPORTS' => 'Моите справки',
  'LBL_ACCOUNT_REPORTS' => 'Справки към модул организации',
  'LBL_CONTACT_REPORTS' => 'Справки към модул контакти',
  'LBL_OPPORTUNITY_REPORTS' => 'Справки към модул възможности',
  'LBL_CASE_REPORTS' => 'Справки към модул казуси',
  'LBL_BUG_REPORTS' => 'Справки към модул проблеми',
  'LBL_LEAD_REPORTS' => 'Справки към модул потенциални клиенти',
  'LBL_QUOTE_REPORTS' => 'Справки към модул оферти',
  'LBL_CALL_REPORTS' => 'Справки към модул обаждания',
  'LBL_MEETING_REPORTS' => 'Справки към модул срещи',
  'LBL_TASK_REPORTS' => 'Справки към модул задачи',
  'LBL_EMAIL_REPORTS' => 'Справки към модул електронна поща',
  'LBL_ALL_REPORTS' => 'Списък със справки',
  'LBL_ACTIVITIES_REPORTS' => 'Справки',
  'LBL_CHART_TYPE' => 'Вид на графика',
  'LBL_NO_REPORTS' => 'Не са намерени резултати.',
  'LBL_SAVED_SEARCH' => 'Съхранени критерии за търсене',
  'LBL_MY_TEAM_ACCOUNT_REPORTS' => 'Справки към модул организации на моят екип',
  'LBL_MY_TEAM_OPPORTUNITY_REPORTS' => 'Справки към модул възможности на моят екип',
  'LBL_MY_TEAM_CONTACT_REPORTS' => 'Справки към модул контакти на моят екип',
  'LBL_MY_TEAM_CASE_REPORTS' => 'Справки към модул казуси на моят екип',
  'LBL_MY_TEAM_BUG_REPORTS' => 'Справки към модул проблеми на моят екип',
  'LBL_MY_TEAM_LEAD_REPORTS' => 'Справки към модул потенциални клиенти на моят екип',
  'LBL_MY_TEAM_QUOTE_REPORTS' => 'Справки към модул оферти на моят екип',
  'LBL_MY_TEAM_CALL_REPORTS' => 'Справки към модул обаждания на моят екип',
  'LBL_MY_TEAM_MEETING_REPORTS' => 'Справки към модул срещи на моят екип',
  'LBL_MY_TEAM_TASK_REPORTS' => 'Справки към модул задачи на моят екип',
  'LBL_MY_TEAM_EMAIL_REPORTS' => 'Справки към модул електронна поща на моят екип',
  'LBL_MY_TEAM_FORECAST_REPORTS' => 'Справки към модул планиране на моят екип',
  'LBL_MY_TEAM_PROSPECT_REPORTS' => 'Справки към модул целеви клиенти на моят екип',
  'LBL_MY_TEAM_CONTRACT_REPORTS' => 'Справки към модул договори на моят екип',
  'LBL_MY_TEAM_PROJECT_TASK_REPORTS' => 'Справки към модул задачи по проекти на моят екип',
  'LBL_MY_ACCOUNT_REPORTS' => 'Справки към модул моите организации',
  'LBL_MY_OPPORTUNITY_REPORTS' => 'Справки към модул моите възможности',
  'LBL_MY_CONTACT_REPORTS' => 'Справки към модул моите контакти',
  'LBL_MY_CASE_REPORTS' => 'Справки към модул моите казуси',
  'LBL_MY_BUG_REPORTS' => 'Справки към модул моите проблеми',
  'LBL_MY_LEAD_REPORTS' => 'Справки към модул моите потенциални клиенти',
  'LBL_MY_QUOTE_REPORTS' => 'Справки към модул моите оферти',
  'LBL_MY_CALL_REPORTS' => 'Справки към модул моите обаждания',
  'LBL_MY_MEETING_REPORTS' => 'Справки към модул моите срещи',
  'LBL_MY_TASK_REPORTS' => 'Справки към модул моите задачи',
  'LBL_MY_EMAIL_REPORTS' => 'Справки към модул моите писма',
  'LBL_MY_FORECAST_REPORTS' => 'Прогнозни Справки',
  'LBL_EXPORT' => 'Експортиране',
  'LBL_OF' => 'за',
  'LBL_SUCCESS_REPORT' => 'SUCCESS: Справката',
  'LBL_MY_PROSPECT_REPORTS' => 'Мои целеви справки',
  'LBL_WAS_SAVED' => 'беше съхранена',
  'LBL_FAILURE_REPORT' => 'Грешка: Справката',
  'LBL_WAS_NOT_SAVED' => 'не беше съхранена',
  'LBL_EQUALS' => 'Е равно на',
  'LBL_LESS_THAN' => 'Е с по-малки стойности от',
  'LBL_GREATER_THAN' => 'По-големи от',
  'LBL_DOES_NOT_EQUAL' => 'Е различно от',
  'LBL_ON' => 'На',
  'LBL_BEFORE' => 'Преди',
  'LBL_AFTER' => 'След',
  'LBL_IS_BETWEEN' => 'В период',
  'LBL_NOT_ON' => 'С изключване на',
  'LBL_CONTAINS' => 'Съдържа',
  'LBL_DOES_NOT_CONTAIN' => 'Не съдържа',
  'LBL_STARTS_WITH' => 'По първата част от името',
  'LBL_ENDS_WITH' => 'Завършва на',
  'LBL_TO_PDF' => 'Запази в PDF-формат',
  'LBL_PDF_TIMESTAMP' => 'Ю_м_д_Х_и',
  'LBL_CSV_TIMESTAMP' => 'Ю_м_д_Х_и',
  'LBL_IS' => 'Е',
  'LBL_IS_NOT' => 'Не е ли.',
  'LBL_ONE_OF' => 'Е един от',
  'LBL_IS_NOT_ONE_OF' => 'Не е ли едно от',
  'LBL_ANY' => 'Всички',
  'LBL_ALL' => 'Най-малко',
  'LBL_EXACT' => 'Точен',
  'MSG_UNABLE_PUBLISH_ANOTHER' => 'Грешка при публикуване. Налична е справка с аналогично название.',
  'MSG_UNABLE_PUBLISH_YOU_OWN' => 'Грешка при отмяна на публикуване на справка, създадена от друг потребител. You own an Report by the same name.',
  'LBL_PUBLISHED_ACCOUNT_REPORTS' => 'Публикувани справки за Организации',
  'LBL_PUBLISHED_CONTACT_REPORTS' => 'Публикувани справки за Контакт',
  'LBL_PUBLISHED_OPPORTUNITY_REPORTS' => 'Публикувани справки за Възможности',
  'LBL_PUBLISHED_CASE_REPORTS' => 'Публикувани справки за Казуси',
  'LBL_PUBLISHED_BUG_REPORTS' => 'Публикувани справки за Проблеми',
  'LBL_PUBLISHED_LEAD_REPORTS' => 'Публикувани справки за Потенциални клиенти',
  'LBL_PUBLISHED_CALL_REPORTS' => 'Публикувани справки за Обаждания',
  'LBL_PUBLISHED_MEETING_REPORTS' => 'Публикувани справки за Срещи',
  'LBL_PUBLISHED_TASK_REPORTS' => 'Публикувани справки за Задачи',
  'LBL_PUBLISHED_EMAIL_REPORTS' => 'Публикувани справки за Имейли',
  'LBL_PUBLISHED_FORECAST_REPORTS' => 'Публикувани справки за Прогноза',
  'LBL_PUBLISHED_PROSPECT_REPORTS' => 'Публикувани справки за Целеви клиенти',
  'LBL_THERE_ARE_NO_REPORTS_OF_THIS_TYPE' => 'Не са намерени справки от този вид.',
  'LBL_AND' => 'и',
  'LBL_MISSING_FIELDS' => 'Липсващи полета',
  'LBL_AT_LEAST_ONE_DISPLAY_COLUMN' => 'Моля, изберете поне една колона.',
  'LBL_MISSING_INPUT_VALUE' => 'няма въведени стойности.',
  'LBL_MISSING_SECOND_INPUT_VALUE' => 'Липсва втора входна стойност',
  'LBL_NOTHING_WAS_SELECTED' => 'няма избрани записи.',
  'LBL_TOTAL' => 'Общо',
  'LBL_MODULE_NAME_SAVED' => 'Име на модула',
  'LBL_REPORT_TYPE' => 'Вид на справката',
  'LBL_REPORT_LAST_RUN_DATE' => 'Достъпен на',
  'LBL_REPORT__ATT_TYPE' => 'Тип',
  'LBL_REPORT_RUN_WITH_FILTER' => 'Потвърди',
  'LBL_REPORT_RESET_FILTER' => 'Рeдактиране',
  'LBL_DISPLAY_SUMMARIES' => 'Изберете колони за обобщаване',
  'LBL_HIDE_SUMMARIES' => 'Скриване на колони за обобщаване',
  'LBL_RUN_BUTTON_TITLE' => 'Изпълни [Alt+R]',
  'LBL_RUN_REPORT_BUTTON_LABEL' => 'Изпълни',
  'LBL_RUN_REPORT_BUTTON_KEY' => 'Р',
  'LBL_DUPLICATE_AS_ORIGINAL' => 'Със запазване на вида',
  'LBL_DUPLICATE_AS_ROWS_AND_COLS' => 'Като списъчна',
  'LBL_DUPLICATE_AS_SUMMATON' => 'Като обобщаваща',
  'LBL_DUPLICATE_AS_SUMMATION_DETAILS' => 'Като обобщаваща с детайли',
  'LBL_SUMMATION_WITH_DETAILS' => 'Обобщаваща с детайли',
  'LBL_DUPLICATE_AS_MATRIX' => 'Като матрична',
  'LBL_SAVE_RUN' => 'Съхрани и изпълни справката',
  'LBL_WITH_DETAILS' => 'С детайли',
  'LBL_CHOOSE_COLUMNS' => 'Изберете колони за показване',
  'LBL_CHOOSE_SUMMARIES' => 'Изберете колони за обобщаване',
  'LBL_GROUP_BY' => 'Групиране по',
  'LBL_ADD_COLUMN' => 'Добавяне на колона',
  'LBL_GRAND_TOTAL' => 'Стойност на офертата',
  'LBL_SEARCH_FORM_TITLE' => 'Списък със справки',
  'LBL_FORECAST_REPORTS' => 'Справки за прогнози',
  'LBL_MY_PROJECT_TASK_REPORTS' => 'Справки към модул моите задачи по проекти',
  'LBL_PUBLISHED_PROJECT_TASK_REPORTS' => 'Публикувано в Проект, Задачи и Справки',
  'LBL_PROJECT_TASK_REPORTS' => 'Справки към модул задачи по проекти',
  'LBL_WEIGHTED_AVG_AMOUNT' => 'Статистически средна сума',
  'LBL_WEIGHTED_SUM_AMOUNT' => 'Статистически  сума',
  'ERR_SELECT_COLUMN' => 'Моля, изберете колона за показване.',
  'LBL_BY_MONTH' => 'До Месец',
  'LBL_BY_YEAR' => 'До Година',
  'LBL_BY_QUARTER' => 'До Тримесечие',
  'LBL_COUNT' => 'Брой',
  'LBL_SUM' => 'Сума',
  'LBL_AVG' => 'Средна',
  'LBL_MAX' => 'Максимална',
  'LBL_MIN' => 'Минимална',
  'LBL_MONTH' => 'Месец',
  'LBL_YEAR' => 'Година',
  'LBL_QUARTER' => 'Тримесечие',
  'LBL_YESTERDAY' => 'Вчера',
  'LBL_TODAY' => 'Днес',
  'LBL_TOMORROW' => 'Утре',
  'LBL_LAST_WEEK' => 'Миналата седмица',
  'LBL_NEXT_WEEK' => 'Следващата седмица',
  'LBL_LAST_7_DAYS' => 'Изминалите 7 дни',
  'LBL_NEXT_7_DAYS' => 'Идващите 7 дни',
  'LBL_LAST_MONTH' => 'Миналия месец',
  'LBL_NEXT_MONTH' => 'Следващия месец',
  'LBL_LAST_QUARTER' => 'Изминалото тримесечие',
  'LBL_THIS_QUARTER' => 'Текущото тримесечие',
  'LBL_LAST_YEAR' => 'Миналата година',
  'LBL_NEXT_YEAR' => 'Следващата година',
  'LBL_SELECT' => 'Избери',
  'LBL_AT_LEAST_ONE_SUMMARY_COLUMN' => 'Най-малко една колона',
  'LBL_SHOW_DETAILS' => 'Показване на допълнителна информация',
  'LBL_1_REPORT_ON' => '1. Справка за',
  'LBL_2_FILTER' => '2. Филтър',
  'LBL_3_GROUP' => '3. Група',
  'LBL_3_CHOOSE' => '3. Изберете колони за показване',
  'LBL_4_CHOOSE' => '4. Изберете колони за показване',
  'LBL_5_CHART_OPTIONS' => '5. Chart Options',
  'LBL_LABEL' => 'Етикет',
  'LBL_THIS_MONTH' => 'Текущия месец',
  'LBL_LAST_30_DAYS' => 'Изминалите 30 дни',
  'LBL_NEXT_30_DAYS' => 'Идващите 30 дни',
  'LBL_THIS_YEAR' => 'Текущата година',
  'LBL_LIST_FORM_TITLE' => 'Справки',
  'LBL_PROSPECT_REPORTS' => 'Справка Целеви клиенти',
  'LBL_IS_EMPTY' => 'Е с празни стойности',
  'LBL_IS_NOT_EMPTY' => 'Е с въведени стойности',
  'LBL_CHART_DESCRIPTION' => 'Описание',
  'LBL_USE_COLUMN_FOR' => 'Серия от данни',
  'LBL_RELATED' => 'Свързани:',
  'LBL_OWNER' => 'Отговорник',
  'LBL_TEAM' => 'Екип',
  'LBL_TOTAL_IS' => 'Общият резултат е',
  'CHART_COUNT_PATTERN' => '{Брой} {модул} където {група_етикет} е {група_текст}',
  'LBL_WITH_A_TOTAL' => 'с обща',
  'LBL_WITH_AN_AVERAGE' => 'със средно',
  'CHART_SUMAVG_PATTERN' => '{брой} {модул} {числена_функция} {числен_етикет} от {валута_символ} {числена_стойност} {хиляди} където {група_етикет} е {група_текст}',
  'LBL_WHOSE_MAXIMUM' => 'чийто максимален',
  'LBL_WHOSE_MINIMUM' => 'чийто минимален',
  'CHART_MINMAX_PATTERN' => '{брой} {модул} {числена_функция} {числен_етикет} е {численаl_стойност} {хиляди} където {група_етикет} е {група_текст}',
  'LBL_ROLLOVER' => 'За детайли поставете мишката върху съответното място на графиката.',
  'LBL_ROLLOVER_WEDGE' => 'За детайли поставете мишката върху съответното място на графиката.',
  'LBL_NO_CHART' => 'Без диаграма',
  'LBL_HORIZ_BAR' => 'Диаграма тип "Horizontal Bar"',
  'LBL_VERT_BAR' => 'Диаграма тип "Vertical Bar"',
  'LBL_PIE' => 'Диаграма тип "Pie"',
  'LBL_LINE' => 'Диаграма тип "Line"',
  'LBL_FUNNEL' => 'Диаграма тип "Funnel"',
  'LBL_GROUP_BY_REQUIRED' => 'За визуализиране на графиката следва условията Групиране по и Колони за обобщаване да имат въведени стойности.<br>',
  'MSG_NO_PERMISSIONS' => 'Не разполагате с необходимите права за достъп за редактиране на тази справка',
  'LBL_NONE' => '-- няма въведени данни --',
  'LBL_NONE_STRING' => 'Няма',
  'LBL_DATE_BASED_FILTERS' => '<i>Филтрите за дати се отнасят за часовата зона на <b>Отговорника To</b> за справката</i>',
  'LBL_CONTRACT_REPORTS' => 'Справки към модул контакти',
  'LBL_MY_CONTRACT_REPORTS' => 'Справки към модул моите контакти',
  'LBL_PUBLISHED_CONTRACT_REPORTS' => 'Публикуване на справки за Договори',
  'LBL_HELLO' => 'Здравей',
  'LBL_SCHEDULED_REPORT_MSG_INTRO' => 'Attached is an auto-generated report sent to you from the Sugar application.  Справката е създадена на',
  'LBL_SCHEDULED_REPORT_MSG_BODY1' => 'и съхранена като "',
  'LBL_SCHEDULED_REPORT_MSG_BODY2' => '"". Ако желаете да промените настройки на справката, влезте в приложението и изберете табулатор Справки.',
  'LBL_LIST_PUBLISHED' => 'Стартирал',
  'LBL_THIS_WEEK' => 'Тази седмица',
  'LBL_NEXT_QUARTER' => 'Следващо тримесечие',
  'LBL_ADD_RELATE' => 'Добави свързани',
  'LBL_DEL_THIS' => 'Изтрий',
  'LBL_ALERT_CANT_ADD' => 'You cannot add a related module until you select a table to relate from.nSelect a module in the dropdown left of the &#39;Add Related&#39; button you clicked.',
  'LBL_BY_DAY' => 'До ден',
  'LBL_DAY' => 'Ден',
  'LBL_OUTER_JOIN_CHECKBOX' => 'Свързани модули',
  'LBL_ANY_ONE_OF' => 'Всеки един от',
  'LBL_RELATED_TABLE_BLANK' => 'Моля, изберете модул свързан за',
  'LBL_FILTER_CONDITIONS' => 'Изберете модул:',
  'LBL_FILTER_OR' => 'ИЛИ',
  'LBL_FILTER_AND' => 'И',
  'LBL_FILTERS_END' => 'от следните филтри',
  'LBL_FAVORITE_REPORTS' => 'Моите избрани справки',
  'LBL_FAVORITE_REPORTS_TITLE' => 'Моите избрани справки',
  'LBL_ADDED_FAVORITES' => 'отчет(и) добавен(и) към Моите избрани справки.',
  'LBL_REMOVED_FAVORITES' => 'отчет(а) премахнат(и) от Моите избрани справки.',
  'LBL_MODULE_TITLE' => 'Справки:',
  'LBL_MODULE_VIEWER_TITLE' => 'Report Viewer:',
  'LBL_REPORT_SCHEDULE_TITLE' => 'План',
  'LBL_FAVORITES_TITLE' => 'Моите избрани справки',
  'LBL_TABLE_CHANGED' => 'Модул списък е бил променен, моля проверете критериите, записани в Груповия раздел',
  'LBL_OPTIONAL_HELP' => 'Select the boxes to display the primary module records even if the related module records do not exist. When the box is not selected, then primary module records will display only when there are one or more related module records.',
  'LBL_RUNTIME_HELP' => 'Опцията дава възможност на потребителите да променят стойностите на критериите за филтриране преди изпълнение на заявката.',
  'LBL_USER_EMPTY_HELP' => 'За да видите записите, без стойност в полето Отговорник, проверете квадратчето "Свързан Модул" в "Детайлите на справката", полето с отметка дали е празно. Това ще покаже всички записи, за които има някаква връзка с потребителите в системата.',
  'DEFAULT_REPORT_TITLE_1' => 'Водени възможности за текущия времеви период',
  'DEFAULT_REPORT_TITLE_2' => 'Подробна прогноза',
  'DEFAULT_REPORT_TITLE_3' => 'Организации със статус партньор',
  'DEFAULT_REPORT_TITLE_4' => 'Организации със статус клиент',
  'DEFAULT_REPORT_TITLE_6' => 'Възможности в зависимост от източника',
  'DEFAULT_REPORT_TITLE_7' => 'Поставени казуси в зависимост от статуса за избраните потребители',
  'DEFAULT_REPORT_TITLE_8' => 'Поставени казуси по месеци за избраните потребители',
  'DEFAULT_REPORT_TITLE_9' => 'Поставени казуси по степентта на важност за избраните потребители',
  'DEFAULT_REPORT_TITLE_10' => 'Нови казуси по месеци',
  'DEFAULT_REPORT_TITLE_11' => 'Водени възможности в зависимост от категорията по екип',
  'DEFAULT_REPORT_TITLE_12' => 'Водени възможности по екип за избраните потребители',
  'DEFAULT_REPORT_TITLE_17' => 'Реализирани възможности в зависимост от източника',
  'DEFAULT_REPORT_TITLE_13' => 'Задачи по екипи за избраните потребители',
  'DEFAULT_REPORT_TITLE_14' => 'Обаждания по екипи за избраните потребители',
  'DEFAULT_REPORT_TITLE_15' => 'Срещи по екипи за избраните потребители',
  'DEFAULT_REPORT_TITLE_16' => 'Организации по екипи за избраните потребители',
  'DEFAULT_REPORT_TITLE_18' => 'Потенциални клиенти в зависимост от източника',
  'DEFAULT_REPORT_TITLE_19' => 'My Usage Metrics (Днес)',
  'DEFAULT_REPORT_TITLE_20' => 'My Usage Metrics (Последните 7 дни)',
  'DEFAULT_REPORT_TITLE_21' => 'My Usage Metrics (Последните 30 дни)',
  'DEFAULT_REPORT_TITLE_22' => 'Моите основни модули за работа (Днес)',
  'DEFAULT_REPORT_TITLE_23' => 'Моите основни модули за работа (Последните 7 дни)',
  'DEFAULT_REPORT_TITLE_24' => 'Моите основни модули за работа (Последните 30 дни)',
  'DEFAULT_REPORT_TITLE_25' => 'Users Usage Metrics (Последните 7 дни)',
  'DEFAULT_REPORT_TITLE_26' => 'Users Usage Metrics (Последните 30 дни)',
  'DEFAULT_REPORT_TITLE_27' => 'Основни модули за работа на потребители, които се отчитат на мен (Последните 30 дни)',
  'DEFAULT_REPORT_TITLE_28' => 'Заявки със забавяне в изпълнението',
  'DEFAULT_REPORT_TITLE_29' => 'Моите модифицирани записи (Последните 7 дни)',
  'DEFAULT_REPORT_TITLE_31' => 'Моите модифицирани записи (Последните 30 дни)',
  'DEFAULT_REPORT_TITLE_32' => 'Модифицирани записи на потребители, които се отчитат на мен (Последните 30 дни)',
  'DEFAULT_REPORT_TITLE_41' => 'Сесии на активните потребители (Последните 7 дни)',
  'DEFAULT_REPORT_TITLE_42' => 'User Sessions Summary (Последните 7 дни)',
  'DEFAULT_REPORT_TITLE_44' => 'Моите нови клиенти',
  'DEFAULT_REPORT_TITLE_45' => 'Възможности според етап на преговорите',
  'DEFAULT_REPORT_TITLE_46' => 'Възможности според техния тип',
  'DEFAULT_REPORT_TITLE_47' => 'Текущи обаждания',
  'DEFAULT_REPORT_TITLE_48' => 'Текущи срещи',
  'DEFAULT_REPORT_TITLE_49' => 'Текущи задачи',
  'DEFAULT_REPORT_TITLE_50' => 'Сключени сделки по организации',
  'DEFAULT_REPORT_TITLE_51' => 'Сключени сделки по потребител',
  'DEFAULT_REPORT_TITLE_52' => 'Всички текущи преговори',
  'DEFAULT_REPORT_TITLE_53' => 'Всички сключени сделки',
  'LBL_ASSIGNED_TO_NAME' => 'Отговорник:',
  'LBL_IS_PUBLISHED' => 'Е публикувана',
  'LBL_FAVORITE' => 'Избран',
  'LBL_NO_ACCESS' => 'Не разполагате с необходимите права за достъп до тази справка.',
  'LBL_SELECT_REPORT_TYPE' => 'Изберете икона, за да определите вида на справката.',
  'LBL_SELECT_MODULE' => 'Изберете модул',
  'LBL_NEXT' => 'Продължи >',
  'LBL_PREVIOUS' => '< Върни',
  'LBL_CANCEL' => 'Отмени',
  'LBL_AVAILABLE_FIELDS' => 'Налични полета',
  'LBL_RELATED_MODULES' => 'Свързани модули',
  'LBL_FIELD_NAME' => 'Име на полето',
  'LBL_NO_IMAGE' => 'Липсва изображение',
  'LBL_BASIC_FILTERS' => 'Основни филтри',
  'LBL_ADVANCED_FILTERS' => 'Допълнителни филтри',
  'LBL_ADD_GROUP' => 'Добавяне на група за филтриране',
  'LBL_REMOVE_GROUP' => 'Изтриване на група за филтриране',
  'LBL_FILTER' => 'Филтър',
  'LBL_ADD_FILTER_TO' => 'Добавяне на критерий за филтриране към',
  'LBL_COLUMN_NAME' => 'Име на колона',
  'LBL_SELECT_REPORT_TYPE_ICON' => 'Изберете вида на справката',
  'LBL_SELECT_MODULE_BUTTON' => 'Натиснете върху иконата за да изберете модул.',
  'LBL_DEFINE_FILTERS' => 'Задайте критерии за филтриране',
  'LBL_SELECT_GROUP_BY' => 'Определете колони за групиране',
  'LBL_CHOOSE_DISPLAY_COLS' => 'Изберете колони за показване',
  'LBL_REPORT_DETAILS' => 'Описание на справката',
  'LBL_REPORT_GROUP_BY' => 'Групиране по',
  'LBL_CLEAR' => 'Изчисти',
  'LBL_CHART_OPTIONS' => 'Определете графика',
  'LBL_CHART_DATA_HELP' => 'Изберете обобщаваща колона, която ще бъде визуализирана в графиката',
  'LBL_DO_ROUND_HELP' => 'Числа по-голени от 100000 ще бъдат закръглявани в графиките.<br>Пример: 350000 ще се визуализира като 350K.',
  'LBL_COMBO_TYPE_AHEAD' => 'Търсене по име на полето',
  'LBL_MAXIMUM_3_GROUP_BY' => 'Матричната справка може да съдържа не повече от 3 условия за групиране.',
  'LBL_MINIMUM_2_GROUP_BY' => 'Матричната справка трябва да съдържа най-малко 2 условия за групиране.',
  'LBL_REMOVE_BTN_HELP' => 'Натиснете за премахване на тази група за филтриране.',
  'LBL_ADD_BTN_HELP' => 'Натиснете за вмъкване на нова група за филтриране.  Чрез задаване на условията И/ИЛИ определете начина за използване на групите за филтриране при изпълнение на справката.',
  'LBL_ORDER_BY' => 'Подредба по',
  'LBL_ASCENDING' => 'Във възходящ ред',
  'LBL_DESCENDING' => 'В нисходящ ред',
  'LBL_TYPE' => 'Тип',
  'LBL_SUBJECT' => 'Относно',
  'LBL_STATUS' => 'Статус',
  'LBL_DATE' => 'Начална дата',
  'LBL_NO_FILTERS' => 'няма филтри.',
  'LBL_DELETED_FIELD_IN_REPORT1' => 'Следните полета в тази заява, не са вече валидни',
  'LBL_DELETED_FIELD_IN_REPORT2' => 'Моля, редактирайте заявката и я проверете, за да се уверите, че останалите параметри, са все още актуални.',
  'LBL_CURRENT_USER' => 'Текущия потребител',
  'LBL_MODULE_CHANGE_PROMPT' => 'Модифицирането на избрания модул може да доведе до загуба на дефинирани филтри, колони за показване и друга налична информация. Продължи?',
  'LBL_CANNOT_BE_EMPTY' => 'не може да остава непопълнена.',
  'LBL_FIELDS_PANEL_HELP_DESC' => 'Представени са всички полета, с възможност за включване в справки от секцията <B>Свързани модули</B>. Изберете поле.',
  'LBL_RELATED_MODULES_PANEL_HELP_DESC' => 'Представени са основният модул за справката и всички свързани с него модули. Изберете модул.',
  'LBL_PREVIEW_REPORT' => 'Преглед',
  'LBL_FILTERS_HELP_DESC' => '<b>Задаване на критерии за филтриране:</b><br/><br/>1) Изберете модул от секция <b>Свързани модули</b> , за който да се дефинират критерии за филтриране. По подразбиране е избран основният модул за справката (най-горе в структурата с модули). <br/><br/><br />	За избиране на свързан модул, натиснете върху заглавието на модула. За преглед на допълнителни модули, асоциирани със свързания, натиснете иконката до заглавието на модула . Избраният модул определя полетата, които да се визуализират в секция <b>Налични полета</b> .<br/><br/><br />	2) За добавяне на нови филтри, изберете поле от списъка с полетата в секция <b>Налични полета</b> . За търсене, въведете заглавие на полето във формата за търсене.<br/><br/><br />	Можете да избирате произволен брой полета за филтриране от повече от един модул, представени в секцията <b>Свързани модули</b> .<br/><br/><br />	3) Изберете <b>И</b> или <b>ИЛИ</b> съответно за включване на всички или само на избрани филтри за търсене на резултатите за справката.<br/><br/><br />	4) [Optional] За вмъкване на нови групи с филтри, натиснете <b>Добавяне на група за филтриране</b> . Броят на групите за филтриране, както и на филтрите в отделните групи е неограничен.<br/><br/><br />	5) [Optional] Изберете опцията Run-time за предоставяне на възможност на потребителите да използват филтъра за персонализиране на резултатите при преглед на справката.',
  'LBL_GROUP_BY_HELP_DESC' => '<b>Определяне на колони за групиране:</b><br></br>1) Изберете модул от секция <b>Свързани модули</b> , за който да се групират записите в справката. По подразбиране е избран основният модул за справката (най-горе в структурата с модули). <br/><br/><br />	За избиране на свързан модул, натиснете върху заглавието на модула. За преглед на допълнителни модули, асоциирани със свързания, натиснете иконката до заглавието на модула. Избраният модул определя полетата, които да се визуализират в секция <b>Налични полета</b> .<br/><br/><br />	2) Изберете поле от секция <b>Налични полета</b> ,с което да се групират записите в справката. За търсене, въведете заглавие на полето във формата за търсене.<br/><br/><br />	Можете да избирате произволен брой полета за групиране от повече от един модул, представени в секцията <b>Свързани модули</b> . Избирането на голям брой условия за групиране, може да доведе до проблеми при разчитането на справката.<br/><br/><br />	За промяна на поредността на полетата, преместете полето с влачене до желаната позиция.  Промени в подредбата се отразяват върху начина за визуализиране на резултатите.<br/><br/>  Matrix справката може да съдържа не повече от 3 условия за групиране.',
  'LBL_DISPLAY_COLS_HELP_DESC' => '<b>Избиране на колони за показване:</b><br/><br/>1) Изберете модул от секция <b>Свързани модули</b> , за който да се визуализират данни в справката. По подразбиране е избран основният модул, посочен при изпълнение на стъпка &#39;Изберете модул&#39; .<br/><br/><br />	За избиране на полета от свързан модул, натиснете върху заглавието на модула. Имате възможност за избиране и на допълнителни модули, асоциирани със свързани модули. Избраният модул определя полетата, които да се визуализират в секция <b>Налични полета</b> .<br/><br/><br />	2) Изберете поле от секция <b>Налични полета</b> за визуализиране на информация от записите в системата, въведена в полето. За търсене, въведете заглавие на полето във формата за търсене.<br/><br/><br />	Можете да избирате произволен брой допълнителни полета от повече от един модул, представени в секцията <b>Свързани модули</b> . Броят на полетата в справката е неограничен. Избирането на голям брой полета може да доведе до по-бавно изпълнение и евентуални проблеми при разчитането на справката.<br/><br/><br />	За промяна на поредността на полетата, преместете полето с влачене до желаната позиция. Промени в подредбата се отразяват върху поредността на колоните при визуализиране на резултатите.',
  'LBL_DISPLAY_SUMMARY_HELP_DESC' => '<b>Избиране на колони за обобщаване:</b><br/><br/>1) Изберете модул от секция <b>Свързани модули</b> , за който да се обобщават данните в справката. По подразбиране е избран основният модул за справката (най-горе в структурата с модули).<br/><br/><br />	За избиране на свързан модул, натиснете върху заглавието на модула. За преглед на допълнителни модули, асоциирани със свързания, натиснете иконката до заглавието на модула. Избраният модул определя полетата, които да се визуализират в секция <b>Налични полета</b> .<br/><br/><br />	2) Изберете поле от секция <b>Налични полета</b> за обобщаване в справката. За търсене, въведете заглавие на полето във формата за търсене.<br/><br/><br />	Можете да избирате произволен брой допълнителни полета за обобщаване от повече от един модул, представени в секцията <b>Свързани модули</b> .<br/><br/>Matrix справката може да съдържа повече от едно поле за визуализиране на multiple values within a single cell.',
  'DEFAULT_REPORT_TITLE_34' => 'Max Sessions Per Day (Последните 7 дни)',
  'DEFAULT_REPORT_TITLE_35' => 'Request per Day (Последните 7 дни)',
  'DEFAULT_REPORT_TITLE_36' => 'Logins Per Day (Последните 7 дни)',
  'DEFAULT_REPORT_TITLE_37' => 'Queries Per Day (Последните 7 дни)',
  'DEFAULT_REPORT_TITLE_38' => 'Files Per Day (Последните 7 дни)',
  'DEFAULT_REPORT_TITLE_39' => 'Users Per Day (Последните 7 дни)',
  'DEFAULT_REPORT_TITLE_40' => 'Memory Usage Per Day (Последните 7 дни)',
  'LBL_ALT_SHOW' => 'Покажи',
  'LBL_REPORT_DATA_COLUMN_ORDERS' => 'Тази справка съдържа данни в следните колони:',
  'LBL_HELP' => 'Помощ',
  'LBL_EDITLAYOUT' => 'Редактиране на подредби',
  'LBL_SORT' => 'Соритрай',
  'LBL_EDIT' => 'Редактирай',
  'LBL_SHOW' => 'Покажи',
  'LBL_MORE' => 'more',
  'LBL_LEFT' => 'Наляво',
  'LBL_RIGHT' => 'Надясно',
  'LBL_DOWN' => 'Долу',
  'LBL_UP' => 'Горе',
  'LBL_ALT_INFORMATION' => 'Информация',
  'DROPDOWN_SCHEDULE_INTERVALS' => 
  array (
    3600 => 'На всеки час',
    21600 => 'На всеки 6 часа',
    43200 => 'На всеки 12 часа',
    86400 => 'Ежедневно',
    604800 => 'Седмично',
    1209600 => 'На всеки 2 седмици',
    2419200 => 'На всеки 4 седмици',
  ),
);

