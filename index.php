<?php
/**
* @author Aly <aly.mboumba@hotmail.com>
* @version 1.0
*/

//Inclusion du moteur de templates Smarty
require_once(dirname(__FILE__).'/vendor/smarty/libs/Smarty.class.php');

$smarty = new Smarty();

//Chargement du templates
$smarty->display('templates/layout.tpl');
