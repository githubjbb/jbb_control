<?php
$menu_title = SW_PROJECT_TITLE;
$menu = array (
	array ( "language" => "en_gb", "report" => ".*\.xml", "title" => "<AUTO>" )
	);
?>
<?php
$menu_title = SW_PROJECT_TITLE;
$menu = array (
	array ( "report" => "<p>En el menú superior encuentra los reportes que se pueden generar para verlos en pantalla, descargarlos a PDF, o CSV.</p><p><a style=\"text-decoration: underline !important\"  target=\"_self\" href=\"http://operativoicfes.com/dashboard/directivo\">Regresar</a></p>", "title" => "TEXT" ),
	);

$admin_menu = $menu;


$dropdown_menu = array(
                    array ( 
                        "project" => "ICFES",
                        "title" => "Configuración",
                        "items" => array (
                            array ( "reportfile" => "usuarios.xml" ),
                            array ( "reportfile" => "examinandos.xml" ),
                            array ( "reportfile" => "sitios.xml" ),
							array ( "reportfile" => "sesiones.xml" ),
							array ( "reportfile" => "alertas.xml" ),
							array ( "reportfile" => "snp_holguras.xml" ),
                            )
                        ),
                    array ( 
                        "project" => "novedades",
                        "title" => "Novedades",
                        "items" => array (
							array ( "reportfile" => "otras_novedades.xml" ),
                            )
                        ),
                    array ( 
                        "project" => "reportes",
                        "title" => "Reportes",
                        "items" => array (
                            array ( "reportfile" => "reporte_citados.xml" ),
                            )
                        ),
                );

?>
