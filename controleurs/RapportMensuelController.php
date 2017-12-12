<?php

//Inclusion du moteur de templates
require_once(dirname(__FILE__).'/../vendor/smarty/libs/Smarty.class.php');

//Instance du moteur de templates
$smarty = new Smarty();


$affichage_tableau = false;
$affichage_tableau_comp = false;
$smarty->assign('affichage_tableau_comp', $affichage_tableau_comp);
$smarty->assign('affichage_tableau', $affichage_tableau);

if(isset($_POST['btnLancer'])) {
	if(isset($_POST['mois'], $_POST['annee']) && ! (empty($_POST['mois']) && empty($_POST['annee']))) {
		$mois = htmlspecialchars($_POST['mois']);
		$annee = htmlspecialchars($_POST['annee']);

		$smarty->assign('mois', $mois);
		$smarty->assign('annee', $annee);

		$affichage_tableau = true;
		$smarty->assign('affichage_tableau', $affichage_tableau);

		$tableau_des_mois = array('JANVIER', 'FEVRIER', 'MARS', 'AVRIL', 'MAI', 'JUIN', 'JUILLET', 'AOUT', 'SEPTEMBRE', 'OCTOBRE',
								  'NOVEMBRE', 'DECEMBRE');
		$tableau_des_annees = array(2014, 2015, 2016, 2017, 2018, 2019, 2020);
		$smarty->assign('tableau_des_mois', $tableau_des_mois);
		$smarty->assign('tableau_des_annees', $tableau_des_annees);
	}
}

//si l'utilisateur a voulu comparer deux mois dans une annee
if(isset($_POST['btnComparaison'])) {
	//On s'assure que les donnees existent
	if(isset($_POST['mois_second'], $_POST['annee_second']) && !(empty($_POST['mois_second']) && empty($_POST['annee_second']))) {
		//On stock les donnees dans variables simples et protection contre une XSS
		$mois_second = htmlspecialchars($_POST['mois_second']);
		$annee_second = (int)$_POST['annee_second'];

		//Variables du mois d'origine
		$mois = htmlspecialchars($_POST['mois']);
		$annee = htmlspecialchars($_POST['annee']);


		//On envoi les donnees des deux mois à compares au template
		$smarty->assign('mois', $mois);
		$smarty->assign('annee', $annee);
		$smarty->assign('mois_second', $mois_second);
		$smarty->assign('annee_second', $annee_second);

		//On affiche le tableau d'origine
		$affichage_tableau = true;
		$smarty->assign('affichage_tableau', $affichage_tableau);

		//Affichage du tableau de comparaison
		$affichage_tableau_comp = true;
		$smarty->assign('affichage_tableau_comp', $affichage_tableau_comp);
	}
}

//Chargement du template
$smarty->display('../templates/rapport_mensuel.tpl');
