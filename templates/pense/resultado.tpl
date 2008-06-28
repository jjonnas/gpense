				{{include file="cabecalho.tpl"}}
				{{include file="menu.tpl"}}
				<tr>
					<td align="center">
						<table border="1">
							<tr><td colspan="3">Resultados: {{$sala}}</td></tr>
							<tr><td>Classificação</td><td>Número</td><td>Pontos</td></tr>
							{{foreach from=$gabaritos item=gabarito}}
							<tr><td>{{$gabarito.classificacao}}</td><td>{{$gabarito.numero}}</td><td>{{$gabarito.pontos}}</td></tr>
							{{/foreach}}
						</table>
					</td>
				</tr>
				<tr>
					<td>
						<form action="../modelo/admin/ins_pagina_interna.php" method="post">
							<input type="hidden" name="conteudo" value="<table border=\'1\'><tr><td colspan=\'3\'>Resultados: {{$sala}}</td></tr><tr><td>Classificação</td><td>Número</td><td>Pontos</td></tr>{{foreach from=$gabaritos item=gabarito}}<tr><td>{{$gabarito.classificacao}}</td><td>{{$gabarito.numero}}</td><td>{{$gabarito.pontos}}</td></tr>{{/foreach}}</table>">
							<input type="hidden" name="titulo" value="Resultados: {{$sala}}">
							<input type="hidden" name="enviado" value="ok">
							<input name="Salvar Pagina" value="Salvar Pagina" type="submit" /> <input value="Cancelar" type="reset">
						</form>
					</td>
				</tr>
				{{include file="rodape.tpl"}}