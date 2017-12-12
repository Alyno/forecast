{extends file='../templates/layout.tpl'}

{block name=title}
	Rapport mensuel
{/block}

{block name=body}

<div class="alert alert-info" role="alert" style="text-align: center; font-size: 25px;">
	<strong><em>Rapport mensuel</em></strong>
</div>

<div class="jumbotron">
	<form method="post" action="/forecast/controleurs/RapportMensuelController.php">
		<div class="form-group col-xs-4 col-xs-offset-2">
		<select name="mois" class="form-control">
			<option value="{if isset($mois)}{$mois}{/if}">{if isset($mois)}{$mois}{else}*** Sélectionner un mois ***{/if}</option>
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
				<option value="{if isset($annee)}{$annee}{/if}">{if isset($annee)}{$annee}{else}*** Sélectionner une année ***{/if}</option>
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
{if isset($annee, $mois)}
	<div class="alert alert-info" style="text-align: center;" role="alert">
		<em>Période de :</em> <strong>{$mois}&nbsp;{$annee}</strong>
	</div>
{/if}
{if isset($affichage_tableau) and ($affichage_tableau == true)}
<div class="table-responsive">
	<div class="alert alert-success" role="alert">
		<form method="post" action="/forecast/controleurs/RapportMensuelController.php">
			<div class="form-group col-xs-4">
				<select name="mois_second" class="form-control">
					<option value="">*** Sélectionner l'année de comparaison</option>
					{section name=customer loop=$tableau_des_mois}
						<option value="{$tableau_des_mois[customer]}">{$tableau_des_mois[customer]}</option>
					{/section}
				</select>
			</div>
			<div class="form-group col-xs-4">
				<select name="annee_second" class="form-control">
					<option value="">*** Sélectionner le mois de comparaison ***</option>
					{section name=customer loop=$tableau_des_annees}
						<option value="{$tableau_des_annees[customer]}">{$tableau_des_annees[customer]}</option>
					{/section}
				</select>
			</div>
			<input type="hidden" name="mois" value="{$mois}">
			<input type="hidden" name="annee" value="{$annee}">
			<button type="submit" class="btn btn-warning" name="btnComparaison"><strong>Lancer la comparaison</strong></button>
		</form>
	</div>
	<table class="table table-striped table-hover table-bordered" style="text-align: center;">
		<tr style="font-weight: bold">
			<td style="background-color: green; color: white;"><strong>{$mois}</strong></td>
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
	{if isset($affichage_tableau_comp) and ($affichage_tableau_comp == true)}
	<table class="table table-striped table-bordered table-hover" style="text-align: center">
		<thead>
			<td colspan="5">Comparaison : <strong><em>{$mois}</em></strong> et <strong><em>{$mois_second}</em></strong>
		</thead>
		<tr style="font-weight: bold;">
			<td style="background-color: green; color: white;">{$mois} vs {$mois_second}</td>
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
	{/if}
</div>
{/if}

{/block}


