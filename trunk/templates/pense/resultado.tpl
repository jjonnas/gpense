				{{include file="cabecalho.tpl"}}
				{{include file="menu.tpl"}}
				<td colspan="2">Centro
					<table border="1">
						<tr><td>Resultados</td></tr>
						{{foreach from=$gabaritos item=gabarito}}
						<tr><td>{{$gabarito}}</td></tr>
						{{/foreach}}
					</table>
				</td>
				{{include file="rodape.tpl"}}