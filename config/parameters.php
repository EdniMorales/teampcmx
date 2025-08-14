<?php
define("base_url","https://teampcmx.com/"); // base url para llamadas absolutas de la url 
define("controller_default", "LogginController"); // controlador por defecto
define("action_default","index");
if(isset($_SESSION['usuario'])){
define("Consultorio",$_SESSION['usuario']['consultorio']);
}