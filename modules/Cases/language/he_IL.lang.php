<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'ERR_DELETE_RECORD' => 'מספר רשומה חייבת להיות מפורטת עמ"נ למחוק את החשבון',
    'LBL_TOOL_TIP_BOX_TITLE' => 'KnowledgeBase Suggestions',
    'LBL_TOOL_TIP_TITLE' => 'כותרת: ',
    'LBL_TOOL_TIP_BODY' => 'גוף: ',
    'LBL_TOOL_TIP_INFO' => 'Additional Info:',
    'LBL_TOOL_TIP_USE' => 'השתמש כמו: ',
    'LBL_SUGGESTION_BOX' => 'הצעות',
    'LBL_NO_SUGGESTIONS' => 'אין הצעות',
    'LBL_RESOLUTION_BUTTON' => 'רזולוציה',
    'LBL_SUGGESTION_BOX_STATUS' => 'סטאטוס',
    'LBL_SUGGESTION_BOX_TITLE' => 'תואר',
    'LBL_SUGGESTION_BOX_REL' => 'רלוונטיות',

    'LBL_ACCOUNT_ID' => 'זיהוי חשבון',
    'LBL_ACCOUNT_NAME' => 'שם חשבון:',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'חשבונות',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'פעילויות',
    'LBL_BUGS_SUBPANEL_TITLE' => 'תקלות',
    'LBL_CASE_NUMBER' => 'מספר תיק:',
    'LBL_CASE' => 'תיק:',
    'LBL_CONTACT_NAME' => 'שם איש קשר:',
    'LBL_CONTACT_ROLE' => 'תפקיד:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'אנשי קשר',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'תיקים',
    'LBL_DESCRIPTION' => 'תיאור:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'היסטוריה',
    'LBL_INVITEE' => 'אנשי קשר',
    'LBL_MEMBER_OF' => 'חשבון',
    'LBL_MODULE_NAME' => 'תיקים',
    'LBL_MODULE_TITLE' => 'תיקים: בית',
    'LBL_NEW_FORM_TITLE' => 'תיק חדש',
    'LBL_NUMBER' => 'מספר:',
    'LBL_PRIORITY' => 'עדיפות:',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'פרוייקטים',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'מסמכים',
    'LBL_RESOLUTION' => 'פתרון:',
    'LBL_SEARCH_FORM_TITLE' => 'חיפוש תיקים',
    'LBL_STATUS' => 'סטטוס:',
    'LBL_SUBJECT' => 'נושא:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'משתמש אחראי',
    'LBL_LIST_ACCOUNT_NAME' => 'שם חשבון',
    'LBL_LIST_ASSIGNED' => 'העבר ל',
    'LBL_LIST_CLOSE' => 'סגור',
    'LBL_LIST_FORM_TITLE' => 'רשימת תיקים',
    'LBL_LIST_LAST_MODIFIED' => 'שונה לאחרונה',
    'LBL_LIST_MY_CASES' => 'התיקים הפתוחים שלי',
    'LBL_LIST_NUMBER' => 'מספר',
    'LBL_LIST_PRIORITY' => 'עדיפות',
    'LBL_LIST_STATUS' => 'סטטוס',
    'LBL_LIST_SUBJECT' => 'נושא',

    'LNK_CASE_LIST' => 'תיקים',
    'LNK_NEW_CASE' => 'צור תיק',
    'LBL_LIST_DATE_CREATED' => 'תאריך היווצרות',
    'LBL_ASSIGNED_TO_NAME' => 'מנה שם משתמש:',
    'LBL_TYPE' => 'סוג',
    'LBL_WORK_LOG' => 'יומן עבודה',
    'LNK_IMPORT_CASES' => 'ייבוא אירועים',

    'LBL_CREATED_USER' => 'משתמש שנוצר',
    'LBL_MODIFIED_USER' => 'משתמש ששונה',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'פרוייקטים',
    'LBL_CASE_INFORMATION' => 'פרטי המטרה',  //Can be translated in all caps. This string will be used by SuiteP template menu actions

    // SNIP
    'LBL_UPDATE_TEXT' => 'Updates - Text', //Field for Case updates with text only
    'LBL_INTERNAL' => 'Internal Update',
    'LBL_AOP_CASE_UPDATES' => 'עדכוני אירועים',
    'LBL_AOP_CASE_UPDATES_THREADED' => 'Case Updates Threaded',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => 'Collapse All',
    'LBL_CASE_UPDATES_EXPAND_ALL' => 'Expand All',
    'LBL_AOP_CASE_ATTACHMENTS' => 'צרופות:',

    'LBL_AOP_CASE_EVENTS' => 'Case Events',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => 'Case Attachments:',
    'LBL_ADD_CASE_FILE' => 'Add file',
    'LBL_REMOVE_CASE_FILE' => 'Remove file',
    'LBL_SELECT_CASE_DOCUMENT' => 'Select document',
    'LBL_CLEAR_CASE_DOCUMENT' => 'Clear document',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => 'Internal CRM document',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => 'External file',
    'LBL_CONTACT_CREATED_BY_NAME' => 'Created by contact',
    'LBL_CONTACT_CREATED_BY' => 'נוצר על ידי',
    'LBL_CASE_UPDATE_FORM' => 'Updates - Attachment form', //Form for attachments on case updates
    'LBL_CREATOR_PORTAL' => 'Portal URL', //PR 5426
    'LBL_SUGGESTION' => 'Suggestion', //PR 5426
);