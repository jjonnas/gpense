				{{include file="cabecalho.tpl"}}
				{{include file="menu.tpl"}}
				<td colspan="2">
					<form action="processagabarito.php" method="post">
					<table>
						<tr><td>Preenchimento de gabaritos</td></tr>
						<tr><td>Sala<input type="text" name="sala" size="30" value="Sala 1 - A"></td></tr>
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
                                        <td style="background-color:#ddd"><label> A<input type="radio" name="goficial{{$i}}[]" value="A" checked="checked" /></label></td>
                                        <td><label> B<input type="radio" name="goficial{{$i}}[]" value="B" /></label></td>
                                        <td style="background-color:#ddd"><label> C<input type="radio" name="goficial{{$i}}[]" value="C" /></label></td>
                                        <td><label> D<input type="radio" name="goficial{{$i}}[]" value="D" /></label></td>
                                        <td style="background-color:#ddd"><label> E<input type="radio" name="goficial{{$i}}[]" value="E" /></label></td>
                                   </tr>
										{{/foreach}}
								</table>
							</td>
						</tr>
						<tr><td><label>Ordenar pela pontuação<input type="checkbox" name="ordena" value="pontos" checked="checked" /></label></td></tr>
						<tr><td>Gabarito dos Alunos<br><textarea name="gabaritos" cols="80" rows="15">729000001001062608001Y  5311 #0001    N 11   1    DABDAEDDBBADCCCBAACDCACEACBABCBDAACBDDADACABDDADBEAEBBADBACC
729000002001062608001Y  5311 #0001    N 11   2    DCDCAEDABCBEAEAABADCBBEDBBCBBCAACACAD ADBEDDCADDBEBDBECDBCBB
729000003001062608001Y  5311 #0001    N 11   3    BCDCAEDACEDACCCBABACADDECABBDDAABAACABEBCAECBAEDBEAEEACACCBB
729000004001062608001Y  5311 #0001    N 11   5    DEBCAEDAACAEACCABAECAAAECDBDAE DACECACEDCABDAEDCDEAECACABDAD
729000005001062608001Y  5311 #0001    N 11   6    DADCEEDACCBAACCACADCCDCBDCBBBEBDAACAD AACCBACCDDEABEEDACBBCB
729000006001062608001Y  5311 #0001    N 11   7    DCDCAEDABECACECDACACABDEDEBCBDACBAACDBEBCAEABAADBEACBECACCBC
729000007001062608001Y  5311 #0001    N 11   9    DCDCADDABAAEAECACCBCBAADACDBEBACAADAD EDBDBCADDCBEAEBCCCABBA
729000008001062608001Y  5311 #0001    N 11  10    DABCDEDAEBDAAEBCAABCADBEBCBBBDABAAACDCDBDBECBEACACCDAACCACAD
729000009001062608001Y  5311 #0001    N 11  11    DCDCABDAEBDBAADACACCEACDCBBBCDACABECD BCBDEBCCEDBEDAEBEDBCBD
729000010001062608001Y  5311 #0001    N 11  12    DADCAEDDBBAAAEABAADCABAEDCABEEDDCAEDAACCCDDBACACEBDACACAECCB
729000011001062608001Y  5311 #0001    N 11  13    DAECBEDDEBCAAEAAABDCAAAABCABBDADAABADBDADCBBCDBDEEAEEBAADAAD
729000012001062608001Y  5311 #0001    N 11  14    DACCDEDABCDDCACDAAACBBCDCCABCDAAAAACD EDABBBBDDDCEEBBDCCBBBA
729000013001062608001Y  5311 #0001    N 11  15    DABCDEDDEEAEBEABAABCDACEDCBBEECCAACADCAAAEECDAADBEBEEDCBBAAD
729000014001062608001Y  5311 #0001    N 11  16    DBBCAEDABCCDAEACCABACEADCABCECADAACDACBCBCDBABDDBEBDADCCBBBE
729000015001062608001Y  5311 #0001    N 11  17    DAECDEDDCBAEACCBDADCEACDBCBAECADAABDDCADECEBCCDCECBEDDCCABAA
729000016001062608001Y  5311 #0001    N 11  18    DADCEEDACBDACECDAABCADCDCCCCCEACAECCEBCAAAEADCADDEAEBCCBBCCA
729000017001062608001Y  5311 #0001    N 11  19    DABCAEDDABBDDCCBBABCBAECDBBDBADDAABCEAECCDDABBADBEAABACCACBC
729000018001062608001Y  5311 #0001    N 11  20    DAEDBEDDCEBEAEABABDCDDDDBCBCCEADACBCABDDDCBBCEADBEDEBAAADCBC
729000019001062608001Y  5311 #0001    N 11  22    DADCBEDABCBDCEADCEDCCAADCEBBEAADABACACEDBCEADCDAEEEDDCACBDBB
729000020001062608001Y  5311 #0001    N 11  23    BCECAEDABBAEACABABECEADECAADEDACAAEEDBADEBEADEADBECDBECCCDBA
729000021001062608001Y  5311 #0001    N 11  25    DCECAEDACABAAEAAAABCBADDBCBBCDABCACCDBBDBDAACEDAAEAEBDADCACC
729000022001062608001Y  5311 #0001    N 11  27    DCECAEDABCAEADCAAEDCABADECCBECBDAABADCADBDBEECDDBACDBECAECBA
729000023001062608001Y  5311 #0001    N 11  28    DABCAEDABBBECEADADDCBBADACABBDACAACADCADADEBCCADBEDEEECACCBC
729000024001062608001Y  5311 #0001    N 11  29    DAACDEDABCCECCEDAAABDBCDDCBBAAAAAACAD CDCDEACCDDBEDAECADBBED
729000025001062608001Y  5311 #0001    N 11  30    DAECAEDAABEAAEAAACACADADCBECEDABACACBCEDCCDBEEBDBEDABCEAAAAE
729000026001062608001Y  5311 #0001    N 11  31    DAACAEDAEBEAAEBAACBCBDCEBCBCEDDBECECD AEDBEBDAADBEDEECACBBBA
729000027001062608001Y  5311 #0001    N 11  32    DABCAEBDABACDEACAEBDACBEAACBACBCCDDCDBECBCEDDE ECABCDECADBEC</textarea></td></tr>
						<tr><td><input name="verificar" value="Verificar" type="submit" /> <input value="Cancelar" type="reset"></td></tr>
					</table>
                    <input type="hidden" name="tipo" value="radio" />
					</form>
				</td>
				{{include file="rodape.tpl"}}