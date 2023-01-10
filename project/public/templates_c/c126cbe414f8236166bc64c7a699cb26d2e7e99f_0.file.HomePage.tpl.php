<?php
/* Smarty version 4.1.0, created on 2023-01-10 21:59:19
  from 'D:\xampp\htdocs\korni-master\app\views\HomePage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63bdd1a7882b80_64826047',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c126cbe414f8236166bc64c7a699cb26d2e7e99f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\korni-master\\app\\views\\HomePage.tpl',
      1 => 1673384044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bdd1a7882b80_64826047 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55430300863bdd1a787d473_26990164', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_55430300863bdd1a787d473_26990164 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_55430300863bdd1a787d473_26990164',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h1>Nasza oferta</h1>
    <div class="banner-wrap">

    </div>
    <div class="hp-actionBtn-wrap">
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/katalog" class="hp-actionBtn">Zobacz więcej</a>
    </div>

<?php
}
}
/* {/block 'content'} */
}
