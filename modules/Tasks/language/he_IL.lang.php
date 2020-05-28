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
    'LBL_MODULE_NAME' => 'משימה',
    'LBL_MODULE_TITLE' => ' משימות: דף ראשי',
    'LBL_SEARCH_FORM_TITLE' => ' חפש משימה',
    'LBL_LIST_FORM_TITLE' => ' רשימת משימות',
    'LBL_NEW_FORM_TITLE' => ' צור משימה',
    'LBL_LIST_CLOSE' => 'סגור',
    'LBL_LIST_SUBJECT' => 'נושא',
    'LBL_LIST_CONTACT' => 'איש קשר',
    'LBL_LIST_PRIORITY' => 'עדיפות',
    'LBL_LIST_RELATED_TO' => 'קשור אל',
    'LBL_LIST_DUE_DATE' => 'תאריך תפוגה',
    'LBL_LIST_DUE_TIME' => 'שעת תפוגה',
    'LBL_SUBJECT' => 'נושא:',
    'LBL_STATUS' => 'סטאטוס:',
    'LBL_DUE_DATE' => 'תאריך תפוגה:',
    'LBL_DUE_TIME' => 'שעת תפוגה:',
    'LBL_PRIORITY' => 'עדיפות:',
    'LBL_DUE_DATE_AND_TIME' => 'תאריך ושעת תפוגה:',
    'LBL_START_DATE_AND_TIME' => 'תאריך ושעת התחלה:',
    'LBL_START_DATE' => 'תאריך התחלה:',
    'LBL_LIST_START_DATE' => 'תאריך התחלה',
    'LBL_START_TIME' => 'שעת התחלה:',
    'DATE_FORMAT' => '(dd-mm-yyyy)',
    'LBL_NONE' => 'כלום',
    'LBL_CONTACT' => 'איש קשר:',
    'LBL_EMAIL_ADDRESS' => 'כתובת דואר אלקטרוני:',
    'LBL_PHONE' => 'טלפון:',
    'LBL_EMAIL' => 'כתובת דואר אלקטרוני:',
    'LBL_DESCRIPTION' => 'תיאור:',
    'LBL_NAME' => 'שם:',
    'LBL_CONTACT_NAME' => 'שם איש קשר ',
    'LBL_LIST_STATUS' => 'הושלם',
    'LBL_DATE_DUE_FLAG' => 'אין תאריך תפוגה',
    'LBL_DATE_START_FLAG' => 'אין תאריך התחלה',
    'LBL_LIST_MY_TASKS' => 'המשימות הפתוחות שלי',
    'LNK_NEW_TASK' => 'צור משימה',
    'LNK_TASK_LIST' => 'משימות',
    'LNK_IMPORT_TASKS' => 'ייבא משימות',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'הוקצה למשתמש',
    'LBL_ASSIGNED_TO_NAME' => 'הוקצה עבור:',
    'LBL_LIST_DATE_MODIFIED' => 'שונה בתאריך',
    'LBL_CONTACT_ID' => 'איש קשר זהות:',
    'LBL_PARENT_ID' => 'זיהוי הורה:',
    'LBL_CONTACT_PHONE' => 'טלפון של איש השקשר:',
    'LBL_PARENT_TYPE' => 'סוג הורה:',
    'LBL_TASK_INFORMATION' => 'סקירת משימות', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_EDITLAYOUT' => 'ערוך תצוגה' /*for 508 compliance fix*/,
    'LBL_HISTORY_SUBPANEL_TITLE' => 'רשימות',
    //For export labels
    'LBL_DATE_DUE' => 'תאריך יעד',
    'LBL_RELATED_TO' => 'קשור אל',
);
