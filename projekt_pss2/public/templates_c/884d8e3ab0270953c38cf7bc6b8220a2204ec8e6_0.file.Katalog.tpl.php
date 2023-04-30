<?php
/* Smarty version 4.1.0, created on 2023-04-30 14:29:43
  from 'D:\xampp\htdocs\project\app\views\Katalog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_644e5f37509b42_64295882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '884d8e3ab0270953c38cf7bc6b8220a2204ec8e6' => 
    array (
      0 => 'D:\\xampp\\htdocs\\project\\app\\views\\Katalog.tpl',
      1 => 1682857775,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644e5f37509b42_64295882 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_539226365644e5f374fc874_87502477', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_539226365644e5f374fc874_87502477 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_539226365644e5f374fc874_87502477',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>Katalog</h1>

    <div class="filtr">
        <p>Typ samochodu : </p>
        <form action="#" method="GET" id="filters" >
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['car_types']->value, 'type');
$_smarty_tpl->tpl_vars['type']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->do_else = false;
?>
                <label>
                    <input type="radio" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value['type_name'];?>
" />
                    <?php echo $_smarty_tpl->tpl_vars['type']->value['type_name'];?>

                </label>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <input type="button" value="Szukaj" onclick="ajaxPostForm('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
api_listing'); return false;"/>
        </form>
    </div>
    <div id="listing">
    
    </div>

    <div id="pagination">

    </div>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/listing.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        ajaxPostForm('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
api_listing');
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'content'} */
}
