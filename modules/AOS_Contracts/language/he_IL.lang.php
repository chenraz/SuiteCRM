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
    'LBL_ASSIGNED_TO_NAME' => 'מנהל חוזה',
    'LBL_CONTRACT_ACCOUNT' => 'חשבון',
    'LBL_OPPORTUNITY' => 'הזדמנות',
    'LBL_ID' => 'זיהוי',
    'LBL_DATE_ENTERED' => 'תאריך יצירה:',
    'LBL_DATE_MODIFIED' => 'תאריך שינוי',
    'LBL_MODIFIED' => 'שונה ע"י:',
    'LBL_MODIFIED_NAME' => 'שונה על ידי ששמו',
    'LBL_CREATED' => 'נוצר ע"י',
    'LBL_DESCRIPTION' => 'תאור',
    'LBL_DELETED' => 'נמחק',
    'LBL_NAME' => 'כותרת החוזה',
    'LBL_CREATED_USER' => 'נוצר על ידי משתמש',
    'LBL_MODIFIED_USER' => 'שונה על ידי משתמש',
    'LBL_LIST_NAME' => 'שם',
    'LBL_LIST_FORM_TITLE' => 'Contracts List',
    'LBL_MODULE_NAME' => 'חוזים',
    'LBL_MODULE_TITLE' => 'Contracts: Home',
    'LBL_HOMEPAGE_TITLE' => 'My Contracts',
    'LNK_NEW_RECORD' => 'Create Contract',
    'LNK_LIST' => 'View Contracts',
    'LBL_SEARCH_FORM_TITLE' => 'Search Contracts',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'צפה בהסטוריה',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'פעילויות',
    'LBL_NEW_FORM_TITLE' => 'New Contract',
    'LBL_CONTRACT_NAME' => 'Contract Name',
    'LBL_REFERENCE_CODE ' => 'Reference Code ',
    'LBL_START_DATE' => 'תאריך התחלה',
    'LBL_END_DATE' => 'תאריך סיום',
    'LBL_TOTAL_CONTRACT_VALUE' => 'Contract Value',
    'LBL_STATUS' => 'סטטוס',
    'LBL_CUSTOMER_SIGNED_DATE' => 'Customer Signed Date',
    'LBL_COMPANY_SIGNED_DATE' => 'Company Signed Date',
    'LBL_RENEWAL_REMINDER_DATE' => 'Renewal Reminder Date',
    'LBL_CONTRACT_TYPE' => 'Contract Type',
    'LBL_CONTACT' => 'איש קשר',
    'LBL_ADD_GROUP' => 'Add Group',
    'LBL_DELETE_GROUP' => 'מחק קבוצה',
    'LBL_GROUP_NAME' => 'שם קבוצה',
    'LBL_GROUP_TOTAL' => 'Group Total',
    'LBL_PRODUCT_QUANITY' => 'כמות',
    'LBL_PRODUCT_NAME' => 'מוצר',
    'LBL_PART_NUMBER' => 'Part Number',
    'LBL_PRODUCT_NOTE' => 'תזכורת',
    'LBL_PRODUCT_DESCRIPTION' => 'תאור',
    'LBL_LIST_PRICE' => 'רשימה',
    'LBL_DISCOUNT_AMT' => 'הנחה',
    'LBL_UNIT_PRICE' => 'מחיר מבצע',
    'LBL_TOTAL_PRICE' => 'סה"כ',
    'LBL_VAT' => 'Tax',
    'LBL_VAT_AMT' => 'כמות מס',
    'LBL_SERVICE_NAME' => 'שירות',
    'LBL_SERVICE_LIST_PRICE' => 'רשימה',
    'LBL_SERVICE_PRICE' => 'מחיר מבצע',
    'LBL_SERVICE_DISCOUNT' => 'הנחה',
    'LBL_LINE_ITEMS' => 'פריטי השורה',
    'LBL_SUBTOTAL_AMOUNT' => 'סכום ביניים',
    'LBL_DISCOUNT_AMOUNT' => 'הנחה',
    'LBL_TAX_AMOUNT' => 'מס',
    'LBL_SHIPPING_AMOUNT' => 'שילוח',
    'LBL_TOTAL_AMT' => 'סה"כ',
    'LBL_GRAND_TOTAL' => 'Grand Total',
    'LBL_SHIPPING_TAX' => 'Shipping Tax',
    'LBL_SHIPPING_TAX_AMT' => 'Shipping Tax',
    'LBL_ADD_PRODUCT_LINE' => 'Add Product Line',
    'LBL_ADD_SERVICE_LINE' => 'Add Service Line ',
    'LBL_PRINT_AS_PDF' => 'הדפס כ PDF [Alt+P]',
    'LBL_EMAIL_PDF' => 'Email PDF',
    'LBL_PDF_NAME' => 'חוזה',
    'LBL_EMAIL_NAME' => 'Contract for',
    'LBL_NO_TEMPLATE' => 'ERROR\nNo templates found. If you have not created an Contract template, go to the PDF templates module and create one',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'Contract Value (Default Currency)',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'סכום ביניים (מטבע ברירת מחדל)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'הנחה (מטבע ברירת מחדל)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'מס (מטבע ברירת מחדל)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'משלוח (מטבע ברירת מחדל)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'סה"כ (מטבע ברירת מחדל)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'מס משלוח (מטבע ברירת מחדל)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Grand Total (Default Currency)',

    'LBL_CALL_ID' => 'Call ID',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'קבוצות פריט השורה',
    'LBL_AOS_PRODUCT_QUOTES' => 'Product Quotes',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Quotes: Contracts',
);