<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-11-22 09:03:42 --> Severity: Warning --> Undefined array key "id_user" C:\xampp\htdocs\jbb_control\application\modules\users\views\intranet_users.php 138
ERROR - 2021-11-22 09:07:32 --> Severity: Warning --> Undefined array key "invoice_date" C:\xampp\htdocs\jbb_control\application\modules\users\views\intranet_users_modal.php 61
ERROR - 2021-11-22 09:08:33 --> Severity: Warning --> Undefined array key "id_user" C:\xampp\htdocs\jbb_control\application\modules\users\views\intranet_users.php 138
ERROR - 2021-11-22 09:10:31 --> Severity: Warning --> Undefined array key "id_user" C:\xampp\htdocs\jbb_control\application\modules\users\views\intranet_users.php 138
ERROR - 2021-11-22 09:11:07 --> Severity: Warning --> Undefined array key "id_user" C:\xampp\htdocs\jbb_control\application\modules\users\views\intranet_users.php 138
ERROR - 2021-11-22 09:11:42 --> Severity: Warning --> Undefined array key "id_user" C:\xampp\htdocs\jbb_control\application\modules\users\views\intranet_users.php 136
ERROR - 2021-11-22 09:11:54 --> Severity: Warning --> Undefined array key "id_user" C:\xampp\htdocs\jbb_control\application\modules\users\views\intranet_users.php 136
ERROR - 2021-11-22 09:12:02 --> Severity: Warning --> Undefined array key "id_user" C:\xampp\htdocs\jbb_control\application\modules\users\views\intranet_users.php 136
ERROR - 2021-11-22 09:12:20 --> Severity: Warning --> Undefined array key "id_user" C:\xampp\htdocs\jbb_control\application\modules\users\views\intranet_users.php 136
ERROR - 2021-11-22 09:12:34 --> Severity: Warning --> Undefined array key "id_user" C:\xampp\htdocs\jbb_control\application\modules\users\views\intranet_users.php 136
ERROR - 2021-11-22 09:13:32 --> Severity: Warning --> Undefined array key "id_user" C:\xampp\htdocs\jbb_control\application\modules\users\views\intranet_users.php 136
ERROR - 2021-11-22 09:14:12 --> Severity: Warning --> Undefined array key "id_user" C:\xampp\htdocs\jbb_control\application\modules\users\views\intranet_users.php 136
ERROR - 2021-11-22 09:14:44 --> Severity: Warning --> Undefined array key "id_user" C:\xampp\htdocs\jbb_control\application\modules\users\views\intranet_users.php 136
ERROR - 2021-11-22 09:14:58 --> Severity: Warning --> Undefined array key "id_user" C:\xampp\htdocs\jbb_control\application\modules\users\views\intranet_users.php 136
ERROR - 2021-11-22 09:15:01 --> Severity: Warning --> Undefined array key "id_user" C:\xampp\htdocs\jbb_control\application\modules\users\views\intranet_users.php 136
ERROR - 2021-11-22 10:43:25 --> Severity: Warning --> Undefined property: Users::$settings_model C:\xampp\htdocs\jbb_control\application\modules\users\controllers\Users.php 268
ERROR - 2021-11-22 10:43:25 --> Severity: error --> Exception: Call to a member function resetIntranetUserPassword() on null C:\xampp\htdocs\jbb_control\application\modules\users\controllers\Users.php 268
ERROR - 2021-11-22 10:44:21 --> Severity: Warning --> Array to string conversion C:\xampp\htdocs\jbb_control\system\database\DB_query_builder.php 2442
ERROR - 2021-11-22 10:44:21 --> Query error: Unknown column 'is' in 'where clause' - Invalid query: UPDATE `sige` SET `password` = 'A9AA73BA74C5DDD2E8AF1F97D1F2E223DC5B5AFACCABD87B6490E1A522AEDB7E'
WHERE `is` = Array
ERROR - 2021-11-22 10:45:44 --> Severity: Warning --> Array to string conversion C:\xampp\htdocs\jbb_control\system\database\DB_query_builder.php 2442
ERROR - 2021-11-22 10:45:44 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: UPDATE `sige` SET `password` = 'A9AA73BA74C5DDD2E8AF1F97D1F2E223DC5B5AFACCABD87B6490E1A522AEDB7E'
WHERE `id` = Array
ERROR - 2021-11-22 10:45:49 --> Severity: Warning --> Array to string conversion C:\xampp\htdocs\jbb_control\system\database\DB_query_builder.php 2442
ERROR - 2021-11-22 10:45:49 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: UPDATE `sige` SET `password` = 'A9AA73BA74C5DDD2E8AF1F97D1F2E223DC5B5AFACCABD87B6490E1A522AEDB7E'
WHERE `id` = Array
ERROR - 2021-11-22 10:46:59 --> Query error: Unknown column 'password' in 'field list' - Invalid query: UPDATE `sige` SET `password` = 'A9AA73BA74C5DDD2E8AF1F97D1F2E223DC5B5AFACCABD87B6490E1A522AEDB7E'
WHERE `id` = '1'
ERROR - 2021-11-22 10:47:29 --> Severity: Warning --> require_once(C:\xampp\htdocs\jbb_control\application\libraries/PHPMailer/class.phpmailer.php): Failed to open stream: No such file or directory C:\xampp\htdocs\jbb_control\application\modules\users\controllers\Users.php 295
ERROR - 2021-11-22 10:47:29 --> Severity: error --> Exception: Failed opening required 'C:\xampp\htdocs\jbb_control\application\libraries/PHPMailer/class.phpmailer.php' (include_path='C:\xampp\php\PEAR') C:\xampp\htdocs\jbb_control\application\modules\users\controllers\Users.php 295
ERROR - 2021-11-22 10:51:12 --> Severity: error --> Exception: Call to undefined function each() C:\xampp\htdocs\jbb_control\application\libraries\PHPMailer\class.smtp.php 544
ERROR - 2021-11-22 10:58:23 --> Severity: error --> Exception: Call to undefined function each() C:\xampp\htdocs\jbb_control\application\libraries\PHPMailer\class.smtp.php 544
ERROR - 2021-11-22 11:14:26 --> Query error: Table 'jbb_control.payroll' doesn't exist - Invalid query: SELECT count(id_payroll) CONTEO FROM payroll P INNER JOIN param_jobs J ON J.id_job = P.fk_id_job INNER JOIN param_client C ON C.id_param_client = J.fk_id_param_client WHERE P.start >= '2021-01-01' AND C.fk_id_app_company = 1
ERROR - 2021-11-22 11:15:11 --> Severity: error --> Exception: Call to undefined method General_model::get_payroll() C:\xampp\htdocs\jbb_control\application\modules\dashboard\controllers\Dashboard.php 35
ERROR - 2021-11-22 11:15:26 --> Severity: Warning --> Undefined variable $info C:\xampp\htdocs\jbb_control\application\modules\dashboard\views\dashboard.php 60
ERROR - 2021-11-22 11:16:13 --> Severity: Warning --> Undefined variable $info C:\xampp\htdocs\jbb_control\application\modules\dashboard\views\dashboard.php 60
ERROR - 2021-11-22 11:18:38 --> Su servidor no soporta la función GD necesaria para este tipo de imagen.
ERROR - 2021-11-22 11:18:38 --> El formato de imagen JPG no está soportado.
ERROR - 2021-11-22 11:19:11 --> Severity: Warning --> Undefined variable $info C:\xampp\htdocs\jbb_control\application\modules\dashboard\views\dashboard.php 60
ERROR - 2021-11-22 11:19:40 --> Severity: Warning --> Undefined variable $info C:\xampp\htdocs\jbb_control\application\modules\dashboard\views\dashboard.php 60
ERROR - 2021-11-22 11:22:30 --> Su servidor no soporta la función GD necesaria para este tipo de imagen.
ERROR - 2021-11-22 11:22:30 --> El formato de imagen JPG no está soportado.
ERROR - 2021-11-22 11:23:36 --> Su servidor no soporta la función GD necesaria para este tipo de imagen.
ERROR - 2021-11-22 11:23:36 --> El formato de imagen JPG no está soportado.
ERROR - 2021-11-22 11:27:05 --> Su servidor no soporta la función GD necesaria para este tipo de imagen.
ERROR - 2021-11-22 11:27:05 --> El formato de imagen JPG no está soportado.
ERROR - 2021-11-22 12:38:50 --> Severity: Warning --> Undefined variable $info C:\xampp\htdocs\jbb_control\application\modules\dashboard\views\dashboard.php 60
ERROR - 2021-11-22 12:39:36 --> Severity: error --> Exception: Call to undefined method General_model::get_taxes() C:\xampp\htdocs\jbb_control\application\modules\settings\controllers\Settings.php 405
ERROR - 2021-11-22 12:40:24 --> Severity: Warning --> Undefined array key "company_address" C:\xampp\htdocs\jbb_control\application\modules\settings\views\company_info.php 82
ERROR - 2021-11-22 12:40:24 --> Severity: Warning --> Undefined variable $taxInfo C:\xampp\htdocs\jbb_control\application\modules\settings\views\company_info.php 105
ERROR - 2021-11-22 12:41:20 --> Severity: Warning --> Undefined variable $taxInfo C:\xampp\htdocs\jbb_control\application\modules\settings\views\company_info.php 102
ERROR - 2021-11-22 12:41:25 --> Severity: error --> Exception: Call to undefined method General_model::get_countries() C:\xampp\htdocs\jbb_control\application\modules\settings\controllers\Settings.php 426
ERROR - 2021-11-22 12:42:05 --> Severity: error --> Exception: Call to undefined method General_model::get_countries() C:\xampp\htdocs\jbb_control\application\modules\settings\controllers\Settings.php 426
ERROR - 2021-11-22 12:42:44 --> Severity: Warning --> Undefined variable $taxInfo C:\xampp\htdocs\jbb_control\application\modules\settings\views\company_info.php 102
ERROR - 2021-11-22 12:42:47 --> Severity: Warning --> Undefined array key "company_gst" C:\xampp\htdocs\jbb_control\application\modules\settings\views\app_company_modal.php 43
ERROR - 2021-11-22 12:42:47 --> Severity: Warning --> Undefined array key "company_address" C:\xampp\htdocs\jbb_control\application\modules\settings\views\app_company_modal.php 54
ERROR - 2021-11-22 12:42:47 --> Severity: Warning --> Undefined variable $infoCountries C:\xampp\htdocs\jbb_control\application\modules\settings\views\app_company_modal.php 65
ERROR - 2021-11-22 12:42:47 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, null given C:\xampp\htdocs\jbb_control\application\modules\settings\views\app_company_modal.php 65
ERROR - 2021-11-22 12:44:18 --> Severity: Warning --> Undefined variable $taxInfo C:\xampp\htdocs\jbb_control\application\modules\settings\views\company_info.php 102
ERROR - 2021-11-22 12:44:49 --> Severity: Warning --> Undefined variable $taxInfo C:\xampp\htdocs\jbb_control\application\modules\settings\views\company_info.php 102
ERROR - 2021-11-22 12:45:16 --> Severity: Warning --> Undefined variable $taxInfo C:\xampp\htdocs\jbb_control\application\modules\settings\views\company_info.php 102
ERROR - 2021-11-22 12:45:32 --> Severity: Warning --> Undefined variable $taxInfo C:\xampp\htdocs\jbb_control\application\modules\settings\views\company_info.php 102
ERROR - 2021-11-22 12:45:57 --> Severity: Warning --> Undefined variable $taxInfo C:\xampp\htdocs\jbb_control\application\modules\settings\views\company_info.php 102
ERROR - 2021-11-22 12:46:03 --> Query error: Unknown column 'company_address' in 'field list' - Invalid query: UPDATE `app_company` SET `company_name` = 'SISTEMAScontrol.', `company_contact` = 'BENJAMIN MOTTA', `company_movil` = '3162490927', `company_address` = '', `company_gst` = '', `fk_id_city` = NULL
WHERE `id_company` = '1'
ERROR - 2021-11-22 12:47:30 --> Severity: Warning --> Undefined variable $taxInfo C:\xampp\htdocs\jbb_control\application\modules\settings\views\company_info.php 102
ERROR - 2021-11-22 12:47:32 --> Severity: Warning --> Undefined variable $taxInfo C:\xampp\htdocs\jbb_control\application\modules\settings\views\company_info.php 102
ERROR - 2021-11-22 12:48:18 --> Severity: Warning --> Undefined variable $taxInfo C:\xampp\htdocs\jbb_control\application\modules\settings\views\company_info.php 102
ERROR - 2021-11-22 12:49:07 --> Severity: Warning --> Undefined variable $taxInfo C:\xampp\htdocs\jbb_control\application\modules\settings\views\company_info.php 102
ERROR - 2021-11-22 12:49:55 --> Severity: Warning --> Undefined variable $taxInfo C:\xampp\htdocs\jbb_control\application\modules\settings\views\company_info.php 102
ERROR - 2021-11-22 12:56:21 --> Severity: Warning --> Undefined variable $parametric C:\xampp\htdocs\jbb_control\application\modules\settings\views\company_info.php 72
ERROR - 2021-11-22 12:56:21 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\settings\views\company_info.php 72
ERROR - 2021-11-22 12:56:21 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\settings\views\company_info.php 72
ERROR - 2021-11-22 12:56:21 --> Severity: Warning --> Undefined variable $parametric C:\xampp\htdocs\jbb_control\application\modules\settings\views\company_info.php 75
ERROR - 2021-11-22 12:56:21 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\settings\views\company_info.php 75
ERROR - 2021-11-22 12:56:21 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\settings\views\company_info.php 75
ERROR - 2021-11-22 12:56:21 --> Severity: Warning --> Undefined variable $parametric C:\xampp\htdocs\jbb_control\application\modules\settings\views\company_info.php 78
ERROR - 2021-11-22 12:56:21 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\settings\views\company_info.php 78
ERROR - 2021-11-22 12:56:21 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\settings\views\company_info.php 78
ERROR - 2021-11-22 12:56:46 --> Severity: Warning --> Undefined variable $parametric C:\xampp\htdocs\jbb_control\application\modules\settings\views\company_info.php 102
ERROR - 2021-11-22 12:56:46 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\settings\views\company_info.php 102
ERROR - 2021-11-22 12:56:46 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\settings\views\company_info.php 102
ERROR - 2021-11-22 12:56:46 --> Severity: Warning --> Undefined variable $parametric C:\xampp\htdocs\jbb_control\application\modules\settings\views\company_info.php 105
ERROR - 2021-11-22 12:56:46 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\settings\views\company_info.php 105
ERROR - 2021-11-22 12:56:46 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\settings\views\company_info.php 105
ERROR - 2021-11-22 12:56:46 --> Severity: Warning --> Undefined variable $parametric C:\xampp\htdocs\jbb_control\application\modules\settings\views\company_info.php 108
ERROR - 2021-11-22 12:56:46 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\settings\views\company_info.php 108
ERROR - 2021-11-22 12:56:46 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\settings\views\company_info.php 108
ERROR - 2021-11-22 13:25:56 --> Severity: error --> Exception: Call to undefined method General_model::get_param_clients() C:\xampp\htdocs\jbb_control\application\modules\settings\controllers\Settings.php 338
ERROR - 2021-11-22 13:59:40 --> Severity: Warning --> Undefined variable $info C:\xampp\htdocs\jbb_control\application\modules\dashboard\views\dashboard.php 60
ERROR - 2021-11-22 14:47:43 --> Severity: Warning --> Undefined array key "tipoVinculacion" C:\xampp\htdocs\jbb_control\application\modules\users\views\intranet_users_modal.php 85
ERROR - 2021-11-22 14:47:43 --> Severity: Warning --> Undefined array key "tipoVinculacion" C:\xampp\htdocs\jbb_control\application\modules\users\views\intranet_users_modal.php 87
ERROR - 2021-11-22 15:03:05 --> Severity: Warning --> Undefined array key "lenguaje_programacion" C:\xampp\htdocs\jbb_control\application\modules\control\views\catalogo_modal.php 102
ERROR - 2021-11-22 15:03:05 --> Severity: Warning --> Undefined array key "lenguaje_programacion" C:\xampp\htdocs\jbb_control\application\modules\control\views\catalogo_modal.php 102
ERROR - 2021-11-22 15:03:05 --> Severity: Warning --> Undefined array key "lenguaje_programacion" C:\xampp\htdocs\jbb_control\application\modules\control\views\catalogo_modal.php 102
ERROR - 2021-11-22 15:03:05 --> Severity: Warning --> Undefined array key "lenguaje_programacion" C:\xampp\htdocs\jbb_control\application\modules\control\views\catalogo_modal.php 102
ERROR - 2021-11-22 15:05:55 --> Severity: error --> Exception: syntax error, unexpected token ";", expecting ")" C:\xampp\htdocs\jbb_control\application\modules\control\models\Control_model.php 22
ERROR - 2021-11-22 15:14:50 --> Severity: Warning --> Undefined array key "invoice_number" C:\xampp\htdocs\jbb_control\application\modules\control\views\catalogo.php 88
ERROR - 2021-11-22 15:14:50 --> Severity: Warning --> Undefined array key "param_client_name" C:\xampp\htdocs\jbb_control\application\modules\control\views\catalogo.php 89
ERROR - 2021-11-22 15:14:50 --> Severity: Warning --> Undefined array key "invoice_date" C:\xampp\htdocs\jbb_control\application\modules\control\views\catalogo.php 90
ERROR - 2021-11-22 15:14:50 --> Severity: Warning --> Undefined array key "id_invoice" C:\xampp\htdocs\jbb_control\application\modules\control\views\catalogo.php 93
ERROR - 2021-11-22 15:14:50 --> Severity: Warning --> Undefined array key "id_invoice" C:\xampp\htdocs\jbb_control\application\modules\control\views\catalogo.php 100
ERROR - 2021-11-22 15:25:27 --> Severity: Warning --> Undefined variable $info C:\xampp\htdocs\jbb_control\application\modules\control\views\catalogo.php 68
ERROR - 2021-11-22 15:25:39 --> Severity: Warning --> Undefined array key "invoice_number" C:\xampp\htdocs\jbb_control\application\modules\control\views\catalogo.php 88
ERROR - 2021-11-22 15:25:39 --> Severity: Warning --> Undefined array key "param_client_name" C:\xampp\htdocs\jbb_control\application\modules\control\views\catalogo.php 89
ERROR - 2021-11-22 15:25:39 --> Severity: Warning --> Undefined array key "invoice_date" C:\xampp\htdocs\jbb_control\application\modules\control\views\catalogo.php 90
ERROR - 2021-11-22 15:25:39 --> Severity: Warning --> Undefined array key "id_invoice" C:\xampp\htdocs\jbb_control\application\modules\control\views\catalogo.php 93
ERROR - 2021-11-22 15:25:39 --> Severity: Warning --> Undefined array key "id_invoice" C:\xampp\htdocs\jbb_control\application\modules\control\views\catalogo.php 100
ERROR - 2021-11-22 15:29:25 --> Severity: error --> Exception: Call to undefined method General_model::get_invoice() C:\xampp\htdocs\jbb_control\application\modules\control\controllers\Control.php 59
ERROR - 2021-11-22 15:30:21 --> Severity: Warning --> Undefined array key "id_catalogo" C:\xampp\htdocs\jbb_control\application\modules\control\views\catalogo_modal.php 13
ERROR - 2021-11-22 15:30:21 --> Severity: Warning --> Undefined array key "nombre_sistema " C:\xampp\htdocs\jbb_control\application\modules\control\views\catalogo_modal.php 19
ERROR - 2021-11-22 15:30:21 --> Severity: Warning --> Undefined array key "version_sistema " C:\xampp\htdocs\jbb_control\application\modules\control\views\catalogo_modal.php 33
ERROR - 2021-11-22 15:30:21 --> Severity: Warning --> Undefined array key "fabricante " C:\xampp\htdocs\jbb_control\application\modules\control\views\catalogo_modal.php 40
ERROR - 2021-11-22 15:30:49 --> Severity: Warning --> Undefined array key "id_catalogo" C:\xampp\htdocs\jbb_control\application\modules\control\views\catalogo_modal.php 13
ERROR - 2021-11-22 15:30:49 --> Severity: Warning --> Undefined array key "nombre_sistema " C:\xampp\htdocs\jbb_control\application\modules\control\views\catalogo_modal.php 19
ERROR - 2021-11-22 15:30:49 --> Severity: Warning --> Undefined array key "version_sistema " C:\xampp\htdocs\jbb_control\application\modules\control\views\catalogo_modal.php 33
ERROR - 2021-11-22 15:30:49 --> Severity: Warning --> Undefined array key "fabricante " C:\xampp\htdocs\jbb_control\application\modules\control\views\catalogo_modal.php 40
ERROR - 2021-11-22 15:31:15 --> Severity: Warning --> Undefined array key "nombre_sistema " C:\xampp\htdocs\jbb_control\application\modules\control\views\catalogo_modal.php 19
ERROR - 2021-11-22 15:31:15 --> Severity: Warning --> Undefined array key "version_sistema " C:\xampp\htdocs\jbb_control\application\modules\control\views\catalogo_modal.php 33
ERROR - 2021-11-22 15:31:15 --> Severity: Warning --> Undefined array key "fabricante " C:\xampp\htdocs\jbb_control\application\modules\control\views\catalogo_modal.php 40
ERROR - 2021-11-22 15:31:27 --> Severity: Warning --> Undefined array key "version_sistema " C:\xampp\htdocs\jbb_control\application\modules\control\views\catalogo_modal.php 33
ERROR - 2021-11-22 15:31:27 --> Severity: Warning --> Undefined array key "fabricante " C:\xampp\htdocs\jbb_control\application\modules\control\views\catalogo_modal.php 40
ERROR - 2021-11-22 15:36:18 --> Severity: Warning --> Undefined variable $info C:\xampp\htdocs\jbb_control\application\modules\dashboard\views\dashboard.php 60
ERROR - 2021-11-22 16:25:54 --> Severity: error --> Exception: Call to undefined method General_model::get_invoice_details() C:\xampp\htdocs\jbb_control\application\modules\control\controllers\Control.php 108
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Undefined variable $appCompany C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 54
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 54
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 54
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 55
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 55
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 55
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Undefined variable $appCompany C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 64
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 64
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 64
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Undefined variable $appCompany C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 66
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 66
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 66
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Undefined variable $appCompany C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 70
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 70
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 70
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Undefined variable $appCompany C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 71
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 71
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 71
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Undefined variable $appCompany C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 72
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 72
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 72
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 79
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 79
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 79
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 80
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 80
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 80
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 81
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 81
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 81
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 82
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 82
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 82
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 83
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 83
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 83
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 87
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 87
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 87
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 89
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 89
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 89
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 146
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 146
ERROR - 2021-11-22 16:26:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 146
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Undefined variable $appCompany C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 54
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 54
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 54
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 55
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 55
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 55
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Undefined variable $appCompany C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 64
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 64
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 64
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Undefined variable $appCompany C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 66
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 66
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 66
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Undefined variable $appCompany C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 70
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 70
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 70
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Undefined variable $appCompany C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 71
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 71
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 71
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Undefined variable $appCompany C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 72
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 72
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 72
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 79
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 79
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 79
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 80
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 80
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 80
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 81
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 81
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 81
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 82
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 82
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 82
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 83
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 83
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 83
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 87
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 87
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 87
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 89
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 89
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 89
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 146
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 146
ERROR - 2021-11-22 16:26:34 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 146
ERROR - 2021-11-22 16:27:23 --> Severity: Warning --> Undefined variable $appCompany C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 64
ERROR - 2021-11-22 16:27:23 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 64
ERROR - 2021-11-22 16:27:23 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 64
ERROR - 2021-11-22 16:27:23 --> Severity: Warning --> Undefined variable $appCompany C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 66
ERROR - 2021-11-22 16:27:23 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 66
ERROR - 2021-11-22 16:27:23 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 66
ERROR - 2021-11-22 16:27:23 --> Severity: Warning --> Undefined variable $appCompany C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 70
ERROR - 2021-11-22 16:27:23 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 70
ERROR - 2021-11-22 16:27:23 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 70
ERROR - 2021-11-22 16:27:23 --> Severity: Warning --> Undefined variable $appCompany C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 71
ERROR - 2021-11-22 16:27:23 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 71
ERROR - 2021-11-22 16:27:23 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 71
ERROR - 2021-11-22 16:27:23 --> Severity: Warning --> Undefined variable $appCompany C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 72
ERROR - 2021-11-22 16:27:23 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 72
ERROR - 2021-11-22 16:27:23 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 72
ERROR - 2021-11-22 16:27:23 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 79
ERROR - 2021-11-22 16:27:23 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 79
ERROR - 2021-11-22 16:27:23 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 79
ERROR - 2021-11-22 16:27:23 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 80
ERROR - 2021-11-22 16:27:23 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 80
ERROR - 2021-11-22 16:27:23 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 80
ERROR - 2021-11-22 16:27:23 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 81
ERROR - 2021-11-22 16:27:23 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 81
ERROR - 2021-11-22 16:27:23 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 81
ERROR - 2021-11-22 16:27:23 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 82
ERROR - 2021-11-22 16:27:23 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 82
ERROR - 2021-11-22 16:27:23 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 82
ERROR - 2021-11-22 16:27:23 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 83
ERROR - 2021-11-22 16:27:23 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 83
ERROR - 2021-11-22 16:27:23 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 83
ERROR - 2021-11-22 16:27:23 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 87
ERROR - 2021-11-22 16:27:23 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 87
ERROR - 2021-11-22 16:27:23 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 87
ERROR - 2021-11-22 16:27:23 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 89
ERROR - 2021-11-22 16:27:23 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 89
ERROR - 2021-11-22 16:27:23 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 89
ERROR - 2021-11-22 16:27:23 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 146
ERROR - 2021-11-22 16:27:23 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 146
ERROR - 2021-11-22 16:27:23 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 146
ERROR - 2021-11-22 16:27:54 --> Severity: Warning --> Undefined array key "infoCatagolo" C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 54
ERROR - 2021-11-22 16:27:54 --> Severity: Warning --> Undefined array key "infoCatagolo" C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 64
ERROR - 2021-11-22 16:27:54 --> Severity: Warning --> Undefined variable $appCompany C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 66
ERROR - 2021-11-22 16:27:54 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 66
ERROR - 2021-11-22 16:27:54 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 66
ERROR - 2021-11-22 16:27:54 --> Severity: Warning --> Undefined variable $appCompany C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 70
ERROR - 2021-11-22 16:27:54 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 70
ERROR - 2021-11-22 16:27:54 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 70
ERROR - 2021-11-22 16:27:54 --> Severity: Warning --> Undefined variable $appCompany C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 71
ERROR - 2021-11-22 16:27:54 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 71
ERROR - 2021-11-22 16:27:54 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 71
ERROR - 2021-11-22 16:27:54 --> Severity: Warning --> Undefined variable $appCompany C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 72
ERROR - 2021-11-22 16:27:54 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 72
ERROR - 2021-11-22 16:27:54 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 72
ERROR - 2021-11-22 16:27:54 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 79
ERROR - 2021-11-22 16:27:54 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 79
ERROR - 2021-11-22 16:27:54 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 79
ERROR - 2021-11-22 16:27:54 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 80
ERROR - 2021-11-22 16:27:54 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 80
ERROR - 2021-11-22 16:27:54 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 80
ERROR - 2021-11-22 16:27:54 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 81
ERROR - 2021-11-22 16:27:54 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 81
ERROR - 2021-11-22 16:27:54 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 81
ERROR - 2021-11-22 16:27:54 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 82
ERROR - 2021-11-22 16:27:54 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 82
ERROR - 2021-11-22 16:27:54 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 82
ERROR - 2021-11-22 16:27:54 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 83
ERROR - 2021-11-22 16:27:54 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 83
ERROR - 2021-11-22 16:27:54 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 83
ERROR - 2021-11-22 16:27:54 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 87
ERROR - 2021-11-22 16:27:54 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 87
ERROR - 2021-11-22 16:27:54 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 87
ERROR - 2021-11-22 16:27:54 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 89
ERROR - 2021-11-22 16:27:54 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 89
ERROR - 2021-11-22 16:27:54 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 89
ERROR - 2021-11-22 16:27:54 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 146
ERROR - 2021-11-22 16:27:54 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 146
ERROR - 2021-11-22 16:27:54 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 146
ERROR - 2021-11-22 16:28:27 --> Severity: Warning --> Undefined variable $appCompany C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 66
ERROR - 2021-11-22 16:28:27 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 66
ERROR - 2021-11-22 16:28:27 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 66
ERROR - 2021-11-22 16:28:27 --> Severity: Warning --> Undefined variable $appCompany C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 70
ERROR - 2021-11-22 16:28:27 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 70
ERROR - 2021-11-22 16:28:27 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 70
ERROR - 2021-11-22 16:28:27 --> Severity: Warning --> Undefined variable $appCompany C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 71
ERROR - 2021-11-22 16:28:27 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 71
ERROR - 2021-11-22 16:28:27 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 71
ERROR - 2021-11-22 16:28:27 --> Severity: Warning --> Undefined variable $appCompany C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 72
ERROR - 2021-11-22 16:28:27 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 72
ERROR - 2021-11-22 16:28:27 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 72
ERROR - 2021-11-22 16:28:27 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 79
ERROR - 2021-11-22 16:28:27 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 79
ERROR - 2021-11-22 16:28:27 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 79
ERROR - 2021-11-22 16:28:27 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 80
ERROR - 2021-11-22 16:28:27 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 80
ERROR - 2021-11-22 16:28:27 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 80
ERROR - 2021-11-22 16:28:27 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 81
ERROR - 2021-11-22 16:28:27 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 81
ERROR - 2021-11-22 16:28:27 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 81
ERROR - 2021-11-22 16:28:27 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 82
ERROR - 2021-11-22 16:28:27 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 82
ERROR - 2021-11-22 16:28:27 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 82
ERROR - 2021-11-22 16:28:27 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 83
ERROR - 2021-11-22 16:28:27 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 83
ERROR - 2021-11-22 16:28:27 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 83
ERROR - 2021-11-22 16:28:27 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 87
ERROR - 2021-11-22 16:28:27 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 87
ERROR - 2021-11-22 16:28:27 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 87
ERROR - 2021-11-22 16:28:27 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 89
ERROR - 2021-11-22 16:28:27 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 89
ERROR - 2021-11-22 16:28:27 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 89
ERROR - 2021-11-22 16:28:27 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 146
ERROR - 2021-11-22 16:28:27 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 146
ERROR - 2021-11-22 16:28:27 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 146
ERROR - 2021-11-22 16:29:02 --> Severity: Warning --> Undefined variable $appCompany C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 66
ERROR - 2021-11-22 16:29:02 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 66
ERROR - 2021-11-22 16:29:02 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 66
ERROR - 2021-11-22 16:29:02 --> Severity: Warning --> Undefined variable $appCompany C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 67
ERROR - 2021-11-22 16:29:02 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 67
ERROR - 2021-11-22 16:29:02 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 67
ERROR - 2021-11-22 16:29:02 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 74
ERROR - 2021-11-22 16:29:02 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 74
ERROR - 2021-11-22 16:29:02 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 74
ERROR - 2021-11-22 16:29:02 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 75
ERROR - 2021-11-22 16:29:02 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 75
ERROR - 2021-11-22 16:29:02 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 75
ERROR - 2021-11-22 16:29:02 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 76
ERROR - 2021-11-22 16:29:02 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 76
ERROR - 2021-11-22 16:29:02 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 76
ERROR - 2021-11-22 16:29:02 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 77
ERROR - 2021-11-22 16:29:02 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 77
ERROR - 2021-11-22 16:29:02 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 77
ERROR - 2021-11-22 16:29:02 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 78
ERROR - 2021-11-22 16:29:02 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 78
ERROR - 2021-11-22 16:29:02 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 78
ERROR - 2021-11-22 16:29:02 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 82
ERROR - 2021-11-22 16:29:02 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 82
ERROR - 2021-11-22 16:29:02 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 82
ERROR - 2021-11-22 16:29:02 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 84
ERROR - 2021-11-22 16:29:02 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 84
ERROR - 2021-11-22 16:29:02 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 84
ERROR - 2021-11-22 16:29:02 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 141
ERROR - 2021-11-22 16:29:02 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 141
ERROR - 2021-11-22 16:29:02 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 141
ERROR - 2021-11-22 16:29:58 --> Severity: Warning --> Undefined variable $appCompany C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 66
ERROR - 2021-11-22 16:29:58 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 66
ERROR - 2021-11-22 16:29:58 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 66
ERROR - 2021-11-22 16:29:58 --> Severity: Warning --> Undefined variable $appCompany C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 67
ERROR - 2021-11-22 16:29:58 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 67
ERROR - 2021-11-22 16:29:58 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 67
ERROR - 2021-11-22 16:29:58 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 74
ERROR - 2021-11-22 16:29:58 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 74
ERROR - 2021-11-22 16:29:58 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 74
ERROR - 2021-11-22 16:29:58 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 75
ERROR - 2021-11-22 16:29:58 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 75
ERROR - 2021-11-22 16:29:58 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 75
ERROR - 2021-11-22 16:29:58 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 76
ERROR - 2021-11-22 16:29:58 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 76
ERROR - 2021-11-22 16:29:58 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 76
ERROR - 2021-11-22 16:29:58 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 77
ERROR - 2021-11-22 16:29:58 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 77
ERROR - 2021-11-22 16:29:58 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 77
ERROR - 2021-11-22 16:29:58 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 78
ERROR - 2021-11-22 16:29:58 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 78
ERROR - 2021-11-22 16:29:58 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 78
ERROR - 2021-11-22 16:29:58 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 82
ERROR - 2021-11-22 16:29:58 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 82
ERROR - 2021-11-22 16:29:58 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 82
ERROR - 2021-11-22 16:29:58 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 84
ERROR - 2021-11-22 16:29:58 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 84
ERROR - 2021-11-22 16:29:58 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 84
ERROR - 2021-11-22 16:29:58 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 141
ERROR - 2021-11-22 16:29:58 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 141
ERROR - 2021-11-22 16:29:58 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 141
ERROR - 2021-11-22 16:31:25 --> Severity: Warning --> Undefined variable $appCompany C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 66
ERROR - 2021-11-22 16:31:25 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 66
ERROR - 2021-11-22 16:31:25 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 66
ERROR - 2021-11-22 16:31:25 --> Severity: Warning --> Undefined variable $appCompany C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 67
ERROR - 2021-11-22 16:31:25 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 67
ERROR - 2021-11-22 16:31:25 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 67
ERROR - 2021-11-22 16:31:25 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 75
ERROR - 2021-11-22 16:31:25 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 75
ERROR - 2021-11-22 16:31:25 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 75
ERROR - 2021-11-22 16:31:25 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 76
ERROR - 2021-11-22 16:31:25 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 76
ERROR - 2021-11-22 16:31:25 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 76
ERROR - 2021-11-22 16:31:25 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 77
ERROR - 2021-11-22 16:31:25 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 77
ERROR - 2021-11-22 16:31:25 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 77
ERROR - 2021-11-22 16:31:25 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 78
ERROR - 2021-11-22 16:31:25 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 78
ERROR - 2021-11-22 16:31:25 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 78
ERROR - 2021-11-22 16:31:25 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 82
ERROR - 2021-11-22 16:31:25 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 82
ERROR - 2021-11-22 16:31:25 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 82
ERROR - 2021-11-22 16:31:25 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 84
ERROR - 2021-11-22 16:31:25 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 84
ERROR - 2021-11-22 16:31:25 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 84
ERROR - 2021-11-22 16:31:25 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 141
ERROR - 2021-11-22 16:31:25 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 141
ERROR - 2021-11-22 16:31:25 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 141
ERROR - 2021-11-22 16:32:12 --> Severity: Warning --> Undefined array key "version_sistema " C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 67
ERROR - 2021-11-22 16:32:12 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 75
ERROR - 2021-11-22 16:32:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 75
ERROR - 2021-11-22 16:32:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 75
ERROR - 2021-11-22 16:32:12 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 76
ERROR - 2021-11-22 16:32:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 76
ERROR - 2021-11-22 16:32:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 76
ERROR - 2021-11-22 16:32:12 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 77
ERROR - 2021-11-22 16:32:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 77
ERROR - 2021-11-22 16:32:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 77
ERROR - 2021-11-22 16:32:12 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 78
ERROR - 2021-11-22 16:32:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 78
ERROR - 2021-11-22 16:32:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 78
ERROR - 2021-11-22 16:32:12 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 82
ERROR - 2021-11-22 16:32:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 82
ERROR - 2021-11-22 16:32:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 82
ERROR - 2021-11-22 16:32:12 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 84
ERROR - 2021-11-22 16:32:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 84
ERROR - 2021-11-22 16:32:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 84
ERROR - 2021-11-22 16:32:12 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 141
ERROR - 2021-11-22 16:32:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 141
ERROR - 2021-11-22 16:32:12 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 141
ERROR - 2021-11-22 16:32:22 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 75
ERROR - 2021-11-22 16:32:22 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 75
ERROR - 2021-11-22 16:32:22 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 75
ERROR - 2021-11-22 16:32:22 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 76
ERROR - 2021-11-22 16:32:22 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 76
ERROR - 2021-11-22 16:32:22 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 76
ERROR - 2021-11-22 16:32:22 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 77
ERROR - 2021-11-22 16:32:22 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 77
ERROR - 2021-11-22 16:32:22 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 77
ERROR - 2021-11-22 16:32:22 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 78
ERROR - 2021-11-22 16:32:22 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 78
ERROR - 2021-11-22 16:32:22 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 78
ERROR - 2021-11-22 16:32:22 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 82
ERROR - 2021-11-22 16:32:22 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 82
ERROR - 2021-11-22 16:32:22 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 82
ERROR - 2021-11-22 16:32:22 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 84
ERROR - 2021-11-22 16:32:22 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 84
ERROR - 2021-11-22 16:32:22 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 84
ERROR - 2021-11-22 16:32:22 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 141
ERROR - 2021-11-22 16:32:22 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 141
ERROR - 2021-11-22 16:32:22 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 141
ERROR - 2021-11-22 16:34:01 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 74
ERROR - 2021-11-22 16:34:01 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 74
ERROR - 2021-11-22 16:34:01 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 74
ERROR - 2021-11-22 16:34:01 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 75
ERROR - 2021-11-22 16:34:01 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 75
ERROR - 2021-11-22 16:34:01 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 75
ERROR - 2021-11-22 16:34:01 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 76
ERROR - 2021-11-22 16:34:01 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 76
ERROR - 2021-11-22 16:34:01 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 76
ERROR - 2021-11-22 16:34:01 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 77
ERROR - 2021-11-22 16:34:01 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 77
ERROR - 2021-11-22 16:34:01 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 77
ERROR - 2021-11-22 16:34:01 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 81
ERROR - 2021-11-22 16:34:01 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 81
ERROR - 2021-11-22 16:34:01 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 81
ERROR - 2021-11-22 16:34:01 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 83
ERROR - 2021-11-22 16:34:01 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 83
ERROR - 2021-11-22 16:34:01 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 83
ERROR - 2021-11-22 16:34:01 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 140
ERROR - 2021-11-22 16:34:01 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 140
ERROR - 2021-11-22 16:34:01 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 140
ERROR - 2021-11-22 16:37:03 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 81
ERROR - 2021-11-22 16:37:03 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 81
ERROR - 2021-11-22 16:37:03 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 81
ERROR - 2021-11-22 16:37:03 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 83
ERROR - 2021-11-22 16:37:03 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 83
ERROR - 2021-11-22 16:37:03 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 83
ERROR - 2021-11-22 16:37:03 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 140
ERROR - 2021-11-22 16:37:03 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 140
ERROR - 2021-11-22 16:37:03 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 140
ERROR - 2021-11-22 16:37:38 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 83
ERROR - 2021-11-22 16:37:38 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 83
ERROR - 2021-11-22 16:37:38 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 83
ERROR - 2021-11-22 16:37:38 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 140
ERROR - 2021-11-22 16:37:38 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 140
ERROR - 2021-11-22 16:37:38 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 140
ERROR - 2021-11-22 16:38:24 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 83
ERROR - 2021-11-22 16:38:24 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 83
ERROR - 2021-11-22 16:38:24 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 83
ERROR - 2021-11-22 16:38:24 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 140
ERROR - 2021-11-22 16:38:24 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 140
ERROR - 2021-11-22 16:38:24 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 140
ERROR - 2021-11-22 16:39:19 --> Severity: Warning --> Undefined variable $invoiceInfo C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 138
ERROR - 2021-11-22 16:39:19 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 138
ERROR - 2021-11-22 16:39:19 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\jbb_control\application\modules\control\views\detalle_registro.php 138
