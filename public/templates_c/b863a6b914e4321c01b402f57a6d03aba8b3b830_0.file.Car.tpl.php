<?php
/* Smarty version 4.1.0, created on 2023-04-15 17:05:49
  from 'D:\xampp\htdocs\project\app\views\Car.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_643abd4db5c941_67760231',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b863a6b914e4321c01b402f57a6d03aba8b3b830' => 
    array (
      0 => 'D:\\xampp\\htdocs\\project\\app\\views\\Car.tpl',
      1 => 1674850282,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643abd4db5c941_67760231 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_754917204643abd4db52ef0_82884629', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_754917204643abd4db52ef0_82884629 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_754917204643abd4db52ef0_82884629',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="car_page_wrap">
        <h1><?php echo $_smarty_tpl->tpl_vars['car']->value['brand_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['car']->value['name'];?>
</h1>
        <div class="wrap">
            <img class="car_image" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/assets/<?php echo $_smarty_tpl->tpl_vars['car']->value['image'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['car']->value['name'];?>
">
            <div class="details">
                <div class = "spec">
                    <h3>Producent : <?php echo $_smarty_tpl->tpl_vars['car']->value['brand_name'];?>
</h3>
                    <h3>Typ samochodu : <?php echo $_smarty_tpl->tpl_vars['car']->value['type_name'];?>
</h3>
                    <h3>Moc : <?php echo $_smarty_tpl->tpl_vars['car']->value['horse_power'];?>
 KM</h3>
                    <h3>Prędkość maksymalna : <?php echo $_smarty_tpl->tpl_vars['car']->value['v_max'];?>
 km/h</h3>
                    <h3>Pojemność silnika : <?php echo $_smarty_tpl->tpl_vars['car']->value['engine'];?>
 l</h3>
                    <h3>Rodzaj paliwa : <?php echo $_smarty_tpl->tpl_vars['car']->value['fuel'];?>
</h3>
                    <h2>Cena za dzień : <?php echo $_smarty_tpl->tpl_vars['car']->value['price'];?>
 zł</h2>
                </div>
                <a class="btn" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/rezerwacja?car=<?php echo $_smarty_tpl->tpl_vars['car']->value["car_id"];?>
">Rezerwuj</a>
            </div>
        </div>
    </div>
    

<?php
}
}
/* {/block 'content'} */
}
