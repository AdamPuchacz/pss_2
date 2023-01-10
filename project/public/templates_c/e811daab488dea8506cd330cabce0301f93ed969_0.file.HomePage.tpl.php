<?php
/* Smarty version 4.1.0, created on 2023-01-10 22:06:29
  from 'D:\xampp\htdocs\project\app\views\HomePage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63bdd355ac19d4_25094816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e811daab488dea8506cd330cabce0301f93ed969' => 
    array (
      0 => 'D:\\xampp\\htdocs\\project\\app\\views\\HomePage.tpl',
      1 => 1673384044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bdd355ac19d4_25094816 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143469249363bdd355abd074_41876362', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_143469249363bdd355abd074_41876362 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_143469249363bdd355abd074_41876362',
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
