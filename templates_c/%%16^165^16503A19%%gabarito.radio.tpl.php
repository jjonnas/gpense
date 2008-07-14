<?php /* Smarty version 2.6.19-dev, created on 2008-07-11 10:24:42
         compiled from gabarito.radio.tpl */ ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "cabecalho.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<td colspan="2">
					<form action="processagabarito.php" method="post">
					<table>
						<tr><td>Preenchimento de gabaritos</td></tr>
						<tr><td>Sala<input type="text" name="sala" size="30" value=""></td></tr>
						<tr>
							<td>Gabarito Oficial
								<table border="1" width="3000px">
									<tr>
										<?php $_from = $this->_tpl_vars['indice']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
										<td><?php echo $this->_tpl_vars['i']; ?>
</td>
										<?php endforeach; endif; unset($_from); ?>
									</tr>
									<tr>
										<?php $_from = $this->_tpl_vars['indice']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
										<td><label>A<input type="radio" name="gofficial<?php echo $this->_tpl_vars['i']; ?>
[]" value="A" /></label></td>
										<?php endforeach; endif; unset($_from); ?>
									</tr>
									<tr>
										<?php $_from = $this->_tpl_vars['indice']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
										<td><label><input type="radio" name="gofficial<?php echo $this->_tpl_vars['i']; ?>
[]" value="B" /> B</label></td>
										<?php endforeach; endif; unset($_from); ?>
									</tr>
									<tr>
										<?php $_from = $this->_tpl_vars['indice']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
										<td><label><input type="radio" name="gofficial<?php echo $this->_tpl_vars['i']; ?>
[]" value="C" /> C</label></td>
										<?php endforeach; endif; unset($_from); ?>
									</tr>
									<tr>
										<?php $_from = $this->_tpl_vars['indice']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
										<td><label><input type="radio" name="gofficial<?php echo $this->_tpl_vars['i']; ?>
[]" value="D" /> D</label></td>
										<?php endforeach; endif; unset($_from); ?>
									</tr>
									<tr>
										<?php $_from = $this->_tpl_vars['indice']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
										<td><label><input type="radio" name="gofficial<?php echo $this->_tpl_vars['i']; ?>
[]" value="E" /> E</label></td>
										<?php endforeach; endif; unset($_from); ?>
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
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "rodape.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>