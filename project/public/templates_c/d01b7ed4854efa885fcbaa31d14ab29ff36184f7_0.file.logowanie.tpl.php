<?php
/* Smarty version 4.1.0, created on 2023-01-10 21:59:44
  from 'D:\xampp\htdocs\korni-master\app\views\logowanie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63bdd1c055db29_61161883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd01b7ed4854efa885fcbaa31d14ab29ff36184f7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\korni-master\\app\\views\\logowanie.tpl',
      1 => 1673384044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bdd1c055db29_61161883 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113699316063bdd1c05566e5_73738588', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_113699316063bdd1c05566e5_73738588 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_113699316063bdd1c05566e5_73738588',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h1>Zaloguj się</h1>
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/zaloguj" method="post" id="loginForm">
        <label for="login">Login:</label>
        <input type="text" id="login" name="login">
        <label for="pass">Hasło:</label>
        <input type="password" id="pass" name="pass">
        <input type="submit" value="Zaloguj się">
    </form>
    <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
        <p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
    <?php }?>

<?php
}
}
/* {/block 'content'} */
}
