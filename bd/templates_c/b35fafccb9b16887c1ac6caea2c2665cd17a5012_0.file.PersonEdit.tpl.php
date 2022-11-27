<?php
/* Smarty version 3.1.30, created on 2022-11-27 20:17:31
  from "D:\xampp\htdocs\php_08_bd\app\views\PersonEdit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6383b7cbb7fe05_56273614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b35fafccb9b16887c1ac6caea2c2665cd17a5012' => 
    array (
      0 => 'D:\\xampp\\htdocs\\php_08_bd\\app\\views\\PersonEdit.tpl',
      1 => 1669576645,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_6383b7cbb7fe05_56273614 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13177132306383b7cbb7f929_53919673', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_13177132306383b7cbb7f929_53919673 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Dane do kredytu</legend>
		<div class="pure-control-group">
            <label for="kwota">Kwota</label>
            <input id="kwota" type="text" placeholder="Kwota" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
">
        </div>
        <div class="pure-control-group">
            <label for="lata">Lata</label>
            <input id="lata" type="text" placeholder="Lata" name="lata" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->lata;?>
">
        </div>
		<div class="pure-control-group">
            <label for="procent">Procent</label>
            <input id="procent" type="text" placeholder="Procent" name="procent" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->procent;?>
">
        </div>
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Oblicz"/>
			<a class="pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personList">Powrót</a>
		</div>
	</fieldset>
    <input type="hidden" name="id_wynik" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id_wynik;?>
">
</form>	
</div>

<?php
}
}
/* {/block 'top'} */
}
