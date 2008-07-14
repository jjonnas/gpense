				{{include file="cabecalho.tpl"}}
				{{include file="menu.tpl"}}
				<td colspan="2">
					<form action="processagabarito.php" method="post">
					<table>
						<tr><td>Preenchimento de gabaritos</td></tr>
						<tr><td>Sala<input type="text" name="sala" size="30" value=""></td></tr>
						<tr><td>Gabarito Oficial<input type="text" name="goficial" size="80" value=""></td></tr>
						<tr><td><label>Ordenar pela pontuação<input type="checkbox" name="ordena" value="pontos" /></label></td></tr>
						<tr><td>Gabarito dos Alunos<br><textarea name="gabaritos" cols="80" rows="15"></textarea></td></tr>
						<tr><td><input name="verificar" value="Verificar" type="submit" /> <input value="Cancelar" type="reset"></td></tr>
					</table>
                    <input type="hidden" name="tipo" value="input" />
					</form>
				</td>
				{{include file="rodape.tpl"}}