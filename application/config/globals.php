<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

/*Tables*/
$config['user_table'] = 'users';
$config['access_level_table'] = "access_level";
$config['user_log_table'] = "userlog";
$config['password_log_table'] = "passwordlog";
$config['menu_rights_table'] = "user_right";
$config['menu_table'] = "menu";
$config['sidemenu_rights_table'] = "sidemenu_user_right";
$config['sidemenu_table'] = "sidemenu";

/*Columns*/
$config['username_column'] = "Username";
$config['password_column'] = "Password";
$config['access_level_column'] = "Access_Level";
$config['active_column'] = "Active";
$config['authentication_column'] = "Signature";
$config['time_updated_column'] = "Time_Created";
$config['email_column'] = "Email_Address";
$config['fullname_column'] = "Name";
$config['menu_column'] = "menu";
$config['menu_access_column'] = "access_level";
$config['menu_label_column'] = "menu_text";
$config['menu_url_column'] = "menu_url";
$config['access_level_position_column'] = "position";
$config['creator_column'] = "Created_By";

/*Column Indicators*/
$config['access_level_indicator'] = "indicator";
$config['admin_indicator'] = "admin";
$config['temp_indicator'] = "temp";

/*System Variables*/
$config['banner_title'] = "Ministry of Health ";
$config['banner_subtitle'] = "ARV Drugs Supply Chain Management Tool";
$config['firm_name'] = "NASCOP";
$config['default_home_controller'] = "home";
$config['module_after_login'] = "home";

/*Security Policy*/
$config['attempt_limit'] = 4;
$config['normal_expiry'] = 30;
$config['temp_expiry'] = 14;
$config['password_min_length'] = 8;

$config['alpha_password_pool'] = "abcdefghijklmnopqrstuvwxyz";
$config['numeric_password_pool'] = "0123456789";

/*Email Variables*/
$config['email_sender'] = "webadt.chai@gmail.com";
$config['email_sender_title'] = "NASCOP SYSTEM";
$config['reset_mail_subject'] = "NASCOP User Account Password Reset";
