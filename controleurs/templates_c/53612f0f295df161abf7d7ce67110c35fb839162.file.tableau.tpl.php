<?php /* Smarty version Smarty-3.1.12, created on 2017-12-11 12:31:38
         compiled from "../templates/tableau.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18015305265a2d9ff87ca962-03404734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53612f0f295df161abf7d7ce67110c35fb839162' => 
    array (
      0 => '../templates/tableau.tpl',
      1 => 1512974107,
      2 => 'file',
    ),
    '6e3bc020a65f07ad5f6f2c11e4dbe302a104d794' => 
    array (
      0 => '/opt/lampp/htdocs/forecast/templates/layout.tpl',
      1 => 1512934204,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18015305265a2d9ff87ca962-03404734',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a2d9ff880ed06_69768859',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2d9ff880ed06_69768859')) {function content_5a2d9ff880ed06_69768859($_smarty_tpl) {?><!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>
	Tableau récapitulatif
</title>

    <!-- Bootstrap core CSS -->
    <link href="/forecast/vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="/forecast/vendor/bootstrap/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/forecast/vendor/bootstrap/docs/examples/dashboard/dashboard.css" rel="stylesheet">
	<link href="/forecast/web/css/layout.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/forecast/vendor/bootstrap/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	
  </head>
	<body>
		
		

		<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/forecast/index.php"><strong>FORECAST</strong></a>
        </div>
      </div>
    </nav>
<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar" id="navigation">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="/forecast/index.php" class="glyphicon glyphicon glyphicon-home">&nbsp;<strong>Accueil</strong><span class="sr-only">(current)</span></a></li>
            <li><a href="/forecast/controleurs/HistoriqueParisController.php" class="glyphicon glyphicon-stats">&nbsp;Historique des paris</a></li>
            <li><a href="/forecast/controleurs/HistoriqueCAController.php" class="glyphicon glyphicon-stats">&nbsp;Historique du CA</a></li>
            <li><a href="/forecast/controleurs/AnalyseJournaliereController.php">Analyse journalière</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="/forecast/controleurs/RapportMensuelController.php">RAPPORT MENSUEL</a></li>
            <li><a href="/forecast/controleurs/TableauController.php">TABLEAU RECAPITULATIF</a></li>
            <li><a href="/forecast/controleurs/ForecastController.php">FORECAST</a></li>
            <li><a href="/forecast/controleurs/BudgetController.php">BUDGET</a></li>
          </ul>
        </div>
</div>
</div>
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			

<div class="alert alert-info" role="alert" style="text-align: center; font-size: 25px;">
	<strong><em>Tableau récapitulatif</em></strong>
</div>


		</div>

		
		
		<script src="/forecast/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="/forecast/vendor/bootstrap/assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/forecast/vendor/bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>
<?php }} ?>