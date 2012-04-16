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
  'LBL_MODULE_TITLE' => '電子メール：',
  'LBL_EMAILTEMPLATE_MESSAGE_WARNING_TITLE' => '注意：',
  'LBL_EMAILTEMPLATE_MESSAGE_MULTIPLE_RECIPIENTS' => '取引先担当者の属性（名前など）を含む電子メールテンプレートを用いて複数の受信者にメールを送信すると予期せぬ結果を招くことがあります。一括メールを送信する際は電子メールキャンペーンを利用することをお勧めします。',
  'LBL_FW' => 'FW:',
  'LBL_RE' => 'RE:',
  'LBL_EMAIL_QUOTE_FOR' => 'Quote for:',
  'LBL_BCC' => 'Bcc:',
  'LBL_CC' => 'Cc:',
  'LBL_COLON' => ':',
  'LBL_FROM' => 'From:',
  'LBL_REPLY_TO' => 'Reply To:',
  'LBL_SAVE_AS_DRAFT_BUTTON_KEY' => 'R',
  'LBL_SEND_BUTTON_KEY' => 'S',
  'LBL_TO_ADDRS' => 'To',
  'LBL_LIST_FROM_ADDR' => 'From',
  'LBL_LIST_TO_ADDR' => 'To',
  'LBL_BUTTON_RAW_KEY' => 'e',
  'LBL_BUTTON_CHECK_KEY' => 'c',
  'LBL_BUTTON_FORWARD_KEY' => 'f',
  'LBL_BUTTON_REPLY_KEY' => 'r',
  'LBL_BUTTON_DISTRIBUTE_KEY' => 'a',
  'LBL_BUTTON_GRAB_KEY' => 't',
  'LBL_TO' => 'To:',
  'LBL_EMAILTEMPLATE_MESSAGE_CLEAR_MSG' => 'Selecting "--None--" will clear any data already entered within the email body. Do you wish to continue?',
  'LBL_ADD_CC_BCC_SEP' => '|',
  'LBL_OF' => 'of',
  'LBL_BUTTON_CREATE' => '作成',
  'LBL_BUTTON_EDIT' => '編集',
  'LBL_QS_DISABLED' => '（このモジュールではクイックサーチは利用できません。選択ボタンを利用してください。）',
  'LBL_SIGNATURE_PREPEND' => '返信時に上記シグネチャを利用',
  'LBL_EMAIL_DEFAULT_DESCRIPTION' => '依頼されたお見積です（このテキストは変更できます）。',
  'LBL_QUOTE_LAYOUT_DOES_NOT_EXIST_ERROR' => '見積のレイアウトファイルが存在しません: $layout',
  'LBL_QUOTE_LAYOUT_REGISTERED_ERROR' => '見積のレイアウトがmodules/Quotes/Layouts.phpに登録されていません。',
  'LBL_CONFIRM_DELETE' => 'このフォルダを削除しても良いですか？',
  'LBL_ENTER_FOLDER_NAME' => 'フォルダ名を入力してください。',
  'LBL_QUOTES_SUBPANEL_TITLE' => '見積',
  'LBL_EMAILS_QUOTES_REL' => '電子メール: 見積',
  'LBL_ERROR_SELECT_REPORT' => 'レポートを選択してください。',
  'LBL_ERROR_SELECT_MODULE_SELECT' => '「関連先:」ドロップダウンよりモジュールを選択してください',
  'LBL_ERROR_SELECT_MODULE' => 'フィールドに関連付けるモジュールを選択してください。',
  'ERR_ARCHIVE_EMAIL' => 'エラー: 保存するメールを選択して下さい。',
  'ERR_DATE_START' => '開始日',
  'ERR_DELETE_RECORD' => '取引先を削除するにはレコード番号を指定する必要があります。',
  'ERR_NOT_ADDRESSED' => '電子メールにはTo, Cc, BCCアドレスが必要です',
  'ERR_TIME_START' => '開始時間',
  'ERR_TIME_SENT' => '送信時間',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => '取引先',
  'LBL_ADD_ANOTHER_FILE' => '別のファイルを追加',
  'LBL_ADD_DASHLETS' => 'ダッシュレットの追加',
  'LBL_ADD_DOCUMENT' => 'ドキュメントを追加',
  'LBL_ADD_ENTRIES' => 'エントリーの追加',
  'LBL_ADD_FILE' => 'ファイルを追加',
  'LBL_ARCHIVED_EMAIL' => '保存メール',
  'LBL_ARCHIVED_MODULE_NAME' => '電子メール',
  'LBL_ATTACHMENTS' => '添付:',
  'LBL_HAS_ATTACHMENT' => '添付あり：',
  'LBL_BODY' => '本文:',
  'LBL_BUGS_SUBPANEL_TITLE' => 'バグトラッカー',
  'LBL_COMPOSE_MODULE_NAME' => '電子メール作成',
  'LBL_CONTACT_FIRST_NAME' => '取引先担当者の名',
  'LBL_CONTACT_LAST_NAME' => '取引先担当者の姓',
  'LBL_CONTACT_NAME' => '取引先担当者:',
  'LBL_CONTACTS_SUBPANEL_TITLE' => '取引先担当者',
  'LBL_CREATED_BY' => '作成者',
  'LBL_DATE_AND_TIME' => '送信日時:',
  'LBL_DATE_SENT' => '送信日付:',
  'LBL_DATE' => '送信日付:',
  'LBL_DELETE_FROM_SERVER' => 'サーバからメッセージを削除',
  'LBL_DESCRIPTION' => '詳細',
  'LBL_EDIT_ALT_TEXT' => '代替テキストの編集',
  'LBL_SEND_IN_PLAIN_TEXT' => 'テキスト形式で送信',
  'LBL_EDIT_MY_SETTINGS' => '設定の編集',
  'LBL_EMAIL_ATTACHMENT' => '電子メール添付',
  'LBL_EMAIL_EDITOR_OPTION' => 'HTMLメールを送信',
  'LBL_EMAIL_SELECTOR' => '選択',
  'LBL_EMAIL' => '電子メール:',
  'LBL_EMAILS_ACCOUNTS_REL' => '電子メール: 取引先',
  'LBL_EMAILS_BUGS_REL' => '電子メール: 不具合',
  'LBL_EMAILS_CASES_REL' => '電子メール: ケース',
  'LBL_EMAILS_CONTACTS_REL' => '電子メール: 契約',
  'LBL_EMAILS_LEADS_REL' => '電子メール: リード',
  'LBL_EMAILS_OPPORTUNITIES_REL' => '電子メール: 商談',
  'LBL_EMAILS_NOTES_REL' => '電子メール：メモ',
  'LBL_EMAILS_PROJECT_REL' => '電子メール: プロジェクト',
  'LBL_EMAILS_PROJECT_TASK_REL' => '電子メール: プロジェクトタスク',
  'LBL_EMAILS_PROSPECT_REL' => '電子メール: ターゲット',
  'LBL_EMAILS_TASKS_REL' => '電子メール: タスク',
  'LBL_EMAILS_USERS_REL' => '電子メール: ユーザ',
  'LBL_EMPTY_FOLDER' => '電子メールがありません',
  'LBL_ERROR_SENDING_EMAIL' => '電子メール送信エラー',
  'LBL_ERROR_SAVING_DRAFT' => 'ドラフトの保存時にエラー',
  'LBL_FORWARD_HEADER' => '転送されたメッセージ:',
  'LBL_FROM_NAME' => 'From（名前）',
  'LBL_HTML_BODY' => 'HTMLボディ',
  'LBL_INVITEE' => '受信者',
  'LBL_LEADS_SUBPANEL_TITLE' => 'リード',
  'LBL_MESSAGE_SENT' => '電子メールを送信しました。',
  'LBL_MODIFIED_BY' => '更新者',
  'LBL_MODULE_NAME_NEW' => '電子メール作成・保存',
  'LBL_MODULE_NAME' => '電子メール',
  'LBL_MY_EMAILS' => '私の電子メール',
  'LBL_NEW_FORM_TITLE' => '電子メール作成・保存',
  'LBL_NONE' => 'なし',
  'LBL_NOT_SENT' => '送信エラー',
  'LBL_NOTE_SEMICOLON' => '注: 複数の電子メールアドレスの区切る場合はセミコロンを使用してください。',
  'LBL_NOTES_SUBPANEL_TITLE' => '添付ファイル',
  'LBL_OPPORTUNITY_SUBPANEL_TITLE' => '商談',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'プロジェクト',
  'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'プロジェクトタスク',
  'LBL_RAW' => 'メールデータ',
  'LBL_SAVE_AS_DRAFT_BUTTON_LABEL' => 'ドラフト保存',
  'LBL_SAVE_AS_DRAFT_BUTTON_TITLE' => 'ドラフト保存[Alt+R]',
  'LBL_SEARCH_FORM_DRAFTS_TITLE' => 'ドラフト検索',
  'LBL_SEARCH_FORM_SENT_TITLE' => '送信済み電子メール検索',
  'LBL_SEARCH_FORM_TITLE' => '電子メール検索',
  'LBL_SEND_ANYWAYS' => 'このメールには件名がありません。送信/保存しますか？',
  'LBL_SEND_BUTTON_LABEL' => '送信',
  'LBL_SEND_BUTTON_TITLE' => '送信[Alt+S]',
  'LBL_SEND' => '送信',
  'LBL_SENT_MODULE_NAME' => '送信済み電子メール',
  'LBL_SHOW_ALT_TEXT' => '代替テキストの表示',
  'LBL_SIGNATURE' => 'シグニチャ',
  'LBL_SUBJECT' => '件名:',
  'LBL_TEXT_BODY' => 'テキストボディ',
  'LBL_TIME' => '送信時間:',
  'LBL_USE_TEMPLATE' => 'テンプレートの利用:',
  'LBL_USERS_SUBPANEL_TITLE' => 'ユーザ',
  'LBL_USERS' => 'ユーザ',
  'LNK_ALL_EMAIL_LIST' => '電子メール',
  'LNK_ARCHIVED_EMAIL_LIST' => '電子メール',
  'LNK_CALL_LIST' => '電話',
  'LNK_DRAFTS_EMAIL_LIST' => 'ドラフト',
  'LNK_EMAIL_LIST' => '電子メール',
  'LBL_EMAIL_RELATE' => '関連先',
  'LNK_EMAIL_TEMPLATE_LIST' => '電子メールテンプレート',
  'LNK_MEETING_LIST' => '会議',
  'LNK_NEW_ARCHIVE_EMAIL' => '電子メール作成・保存',
  'LNK_NEW_CALL' => '電話作成',
  'LNK_NEW_EMAIL_TEMPLATE' => '電子メールテンプレート作成',
  'LNK_NEW_EMAIL' => '電子メール作成・保存',
  'LNK_NEW_MEETING' => '会議作成',
  'LNK_NEW_NOTE' => 'メモ作成',
  'LNK_NEW_SEND_EMAIL' => '電子メール作成',
  'LNK_NEW_TASK' => 'タスク作成',
  'LNK_NOTE_LIST' => 'メモ',
  'LNK_SENT_EMAIL_LIST' => '送信済み電子メール',
  'LNK_TASK_LIST' => 'タスク',
  'LNK_VIEW_CALENDAR' => '今日',
  'LBL_LIST_ASSIGNED' => 'アサイン済み',
  'LBL_LIST_CONTACT_NAME' => '取引先担当者',
  'LBL_LIST_CREATED' => '作成日',
  'LBL_LIST_DATE_SENT' => '送信日',
  'LBL_LIST_DATE' => '送信日',
  'LBL_LIST_FORM_DRAFTS_TITLE' => 'ドラフト',
  'LBL_LIST_FORM_SENT_TITLE' => '送信済み電子メール',
  'LBL_LIST_FORM_TITLE' => '電子メール一覧',
  'LBL_LIST_RELATED_TO' => '関連先',
  'LBL_LIST_SUBJECT' => '件名',
  'LBL_LIST_TIME' => '送信時間',
  'LBL_LIST_TYPE' => 'タイプ',
  'NTC_REMOVE_INVITEE' => '本当にこの受信者を削除して良いですか？',
  'WARNING_SETTINGS_NOT_CONF' => '注: 電子メールを送信するための設定がされていません。',
  'WARNING_NO_UPLOAD_DIR' => 'ファイルの添付ができません: upload_tmp_dirが設定されていません。php.iniの設定を確認してください。',
  'WARNING_UPLOAD_DIR_NOT_WRITABLE' => 'ファイルの添付ができません: upload_tmp_dirの値が不正です。php.iniの設定を確認してください。',
  'LBL_BUTTON_RAW_TITLE' => '元のメッセージを表示[Alt+E]',
  'LBL_BUTTON_RAW_LABEL' => '元データ表示',
  'LBL_BUTTON_RAW_LABEL_HIDE' => '元データ非表示',
  'LBL_BUTTON_CHECK' => '電子メール確認',
  'LBL_BUTTON_CHECK_TITLE' => '新規メールをチェック',
  'LBL_BUTTON_FORWARD' => '転送',
  'LBL_BUTTON_FORWARD_TITLE' => 'このメールを転送[Alt+F]',
  'LBL_BUTTON_REPLY_TITLE' => '返信[Alt+R]',
  'LBL_BUTTON_REPLY' => '返信',
  'LBL_CASES_SUBPANEL_TITLE' => 'ケース',
  'LBL_INBOUND_TITLE' => 'インバウンドメール',
  'LBL_INTENT' => '目的',
  'LBL_MESSAGE_ID' => 'メッセージID',
  'LBL_REPLY_HEADER_1' => '以下の日-',
  'LBL_REPLY_HEADER_2' => 'さんは書きました:',
  'LBL_REPLY_TO_ADDRESS' => 'Reply-toアドレス',
  'LBL_REPLY_TO_NAME' => 'Reply-to名',
  'LBL_LIST_BUG' => 'バグトラッカー',
  'LBL_LIST_CASE' => 'ケース',
  'LBL_LIST_CONTACT' => '取引先担当者',
  'LBL_LIST_LEAD' => 'リード',
  'LBL_LIST_TASK' => 'タスク',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'アサイン先ユーザ',
  'LBL_ALL' => 'すべての',
  'LBL_ASSIGN_WARN' => '2つのオプションがすべて選択されていることを確認してください。',
  'LBL_BACK_TO_GROUP' => 'グループ受信箱へ戻る',
  'LBL_BUTTON_DISTRIBUTE_TITLE' => 'アサイン[Alt+A]',
  'LBL_BUTTON_DISTRIBUTE' => 'アサイン',
  'LBL_BUTTON_GRAB_TITLE' => 'グループから取る[Alt+T]',
  'LBL_BUTTON_GRAB' => 'グループから取る',
  'LBL_CREATE_BUG' => '不具合作成',
  'LBL_CREATE_CASE' => 'ケース作成',
  'LBL_CREATE_CONTACT' => '取引先担当者作成',
  'LBL_CREATE_LEAD' => 'リード作成',
  'LBL_CREATE_TASK' => 'タスク作成',
  'LBL_DIST_TITLE' => 'アサイメント',
  'LBL_LOCK_FAIL_DESC' => '選択されたアイテムは利用不可能です。',
  'LBL_LOCK_FAIL_USER' => 'は所有権を持ちました。',
  'LBL_MASS_DELETE_ERROR' => 'チェックされたアイテムはどれも削除されませんでした。',
  'LBL_NEW' => '新規',
  'LBL_NEXT_EMAIL' => '次のフリーアイテム',
  'LBL_NO_GRAB_DESC' => '利用可能なアイテムがありません。後で再試行してください。',
  'LBL_QUICK_REPLY' => '返信',
  'LBL_REPLIED' => '返信済み',
  'LBL_SELECT_TEAM' => 'チーム選択',
  'LBL_TAKE_ONE_TITLE' => '担当',
  'LBL_TITLE_SEARCH_RESULTS' => '検索結果',
  'LBL_TOGGLE_ALL' => 'すべて選択',
  'LBL_UNKNOWN' => '未知',
  'LBL_UNREAD_HOME' => '未読メール',
  'LBL_UNREAD' => '未読',
  'LBL_USE_ALL' => 'すべての検索結果',
  'LBL_USE_CHECKED' => 'チェックされたもののみ',
  'LBL_USE_MAILBOX_INFO' => '受信箱のアドレスを使用',
  'LBL_USE' => 'アサイン:',
  'LBL_ASSIGN_SELECTED_RESULTS_TO' => '選択された結果のアサイン先:',
  'LBL_USER_SELECT' => 'ユーザ選択',
  'LBL_USING_RULES' => '利用するルール:',
  'LBL_WARN_NO_DIST' => '配布方法が選択されていません',
  'LBL_WARN_NO_USERS' => 'ユーザが選択されていません',
  'LBL_WARN_NO_USERS_OR_TEAM' => 'アサイン先のユーザもしくはチームを選択してください。',
  'LBL_IMPORT_STATUS_TITLE' => 'ステータス',
  'LBL_LIST_STATUS' => 'ステータス',
  'LBL_LIST_TITLE_GROUP_INBOX' => 'グループ受信箱',
  'LBL_LIST_TITLE_MY_DRAFTS' => 'ドラフト',
  'LBL_LIST_TITLE_MY_INBOX' => '私の受信箱',
  'LBL_LIST_TITLE_MY_SENT' => '私の送信済みメール',
  'LBL_LIST_TITLE_MY_ARCHIVES' => '保存メール',
  'LBL_ACTIVITIES_REPORTS' => '活動レポート',
  'LNK_CHECK_MY_INBOX' => '私のメールをチェック',
  'LNK_DATE_SENT' => '送信日',
  'LNK_GROUP_INBOX' => 'グループ受信箱',
  'LNK_MY_DRAFTS' => 'ドラフト',
  'LNK_MY_INBOX' => '私のメール',
  'LNK_VIEW_MY_INBOX' => '私のメールを閲覧',
  'LNK_QUICK_REPLY' => '返信',
  'LNK_MY_ARCHIVED_LIST' => '保存メール',
  'LBL_EMAILS_NO_PRIMARY_TEAM_SPECIFIED' => '主たるチームが指定されていません。',
  'LBL_ASSIGNED_TO' => 'アサイン先:',
  'LBL_MEMBER_OF' => '上位',
  'LBL_QUICK_CREATE' => 'クイック作成',
  'LBL_STATUS' => '電子メールステータス:',
  'LBL_EMAIL_FLAGGED' => 'フラグ:',
  'LBL_EMAIL_REPLY_TO_STATUS' => 'Reply To ステータス:',
  'LBL_TYPE' => 'タイプ:',
  'LBL_EMAILTEMPLATE_MESSAGE_SHOW_TITLE' => '確認',
  'LBL_EMAILTEMPLATE_MESSAGE_SHOW_MSG' => '入力した内容が失われてしまいますが、指定したテンプレートを適用しますか?',
  'LBL_CHECK_ATTACHMENTS' => '添付ファイルをチェックしてください!',
  'LBL_HAS_ATTACHMENTS' => 'この電子メールはすでに添付ファイルがあります。添付ファイルを保持しますか？',
  'ERR_MISSING_REQUIRED_FIELDS' => '必須フィールドが不足しています。',
  'ERR_INVALID_REQUIRED_FIELDS' => '不正な必須フィールドです。',
  'LBL_FILTER_BY_RELATED_BEAN' => '関係のある受信者のみ表示',
  'LBL_RECIPIENTS_HAVE_BEEN_ADDED' => '受信者が追加されました。',
  'LBL_ADD_INBOUND_ACCOUNT' => '追加',
  'LBL_ADD_OUTBOUND_ACCOUNT' => '追加',
  'LBL_EMAIL_ACCOUNTS_INBOUND' => 'メールアカウントの属性',
  'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNT' => '送信SMTPサーバ',
  'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNTS' => '送信SMTPサーバ',
  'LBL_EMAIL_SETTINGS_INBOUND_ACCOUNTS' => 'メールアカウント',
  'LBL_EMAIL_SETTINGS_INBOUND' => '受信メール',
  'LBL_EMAIL_SETTINGS_OUTBOUND' => '送信メール',
  'LBL_ADD_CC' => 'Ccに追加',
  'LBL_ADD_BCC' => 'Bccに追加',
  'LBL_ADD_TO_ADDR' => 'に追加',
  'LBL_SELECTED_ADDR' => '選択済',
  'LBL_SEND_EMAIL_FAIL_TITLE' => 'メッセージは送信できません。',
  'LBL_EMAIL_DETAIL_VIEW_SHOW' => '表示',
  'LBL_EMAIL_DETAIL_VIEW_MORE' => 'さらに表示',
  'LBL_MORE_OPTIONS' => '追加',
  'LBL_LESS_OPTIONS' => '削除',
  'LBL_MAILBOX_TYPE_PERSONAL' => '個人',
  'LBL_MAILBOX_TYPE_GROUP' => 'グループ',
  'LBL_MAILBOX_TYPE_GROUP_FOLDER' => 'グループ - 自動インポート',
  'LBL_SEARCH_FOR' => '検索',
  'LBL_EMAIL_INBOUND_TYPE_HELP' => '<b>個人</b>：あなたによってアクセス可能なメールアカウント。あなただけが管理可能で、このアカウントからメールをインポートします。<br><b>グループ</b>：特定のチーム全体がアクセス可能なアカウント。チームメンバーが管理可能で、このアカウントからメールをインポートします。<br><b>グループ - 自動インポート</b>：特定のチームによってアクセス可能なアカウント。電子メールは自動的にインポートされます。',
  'LBL_ADDRESS_BOOK_SEARCH_HELP' => '受信者を検索するには、電子メールアドレス、姓、または名を入力してください。',
  'LBL_TEST_SETTINGS' => '設定のテスト',
  'LBL_EMPTY_EMAIL_BODY' => '<p><span style="color: #888888;"><em>このメッセージには内容がありません</em></span></p>',
  'LBL_TEST_EMAIL_SUBJECT' => 'Sugarからのメール送信テスト',
  'LBL_NO_SUBJECT' => '(件名なし)',
  'LBL_CHECKING_ACCOUNT' => 'アカウントのチェック中',
  'LBL_TEST_EMAIL_BODY' => 'この電子メールはSugarCRMで指定された送信サーバの設定をテストするために送信されました。このメールが正しく受信されたことは送信サーバの設定が正しいことを意味しています。',
  'LBL_MAIL_SMTPUSER' => 'SMTPユーザ名：',
  'LBL_MAIL_SMTPPASS' => 'SMTPパスワード：',
  'LBL_MAIL_SMTPSERVER' => 'SMTPサーバ：',
  'LBL_SMTP_SERVER_HELP' => 'SMTPサーバはメールの送信に用います。サーバを利用するためにあユーザ名とパスワードを指定してください。',
  'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => '管理者はまだ送信用のデフォルトのアカウントを設定していません。メールのテスト送信ができません。',
  'LBL_MAIL_SMTPAUTH_REQ' => 'SMTP認証を利用？',
  'LBL_MAIL_SMTPPORT' => 'SMTPポート：',
  'LBL_MAIL_SMTPTYPE' => 'SMTPサーバタイプ：',
  'LBL_MAIL_SMTP_SETTINGS' => 'SMTPサーバの仕様',
  'LBL_CHOOSE_EMAIL_PROVIDER' => '電子メールプロバイダを選択してください。',
  'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo!メールパスワード：',
  'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo!メールID：',
  'LBL_GMAIL_SMTPPASS' => 'Gmailパスワード：',
  'LBL_GMAIL_SMTPUSER' => 'Gmail電子メールアドレス：',
  'LBL_EXCHANGE_SMTPPASS' => 'Exchangeパスワード：',
  'LBL_EXCHANGE_SMTPUSER' => 'Exchangeユーザ名：',
  'LBL_EXCHANGE_SMTPPORT' => 'Exchangeサーバポート：',
  'LBL_EXCHANGE_SMTPSERVER' => 'Exchangeサーバ：',
);

