<?php
/* Smarty version 4.1.0, created on 2023-01-10 22:00:01
  from 'D:\xampp\htdocs\korni-master\app\views\Car.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63bdd1d1d8bd80_08680974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdcfd7b2a69a200c29ac14851f00a7637bcfe5bf' => 
    array (
      0 => 'D:\\xampp\\htdocs\\korni-master\\app\\views\\Car.tpl',
      1 => 1673384044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bdd1d1d8bd80_08680974 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121197871563bdd1d1d86fa8_09174179', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_121197871563bdd1d1d86fa8_09174179 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_121197871563bdd1d1d86fa8_09174179',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h1><?php echo $_smarty_tpl->tpl_vars['car']->value['name'];?>
</h1>
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/rezerwacja?car=<?php echo $_smarty_tpl->tpl_vars['car']->value["car_id"];?>
">Rezerwuj</a>

<?php
}
}
/* {/block 'content'} */
}
