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
    // DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_website' => 'LBL_LIST_WEBSITE',
    'db_billing_address_city' => 'LBL_LIST_CITY',
    // END DON'T CONVERT
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'מסמכים',
    // Dashlet Categories
    'LBL_CHARTS' => 'טבלאות',
    'LBL_DEFAULT' => 'צפייה',
    // END Dashlet Categories

    'ERR_DELETE_RECORD' => 'יש לציין מספר רשומה לצורך מחיקת החשבון.',
    'LBL_ACCOUNT_INFORMATION' => 'סקירת חשבון', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_ACCOUNT_NAME' => 'שם חשבון:',
    'LBL_ACCOUNT' => 'חשבון:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'פעילויות',
    'LBL_ADDRESS_INFORMATION' => 'פרטי הכתובות',
    'LBL_ANNUAL_REVENUE' => 'רווח שנתי:',
    'LBL_ANY_ADDRESS' => 'כתובת כלשהי:',
    'LBL_ANY_EMAIL' => 'דואר אלקטרוני כלשהו:',
    'LBL_ANY_PHONE' => 'טלפון כלשהו:',
    'LBL_ASSIGNED_TO_NAME' => 'הוקצה עבור:',
    'LBL_ASSIGNED_TO_ID' => 'משתמש שהוקצה:',
    'LBL_BILLING_ADDRESS_CITY' => 'עיר לחשבונית:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'מחוז להתחשבנות:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'מיקוד להתחשבנות:',
    'LBL_BILLING_ADDRESS_STATE' => 'רחוב להתחשבנות:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'רחוב להתחשבנות 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'רחוב להתחשבנות 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'רחוב להתחשבנות 4',
    'LBL_BILLING_ADDRESS_STREET' => 'רחוב להתחשבנות:',
    'LBL_BILLING_ADDRESS' => 'כתובת להתחשבנות:',
    'LBL_BUGS_SUBPANEL_TITLE' => 'באגים',
    'LBL_CAMPAIGN_ID' => 'זהות קמפיין',
    'LBL_CASES_SUBPANEL_TITLE' => 'אירועים',
    'LBL_CITY' => 'עיר:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'אנשי קשר',
    'LBL_COUNTRY' => 'מחוז:',
    'LBL_DATE_ENTERED' => 'נוצר בתאריך:',
    'LBL_DATE_MODIFIED' => 'שונה בתאריך:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'חשבונות',
    'LBL_DESCRIPTION_INFORMATION' => 'תיאור המידע',
    'LBL_DESCRIPTION' => 'תיאור:',
    'LBL_DUPLICATE' => 'בטל חשבונות כפולים',
    'LBL_EMAIL' => 'כתובת דואר אלקטרוני:',
    'LBL_EMAIL_OPT_OUT' => 'דואר למשלוח מרשימות תפוצה:',
    'LBL_EMAIL_ADDRESSES' => 'כתובות דוא"ל',
    'LBL_EMPLOYEES' => 'עובדים:',
    'LBL_FAX' => 'פקס:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'הסטוריה',
    'LBL_HOMEPAGE_TITLE' => 'החשבונות שלי',
    'LBL_INDUSTRY' => 'תעשייה:',
    'LBL_INVALID_EMAIL' => 'דואר אלקטרוני לא חוקי:',
    'LBL_INVITEE' => 'אנשי קשר',
    'LBL_LEADS_SUBPANEL_TITLE' => 'לידים',
    'LBL_LIST_ACCOUNT_NAME' => 'שם חשבון',
    'LBL_LIST_CITY' => 'עיר',
    'LBL_LIST_CONTACT_NAME' => 'שם איש קשר',
    'LBL_LIST_EMAIL_ADDRESS' => 'כתובות דואר אלקטרוני',
    'LBL_LIST_FORM_TITLE' => 'רשימת חשבונות',
    'LBL_LIST_PHONE' => 'טלפון',
    'LBL_LIST_STATE' => 'מדינה',
    'LBL_MEMBER_OF' => 'חבר ב:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'חבר בארגונים',
    'LBL_MODULE_NAME' => 'חשבונות',
    'LBL_MODULE_TITLE' => 'חשבונות: דף ראשי',
    'LBL_MODULE_ID' => 'חשבונות',
    'LBL_NAME' => 'שם:',
    'LBL_NEW_FORM_TITLE' => 'חשבון חדש',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'הזדמנויות',
    'LBL_OTHER_EMAIL_ADDRESS' => 'דואר אלקטרוני אחר:',
    'LBL_OTHER_PHONE' => 'טלפון אחר:',
    'LBL_OWNERSHIP' => 'בעלות:',
    'LBL_PARENT_ACCOUNT_ID' => 'זהות חשבון אב',
    'LBL_PHONE_ALT' => 'טלפון אחר:',
    'LBL_PHONE_FAX' => 'פקס אחר:',
    'LBL_PHONE_OFFICE' => 'טלפון במשרד:',
    'LBL_PHONE' => 'טלפון:',
    'LBL_POSTAL_CODE' => 'מיקוד:',
    'LBL_PRODUCTS_TITLE' => 'מוצרים',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'פרויקטים',
    'LBL_PUSH_CONTACTS_BUTTON_LABEL' => 'העתק לאנשי קשר',
    'LBL_PUSH_CONTACTS_BUTTON_TITLE' => 'העתק...',
    'LBL_RATING' => 'דרוג:',
    'LBL_SAVE_ACCOUNT' => 'שמור חשבון',
    'LBL_SEARCH_FORM_TITLE' => 'חפש חשבון',
    'LBL_SHIPPING_ADDRESS_CITY' => 'עיר למשלוח:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'מחוז למשלוח:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'מיקוד למשלוח:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'מדינה למשלוח:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'רחוב למשלוח 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'רחוב למשלוח 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'רחוב למשלוח 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'רחוב למשלוח:',
    'LBL_SHIPPING_ADDRESS' => 'כתובת למשלוח:',
    'LBL_SIC_CODE' => 'מספר ספק משרד הבטחון:',
    'LBL_STATE' => 'מדינה או אזור:',
    'LBL_TICKER_SYMBOL' => 'סימול בורסאי:',
    'LBL_TYPE' => 'סוג:',
    'LBL_WEBSITE' => 'אתר אינטרנט:',
    'LBL_CAMPAIGNS' => 'קמפיינים',
    'LNK_ACCOUNT_LIST' => 'צפה בחשבונות',
    'LNK_NEW_ACCOUNT' => 'צור חשבון',
    'LNK_IMPORT_ACCOUNTS' => 'ייבא חשבון',
    'MSG_DUPLICATE' => 'הרשומה שבחשבון שברצונכם ליצור עלולה להיות עותק של רשומה שכבר קיימת. רשומות השייכות לחשבון, שמכילות שמות זהים, מפורטת מתחת להודעה זאת.<br> הקלק על \'פתיחת חשבון\' להמשך יצירת החשבון החדש, או בחר חשבון המוצג כאן.',
    'MSG_SHOW_DUPLICATES' => 'ייתכן והנתונים בתיק הלקוח שאתה עומד ליצור הם שכפול של רשומת תיק לקוח שכבר קיים. תיקי לקוח המכילים רשומות דומות מפורטים להלן. <br>לחץ על שמור להמשך יצירת חשבון חדש זה, או לחץ על בטל כדי לחזור מבלי ליצור חשבון חדש.',
    'LBL_ASSIGNED_USER_NAME' => 'הוקצה עבור:',
    'LBL_PROSPECT_LIST' => 'רשימת תחזיות',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'חשבונות',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'פרויקטים',
    //For export labels
    'LBL_PARENT_ID' => 'מזהה האב',
    // SNIP
    'LBL_PRODUCTS_SERVICES_PURCHASED_SUBPANEL_TITLE' => 'מוצרים ושירותים שנרכשו',

    'LBL_AOS_CONTRACTS' => 'חוזים',
    'LBL_AOS_INVOICES' => 'חשבוניות',
    'LBL_AOS_QUOTES' => 'ציטוטים',
);