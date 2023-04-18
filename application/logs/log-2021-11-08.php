<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-11-08 11:38:55 --> Severity: Warning --> Undefined variable $citiesList C:\xampp\htdocs\jbb_control\application\modules\access\views\companies_modal.php 89
ERROR - 2021-11-08 11:38:55 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, null given C:\xampp\htdocs\jbb_control\application\modules\access\views\companies_modal.php 89
ERROR - 2021-11-08 11:39:13 --> Query error: Table 'jbb_control.param_company_taxes' doesn't exist - Invalid query: SELECT *
FROM `param_company_taxes` `T`
WHERE `fk_id_app_company_t` = '1'
ORDER BY `taxes_description` ASC
ERROR - 2021-11-08 11:42:26 --> Query error: Table 'jbb_control.app_param_cities' doesn't exist - Invalid query: SELECT *
FROM `app_company` `APP`
INNER JOIN `app_param_cities` `C` ON `C`.`id_city` = `APP`.`fk_id_city`
WHERE `APP`.`id_company` = '1'
ORDER BY `company_name` ASC
ERROR - 2021-11-08 11:45:01 --> Severity: Warning --> Undefined array key "city" C:\xampp\htdocs\jbb_control\application\modules\access\views\companies.php 118
ERROR - 2021-11-08 11:45:09 --> Query error: Table 'jbb_control.param_company_taxes' doesn't exist - Invalid query: SELECT *
FROM `param_company_taxes` `T`
WHERE `fk_id_app_company_t` = '1'
ORDER BY `taxes_description` ASC
ERROR - 2021-11-08 11:45:11 --> Severity: Warning --> Undefined array key "city" C:\xampp\htdocs\jbb_control\application\modules\access\views\companies.php 118
ERROR - 2021-11-08 11:45:15 --> Severity: Warning --> Undefined array key "city" C:\xampp\htdocs\jbb_control\application\modules\access\views\companies.php 118
ERROR - 2021-11-08 11:45:27 --> Severity: Warning --> Undefined array key "city" C:\xampp\htdocs\jbb_control\application\modules\access\views\companies.php 118
ERROR - 2021-11-08 11:48:56 --> Query error: Table 'jbb_control.app_param_countries' doesn't exist - Invalid query: SELECT *
FROM `app_param_countries`
ORDER BY `country` ASC
ERROR - 2021-11-08 11:51:41 --> Query error: Table 'jbb_control.app_param_countries' doesn't exist - Invalid query: SELECT *
FROM `app_param_countries`
ORDER BY `country` ASC
ERROR - 2021-11-08 11:51:46 --> Query error: Table 'jbb_control.app_param_countries' doesn't exist - Invalid query: SELECT *
FROM `app_param_countries`
ORDER BY `country` ASC
ERROR - 2021-11-08 11:52:57 --> Severity: Warning --> Undefined array key "fk_id_contry" C:\xampp\htdocs\jbb_control\application\modules\access\controllers\Access.php 325
ERROR - 2021-11-08 11:52:57 --> Query error: Table 'jbb_control.app_param_cities' doesn't exist - Invalid query: SELECT *
FROM `app_param_cities` `C`
WHERE `fk_id_contry` IS NULL
ORDER BY `C`.`city` ASC
ERROR - 2021-11-08 11:53:23 --> Severity: Warning --> Undefined variable $infoCountries C:\xampp\htdocs\jbb_control\application\modules\access\views\companies_modal.php 54
ERROR - 2021-11-08 11:53:23 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, null given C:\xampp\htdocs\jbb_control\application\modules\access\views\companies_modal.php 54
