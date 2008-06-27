				{{include file="cabecalho.tpl"}}
				{{include file="menu.tpl"}}
				<td colspan="2">Centro
					<form action="processagabarito.php" method="post">
					<table>
						<tr><td>Preenchimento de gabaritos</td></tr>
						<tr><td>Gabarito Oficial<input type="text" name="goficial" size="80" value=""></td></tr>
						<tr><td>Gabarito dos Alunos<textarea name="gabaritos" cols="80" rows="15"></textarea></td></tr>
						<tr><td><input name="verificar" value="Verificar" type="submit" /> <input value="Cancelar" type="reset"></td></tr>
					</table>
					</form>
				</td>
				{{include file="rodape.tpl"}}