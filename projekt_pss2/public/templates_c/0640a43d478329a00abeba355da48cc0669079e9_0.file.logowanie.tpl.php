<?php
/* Smarty version 4.1.0, created on 2023-04-30 14:31:35
  from 'D:\xampp\htdocs\project\app\views\logowanie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_644e5fa76a15d5_92699875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0640a43d478329a00abeba355da48cc0669079e9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\project\\app\\views\\logowanie.tpl',
      1 => 1673384416,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644e5fa76a15d5_92699875 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2070618353644e5fa7640d44_43691685', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_2070618353644e5fa7640d44_43691685 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2070618353644e5fa7640d44_43691685',
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
