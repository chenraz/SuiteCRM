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
    'LBL_ASSIGNED_TO_ID' => 'מזהה המשתמש המוקצה',
    'LBL_ASSIGNED_TO_NAME' => 'הוקצה אל',
    'LBL_SECURITYGROUPS' => 'קבוצות אבטחה',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'קבוצות אבטחה',
    'LBL_ID' => 'מזהה',
    'LBL_DATE_ENTERED' => 'תאריך יצירה',
    'LBL_DATE_MODIFIED' => 'התאריך שונה',
    'LBL_MODIFIED' => 'עודכן ע"י',
    'LBL_MODIFIED_NAME' => 'השתנה על-ידי שם',
    'LBL_CREATED' => 'נוצר ע"י',
    'LBL_DESCRIPTION' => 'תיאור',
    'LBL_DELETED' => 'נמחק',
    'LBL_NAME' => 'שם',
    'LBL_CREATED_USER' => 'נוצר על ידי משתמש',
    'LBL_MODIFIED_USER' => 'שונה על ידי משתמש',
    'LBL_LIST_NAME' => 'שם',
    'LBL_EDIT_BUTTON' => 'עריכה',
    'LBL_REMOVE' => 'הסרה',
    'LBL_LIST_FORM_TITLE' => 'רשימת טבלאות ציר',
    'LBL_MODULE_NAME' => 'טבלת ציר',
    'LBL_MODULE_TITLE' => 'טבלת ציר',
    'LBL_HOMEPAGE_TITLE' => 'טבלת הציר שלי',
    'LNK_NEW_RECORD' => 'צור טבלת ציר',
    'LNK_LIST' => 'צפה בטבלת ציר',
    'LBL_SEARCH_FORM_TITLE' => 'חפש טבלת ציר',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'צפה בהסטוריה',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'פעילויות',
    'LBL_NEW_FORM_TITLE' => 'טבלת הציר הבאה',
    'LBL_CONFIG' => 'הגדרה',
    'LBL_TYPE' => 'האיזור לניתוח',
    'LNK_SPOT_LIST' => 'ראה מיקום',
    'LNK_SPOT_CREATE' => 'צור מיקום',

    //Analytics
    'LBL_AN_CONFIGURATION' => 'הגדרות',

    'LBL_AN_UNSUPPORTED_DB' => 'אנו מתנצלים, כרגע מיקומים עובדים עם בסיסי הנתונים MySQL u- MS SQL בלבד',

    //Analytics labels for accounts pivot
    'LBL_AN_ACCOUNTS_ACCOUNT_NAME' => 'שם',
    'LBL_AN_ACCOUNTS_ACCOUNT_TYPE' => 'סוג חשבון',
    'LBL_AN_ACCOUNTS_ACCOUNT_INDUSTRY' => 'תעשיה',
    'LBL_AN_ACCOUNTS_ACCOUNT_BILLING_COUNTRY' => 'מדינה לחיוב',

    //Analytics labels for leads pivot
    'LBL_AN_LEADS_ASSIGNED_USER' => 'משתמש שהוקצה',
    'LBL_AN_LEADS_STATUS' => 'סטטוס',
    'LBL_AN_LEADS_LEAD_SOURCE' => 'מקור הליד',
    'LBL_AN_LEADS_CAMPAIGN_NAME' => 'שם קמפיין',
    'LBL_AN_LEADS_YEAR' => 'שנה',
    'LBL_AN_LEADS_QUARTER' => 'רבעון',
    'LBL_AN_LEADS_MONTH' => 'חודש',
    'LBL_AN_LEADS_WEEK' => 'שבוע',
    'LBL_AN_LEADS_DAY' => 'יום',

    //Analytics labels for sales pivot
    'LBL_AN_SALES_ACCOUNT_NAME' => 'שם חשבון:',
    'LBL_AN_SALES_OPPORTUNITY_NAME' => 'שם הזדמנות:',
    'LBL_AN_SALES_ASSIGNED_USER' => 'משתמש שהוקצה',
    'LBL_AN_SALES_OPPORTUNITY_TYPE' => 'סוג הזדמנות',
    'LBL_AN_SALES_LEAD_SOURCE' => 'מקור הליד',
    'LBL_AN_SALES_AMOUNT' => 'סכום',
    'LBL_AN_SALES_STAGE' => 'שלב במכירות',
    'LBL_AN_SALES_PROBABILITY' => 'הסתברות',
    'LBL_AN_SALES_DATE' => 'תאריך מכירות',
    'LBL_AN_SALES_QUARTER' => 'רבעון מכירות',
    'LBL_AN_SALES_MONTH' => 'חודש מכירות',
    'LBL_AN_SALES_WEEK' => 'שבוע מכירות',
    'LBL_AN_SALES_DAY' => 'יום מכירות',
    'LBL_AN_SALES_YEAR' => 'שנת מכירות',
    'LBL_AN_SALES_CAMPAIGN' => 'קמפיינים',

    //Analytics labels for service pivot
    'LBL_AN_SERVICE_ACCOUNT_NAME' => 'שם חשבון:',
    'LBL_AN_SERVICE_STATE' => 'מדינה',
    'LBL_AN_SERVICE_STATUS' => 'סטטוס',
    'LBL_AN_SERVICE_PRIORITY' => 'עדיפות',
    'LBL_AN_SERVICE_CREATED_DAY' => 'יום יצירה',
    'LBL_AN_SERVICE_CREATED_WEEK' => 'שבוע יצירה',
    'LBL_AN_SERVICE_CREATED_MONTH' => 'חודש יצירה',
    'LBL_AN_SERVICE_CREATED_QUARTER' => 'רבעון יצירה',
    'LBL_AN_SERVICE_CREATED_YEAR' => 'שנת יצירה',
    'LBL_AN_SERVICE_CONTACT_NAME' => 'שם איש קשר',
    'LBL_AN_SERVICE_ASSIGNED_TO' => 'משתמש שהוקצה',

    //Analytics labels for the activities pivot
    'LBL_AN_ACTIVITIES_TYPE' => 'סוג',
    'LBL_AN_ACTIVITIES_NAME' => 'שם',
    'LBL_AN_ACTIVITIES_STATUS' => 'סטטוס',
    'LBL_AN_ACTIVITIES_ASSIGNED_TO' => 'משתמש שהוקצה',

    //Analytics labels for the marketing pivot
    'LBL_AN_MARKETING_STATUS' => 'סטטוס',
    'LBL_AN_MARKETING_TYPE' => 'סוג',
    'LBL_AN_MARKETING_BUDGET' => 'תקציב',
    'LBL_AN_MARKETING_EXPECTED_COST' => 'עלות צפויה',
    'LBL_AN_MARKETING_EXPECTED_REVENUE' => 'רווח צפוי',
    'LBL_AN_MARKETING_OPPORTUNITY_NAME' => 'שם הזדמנות:',
    'LBL_AN_MARKETING_OPPORTUNITY_AMOUNT' => 'סכום',
    'LBL_AN_MARKETING_OPPORTUNITY_SALES_STAGE' => 'שלב המכירה בהזדמנות',
    'LBL_AN_MARKETING_OPPORTUNITY_ASSIGNED_TO' => 'הזדמנות מוקצה ל',
    'LBL_AN_MARKETING_ACCOUNT_NAME' => 'שם חשבון:',

    //Analytics labels for the marketing activities pivot
    'LBL_AN_MARKETINGACTIVITY_CAMPAIGN_NAME' => 'שם קמפיין',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_DATE' => 'תאריך פעילות',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_TYPE' => 'סוג פעילות',
    'LBL_AN_MARKETINGACTIVITY_RELATED_TYPE' => 'סוג מקורב',
    'LBL_AN_MARKETINGACTIVITY_RELATED_ID' => 'קשור למזהה',

    //Analytics labels for the quotes pivot
    'LBL_AN_QUOTES_OPPORTUNITY_NAME' => 'שם הזדמנות:',
    'LBL_AN_QUOTES_OPPORTUNITY_TYPE' => 'סוג הזדמנות',
    'LBL_AN_QUOTES_OPPORTUNITY_LEAD_SOURCE' => 'מקור הליד להזדמנות',
    'LBL_AN_QUOTES_OPPORTUNITY_SALES_STAGE' => 'שלב המכירה בהזדמנות',
    'LBL_AN_QUOTES_ACCOUNT_NAME' => 'שם חשבון:',
    'LBL_AN_QUOTES_CONTACT_NAME' => 'שם איש קשר',
    'LBL_AN_QUOTES_ITEM_NAME' => 'שם פריט',
    'LBL_AN_QUOTES_ITEM_TYPE' => 'סוג פריט',
    'LBL_AN_QUOTES_ITEM_CATEGORY' => 'קטגוריית פריט',
    'LBL_AN_QUOTES_ITEM_QTY' => 'כמות פריטים',
    'LBL_AN_QUOTES_ITEM_LIST_PRICE' => 'מחיר מחירון של הפריט',
    'LBL_AN_QUOTES_ITEM_SALE_PRICE' => 'מחיר מכירה של הפריט',
    'LBL_AN_QUOTES_ITEM_COST_PRICE' => 'מחיר עלות הפריט',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_PRICE' => 'מחיר ההנחה לפריט',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_AMOUNT' => 'כמות הנחה',
    'LBL_AN_QUOTES_ITEM_TOTAL' => 'סה"כ לפריט',
    'LBL_AN_QUOTES_GRAND_TOTAL' => 'סך הכל כללי',
    'LBL_AN_QUOTES_ASSIGNED_TO' => 'משתמש שהוקצה',
    'LBL_AN_QUOTES_DATE_CREATED' => 'תאריך יצירה',
    'LBL_AN_QUOTES_DAY_CREATED' => 'יום יצירה',
    'LBL_AN_QUOTES_WEEK_CREATED' => 'שבוע יצירה',
    'LBL_AN_QUOTES_MONTH_CREATED' => 'חודש יצירה',
    'LBL_AN_QUOTES_QUARTER_CREATED' => 'רבעון יצירה',
    'LBL_AN_QUOTES_YEAR_CREATED' => 'שנת יצירה',

    //Error message when there are multiple values for the label
    'LBL_AN_DUPLICATE_LABEL_FOR_SUBAREA' => 'שגיאה באימות שם תת אזור בטבלת הציר',

    //Added to allow for the UI of the pivot to be language agnostic - PR 5452
    'LBL_RENDERERS_TABLE' =>'טבלה',
    'LBL_RENDERERS_TABLE_BARCHART' =>'גרף',
    'LBL_RENDERERS_HEATMAP' =>'Heatmap',
    'LBL_RENDERERS_ROW_HEATMAP' =>'Row Heatmap',
    'LBL_RENDERERS_COL_HEATMAP' =>'Col Heatmap',
    'LBL_RENDERERS_LINE_CHART' =>'טבלת קווים',
    'LBL_RENDERERS_BAR_CHART' =>'טבלת עמודות',
    'LBL_RENDERERS_STACKED_BAR_CHART' =>'Stacked Bar',
    'LBL_RENDERERS_AREA_CHART' =>'Area Chart',
    'LBL_RENDERERS_SCATTER_CHART' =>'Scatter Chart',

    'LBL_AGGREGATORS_COUNT' => 'ספירה',
    'LBL_AGGREGATORS_COUNT_UNIQUE_VALUES' => 'Count Unique Values',
    'LBL_AGGREGATORS_LIST_UNIQUE_VALUES' => 'List Unique Values',
    'LBL_AGGREGATORS_SUM' => 'סכום',
    'LBL_AGGREGATORS_INTEGER_SUM' => 'Integer Sum',
    'LBL_AGGREGATORS_AVERAGE' => 'ממוצע',
    'LBL_AGGREGATORS_MINIMUM' => 'מינימום',
    'LBL_AGGREGATORS_MAXIMUM' => 'לכל היותר',
    'LBL_AGGREGATORS_SUM_OVER_SUM' => 'Sum over Sum',
    'LBL_AGGREGATORS_80%_UPPER_BOUND' => '80% Upper Bound',
    'LBL_AGGREGATORS_80%_LOWER_BOUND' => '80% Lower Bound',
    'LBL_AGGREGATORS_SUM_AS_FRACTION_OF_TOTAL' => 'Sum as Fraction of Total',
    'LBL_AGGREGATORS_SUM_AS_FRACTION_OF_ROWS' => 'Sum as Fraction of Rows',
    'LBL_AGGREGATORS_SUM_AS_FRACTION_OF_COLUMNS' => 'Sum as Fraction of Columns',
    'LBL_AGGREGATORS_COUNT_AS_FRACTION_OF_TOTAL' => 'Count as Fraction of Total',
    'LBL_AGGREGATORS_COUNT_AS_FRACTION_OF_ROWS' => 'Count as Fraction of Rows',
    'LBL_AGGREGATORS_COUNT_AS_FRACTION_OF_COLUMNS' => 'Count as Fraction of Columns',

    'LBL_LOCALE_STRINGS_RENDER_ERROR' => 'An error occurred rendering the PivotTable results.',
    'LBL_LOCALE_STRINGS_COMPUTING_ERROR' => 'An error occurred computing the PivotTable results.',
    'LBL_LOCALE_STRINGS_UI_RENDER_ERROR' => 'An error occurred rendering the PivotTable UI.',
    'LBL_LOCALE_STRINGS_SELECT_ALL' => 'בחר את כל',
    'LBL_LOCALE_STRINGS_SELECT_NONE' => 'Select None',
    'LBL_LOCALE_STRINGS_TOO_MANY' => '(too many to list)',
    'LBL_LOCALE_STRINGS_FILTER_RESULTS' => 'תוצאות חיפוש',
    'LBL_LOCALE_STRINGS_TOTALS' => 'Totals',
    'LBL_LOCALE_STRINGS_VS' => 'vs',
    'LBL_LOCALE_STRINGS_BY' => 'על-ידי',
    'LBL_LOCALE_STRINGS_OK' => 'אוקיי',

    'LBL_ACTIVITIES_CALL'=>'שיחות טלפון',
    'LBL_ACTIVITIES_MEETING'=>'פגישות',
    'LBL_ACTIVITIES_TASK'=>'משימה',
);
