<?php
//Inclusion du moteur de templates
require_once(dirname(__FILE__).'/../vendor/smarty/libs/Smarty.class.php');

$smarty = new Smarty();



//Chargement du template
$smarty->display('../templates/tableau.tpl');
