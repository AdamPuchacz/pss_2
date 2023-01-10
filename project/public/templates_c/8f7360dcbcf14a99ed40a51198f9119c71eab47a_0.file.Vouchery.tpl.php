<?php
/* Smarty version 4.1.0, created on 2023-01-10 21:59:50
  from 'D:\xampp\htdocs\korni-master\app\views\Vouchery.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63bdd1c6c70067_53849971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f7360dcbcf14a99ed40a51198f9119c71eab47a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\korni-master\\app\\views\\Vouchery.tpl',
      1 => 1673384044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bdd1c6c70067_53849971 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53092023163bdd1c6c60a40_57059650', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_53092023163bdd1c6c60a40_57059650 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_53092023163bdd1c6c60a40_57059650',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h1>Vouchery</h1>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vouchers']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
        <div>
            <p id="name_<?php echo $_smarty_tpl->tpl_vars['v']->value['voucher_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["name"];?>
</p>
            <p id="price_<?php echo $_smarty_tpl->tpl_vars['v']->value['voucher_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["price"];?>
</p>
            <button id="btnAddToBasket_<?php echo $_smarty_tpl->tpl_vars['v']->value['voucher_id'];?>
" onClick="addToBasket(<?php echo $_smarty_tpl->tpl_vars['v']->value['voucher_id'];?>
)">
                Dodaj do koszyka
            </button>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/js/addToBasket.js"><?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'content'} */
}
