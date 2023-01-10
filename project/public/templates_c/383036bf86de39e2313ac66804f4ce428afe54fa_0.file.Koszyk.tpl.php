<?php
/* Smarty version 4.1.0, created on 2023-01-10 21:59:49
  from 'D:\xampp\htdocs\korni-master\app\views\Koszyk.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63bdd1c5d01b45_43339464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '383036bf86de39e2313ac66804f4ce428afe54fa' => 
    array (
      0 => 'D:\\xampp\\htdocs\\korni-master\\app\\views\\Koszyk.tpl',
      1 => 1673384044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bdd1c5d01b45_43339464 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200645807063bdd1c5cfccc3_84939285', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_200645807063bdd1c5cfccc3_84939285 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_200645807063bdd1c5cfccc3_84939285',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h1>Koszyk</h1>
    <div id="basket"></div>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/js/basket.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'content'} */
}
