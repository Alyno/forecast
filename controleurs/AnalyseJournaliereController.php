<?php
//Fichier de configuration du moteur de templates
require_once(dirname(__FILE__).'/../vendor/smarty/libs/Smarty.class.php');

$smarty = new Smarty();

//Ceci est une varibale temporaire pour l'affichage d'un tableau (il sert juste pour notre demo)
$affichage_tableau = false;

//envoi vers le templates
$smarty->assign('affichage_tableau', $affichage_tableau);


//On verifie si l'utilisateur a lancer la requete
if(isset($_POST['btnLancer'])) {
	//On verifie si le libelle et la date existe, aussi voir si elles contiennent des données
	if(isset($_POST['date'], $_POST['libelle']) && !(empty($_POST['date']) && empty($_POST['libelle']))) {
		
		//On stock les donnees dans des variables simples et l'on renvoi au template
		//De plus, on sécurise nos données contre la faille XSS
		$date = htmlspecialchars($_POST['date']);
		$libelle = htmlspecialchars($_POST['libelle']);

		$smarty->assign('date', $date);
		$smarty->assign('libelle', $libelle);


		//On confirme pour l'affichage du tableau
		$affichage_tableau = true;
		$smarty->assign('affichage_tableau', $affichage_tableau);
	}
}

//chargement du template
$smarty->display('../templates/analyse_journaliere.tpl');
