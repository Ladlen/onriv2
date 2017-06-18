<?php
$lang_name = 'English';
$lang_value = 'en';

$status_arr = array(
'0'=>'not confirmed',
'1'=>'confirmed',
'2'=>'paid'
);

$lang_days = array (
'0' => '?',
'1' => 'Monday',
'2' => 'Tuesday',
'3' => 'Wednesday',
'4' => 'Thursday',
'5' => 'Friday',
'6' => 'Saturday',
'7' => 'Sunday'
);

$lang_days_short = array (
'0' => '?',
'1' => 'Mon',
'2' => 'Tue',
'3' => 'Wed',
'4' => 'Thu',
'5' => 'Fri',
'6' => 'Sat',
'7' => 'Sun'
);

$lang_monts_r = array (
'0' => '?',
'00' => '?',
'01' => 'January',
'02' => 'February',
'03' => 'March',
'04' => 'April',
'05' => 'May',
'06' => 'June',
'07' => 'July',
'08' => 'August',
'09' => 'September',
'10' => 'October',
'11' => 'November',
'12' => 'December'
);

$lang_monts = array (
'0' => '?',
'00' => '?',
'01' => 'January',
'02' => 'February',
'03' => 'March',
'04' => 'April',
'05' => 'May',
'06' => 'June',
'07' => 'July',
'08' => 'August',
'09' => 'September',
'10' => 'October',
'11' => 'November',
'12' => 'December'
);
//=========================================ADMIN INTERFACE
$lang = array(
'language' => 'Language',
'yes' => 'Yes',
'no' => 'No',
'From:' => 'From:',
'To:' => 'To:',
'disabled' => 'Not available',
'admin_title' => 'Control panel',
'menu' => 'Menu',
'home' => 'Home',
'admin' => 'Administrator',
'super_admin' => 'Main administrator',
'user' => 'User',
'users' => 'Users',
'not_found_user' => 'user not found',
'staff' => 'Staff',
'profile' => 'Profile',
'categorys' => 'Categories',
'all_categorys' => 'All categorys',
'category' => 'Category',
'services' => 'Services / Objects',
'services_order' => 'Service / Object',
'service' => 'Object',
'orders' => 'Orders',
'order' => 'order',
'welcome' => 'Welcome',
'settings' => 'Settings',
'photo' => 'Photo',
'photos' => 'Photos',
'add_photo' => 'Add photo',
'photo_catalog' => 'Choose a folder',
'logbook' => 'Log',
'schedule' => 'Schedule',
'login' => 'Login',
'pass' => 'Password',
'enter' => 'Log in',
'lost_pass' => 'I do not remember the password',
'sent' => 'Submit',
'when_sent' => 'Sent',
'logout' => 'Logout',
'error' => 'Error',
'error_login' => 'Wrong username or password',
'error_found_login' => 'This login is already in database, use another',
'error_found_folder' => 'A folder with this name already exists, use another name',
'error_symbol_folder' => 'Not valid characters in folder name',
'error_folder_empty' => 'Enter the name of the folder',
'error_found_replace' => 'The edited object is not found in the database',
'error_found_replace_swing' => 'Editable object has been moved or is not in the database.',
'error_access' => 'Not enough rights',
'error_login_replace_symbol' => 'Username contains not allowed characters (use letters and numbers, no spaces)',
'error_login_replace_number' => 'Login must be at least 3 characters',
'error_login_replace_empty' => 'Login can\'t be blank',
'error_pass_replace_symbol' => 'The password contains not allowed characters',
'error_pass_replace_number' => 'The password must be at least 3 characters',
'error_pass_replace_empty' => 'The password can not be empty',
'error_name_empty' => 'Enter name',
'error_title_empty' => 'Enter the name',
'error_title_number' => 'Name less than 3 characters',
'error_title_symbol' => 'The name contains not allowed characters',
'error_mail_empty' => 'Enter E-mail',
'error_mail_invalid' => 'E-mail entered is not correct',
'error_phone_empty' => 'Enter the phone number',
'error_phone_invalid' => 'The phone number entered is not correct',
'error_upload' => 'Upload failed',
'error_upload_type' => 'Not the right file type',
'error_this_dir' => 'Folder not found',
'confirm_access' => 'Attention! The access level will be changed',
'title' => 'Title',
'name' => 'Name',
'mail' => 'E-mail',
'lost_pass_mail' => 'Enter your E-mail',
'lost_pass_sent' => 'Credentials sent to your email',
'mail_not_found' => 'The person with this address could not be found',
'phone' => 'Phone',
'access_level' => 'The level of access',
'description' => 'Description',
'staff_post' => 'Post',
'date' => 'Date',
'add_date' => 'Add the date',
'time' => 'Time',
'edit' => 'Edit',
'delete' => 'Delete',
'remove' => 'Remove',
'delete_f' => 'will be deleted permanently',
'delete_m' => 'will be deleted permanently',
'continue' => 'Continue',
'moove' => 'Moove',
'up' => 'up',
'down' => 'down',
'done' => 'Done',
'empty_data' => 'The database is empty',
'empty_data_orders' => 'Not Current orders',
'no_file' => 'The data file was not found',
'submit' => 'Apply',
'safe' => 'Safe',
'safe_and_close' => 'Save and close',
'safe_and_back' => 'Save and continue editing',
'saved' => 'Saved',
'close' => 'Close',
'cancel' => 'Cancel',
'add' => 'Add',
'added' => 'Added',
'changed' => 'Changed',
'add_folder' => 'Add folder',
'select' => 'Choose',
'allow_display' => 'To show visitors',
'active' => 'Activate',
'active_yes' => 'Enabled',
'active_no' => 'Disabled',
//'yes' => 'Да',
//'no' => 'Нет',
'on_off' => 'On/Off',
'new_staff' => 'New staff',
'new_category' => 'New category',
'new_service' => 'New service (object)',
'reset' => 'Reset',
'folder' => 'Folder',
'create_new_folder' => 'The name of the new folder',
'to_folder' => 'folder',
'delete_folder' => 'Attention. All contents of the folder will be deleted.',
'back' => 'Back',
'upload' => 'Upload',
'select_file' => 'Select the file',
'search' => 'Search',
'not_found' => 'Not found',
'empty_search' => 'The query empty',
'title_search' => 'The results:',
'allow_html' => 'Allow use HTML',
'title_lost_pass_mess' => 'Your credentials for',
'no_category' => 'Uncategorized',
'category_not_found' => 'Category not found',
'category_empty' => 'Not categories',
'select_staff' => 'To appoint staff',
'select_list_staff' => 'Select staff',
'add_staff' => 'Add staff',
'staff_not_found' => 'User not found',
'operation_mode' => 'Mode',
'unit_time' => 'Time unit',
'year' => 'year',
'month' => 'month',
'months' => 'months',
'week' => 'week',
'weeks' => 'weeks',
'day' => 'day',
'days' => 'days',
'hour' => 'hour',
'hours' => 'hours',
'minutes' => 'minutes',
'time_start' => 'Beginning',
'time_end' => 'Ending',
'spots' => 'Spots',
'c_spots' => 'spots',
'total_spots' => 'total',
'min_spots' => 'min',
'max_spots' => 'max',
'count_spots_order' => 'count?',
'error_counts_spots' => 'Not match the number of seats (total, minimum, maximum).',
'pay' => 'Paying',
'price' => 'price',
'currency' => 'currency',
'select_currency' => 'Currency selection',
'add_unit_time' => 'Add time unit',
'confirm_close' => 'To close without saving?',
'empty_staff' => 'An error occurred in the appointment of staff. Select employees.',
'empty_staff_checkbox' => 'Must be at least one staff.',
'empty_days_checkbox' => 'Must be at least one day',
'daily' => 'Daily',
'hourly' => 'Hourly',
'daily_interval' => 'Span',
'provide' => 'Provide',
'allow_today' => 'Allow orders for the current date?',
'working_days' => 'Working days in week',
'status' => 'status',
'mode' => 'mode',
'disabled_day' => 'non working day',
'closed_day' => 'date closed',
'change_price' => 'the modified price',
'to_plus' => '&uarr; to raise',
'to_minus' => '&darr; to lower',
'no_use' => 'do not use',
'shift_prise' => 'to shift the price',
'sum' => 'amount',
'in_sum' => 'amount',
'settings_month_days_cp' => 'Installation not working days per year or days from the price change',
'today' => 'Today',
'fix_price' => 'Fixed price',
'use' => 'To use',
'go_top' => 'Up',
'go_bottom' => 'Down',
'promo_code' => 'Promo code',
'discount' => 'Discount',
'discount_use_promo_code' => 'Discount (promo code)',
'code' => 'Code',
'discount_count' => 'Subtract',
'discount_sum' => '(=) Amount',
'discount_percent' => '(%) Percent',
'queue' => 'Queue',
'wording' => 'Wording',
'booking_go' => 'Book',
'order_go' => 'Order',
'total_spots_all_time' => 'Spots for all time units',
'select_only_row' => 'The choice of dates or times in a row only',
'active_two_monts' => 'To make available only the current and next month',
'client' => 'Client',
'status_order' => 'Status',
'not_found_obj' => 'the object / service was not found',
'check_order' => 'With marked',
'change_status' => 'To change the status',
'error_act_orders' => 'At the moment the list has been edited and has changed, one or more orders already exist in this list.',
'warrring_act_orders' => 'At the moment the list was edited by other users and changed.',
'not_found_act_order' => 'This order is already absent in this list.',
'cat_link' => 'Link only to this category',
'order_actual' => 'Topical',
'more' => 'More',
'all_orders' => 'All current orders',
'order_more_deck' => 'The list, along with expired orders from two days ago',
'my_orders' => 'My orders',
'reservation' => 'Reserve',
'order_number' => 'The order number',
'history' => 'History',
'history_desc' => 'All paid orders have expired',
'statistics' => 'Statistics',
'statistics_desc' => 'Statistics',
'clients' => 'Clients',
'clients_desc' => 'Clients',
'common_settings' => 'Common',
'form_settings' => 'Form',
'mail_settings' => 'Mail',
'design_settings' => 'Design',
'curr_code_sett' => 'Currency',
'curr_simb_sett' => 'Symbol',
'curr_pos_sett' => 'The position of the currency symbol',
'curr_left_sett' => 'To the left of',
'curr_right_sett' => 'To the right of',
'add_currency' => 'Add currency',
'error_empty_curr_simbol' => 'Do not set the currency symbol',
'error_empty_input' => 'Field is not filled',
'inp_org_name' => 'The name of the organization',
'inp_org_desc' => 'Brief description (for meta title)',
'inp_org_phone' => 'The phone number (for contact information in the notification)',
'inp_org_mail' => 'General E-mail (for contact information in the notification)',
'inp_onoff_sent_mail' => 'Enable the sending of notifications',
'inp_org_sent_mail' => 'Send copies of notices to the General E-mail',
'inp_mail_status' => 'Send customers notifications about the status of the order',
'inp_confirm_mail' => 'To include the confirmation of the orders via the link in the notification',
'inp_captcha' => 'Captcha - Protection against automatic sending of data',
'inp_conf_form0' => 'When ordering you need to specify the E-mail and phone number',
'inp_conf_form1' => 'Only E-mail',
'inp_conf_form2' => 'Only the phone number (separate order confirmation will be impossible)',
'active_colors' => 'The color of the active elements',
'color1' => 'Basic',
'color2' => 'When hover',
'reset_colors' => 'Reset the default colors',
'inp_custom_css' => 'Your CSS',
'inp_custom_header' => 'Content header (HTML, JS)',
'inp_custom_footer' => 'Content footer (HTML, JS)',
'payment' => 'Payment',
'read_modules_error' => 'Not found the module directory',
'payment_modules' => 'Payment modules',
'payment_way' => 'Payment method',
'payment_fact' => 'cash',
'pages' => 'Pages',
'view_count_l' => 'Show',
'view_count_r' => 'orders per page',
'id_link' => 'ID this object',
'id_cat_link' => 'ID this category',


'count_orders' => 'Number of orders',
'total_count_orders' => 'Total orders',
'total_count_summ_currency' => 'The total amount in the currency',
'found_order' => 'Found orders',
'view_orders_select_month' => 'To view the orders for the selected month',
'reset_search' => 'Reset search',
'not_specified' => 'not specified',
'identify_mail' => 'to identify the E-mail address',
'identify_phone' => 'identify by phone number',
'view_orders' => 'Show orders',


'help_units_time' => 'Create the desired number of working hours (sessions, flights...). Set the start and end of each unit ("from" and "to"). In the case when it is not necessary to set a specific end time in the "hours" select "XX".<div class="br_dec"><span></span></div>If you want to take into account the consumption of places, in the "total" indicate the total amount. In this case, for one order/reservation can only take one unit of time and it will be available until it runs out of space on a specific date. (Example: booking flights.) When set to "0" in the "all", the above described the functional integration of ground in the process of your order/booking will not participate. The fields "min" and "max" are intended for installation limitations. In "minim." (min) specifies the number of locations below which to hold would not, "max" (maximum) - how many places you can take for one order/booking. The visitor chooses the number of places you can do not affect the value, set "No" in the field "count" (to consider), then the place will not be counted in calculating the total cost. In cases where you want to give the opportunity to book/to reserve several units of time per order and take into account the number of places in the value, set the maximum number in the option "<a href="#all_time_spots" class="scrollto">Places for all time units</a>". (Example: book of common areas on a few people paid by the hour.)',

'help_daily' => 'If you want to take into account the consumption of places, in the "total" indicate the total amount. In this case, for one order/booking you can occupy only one date and it will be available until it runs out of space. (Example: booking of excursions.) When set to "0" in the "all", the above described the functional integration of ground in the process of your order/booking will not participate. The fields "min" and "max" are intended for installation limitations. In "minim." (min) specifies the number of locations below which to hold would not, "max" (maximum) - how many places you can take for one order/booking. The visitor chooses the number of places you can do not affect the value, set "No" in the field "count" (to consider), then the place will not be counted in calculating the total cost.<br />In cases where you want to give the opportunity to book/to reserve multiple dates for a single order and take into account the number of places in the value, set the maximum number in the option "<a href="#all_time_spots" class="scrollto">Places for all time units</a>".',

'help_dis_days_cp' => 'In the "non working day", the established date will become inactive and produce an order/reservation will be impossible. If you want to set extra value on specific days, you will expose the value of the "modified price", then when choosing these dates, the cost will be offset by this amount. In the hourly mode, will change the value of each unit of time.',

'help_working_days' => 'Do not choose the working days in the week or set the offset value. (For example, if on weekends the price should be higher. In the hourly mode, will change the value of each unit of time.)',

'help_fix_price' => 'Setting a fixed cost, regardless of the number of selected days or time units.<br />(Enter "0" in the "amount" field or leave it blank to use a fixed price.)',

'help_promo_code' => 'Providing discounts by means of promo codes. Fixed amount or percentage will be deducted from order total, if a visitor enters a specified set of characters in the field "promotional Code". To use the discount, leave the field "promo Code" blank. ',

'help_queue' => 'Enable this option if the service should be performed in sequence. For example, if all the services using just one place or room. Busy time to other services on the same date, and will not be available in this. In daily mode will be unavailable dates employed in other services.',

'help_total_spots_all_time' => 'In cases when you want to give the opportunity to book/to reserve several dates or time units per order and take into account the number of places in the value, set the maximum number in this option. All settings on places in units of time or date, will not be counted. To use this option, set the value to "0" or leave blank.',

'help_orders' => 'Not actual orders, after a two-day period are automatically removed from this list. Orders with the status "paid", moved to <a href="logbook.php">story</a>.<div class="br_dec"><span></span></div>In the search box, along with inserting dates, so you can type <i>number</i>, <i>customer name</i>, <i>e-mail</i> and <i>telephone number</i> and <i>name</i> <i>category</i>.',


'php_ver_error1' => 'Attention! Your version is <b>PHP</b> is deprecated',
'php_ver_error2' => 'The system may not work correctly on this server. Requires PHP is not older than <b>5.3.0</b> version.',

//=========================================USER INTERFACE & OTHER

'back_to_current_month' => 'To return to the current month',
'back_month' => 'The previous month',
'next_month' => 'Next month',
'go_submit' => 'Open',
'time_busy' => 'The busy time',
'day_busy' => 'The busy day',
'lost_time' => 'Elapsed time',
'lost_day' => 'Elapsed day',
'active_time' => 'Time freely',
'active_day' => 'To select a date',
'error_bd_serv_connect' => 'Database of services/objects no.',
'bd_serv_empty' => 'Database of services/objects empty.',
'open' => 'Open',
'select_date' => 'Not selected date',
'total_price' => 'Total',
'open_card_staff' => 'To open the staff card',
'card_staff' => 'Staff card',
'in' => 'in',
'comment' => 'Notes (comment)',
'mail_temp' => 'E-mail',
'not_active_dates' => 'Date not available',
'dates_busy' => 'These dates are already taken',
'times_busy' => 'This time is already occupied',
'order_ok_title' => 'the ordering process is successfully completed',
'booking_dates' => 'The selected date',
'booking_times' => 'The selected time',
'to_pay' => 'Payment',
'print' => 'Print',
'order_in' => 'It',
'contact_info' => 'Contact info',
'enter_promocode_discount' => 'If you have a promo code, enter it and enjoy',
'error_promo_code' => 'Not the right promo code',
'your_discount' => 'Your discount',
'obj_name' => 'Denomination',
'select_count_spots' => 'number of spots',
'reset_select_time' => 'Reset time',
'error_select_dates' => 'Not the selected date',
'error_select_time' => 'Time is not selected',
'error_max_spots' => 'Selected the number of spots is more than acceptable',
'error_min_spots' => 'Selected the number of spots is less than the allowable',
'error_empty_spots' => 'Not specified number of spots',
'error_simbol_spots' => 'Error in box number of spots',
'fix_price_hh' => 'Does not depend on the number of selected time',
'fix_price_hd' => 'Does not depend on the number of selected days',
'price_variable' => 'varies',
'price_null' => 'for free',
'enable_spots' => 'available',
'vacancy_spots' => 'availability spots',
'end_spots' => 'There are no available spots',
'end_spots_in_time' => 'At this time, there are no available spots',
'end_spots_in_date' => 'On this date there are no available spots',
'order_totlal_spots' => 'of all spots',
'order_max_allow_spots' => 'you can select up',
'order_min_allow_spots' => 'not less than',
'title_mail_message' => 'Notice of the order',
'title_mail_message_change_order' => 'Change in the order',
'title_mail_message_change_status' => 'The order status is changed',
'sent_cange' => 'Send the customer a new notice (change order)',
'done_order_mail_mess' => 'To your specified E-mail address to send notice',
'confirm_order_mail_mess' => 'Please confirm your order on the link in the email',
'confirm_order_mail_link' => 'To confirm your order click on this link',
'company' => 'Company',
'your_order_number' => 'Your order №',
'confirm_complete' => 'successfully confirmed',
'thankyou' => 'Thank',
'was_confirmed' => 'already been confirmed',
'order_confirm_not_found' => 'The order is not found (confirmation failed)',
'error_captcha' => 'Incorrect code from image',
'change_captcha' => 'Change code',
'payment_now' => 'To pay for your order now',
'select_payment' => 'Select the method of payment',
'payment_wait' => 'Redirected to online payment. Please wait',
'payment_done' => 'successfully paid',
'select_only_pay' => 'A compulsory payment',
'help_only_pay' => 'If this option is enabled, it is possible to make an order without selecting a payment method will be impossible.',
'add_interval' => 'Add interval',
'add_date_interval' => 'Add time interval',
);


?>