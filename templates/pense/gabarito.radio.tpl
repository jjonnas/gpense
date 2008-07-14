				{{include file="cabecalho.tpl"}}
				{{include file="menu.tpl"}}
				<td colspan="2">
					<form action="processagabarito.php" method="post">
					<table>
						<tr><td>Preenchimento de gabaritos</td></tr>
						<tr><td>Sala<input type="text" name="sala" size="30" value=""></td></tr>
						<tr>
							<td>Gabarito Oficial
                            	<table border="1" >
									<tr>
                                    	<td style="background-color:#999">&nbsp;</td>
                                        <td style="background-color:#999">A</td>
                                        <td style="background-color:#999">B</td>
                                        <td style="background-color:#999">C</td>
                                        <td style="background-color:#999">D</td>
                                        <td style="background-color:#999">E</td>
									</tr>
									
										{{foreach from=$indice item=i}}
                                    <tr>
                                        <td style="background-color:#999">{{$i}}</td>
                                        <td style="background-color:#ddd"><label> A<input type="radio" name="gofficial{{$i}}[]" value="A" /></label></td>
                                        <td><label> B<input type="radio" name="gofficial{{$i}}[]" value="B" /></label></td>
                                        <td style="background-color:#ddd"><label> C<input type="radio" name="gofficial{{$i}}[]" value="C" /></label></td>
                                        <td><label> D<input type="radio" name="gofficial{{$i}}[]" value="D" /></label></td>
                                        <td style="background-color:#ddd"><label> E<input type="radio" name="gofficial{{$i}}[]" value="E" /></label></td>
                                   </tr>
										{{/foreach}}
								</table>
							</td>
						</tr>
						<tr><td><label>Ordenar pela pontuação<input type="checkbox" name="ordena" value="pontos" /></label></td></tr>
						<tr><td>Gabarito dos Alunos<br><textarea name="gabaritos" cols="80" rows="15"></textarea></td></tr>
						<tr><td><input name="verificar" value="Verificar" type="submit" /> <input value="Cancelar" type="reset"></td></tr>
					</table>
                    <input type="hidden" name="tipo" value="radio" />
					</form>
				</td>
				{{include file="rodape.tpl"}}