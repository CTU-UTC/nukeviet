<!-- BEGIN: main -->
<div class="table-responsive">
	<table class="table table-striped table-bordered table-hover">
		<colgroup>
			<col span="2" class="w50">
			<col span="2">
			<col class="w100">
			<col class="w150">
		</colgroup>
		<thead>
			<tr>
				<th>{LANG.weight}</th>
				<td class="center">ID</th>
				<th>{LANG.name}</th>
				<td class="center">{LANG.adddefaultblock}</th>
				<td class="center" >{LANG.numlinks}</th>
				<th>&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			<!-- BEGIN: loop -->
			<tr>
				<td class="center">
				<select id="id_weight_{ROW.bid}" onchange="nv_chang_block_cat('{ROW.bid}','weight');">
					<!-- BEGIN: weight -->
					<option value="{WEIGHT.key}"{WEIGHT.selected}>{WEIGHT.title}</option>
					<!-- END: weight -->
				</select></td>
				<td class="center"><strong>{ROW.bid}</strong></td>
				<td><a href="{ROW.link}">{ROW.title}</a> (<a href="{ROW.linksite}">{ROW.numnews} {LANG.topic_num_news}</a>)</td>
				<td class="center">
				<select id="id_adddefault_{ROW.bid}" onchange="nv_chang_block_cat('{ROW.bid}','adddefault');">
					<!-- BEGIN: adddefault -->
					<option value="{ADDDEFAULT.key}"{ADDDEFAULT.selected}>{ADDDEFAULT.title}</option>
					<!-- END: adddefault -->
				</select></td>
				<td class="center">
				<select id="id_numlinks_{ROW.bid}" onchange="nv_chang_block_cat('{ROW.bid}','numlinks');">
					<!-- BEGIN: number -->
					<option value="{NUMBER.key}"{NUMBER.selected}>{NUMBER.title}</option>
					<!-- END: number -->
				</select></td>
				<td class="center">
					<em class="icon-edit icon-large">&nbsp;</em> <a href="{ROW.url_edit}">{GLANG.edit}</a> &nbsp;
					<em class="icon-trash icon-large">&nbsp;</em> <a href="javascript:void(0);" onclick="nv_del_block_cat({ROW.bid})">{GLANG.delete}</a>
				</td>
			</tr>
			<!-- END: loop -->
		</tbody>
	</table>
</div>
<!-- END: main -->