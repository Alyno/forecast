<?php /* Smarty version Smarty-3.1.12, created on 2017-12-12 17:04:05
         compiled from "../templates/historique_ca.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3342397685a2d106fcc8af4-58979173%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2d6908cf17cec8e5bf89e7d0014747f8c60836d' => 
    array (
      0 => '../templates/historique_ca.tpl',
      1 => 1513092714,
      2 => 'file',
    ),
    '6e3bc020a65f07ad5f6f2c11e4dbe302a104d794' => 
    array (
      0 => '/opt/lampp/htdocs/forecast/templates/layout.tpl',
      1 => 1513092714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3342397685a2d106fcc8af4-58979173',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a2d106fd06948_95465180',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2d106fd06948_95465180')) {function content_5a2d106fd06948_95465180($_smarty_tpl) {?><!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>
	Historique du CA
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
			
          <h1 class="page-header">HISTORIQUE DES PARIS</h1>
<h4 class="sub-header">EN CHIFFRE D'AFFAIRES</h4>
          <div class="table-responsive">
            <table class="table table-striped table-hover">
              <thead style="background-color: green; color: white;">
                <tr>
                  <th>NOM DE L’INDICATEUR</th>
                  <th>2014</th>
                  <th>2015</th>
                  <th>2016</th>
                  <th>2017</th>
				  <th>2018</td>
					<th>2019</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>JANVIER</td>
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
					<td>5</td>
					<td>6</td>
                </tr>
                <tr>
                  <td>FEVRIER</td>
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
					<td>5</td>
					<td>6</td>
                </tr>
                <tr>
                  <td>MARS</td>
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
					<td>5</td>
					<td>6</td>
                </tr>
                <tr>
                  <td>AVRIL</td>
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
					<td>5</td>
					<td>6</td>
                </tr>
                <tr>
                  <td>MAI</td>
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
					<td>5</td>
					<td>6</td>
                </tr>
                <tr>
                  <td>JUIN</td>
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
					<td>5</td>
					<td>6</td>
                </tr>
                <tr>
                  <td>JUILLET</td>
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
					<td>5</td>
					<td>6</td>
                </tr>
                <tr>
                  <td>AOUT</td>
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
					<td>5</td>
					<td>6</td>
                </tr>
                <tr>
                  <td>SEPTEMBRE</td>
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
					<td>5</td>
					<td>6</td>
                </tr>
                <tr>
                  <td>OCTOBRE</td>
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
					<td>5</td>
					<td>6</td>
                </tr>
                <tr>
                  <td>NOVEMBRE</td>
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
					<td>5</td>
					<td>6</td>
                </tr>
                <tr>
                  <td>1,012</td>
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
					<td>5</td>
					<td>6</td>
                </tr>
                <tr>
                  <td>DECEMBRE</td>
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
					<td>5</td>
					<td>6</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
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