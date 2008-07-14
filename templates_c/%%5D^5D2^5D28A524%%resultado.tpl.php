<?php /* Smarty version 2.6.19-dev, created on 2008-07-11 10:38:04
         compiled from resultado.tpl */ ?>
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
				<tr>
					<td align="center">
						<table border="1">
							<tr><td colspan="7">Resultados: <?php echo $this->_tpl_vars['sala']; ?>
</td></tr>
							<tr><td>Classificação</td><td>Número</td><td>Fisica</td><td>Matematica</td><td>Quimica</td><td>Biologia</td><td>Pontos</td></tr>
							<?php $_from = $this->_tpl_vars['gabaritos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['gabarito']):
?>
							<tr><td><?php echo $this->_tpl_vars['gabarito']['classificacao']; ?>
</td><td><?php echo $this->_tpl_vars['gabarito']['numero']; ?>
</td><td><?php echo $this->_tpl_vars['gabarito']['disciplinas']['Fisica']; ?>
</td><td><?php echo $this->_tpl_vars['gabarito']['disciplinas']['Matematica']; ?>
</td><td><?php echo $this->_tpl_vars['gabarito']['disciplinas']['Quimica']; ?>
</td><td><?php echo $this->_tpl_vars['gabarito']['disciplinas']['Biologia']; ?>
</td><td><?php echo $this->_tpl_vars['gabarito']['pontos']; ?>
</td></tr>
							<?php endforeach; endif; unset($_from); ?>
						</table>
					</td>
				</tr>
				<tr>
					<td>
						<form action="../modelo/admin/ins_pagina_interna.php" method="post">
							<input type="hidden" name="conteudo" value="<table border=\'1\'><tr><td colspan=\'3\'>Resultados: <?php echo $this->_tpl_vars['sala']; ?>
</td></tr><tr><td>Classificação</td><td>Número</td><td>Pontos</td></tr><?php $_from = $this->_tpl_vars['gabaritos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['gabarito']):
?><tr><td><?php echo $this->_tpl_vars['gabarito']['classificacao']; ?>
</td><td><?php echo $this->_tpl_vars['gabarito']['numero']; ?>
</td><td><?php echo $this->_tpl_vars['gabarito']['pontos']; ?>
</td></tr><?php endforeach; endif; unset($_from); ?></table>">
							<input type="hidden" name="titulo" value="Resultados: <?php echo $this->_tpl_vars['sala']; ?>
">
							<input type="hidden" name="enviado" value="ok">
							<input name="Salvar Pagina" value="Salvar Pagina" type="submit" /> <input value="Cancelar" type="reset">
						</form>
					</td>
				</tr>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "rodape.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>