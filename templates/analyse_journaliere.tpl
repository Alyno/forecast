{extends file='../templates/layout.tpl'}

{block name=head}

	<!-- Chargement des feuilles de style -->
		<link rel="stylesheet" href="/forecast/web/js/calendrier/css/jquery.ui.core.css">
		<link rel="stylesheet" href="/forecast/web/js/calendrier/css/jquery.ui.datepicker.css">
		<link rel="stylesheet" href="/forecast/web/js/calendrier/css/jquery.ui.widget.css">
		<!-- les couleurs peuvent définies au sein de la feuille di dessous-->
		<link rel="stylesheet" href="/forecast/web/js/calendrier/css/jquery.ui.theme.css">
{/block}


{block name=body}

	{block name=header}
		<header class="alert alert-info" role="alert" style="text-align: center; font-size: 25px;">
			<strong><em>Analyse journalière</em></strong>
		</header>
	{/block}

	<div class="jumbotron">
		<form method="post" action="/forecast/controleurs/AnalyseJournaliereController.php" class="form-group">
			<div class="col-xs-4 col-xs-offset-2">
				<select name="libelle" class="form-control">
					<option value="{if isset($libelle)}{$libelle}{/if}">{if isset($libelle)}{$libelle}{else}*** Sélectionner un libellé{/if}</option>
					<option value="REVENUS">REVENUS</option>
					<option value="NOMBRE DE PARIS">NOMBRE DE PARIS</option>
				</select>
			</div>
			<div class="col-xs-4">
				<input type="text" value="{if isset($date)}{$date}{/if}"  name="date" id="datepicker" placeholder="Sélectionner la période" class="form-control">
			</div>
			<div>
				<button type="submit" name="btnLancer" class="btn btn-primary"><strong>Lancer</strong></button>
			</div>
		</form>
	</div>

	<! -- On s'occupe de l'affichage du tableau ici -->
	{if isset($affichage_tableau) and ($affichage_tableau == true)}
	<div class="table-responsive">
	<table class="table table-bordered table-hover">
		<thead>
			<tr style="font-weight: bold">
				<td colspan="2" style="background-color: green; color: white;">{$libelle}</td>
				<td style="background-color: orange;">ACTUAL</td>
				<td style="background-color: orange;">FORECAST</td>
				<td style="background-color: orange;">BUDGET</td>
				<td style="background-color: orange;">LAST YEAR</td>
				<td style="background-color: orange;">ACT VS FST</td>
				<td style="background-color: orange;">ACT VS BGT</td>
				<td style="background-color: orange;">ACT VS LY</td>
			</tr>
		</thead>
	</table>
	</div>
	{/if}

{/block}


{block name=footer}

<!-- chargement des scripts -->	
	<script src="/forecast/web/js/calendrier/scr/jquery.js"></script>
	<script src="/forecast/web/js/calendrier/scr/jquery.ui.core.js"></script>
	<script src="/forecast/web/js/calendrier/scr/jquery.ui.widget.js"></script>
	<script src="/forecast/web/js/calendrier/scr/jquery.ui.datepicker.js"></script>
	<script src="/forecast/web/js/calendrier/scr/jquery.ui.datepicker-fr.js"></script>
<!-- Initialisation de la fonction -->		
	<script>
	$(function() {
		$.datepicker.setDefaults( $.datepicker.regional[ "" ] );
		$( "#datepicker" ).datepicker( $.datepicker.regional[ "fr" ] );
		$( "#locale" ).change(function() {
			$( "#datepicker" ).datepicker( "option",
				$.datepicker.regional[ $( this ).val() ] );
		});
	});
	$(function() {
		$.datepicker.setDefaults( $.datepicker.regional[ "" ] );
		$( "#datefin" ).datepicker( $.datepicker.regional[ "fr" ] );
		$( "#locale" ).change(function() {
			$( "#datefin" ).datepicker( "option",
				$.datepicker.regional[ $( this ).val() ] );
		});
	});
	</script>

{/block}
