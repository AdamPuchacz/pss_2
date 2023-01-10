<?php
/* Smarty version 4.1.0, created on 2023-01-10 21:59:56
  from 'D:\xampp\htdocs\korni-master\app\views\Katalog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63bdd1cca086a4_47442683',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e7d8e96a2b3ab92fb502e475aa71eeaa684c12f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\korni-master\\app\\views\\Katalog.tpl',
      1 => 1673384044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bdd1cca086a4_47442683 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103928857363bdd1cc9fd5f6_60926290', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_103928857363bdd1cc9fd5f6_60926290 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_103928857363bdd1cc9fd5f6_60926290',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h1>Katalog</h1>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cars']->value, 'car');
$_smarty_tpl->tpl_vars['car']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['car']->value) {
$_smarty_tpl->tpl_vars['car']->do_else = false;
?>
        <div>
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/car/<?php echo $_smarty_tpl->tpl_vars['car']->value["car_id"];?>
">
                <?php echo $_smarty_tpl->tpl_vars['car']->value["name"];?>

            </a>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
}
}
/* {/block 'content'} */
}
