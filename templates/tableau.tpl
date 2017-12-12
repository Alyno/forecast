{extends file='../templates/layout.tpl'}


{block name=title}
	Tableau récapitulatif
{/block}

{block name=body}

<div class="alert alert-info" role="alert" style="text-align: center; font-size: 25px;">
	<strong><em>Tableau récapitulatif</em></strong>
</div>

<div class="jumbotron">
	<form method="post" action="/forecast/controleurs/TableauController.php">
	</form>
</div>

{/block}
