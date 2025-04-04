<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2025-03-05 06:26:30 --> Config Class Initialized
INFO - 2025-03-05 06:26:30 --> Hooks Class Initialized
DEBUG - 2025-03-05 06:26:30 --> UTF-8 Support Enabled
INFO - 2025-03-05 06:26:30 --> Utf8 Class Initialized
INFO - 2025-03-05 06:26:30 --> URI Class Initialized
INFO - 2025-03-05 06:26:30 --> Router Class Initialized
INFO - 2025-03-05 06:26:30 --> Output Class Initialized
INFO - 2025-03-05 06:26:30 --> Security Class Initialized
DEBUG - 2025-03-05 06:26:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-03-05 06:26:30 --> Input Class Initialized
INFO - 2025-03-05 06:26:30 --> Language Class Initialized
INFO - 2025-03-05 06:26:30 --> Loader Class Initialized
INFO - 2025-03-05 06:26:30 --> Helper loaded: url_helper
INFO - 2025-03-05 06:26:30 --> Helper loaded: file_helper
INFO - 2025-03-05 06:26:30 --> Helper loaded: menu_helper
INFO - 2025-03-05 06:26:30 --> Helper loaded: security_helper
INFO - 2025-03-05 06:26:30 --> Database Driver Class Initialized
ERROR - 2025-03-05 06:26:30 --> Severity: Warning --> mysqli::real_connect(): (HY000/1044): Access denied for user 'sc1sylg_salama'@'localhost' to database 'sc1sylg_salama' /home7/sc1sylg/demo.salama.gasikara.mg/system/database/drivers/mysqli/mysqli_driver.php 211
ERROR - 2025-03-05 06:26:30 --> Unable to connect to the database
INFO - 2025-03-05 06:26:30 --> Email Class Initialized
INFO - 2025-03-05 06:26:30 --> Session: Class initialized using 'files' driver.
INFO - 2025-03-05 06:26:30 --> Helper loaded: form_helper
INFO - 2025-03-05 06:26:30 --> Form Validation Class Initialized
INFO - 2025-03-05 06:26:30 --> Upload Class Initialized
INFO - 2025-03-05 06:26:30 --> Language file loaded: language/english/pagination_lang.php
INFO - 2025-03-05 06:26:30 --> Pagination Class Initialized
DEBUG - 2025-03-05 06:26:30 --> Session class already loaded. Second attempt ignored.
INFO - 2025-03-05 06:26:30 --> User Agent Class Initialized
INFO - 2025-03-05 06:26:30 --> MY_Model class loaded
DEBUG - 2025-03-05 06:26:30 --> User_agent class already loaded. Second attempt ignored.
INFO - 2025-03-05 06:26:30 --> Model "Notification_model" initialized
DEBUG - 2025-03-05 06:26:30 --> User_agent class already loaded. Second attempt ignored.
INFO - 2025-03-05 06:26:30 --> Model "Setting_model" initialized
DEBUG - 2025-03-05 06:26:30 --> User_agent class already loaded. Second attempt ignored.
INFO - 2025-03-05 06:26:30 --> Model "Notificationsetting_model" initialized
DEBUG - 2025-03-05 06:26:30 --> User_agent class already loaded. Second attempt ignored.
INFO - 2025-03-05 06:26:30 --> Model "Language_model" initialized
DEBUG - 2025-03-05 06:26:30 --> User_agent class already loaded. Second attempt ignored.
INFO - 2025-03-05 06:26:30 --> Model "Setting_model" initialized
DEBUG - 2025-03-05 06:26:30 --> User_agent class already loaded. Second attempt ignored.
INFO - 2025-03-05 06:26:30 --> Model "Staff_model" initialized
DEBUG - 2025-03-05 06:26:30 --> User_agent class already loaded. Second attempt ignored.
INFO - 2025-03-05 06:26:30 --> Model "Appointment_model" initialized
DEBUG - 2025-03-05 06:26:30 --> User_agent class already loaded. Second attempt ignored.
INFO - 2025-03-05 06:26:30 --> Model "Smsconfig_model" initialized
DEBUG - 2025-03-05 06:26:30 --> User_agent class already loaded. Second attempt ignored.
INFO - 2025-03-05 06:26:30 --> Model "Payment_model" initialized
ERROR - 2025-03-05 06:26:30 --> Severity: Warning --> mysqli::real_connect(): (HY000/1044): Access denied for user 'sc1sylg_salama'@'localhost' to database 'sc1sylg_salama' /home7/sc1sylg/demo.salama.gasikara.mg/system/database/drivers/mysqli/mysqli_driver.php 211
ERROR - 2025-03-05 06:26:30 --> Unable to connect to the database
ERROR - 2025-03-05 06:26:30 --> Query error: Access denied for user 'sc1sylg_salama'@'localhost' to database 'sc1sylg_salama' - Invalid query: SELECT `sch_settings`.`id`, `sch_settings`.`start_month`, `sch_settings`.`lang_id`, `sch_settings`.`languages`, `sch_settings`.`doctor_restriction`, `sch_settings`.`superadmin_restriction`, `sch_settings`.`mini_logo`, `sch_settings`.`app_logo`, `sch_settings`.`is_rtl`, `sch_settings`.`cron_secret_key`, `sch_settings`.`timezone`, `sch_settings`.`name`, `sch_settings`.`email`, `sch_settings`.`phone`, `languages`.`language`, `sch_settings`.`address`, `sch_settings`.`dise_code`, `sch_settings`.`date_format`, `sch_settings`.`time_format`, `sch_settings`.`currency`, `sch_settings`.`currency_symbol`, `sch_settings`.`credit_limit`, `sch_settings`.`opd_record_month`, `sch_settings`.`opd_record_month`, `sch_settings`.`image`, `sch_settings`.`theme`, `sch_settings`.`mobile_api_url`, `sch_settings`.`app_primary_color_code`, `sch_settings`.`app_secondary_color_code`, `patient_panel`, `sch_settings`.`scan_code_type`, `sch_settings`.`folder_path`, `sch_settings`.`base_url`
FROM `sch_settings`
JOIN `languages` ON `languages`.`id` = `sch_settings`.`lang_id`
ORDER BY `sch_settings`.`id`
ERROR - 2025-03-05 06:26:30 --> Severity: error --> Exception: Call to a member function result_array() on bool /home7/sc1sylg/demo.salama.gasikara.mg/application/models/Setting_model.php 39
INFO - 2025-03-05 06:26:32 --> Config Class Initialized
INFO - 2025-03-05 06:26:32 --> Hooks Class Initialized
DEBUG - 2025-03-05 06:26:32 --> UTF-8 Support Enabled
INFO - 2025-03-05 06:26:32 --> Utf8 Class Initialized
INFO - 2025-03-05 06:26:32 --> URI Class Initialized
INFO - 2025-03-05 06:26:32 --> Router Class Initialized
INFO - 2025-03-05 06:26:32 --> Output Class Initialized
INFO - 2025-03-05 06:26:32 --> Security Class Initialized
DEBUG - 2025-03-05 06:26:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-03-05 06:26:32 --> Input Class Initialized
INFO - 2025-03-05 06:26:32 --> Language Class Initialized
INFO - 2025-03-05 06:26:32 --> Loader Class Initialized
INFO - 2025-03-05 06:26:32 --> Helper loaded: url_helper
INFO - 2025-03-05 06:26:32 --> Helper loaded: file_helper
INFO - 2025-03-05 06:26:32 --> Helper loaded: menu_helper
INFO - 2025-03-05 06:26:32 --> Helper loaded: security_helper
INFO - 2025-03-05 06:26:32 --> Database Driver Class Initialized
ERROR - 2025-03-05 06:26:32 --> Severity: Warning --> mysqli::real_connect(): (HY000/1044): Access denied for user 'sc1sylg_salama'@'localhost' to database 'sc1sylg_salama' /home7/sc1sylg/demo.salama.gasikara.mg/system/database/drivers/mysqli/mysqli_driver.php 211
ERROR - 2025-03-05 06:26:32 --> Unable to connect to the database
INFO - 2025-03-05 06:26:32 --> Email Class Initialized
INFO - 2025-03-05 06:26:32 --> Session: Class initialized using 'files' driver.
INFO - 2025-03-05 06:26:32 --> Helper loaded: form_helper
INFO - 2025-03-05 06:26:32 --> Form Validation Class Initialized
INFO - 2025-03-05 06:26:32 --> Upload Class Initialized
INFO - 2025-03-05 06:26:32 --> Language file loaded: language/english/pagination_lang.php
INFO - 2025-03-05 06:26:32 --> Pagination Class Initialized
DEBUG - 2025-03-05 06:26:32 --> Session class already loaded. Second attempt ignored.
INFO - 2025-03-05 06:26:32 --> User Agent Class Initialized
INFO - 2025-03-05 06:26:32 --> MY_Model class loaded
DEBUG - 2025-03-05 06:26:32 --> User_agent class already loaded. Second attempt ignored.
INFO - 2025-03-05 06:26:32 --> Model "Notification_model" initialized
DEBUG - 2025-03-05 06:26:32 --> User_agent class already loaded. Second attempt ignored.
INFO - 2025-03-05 06:26:32 --> Model "Setting_model" initialized
DEBUG - 2025-03-05 06:26:32 --> User_agent class already loaded. Second attempt ignored.
INFO - 2025-03-05 06:26:32 --> Model "Notificationsetting_model" initialized
DEBUG - 2025-03-05 06:26:32 --> User_agent class already loaded. Second attempt ignored.
INFO - 2025-03-05 06:26:32 --> Model "Language_model" initialized
DEBUG - 2025-03-05 06:26:32 --> User_agent class already loaded. Second attempt ignored.
INFO - 2025-03-05 06:26:32 --> Model "Setting_model" initialized
DEBUG - 2025-03-05 06:26:32 --> User_agent class already loaded. Second attempt ignored.
INFO - 2025-03-05 06:26:32 --> Model "Staff_model" initialized
DEBUG - 2025-03-05 06:26:32 --> User_agent class already loaded. Second attempt ignored.
INFO - 2025-03-05 06:26:32 --> Model "Appointment_model" initialized
DEBUG - 2025-03-05 06:26:32 --> User_agent class already loaded. Second attempt ignored.
INFO - 2025-03-05 06:26:32 --> Model "Smsconfig_model" initialized
DEBUG - 2025-03-05 06:26:32 --> User_agent class already loaded. Second attempt ignored.
INFO - 2025-03-05 06:26:32 --> Model "Payment_model" initialized
ERROR - 2025-03-05 06:26:32 --> Severity: Warning --> mysqli::real_connect(): (HY000/1044): Access denied for user 'sc1sylg_salama'@'localhost' to database 'sc1sylg_salama' /home7/sc1sylg/demo.salama.gasikara.mg/system/database/drivers/mysqli/mysqli_driver.php 211
ERROR - 2025-03-05 06:26:32 --> Unable to connect to the database
ERROR - 2025-03-05 06:26:32 --> Query error: Access denied for user 'sc1sylg_salama'@'localhost' to database 'sc1sylg_salama' - Invalid query: SELECT `sch_settings`.`id`, `sch_settings`.`start_month`, `sch_settings`.`lang_id`, `sch_settings`.`languages`, `sch_settings`.`doctor_restriction`, `sch_settings`.`superadmin_restriction`, `sch_settings`.`mini_logo`, `sch_settings`.`app_logo`, `sch_settings`.`is_rtl`, `sch_settings`.`cron_secret_key`, `sch_settings`.`timezone`, `sch_settings`.`name`, `sch_settings`.`email`, `sch_settings`.`phone`, `languages`.`language`, `sch_settings`.`address`, `sch_settings`.`dise_code`, `sch_settings`.`date_format`, `sch_settings`.`time_format`, `sch_settings`.`currency`, `sch_settings`.`currency_symbol`, `sch_settings`.`credit_limit`, `sch_settings`.`opd_record_month`, `sch_settings`.`opd_record_month`, `sch_settings`.`image`, `sch_settings`.`theme`, `sch_settings`.`mobile_api_url`, `sch_settings`.`app_primary_color_code`, `sch_settings`.`app_secondary_color_code`, `patient_panel`, `sch_settings`.`scan_code_type`, `sch_settings`.`folder_path`, `sch_settings`.`base_url`
FROM `sch_settings`
JOIN `languages` ON `languages`.`id` = `sch_settings`.`lang_id`
ORDER BY `sch_settings`.`id`
ERROR - 2025-03-05 06:26:32 --> Severity: error --> Exception: Call to a member function result_array() on bool /home7/sc1sylg/demo.salama.gasikara.mg/application/models/Setting_model.php 39
INFO - 2025-03-05 06:26:34 --> Config Class Initialized
INFO - 2025-03-05 06:26:34 --> Hooks Class Initialized
DEBUG - 2025-03-05 06:26:34 --> UTF-8 Support Enabled
INFO - 2025-03-05 06:26:34 --> Utf8 Class Initialized
INFO - 2025-03-05 06:26:34 --> URI Class Initialized
INFO - 2025-03-05 06:26:34 --> Router Class Initialized
INFO - 2025-03-05 06:26:34 --> Output Class Initialized
INFO - 2025-03-05 06:26:34 --> Security Class Initialized
DEBUG - 2025-03-05 06:26:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-03-05 06:26:34 --> Input Class Initialized
INFO - 2025-03-05 06:26:34 --> Language Class Initialized
INFO - 2025-03-05 06:26:34 --> Loader Class Initialized
INFO - 2025-03-05 06:26:34 --> Helper loaded: url_helper
INFO - 2025-03-05 06:26:34 --> Helper loaded: file_helper
INFO - 2025-03-05 06:26:34 --> Helper loaded: menu_helper
INFO - 2025-03-05 06:26:34 --> Helper loaded: security_helper
INFO - 2025-03-05 06:26:34 --> Database Driver Class Initialized
ERROR - 2025-03-05 06:26:34 --> Severity: Warning --> mysqli::real_connect(): (HY000/1044): Access denied for user 'sc1sylg_salama'@'localhost' to database 'sc1sylg_salama' /home7/sc1sylg/demo.salama.gasikara.mg/system/database/drivers/mysqli/mysqli_driver.php 211
ERROR - 2025-03-05 06:26:34 --> Unable to connect to the database
INFO - 2025-03-05 06:26:34 --> Email Class Initialized
INFO - 2025-03-05 06:26:34 --> Session: Class initialized using 'files' driver.
INFO - 2025-03-05 06:26:34 --> Helper loaded: form_helper
INFO - 2025-03-05 06:26:34 --> Form Validation Class Initialized
INFO - 2025-03-05 06:26:34 --> Upload Class Initialized
INFO - 2025-03-05 06:26:34 --> Language file loaded: language/english/pagination_lang.php
INFO - 2025-03-05 06:26:34 --> Pagination Class Initialized
DEBUG - 2025-03-05 06:26:34 --> Session class already loaded. Second attempt ignored.
INFO - 2025-03-05 06:26:34 --> User Agent Class Initialized
INFO - 2025-03-05 06:26:34 --> MY_Model class loaded
DEBUG - 2025-03-05 06:26:34 --> User_agent class already loaded. Second attempt ignored.
INFO - 2025-03-05 06:26:34 --> Model "Notification_model" initialized
DEBUG - 2025-03-05 06:26:34 --> User_agent class already loaded. Second attempt ignored.
INFO - 2025-03-05 06:26:34 --> Model "Setting_model" initialized
DEBUG - 2025-03-05 06:26:34 --> User_agent class already loaded. Second attempt ignored.
INFO - 2025-03-05 06:26:34 --> Model "Notificationsetting_model" initialized
DEBUG - 2025-03-05 06:26:34 --> User_agent class already loaded. Second attempt ignored.
INFO - 2025-03-05 06:26:34 --> Model "Language_model" initialized
DEBUG - 2025-03-05 06:26:34 --> User_agent class already loaded. Second attempt ignored.
INFO - 2025-03-05 06:26:34 --> Model "Setting_model" initialized
DEBUG - 2025-03-05 06:26:34 --> User_agent class already loaded. Second attempt ignored.
INFO - 2025-03-05 06:26:34 --> Model "Staff_model" initialized
DEBUG - 2025-03-05 06:26:34 --> User_agent class already loaded. Second attempt ignored.
INFO - 2025-03-05 06:26:34 --> Model "Appointment_model" initialized
DEBUG - 2025-03-05 06:26:34 --> User_agent class already loaded. Second attempt ignored.
INFO - 2025-03-05 06:26:34 --> Model "Smsconfig_model" initialized
DEBUG - 2025-03-05 06:26:34 --> User_agent class already loaded. Second attempt ignored.
INFO - 2025-03-05 06:26:34 --> Model "Payment_model" initialized
ERROR - 2025-03-05 06:26:34 --> Severity: Warning --> mysqli::real_connect(): (HY000/1044): Access denied for user 'sc1sylg_salama'@'localhost' to database 'sc1sylg_salama' /home7/sc1sylg/demo.salama.gasikara.mg/system/database/drivers/mysqli/mysqli_driver.php 211
ERROR - 2025-03-05 06:26:34 --> Unable to connect to the database
ERROR - 2025-03-05 06:26:34 --> Query error: Access denied for user 'sc1sylg_salama'@'localhost' to database 'sc1sylg_salama' - Invalid query: SELECT `sch_settings`.`id`, `sch_settings`.`start_month`, `sch_settings`.`lang_id`, `sch_settings`.`languages`, `sch_settings`.`doctor_restriction`, `sch_settings`.`superadmin_restriction`, `sch_settings`.`mini_logo`, `sch_settings`.`app_logo`, `sch_settings`.`is_rtl`, `sch_settings`.`cron_secret_key`, `sch_settings`.`timezone`, `sch_settings`.`name`, `sch_settings`.`email`, `sch_settings`.`phone`, `languages`.`language`, `sch_settings`.`address`, `sch_settings`.`dise_code`, `sch_settings`.`date_format`, `sch_settings`.`time_format`, `sch_settings`.`currency`, `sch_settings`.`currency_symbol`, `sch_settings`.`credit_limit`, `sch_settings`.`opd_record_month`, `sch_settings`.`opd_record_month`, `sch_settings`.`image`, `sch_settings`.`theme`, `sch_settings`.`mobile_api_url`, `sch_settings`.`app_primary_color_code`, `sch_settings`.`app_secondary_color_code`, `patient_panel`, `sch_settings`.`scan_code_type`, `sch_settings`.`folder_path`, `sch_settings`.`base_url`
FROM `sch_settings`
JOIN `languages` ON `languages`.`id` = `sch_settings`.`lang_id`
ORDER BY `sch_settings`.`id`
ERROR - 2025-03-05 06:26:34 --> Severity: error --> Exception: Call to a member function result_array() on bool /home7/sc1sylg/demo.salama.gasikara.mg/application/models/Setting_model.php 39
INFO - 2025-03-05 06:26:36 --> Config Class Initialized
INFO - 2025-03-05 06:26:36 --> Hooks Class Initialized
DEBUG - 2025-03-05 06:26:36 --> UTF-8 Support Enabled
INFO - 2025-03-05 06:26:36 --> Utf8 Class Initialized
INFO - 2025-03-05 06:26:36 --> URI Class Initialized
INFO - 2025-03-05 06:26:36 --> Router Class Initialized
INFO - 2025-03-05 06:26:36 --> Output Class Initialized
INFO - 2025-03-05 06:26:36 --> Security Class Initialized
DEBUG - 2025-03-05 06:26:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2025-03-05 06:26:36 --> Input Class Initialized
INFO - 2025-03-05 06:26:36 --> Language Class Initialized
INFO - 2025-03-05 06:26:36 --> Loader Class Initialized
INFO - 2025-03-05 06:26:36 --> Helper loaded: url_helper
INFO - 2025-03-05 06:26:36 --> Helper loaded: file_helper
INFO - 2025-03-05 06:26:36 --> Helper loaded: menu_helper
INFO - 2025-03-05 06:26:36 --> Helper loaded: security_helper
INFO - 2025-03-05 06:26:36 --> Database Driver Class Initialized
ERROR - 2025-03-05 06:26:36 --> Severity: Warning --> mysqli::real_connect(): (HY000/1044): Access denied for user 'sc1sylg_salama'@'localhost' to database 'sc1sylg_salama' /home7/sc1sylg/demo.salama.gasikara.mg/system/database/drivers/mysqli/mysqli_driver.php 211
ERROR - 2025-03-05 06:26:36 --> Unable to connect to the database
INFO - 2025-03-05 06:26:36 --> Email Class Initialized
INFO - 2025-03-05 06:26:36 --> Session: Class initialized using 'files' driver.
INFO - 2025-03-05 06:26:36 --> Helper loaded: form_helper
INFO - 2025-03-05 06:26:36 --> Form Validation Class Initialized
INFO - 2025-03-05 06:26:36 --> Upload Class Initialized
INFO - 2025-03-05 06:26:36 --> Language file loaded: language/english/pagination_lang.php
INFO - 2025-03-05 06:26:36 --> Pagination Class Initialized
DEBUG - 2025-03-05 06:26:36 --> Session class already loaded. Second attempt ignored.
INFO - 2025-03-05 06:26:36 --> User Agent Class Initialized
INFO - 2025-03-05 06:26:36 --> MY_Model class loaded
DEBUG - 2025-03-05 06:26:36 --> User_agent class already loaded. Second attempt ignored.
INFO - 2025-03-05 06:26:36 --> Model "Notification_model" initialized
DEBUG - 2025-03-05 06:26:36 --> User_agent class already loaded. Second attempt ignored.
INFO - 2025-03-05 06:26:36 --> Model "Setting_model" initialized
DEBUG - 2025-03-05 06:26:36 --> User_agent class already loaded. Second attempt ignored.
INFO - 2025-03-05 06:26:36 --> Model "Notificationsetting_model" initialized
DEBUG - 2025-03-05 06:26:36 --> User_agent class already loaded. Second attempt ignored.
INFO - 2025-03-05 06:26:36 --> Model "Language_model" initialized
DEBUG - 2025-03-05 06:26:36 --> User_agent class already loaded. Second attempt ignored.
INFO - 2025-03-05 06:26:36 --> Model "Setting_model" initialized
DEBUG - 2025-03-05 06:26:36 --> User_agent class already loaded. Second attempt ignored.
INFO - 2025-03-05 06:26:36 --> Model "Staff_model" initialized
DEBUG - 2025-03-05 06:26:36 --> User_agent class already loaded. Second attempt ignored.
INFO - 2025-03-05 06:26:36 --> Model "Appointment_model" initialized
DEBUG - 2025-03-05 06:26:36 --> User_agent class already loaded. Second attempt ignored.
INFO - 2025-03-05 06:26:36 --> Model "Smsconfig_model" initialized
DEBUG - 2025-03-05 06:26:36 --> User_agent class already loaded. Second attempt ignored.
INFO - 2025-03-05 06:26:36 --> Model "Payment_model" initialized
ERROR - 2025-03-05 06:26:36 --> Severity: Warning --> mysqli::real_connect(): (HY000/1044): Access denied for user 'sc1sylg_salama'@'localhost' to database 'sc1sylg_salama' /home7/sc1sylg/demo.salama.gasikara.mg/system/database/drivers/mysqli/mysqli_driver.php 211
ERROR - 2025-03-05 06:26:36 --> Unable to connect to the database
ERROR - 2025-03-05 06:26:36 --> Query error: Access denied for user 'sc1sylg_salama'@'localhost' to database 'sc1sylg_salama' - Invalid query: SELECT `sch_settings`.`id`, `sch_settings`.`start_month`, `sch_settings`.`lang_id`, `sch_settings`.`languages`, `sch_settings`.`doctor_restriction`, `sch_settings`.`superadmin_restriction`, `sch_settings`.`mini_logo`, `sch_settings`.`app_logo`, `sch_settings`.`is_rtl`, `sch_settings`.`cron_secret_key`, `sch_settings`.`timezone`, `sch_settings`.`name`, `sch_settings`.`email`, `sch_settings`.`phone`, `languages`.`language`, `sch_settings`.`address`, `sch_settings`.`dise_code`, `sch_settings`.`date_format`, `sch_settings`.`time_format`, `sch_settings`.`currency`, `sch_settings`.`currency_symbol`, `sch_settings`.`credit_limit`, `sch_settings`.`opd_record_month`, `sch_settings`.`opd_record_month`, `sch_settings`.`image`, `sch_settings`.`theme`, `sch_settings`.`mobile_api_url`, `sch_settings`.`app_primary_color_code`, `sch_settings`.`app_secondary_color_code`, `patient_panel`, `sch_settings`.`scan_code_type`, `sch_settings`.`folder_path`, `sch_settings`.`base_url`
FROM `sch_settings`
JOIN `languages` ON `languages`.`id` = `sch_settings`.`lang_id`
ORDER BY `sch_settings`.`id`
ERROR - 2025-03-05 06:26:36 --> Severity: error --> Exception: Call to a member function result_array() on bool /home7/sc1sylg/demo.salama.gasikara.mg/application/models/Setting_model.php 39
ERROR - 2025-03-05 06:26:50 --> Severity: Warning --> mysqli::real_connect(): (HY000/1044): Access denied for user 'sc1sylg_salama'@'localhost' to database 'sc1sylg_salama' /home7/sc1sylg/demo.salama.gasikara.mg/system/database/drivers/mysqli/mysqli_driver.php 211
ERROR - 2025-03-05 06:26:50 --> Unable to connect to the database
ERROR - 2025-03-05 06:26:50 --> Severity: Warning --> mysqli::real_connect(): (HY000/1044): Access denied for user 'sc1sylg_salama'@'localhost' to database 'sc1sylg_salama' /home7/sc1sylg/demo.salama.gasikara.mg/system/database/drivers/mysqli/mysqli_driver.php 211
ERROR - 2025-03-05 06:26:50 --> Unable to connect to the database
ERROR - 2025-03-05 06:26:50 --> Query error: Access denied for user 'sc1sylg_salama'@'localhost' to database 'sc1sylg_salama' - Invalid query: SELECT `sch_settings`.`id`, `sch_settings`.`start_month`, `sch_settings`.`lang_id`, `sch_settings`.`languages`, `sch_settings`.`doctor_restriction`, `sch_settings`.`superadmin_restriction`, `sch_settings`.`mini_logo`, `sch_settings`.`app_logo`, `sch_settings`.`is_rtl`, `sch_settings`.`cron_secret_key`, `sch_settings`.`timezone`, `sch_settings`.`name`, `sch_settings`.`email`, `sch_settings`.`phone`, `languages`.`language`, `sch_settings`.`address`, `sch_settings`.`dise_code`, `sch_settings`.`date_format`, `sch_settings`.`time_format`, `sch_settings`.`currency`, `sch_settings`.`currency_symbol`, `sch_settings`.`credit_limit`, `sch_settings`.`opd_record_month`, `sch_settings`.`opd_record_month`, `sch_settings`.`image`, `sch_settings`.`theme`, `sch_settings`.`mobile_api_url`, `sch_settings`.`app_primary_color_code`, `sch_settings`.`app_secondary_color_code`, `patient_panel`, `sch_settings`.`scan_code_type`, `sch_settings`.`folder_path`, `sch_settings`.`base_url`
FROM `sch_settings`
JOIN `languages` ON `languages`.`id` = `sch_settings`.`lang_id`
ORDER BY `sch_settings`.`id`
ERROR - 2025-03-05 06:26:50 --> Severity: error --> Exception: Call to a member function result_array() on bool /home7/sc1sylg/demo.salama.gasikara.mg/application/models/Setting_model.php 39
ERROR - 2025-03-05 06:27:05 --> Severity: Warning --> mysqli::real_connect(): (HY000/1044): Access denied for user 'sc1sylg_salama'@'localhost' to database 'sc1sylg_salama' /home7/sc1sylg/demo.salama.gasikara.mg/system/database/drivers/mysqli/mysqli_driver.php 211
ERROR - 2025-03-05 06:27:05 --> Unable to connect to the database
ERROR - 2025-03-05 06:27:05 --> Severity: Warning --> mysqli::real_connect(): (HY000/1044): Access denied for user 'sc1sylg_salama'@'localhost' to database 'sc1sylg_salama' /home7/sc1sylg/demo.salama.gasikara.mg/system/database/drivers/mysqli/mysqli_driver.php 211
ERROR - 2025-03-05 06:27:05 --> Unable to connect to the database
ERROR - 2025-03-05 06:27:05 --> Query error: Access denied for user 'sc1sylg_salama'@'localhost' to database 'sc1sylg_salama' - Invalid query: SELECT `sch_settings`.`id`, `sch_settings`.`start_month`, `sch_settings`.`lang_id`, `sch_settings`.`languages`, `sch_settings`.`doctor_restriction`, `sch_settings`.`superadmin_restriction`, `sch_settings`.`mini_logo`, `sch_settings`.`app_logo`, `sch_settings`.`is_rtl`, `sch_settings`.`cron_secret_key`, `sch_settings`.`timezone`, `sch_settings`.`name`, `sch_settings`.`email`, `sch_settings`.`phone`, `languages`.`language`, `sch_settings`.`address`, `sch_settings`.`dise_code`, `sch_settings`.`date_format`, `sch_settings`.`time_format`, `sch_settings`.`currency`, `sch_settings`.`currency_symbol`, `sch_settings`.`credit_limit`, `sch_settings`.`opd_record_month`, `sch_settings`.`opd_record_month`, `sch_settings`.`image`, `sch_settings`.`theme`, `sch_settings`.`mobile_api_url`, `sch_settings`.`app_primary_color_code`, `sch_settings`.`app_secondary_color_code`, `patient_panel`, `sch_settings`.`scan_code_type`, `sch_settings`.`folder_path`, `sch_settings`.`base_url`
FROM `sch_settings`
JOIN `languages` ON `languages`.`id` = `sch_settings`.`lang_id`
ORDER BY `sch_settings`.`id`
ERROR - 2025-03-05 06:27:05 --> Severity: error --> Exception: Call to a member function result_array() on bool /home7/sc1sylg/demo.salama.gasikara.mg/application/models/Setting_model.php 39
