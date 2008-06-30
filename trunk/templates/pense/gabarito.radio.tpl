				{{include file="cabecalho.tpl"}}
				{{include file="menu.tpl"}}
				<td colspan="2">
					<form action="processagabarito.php" method="post">
					<table>
						<tr><td>Preenchimento de gabaritos</td></tr>
						<tr><td>Sala<input type="text" name="sala" size="30" value=""></td></tr>
						<tr>
							<td>Gabarito Oficial
								<table border="1" width="3000px">
									<tr>
										{{foreach from=$indice item=i}}
										<td>{{$i}}</td>
										{{/foreach}}
									</tr>
									<tr>
										{{foreach from=$indice item=i}}
										<td><label>A<input type="radio" name="gofficial{{$i}}[]" value="A" /></label></td>
										{{/foreach}}
									</tr>
									<tr>
										{{foreach from=$indice item=i}}
										<td><label><input type="radio" name="gofficial{{$i}}[]" value="B" /> B</label></td>
										{{/foreach}}
									</tr>
									<tr>
										{{foreach from=$indice item=i}}
										<td><label><input type="radio" name="gofficial{{$i}}[]" value="C" /> C</label></td>
										{{/foreach}}
									</tr>
									<tr>
										{{foreach from=$indice item=i}}
										<td><label><input type="radio" name="gofficial{{$i}}[]" value="D" /> D</label></td>
										{{/foreach}}
									</tr>
									<tr>
										{{foreach from=$indice item=i}}
										<td><label><input type="radio" name="gofficial{{$i}}[]" value="E" /> E</label></td>
										{{/foreach}}
									</tr>
								</table>
							</td>
						</tr>
						<tr><td><label>Ordenar pela pontuação<input type="checkbox" name="ordena" value="pontos" /></label></td></tr>
						<tr><td>Gabarito dos Alunos<br><textarea name="gabaritos" cols="80" rows="15"></textarea></td></tr>
						<tr><td><input name="verificar" value="Verificar" type="submit" /> <input value="Cancelar" type="reset"></td></tr>
					</table>
					</form>
				</td>
				{{include file="rodape.tpl"}}