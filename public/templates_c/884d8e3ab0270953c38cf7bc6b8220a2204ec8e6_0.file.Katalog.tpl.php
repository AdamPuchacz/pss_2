<?php
/* Smarty version 4.1.0, created on 2023-04-16 20:19:11
  from 'D:\xampp\htdocs\project\app\views\Katalog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_643c3c1fca4436_51369376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '884d8e3ab0270953c38cf7bc6b8220a2204ec8e6' => 
    array (
      0 => 'D:\\xampp\\htdocs\\project\\app\\views\\Katalog.tpl',
      1 => 1681669150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643c3c1fca4436_51369376 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_371639836643c3c1fc8de18_02032525', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_371639836643c3c1fc8de18_02032525 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_371639836643c3c1fc8de18_02032525',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h1>Katalog</h1>

    <div class="filtr">
        <p>Typ samochodu : </p>
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/katalog" method="GET" >
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
            <input type="submit" value="Szukaj" />
        </form>
    </div>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cars']->value, 'car');
$_smarty_tpl->tpl_vars['car']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['car']->value) {
$_smarty_tpl->tpl_vars['car']->do_else = false;
?>
        
            <a class="catalog_tile" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/car/<?php echo $_smarty_tpl->tpl_vars['car']->value["car_id"];?>
">
                <div class="car_name"><?php echo $_smarty_tpl->tpl_vars['car']->value["name"];?>
</div>
                 <img class="catalog_car_image" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/assets/<?php echo $_smarty_tpl->tpl_vars['car']->value['image'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['car']->value['name'];?>
">
            </a>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <div>
        <?php if ($_smarty_tpl->tpl_vars['current_page']->value > 1) {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/katalog?page=<?php echo $_smarty_tpl->tpl_vars['previous_page']->value;?>
">&#60;Poprzednia strona</a>
        <?php }?>
        </a> Strona <?php echo $_smarty_tpl->tpl_vars['current_page']->value;?>
 z <?php echo $_smarty_tpl->tpl_vars['total_no_of_pages']->value;?>

        <?php if ($_smarty_tpl->tpl_vars['current_page']->value <= $_smarty_tpl->tpl_vars['total_no_of_pages']->value-1) {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/katalog?page=<?php echo $_smarty_tpl->tpl_vars['next_page']->value;?>
">Nastepna strona &#62;</a>
        <?php }?>
    </div>

<?php
}
}
/* {/block 'content'} */
}
