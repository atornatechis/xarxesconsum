<?php
/**
* Sessió del coordinador (admin). Després del login.
*
* PHP version 5
*
* @author     Maistanet.com <info@maistanet.com> i Atornallom - Cooperativa Integral Valenciana - http://atornallom.net
* @copyright  2012 Maistanet.com i Atornallom - Cooperativa Integral Valenciana - http://atornallom.net
* @package    xarxa
* @license    http://www.gnu.org/copyleft/gpl.html  Distributed under the General Public License (GPL) 
* @version    1.1
* @link       https://github.com/maistanet/xarxesconsum
*/
//session_start(); //Ya se inicia la sesión en iniciar_aplicacion.php
if($_SESSION["connectat"] != "true" || $_SESSION["s_idusuari"] != "0"){
    header("location: ../index.php");
    exit();
}
?>