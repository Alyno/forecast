<?php
//Fichier de configuration du moteur de templates
require_once(dirname(__FILE__).'/../vendor/smarty/libs/Smarty.class.php');

$smarty = new Smarty();

//chargement du template
$smarty->display('../templates/historique_ca.tpl');
