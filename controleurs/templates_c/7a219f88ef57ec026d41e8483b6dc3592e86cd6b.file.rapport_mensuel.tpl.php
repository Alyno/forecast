<?php /* Smarty version Smarty-3.1.12, created on 2017-12-12 16:56:14
         compiled from "../templates/rapport_mensuel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1838603675a2d8aefd386d7-17582496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a219f88ef57ec026d41e8483b6dc3592e86cd6b' => 
    array (
      0 => '../templates/rapport_mensuel.tpl',
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
  'nocache_hash' => '1838603675a2d8aefd386d7-17582496',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a2d8aefe289e9_87295810',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2d8aefe289e9_87295810')) {function content_5a2d8aefe289e9_87295810($_smarty_tpl) {?><!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>
	Rapport mensuel
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
	<strong><em>Rapport mensuel</em></strong>
</div>

<div class="jumbotron">
	<form method="post" action="/forecast/controleurs/RapportMensuelController.php">
		<div class="form-group col-xs-4 col-xs-offset-2">
		<select name="mois" class="form-control">
			<option value="<?php if (isset($_smarty_tpl->tpl_vars['mois']->value)){?><?php echo $_smarty_tpl->tpl_vars['mois']->value;?>
<?php }?>"><?php if (isset($_smarty_tpl->tpl_vars['mois']->value)){?><?php echo $_smarty_tpl->tpl_vars['mois']->value;?>
<?php }else{ ?>*** Sélectionner un mois ***<?php }?></option>
			<option value="JANVIER">JANVIER</option>
			<option value="FEVRIER">FEVRIER</option>
			<option value="MARS">MARS</option>
			<option value="AVRIL">AVRIL</option>
			<option value="MAI">MAI</option>
			<option value="JUIN">JUIN</option>
			<option value="JUILLET">JUILLET</option>
			<option value="AOUT">AOUT</option>
			<option value="SEPTEMBRE">SEPTEMBRE</option>
			<option value="OCTOBRE">OCTOBRE</option>
			<option value="NOVEMBRE">NOVEMBRE</option>
			<option value="DECEMBRE">DECEMBRE</option>
		</select>
		</div>
		<div class="form-group col-xs-4">
			<select name="annee" class="form-control">
				<option value="<?php if (isset($_smarty_tpl->tpl_vars['annee']->value)){?><?php echo $_smarty_tpl->tpl_vars['annee']->value;?>
<?php }?>"><?php if (isset($_smarty_tpl->tpl_vars['annee']->value)){?><?php echo $_smarty_tpl->tpl_vars['annee']->value;?>
<?php }else{ ?>*** Sélectionner une année ***<?php }?></option>
				<option value="2014">2014</option>
				<option value="2015">2015</option>
				<option value="2016">2016</option>
				<option value="2017">2017</option>
				<option value="2018">2018</option>
				<option value="2019">2019</option>
				<option value="2020">2020</option>
			</select>
		</div>
		<button type="submit" class="btn btn-primary" name="btnLancer"><strong>Lancer</strong></button>
	</form>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['annee']->value,$_smarty_tpl->tpl_vars['mois']->value)){?>
	<div class="alert alert-info" style="text-align: center;" role="alert">
		<em>Période de :</em> <strong><?php echo $_smarty_tpl->tpl_vars['mois']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['annee']->value;?>
</strong>
	</div>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['affichage_tableau']->value)&&($_smarty_tpl->tpl_vars['affichage_tableau']->value==true)){?>
<div class="table-responsive">
	<div class="alert alert-success" role="alert">
		<form method="post" action="/forecast/controleurs/RapportMensuelController.php">
			<div class="form-group col-xs-4">
				<select name="mois_second" class="form-control">
					<option value="">*** Sélectionner l'année de comparaison</option>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['customer'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['name'] = 'customer';
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tableau_des_mois']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['total']);
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['tableau_des_mois']->value[$_smarty_tpl->getVariable('smarty')->value['section']['customer']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['tableau_des_mois']->value[$_smarty_tpl->getVariable('smarty')->value['section']['customer']['index']];?>
</option>
					<?php endfor; endif; ?>
				</select>
			</div>
			<div class="form-group col-xs-4">
				<select name="annee_second" class="form-control">
					<option value="">*** Sélectionner le mois de comparaison ***</option>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['customer'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['name'] = 'customer';
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tableau_des_annees']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['total']);
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['tableau_des_annees']->value[$_smarty_tpl->getVariable('smarty')->value['section']['customer']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['tableau_des_annees']->value[$_smarty_tpl->getVariable('smarty')->value['section']['customer']['index']];?>
</option>
					<?php endfor; endif; ?>
				</select>
			</div>
			<input type="hidden" name="mois" value="<?php echo $_smarty_tpl->tpl_vars['mois']->value;?>
">
			<input type="hidden" name="annee" value="<?php echo $_smarty_tpl->tpl_vars['annee']->value;?>
">
			<button type="submit" class="btn btn-warning" name="btnComparaison"><strong>Lancer la comparaison</strong></button>
		</form>
	</div>
	<table class="table table-striped table-hover table-bordered" style="text-align: center;">
		<tr style="font-weight: bold">
			<td style="background-color: green; color: white;"><strong><?php echo $_smarty_tpl->tpl_vars['mois']->value;?>
</strong></td>
			<td>NOMBRE DE PARIS</td>
			<td>PRIX MOYEN</td>
			<td>CHIFFRES D'AFFAIRES</td>
		</tr>
		<tr>
			<td style="background-color: orange;"><strong>LAST YEAR</strong></td>
			<td>6556</td>
			<td>65465</td>
			<td>7897</td>
		</tr>
		<tr>
			<td style="background-color: orange;"><strong>FORECAST</strong></td>
			<td>8545</td>
			<td>6454</td>
			<td>93665</td>
		</tr>
		<tr>
			<td style="background-color: orange;"><strong>BUDGET</strong></td>
			<td>564564</td>
			<td>5664</td>
			<td>6585</td>
		</tr>
		<tr>
			<td style="background-color: orange;"><strong>ACTUAL</strong></td>
			<td>65623</td>
			<td>12154</td>
			<td>32123</td>
		</tr>
	</table>
	<?php if (isset($_smarty_tpl->tpl_vars['affichage_tableau_comp']->value)&&($_smarty_tpl->tpl_vars['affichage_tableau_comp']->value==true)){?>
	<table class="table table-striped table-bordered table-hover" style="text-align: center">
		<thead>
			<td colspan="5">Comparaison : <strong><em><?php echo $_smarty_tpl->tpl_vars['mois']->value;?>
</em></strong> et <strong><em><?php echo $_smarty_tpl->tpl_vars['mois_second']->value;?>
</em></strong>
		</thead>
		<tr style="font-weight: bold;">
			<td style="background-color: green; color: white;"><?php echo $_smarty_tpl->tpl_vars['mois']->value;?>
 vs <?php echo $_smarty_tpl->tpl_vars['mois_second']->value;?>
</td>
			<td>ACTUAL vs LAST YEAR</td>
			<td>ACTUAL vs FORECAST</td>
			<td>ACTUAL vs BUDGET</td>
			<td>RATION</td>
		</tr>
		<tr>
			<td style="background-color: orange;"><strong>PARIS</strong></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td style="background-color: orange;"><strong>PRIX MOYEN</strong></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td style="background-color: orange;"><strong>CHIFFRES D'AFFAIRES</strong></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</table>
	<?php }?>
</div>
<?php }?>


		</div>

		
		
		<script src="/forecast/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="/forecast/vendor/bootstrap/assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/forecast/vendor/bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>
<?php }} ?>