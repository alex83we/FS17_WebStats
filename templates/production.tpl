<div class="page-header">
	<h3>
		Produktionsanlagen<small> (Speicherstand: Tag {$currentDay}, {$dayTime})</small><small class="pull-right"><a href="#" data-toggle="modal"
			data-target="#myModal"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Einstellungen</a></small>
	</h3>
</div>
{$glyphicons =array("glyphicon glyphicon-ok-sign text-success", "glyphicon glyphicon-exclamation-sign text-warning", "glyphicon glyphicon-remove-sign
text-danger")} {$textcolors = array("","text-warning","text-danger")}
<div class="row">
	<div class="col-sm-12">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Produktionsanlage</th>
					<th>Rohstoff(e)</th>
					<th>Produkt(e)</th>
				</tr>
			</thead>
			<tbody>
				{foreach $plants as $plantName => $plant}
				<tr data-toggle="collapse" href="#collapse{$plant.i3dName}">
					<td><span class="{$glyphicons[$plant.state]}" aria-hidden="true"></span> {$plantName}</td>
					<td>{foreach from=$plant.input key=$fillType item=$fillLevel}<span class="{$textcolors[$fillLevel.state]}" data-toggle="tooltip"
						data-placement="top" title="Lagerbestand:<br><strong>{$commodities.$fillType.overall|number_format:0:",":"."}</strong>"><span
							class="{$glyphicons[$fillLevel.state]}" aria-hidden="true"></span> {$fillType} </span>{/foreach}
					</td>
					<td>{foreach from=$plant.output key=$fillType item=$fillLevel}<span class="{$textcolors[$fillLevel.state]}"><span
							class="{$glyphicons[$fillLevel.state]}" aria-hidden="true"></span> {$fillType} </span>{/foreach}
					</td>
				</tr>
				<tr class="collapse info" id="collapse{$plant.i3dName}">
					<td colspan="4">
						<div class="col-sm-8 col-sm-offset-1">
							<table class="table" style="margin-bottom: 0px;">
								<thead>
									<tr>
										<th colspan="2" width="50%">Rohstoff(e)</th>
										<th colspan="2" width="50%">Produkt(e)</th>
									</tr>
								</thead>
								{$inputRow=array()}{$outputRow=array()} {$max = max($plant.input|@count,$plant.output|@count)} {foreach from=$plant.input key=$fillType
								item=$fillLevel} {$inputRow[$fillLevel@index] = array($fillType,$fillLevel.fillLevel,$fillLevel.fillMax,$fillLevel.i3dName)} {/foreach}
								{foreach from=$plant.output key=$fillType item=$fillLevel} {$outputRow[$fillLevel@index] =
								array($fillType,$fillLevel.fillLevel,$fillLevel.fillMax,$fillLevel.i3dName)} {/foreach}
								<tbody>
									{for $i=0 to $max-1}
									<tr>
										{if isset($inputRow[$i][0])}
										<td><a href="index.php?page=commodity&object={$inputRow[$i][3]}">{$inputRow[$i][0]}</a></td>
										<td class="text-right">{$inputRow[$i][1]|number_format:0:",":"."} / {$inputRow[$i][2]|number_format:0:",":"."}</td> {else}
										<td colspan="2">&nbsp;</td> {/if} {if isset($outputRow[$i][0])}
										<td>{$outputRow[$i][0]}</td>
										<td class="text-right">{$outputRow[$i][1]|number_format:0:",":"."} / {$outputRow[$i][2]|number_format:0:",":"."}</td>{else}
										<td colspan="2">&nbsp;</td> {/if}
									</tr>
									{/for}
								</tbody>
							</table>
						</div>
						<div class="col-sm-3">
							<p class="pull-right">
								<a href="index.php?page=production&hide={$plantName|base64_encode}"><span class="glyphicon glyphicon-eye-close"></span> ausblenden</a>
							</p>
						</div>
					</td>
				</tr>
				{/foreach}
			</tbody>
		</table>
	</div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Einstellungen</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" action="index.php?page=production" method="post">
					<div class="form-group">
						<label class="col-sm-5 control-label">Sortierung</label>
						<div class="col-sm-7">
							<label class="radio-inline"> <input type="radio" name="sortByName" value="1"{if $options.sortByName}checked{/if}> alphabetisch
							</label> <label class="radio-inline"> <input type="radio" name="sortByName" value="0"{if !$options.sortByName}checked{/if}> nach Füllstand
							</label>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-5 control-label">volle Produktlager</label>
						<div class="col-sm-7">
							<label class="radio-inline"> <input type="radio" name="sortFullProducts" value="1"{if $options.sortFullProducts}checked{/if}> bei Sortierung
								berücksichtigen
							</label><br> <label class="radio-inline"> <input type="radio" name="sortFullProducts" value="0"{if !$options.sortFullProducts}checked{/if}> bei
								Sortierung ignorieren
							</label>
						</div>
					</div>
					{if $options.hidePlant|@count>0}
					<div class="form-group">
						<label class="col-sm-5 control-label">Produktionsanlagen einblenden</label>
						<div class="col-sm-7">
							{foreach from=$options.hidePlant key=$plant item=$bolean}
							<div class="checkbox">
								<label> <input type="checkbox" name="showPlant[]" value="{$plant|base64_encode}"> {$plant}
								</label>
							</div>
							{/foreach}
						</div>
					</div>
					{/if}
			
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Schließen</button>
				<button type="submit" class="btn btn-primary">Speichern</button>
			</div>
		</div>
		</form>
	</div>
</div>
<script>{literal}
$(function () {
  $('[data-toggle="tooltip"]').tooltip({html: true})
})
{/literal}</script>