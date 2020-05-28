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
    'LBL_MODULE_NAME' => 'שיחרורים',
    'LBL_MODULE_TITLE' => 'שיחרורים: דף ראשי',
    'LBL_SEARCH_FORM_TITLE' => 'חפש שיחרור',
    'LBL_LIST_FORM_TITLE' => 'רשימת שחרורים',
    'LBL_NEW_FORM_TITLE' => 'שיחרור חדש',
    'LBL_RELEASE' => 'שיחרור:',
    'LBL_LIST_NAME' => 'שיחרור',
    'LBL_NAME' => 'גרסת שחרור:',
    'LBL_LIST_LIST_ORDER' => 'הזמנה',
    'LBL_LIST_ORDER' => 'הזמנה:',
    'LBL_LIST_STATUS' => 'סטאטוס',
    'LBL_STATUS' => 'סטאטוס:',
    'LNK_NEW_RELEASE' => 'רשימת שיחרורים',
    'NTC_DELETE_CONFIRMATION' => 'אתה בטוח שברצונך למחוק רשומה זו?',
    'ERR_DELETE_RECORD' => 'למחיקת שיחרור זה אנא ספק מספר רשומה.',
    'NTC_STATUS' => 'כדי להסיר שחרור זה מהרשימה הנגללת הפוך אותו ללא זמין',
    'NTC_LIST_ORDER' => 'קבע את הסדר שבו יופיע שיחרור זה ברשימה הנגללת',
    'release_status_dom' =>
        array(
            'Active' => 'פעיל',
            'Inactive' => 'לא פעיל',
        ),
    'LBL_EDITLAYOUT' => 'ערוך תצוגה' /*for 508 compliance fix*/,
);
