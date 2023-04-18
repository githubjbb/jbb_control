<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-11-15 10:45:35 --> Query error: Unknown column 'param_client_name' in 'field list' - Invalid query: SELECT `J`.*, `param_client_name`
FROM `param_jobs` `J`
WHERE `J`.`status` = 1
AND `C`.`param_client_status` = 1
ORDER BY `C`.`param_client_name` ASC, `J`.`job_description` ASC
ERROR - 2021-11-15 10:45:40 --> Query error: Table 'jbb_control.payroll' doesn't exist - Invalid query: SELECT count(id_payroll) CONTEO FROM payroll P INNER JOIN param_jobs J ON J.id_job = P.fk_id_job INNER JOIN param_client C ON C.id_param_client = J.fk_id_param_client WHERE P.start >= '2021-01-01' AND C.fk_id_app_company = 1
ERROR - 2021-11-15 10:48:13 --> Severity: error --> Exception: Class "Control_model" not found C:\xampp\htdocs\jbb_control\application\third_party\MX\Loader.php 228
ERROR - 2021-11-15 10:48:29 --> Severity: error --> Exception: Call to undefined method General_model::get_invoice() C:\xampp\htdocs\jbb_control\application\modules\control\controllers\Control.php 20
ERROR - 2021-11-15 10:49:16 --> Severity: Warning --> Undefined variable $info C:\xampp\htdocs\jbb_control\application\modules\control\views\invoice.php 68
ERROR - 2021-11-15 10:50:52 --> Severity: Warning --> Undefined variable $info C:\xampp\htdocs\jbb_control\application\modules\control\views\invoice.php 68
ERROR - 2021-11-15 10:51:36 --> Severity: Warning --> Undefined variable $info C:\xampp\htdocs\jbb_control\application\modules\control\views\catalogo.php 68
ERROR - 2021-11-15 10:52:18 --> Severity: Warning --> Undefined variable $info C:\xampp\htdocs\jbb_control\application\modules\control\views\catalogo.php 68
ERROR - 2021-11-15 10:53:08 --> Severity: Warning --> Undefined variable $info C:\xampp\htdocs\jbb_control\application\modules\control\views\catalogo.php 68
ERROR - 2021-11-15 10:53:29 --> Severity: Warning --> Undefined variable $info C:\xampp\htdocs\jbb_control\application\modules\control\views\catalogo.php 68
ERROR - 2021-11-15 10:55:03 --> 404 Page Not Found: /index
ERROR - 2021-11-15 10:55:37 --> 404 Page Not Found: ../modules/control/controllers/Control/cargarModalInvoice
ERROR - 2021-11-15 10:55:43 --> 404 Page Not Found: ../modules/control/controllers/Control/cargarModalInvoice
ERROR - 2021-11-15 10:56:04 --> 404 Page Not Found: ../modules/control/controllers/Control/cargarModalInvoice
ERROR - 2021-11-15 10:56:16 --> Severity: error --> Exception: Call to undefined method General_model::get_param_clients() C:\xampp\htdocs\jbb_control\application\modules\control\controllers\Control.php 40
ERROR - 2021-11-15 11:00:30 --> Severity: Warning --> Undefined variable $infoClients C:\xampp\htdocs\jbb_control\application\modules\control\views\catalogo_modal.php 21
ERROR - 2021-11-15 11:00:30 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, null given C:\xampp\htdocs\jbb_control\application\modules\control\views\catalogo_modal.php 21
ERROR - 2021-11-15 11:25:22 --> 404 Page Not Found: /index
ERROR - 2021-11-15 11:25:28 --> 404 Page Not Found: /index
ERROR - 2021-11-15 11:31:14 --> Severity: Warning --> Undefined variable $idInvoice C:\xampp\htdocs\jbb_control\application\modules\control\controllers\Control.php 61
ERROR - 2021-11-15 11:31:14 --> Severity: error --> Exception: Call to undefined method Control_model::saveInvoice() C:\xampp\htdocs\jbb_control\application\modules\control\controllers\Control.php 65
ERROR - 2021-11-15 11:32:30 --> Severity: Warning --> Undefined variable $idInvoice C:\xampp\htdocs\jbb_control\application\modules\control\controllers\Control.php 61
ERROR - 2021-11-15 11:32:30 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`jbb_control`.`catalogo_sistemas_informacion`, CONSTRAINT `catalogo_sistemas_informacion_ibfk_2` FOREIGN KEY (`fk_id_sistema_operativo`) REFERENCES `param_sistema_operativo` (`id_sistema_opera) - Invalid query: INSERT INTO `catalogo_sistemas_informacion` (`nombre_sistema`, `sigla_sistema`, `descripción_sistema`) VALUES ('nombre sistema', 'sigla', 'adafsdfasdfasdfas asdfa sdfadsfasdfadf a')
ERROR - 2021-11-15 11:32:59 --> Severity: Warning --> Undefined variable $idInvoice C:\xampp\htdocs\jbb_control\application\modules\control\controllers\Control.php 61
ERROR - 2021-11-15 11:32:59 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`jbb_control`.`catalogo_sistemas_informacion`, CONSTRAINT `catalogo_sistemas_informacion_ibfk_2` FOREIGN KEY (`fk_id_sistema_operativo`) REFERENCES `param_sistema_operativo` (`id_sistema_opera) - Invalid query: INSERT INTO `catalogo_sistemas_informacion` (`nombre_sistema`, `sigla_sistema`, `descripción_sistema`) VALUES ('Njuevo sistema', 'siga', 'asdf asdf afa sdfasdf asdfadsf')
ERROR - 2021-11-15 11:33:22 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`jbb_control`.`catalogo_sistemas_informacion`, CONSTRAINT `catalogo_sistemas_informacion_ibfk_2` FOREIGN KEY (`fk_id_sistema_operativo`) REFERENCES `param_sistema_operativo` (`id_sistema_opera) - Invalid query: INSERT INTO `catalogo_sistemas_informacion` (`nombre_sistema`, `sigla_sistema`, `descripción_sistema`) VALUES ('Njuevo sistema', 'siga', 'asdf asdf afa sdfasdf asdfadsf')
ERROR - 2021-11-15 20:00:01 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`jbb_control`.`catalogo_sistemas_informacion`, CONSTRAINT `catalogo_sistemas_informacion_ibfk_2` FOREIGN KEY (`fk_id_sistema_operativo`) REFERENCES `param_sistema_operativo` (`id_sistema_opera) - Invalid query: INSERT INTO `catalogo_sistemas_informacion` (`nombre_sistema`, `sigla_sistema`, `descripción_sistema`, `version_sistema`, `fecha_vencimiento_soporte`, `fk_id_responsable_tecnico`, `fk_id_responsable_funcional`, `observaciones`, `fabricante`) VALUES ('Benja', 'bmg', '1', '1', '2021-11-15', '2', '2', 'esta es la obseravacion', 'mottaclick')
