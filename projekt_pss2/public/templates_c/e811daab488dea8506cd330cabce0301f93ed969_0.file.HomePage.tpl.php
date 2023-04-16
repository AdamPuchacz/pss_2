<?php
/* Smarty version 4.1.0, created on 2023-04-15 17:05:43
  from 'D:\xampp\htdocs\project\app\views\HomePage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_643abd478d8147_58365072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e811daab488dea8506cd330cabce0301f93ed969' => 
    array (
      0 => 'D:\\xampp\\htdocs\\project\\app\\views\\HomePage.tpl',
      1 => 1681569154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643abd478d8147_58365072 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1604506648643abd478cab51_48801948', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1604506648643abd478cab51_48801948 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1604506648643abd478cab51_48801948',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h1>Nasza oferta</h1>
    <div class="banner-wrap">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['banners']->value, 'banner');
$_smarty_tpl->tpl_vars['banner']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['banner']->value) {
$_smarty_tpl->tpl_vars['banner']->do_else = false;
?>

      <div class="mySlides fade">
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/car/<?php echo $_smarty_tpl->tpl_vars['banner']->value['car_id'];?>
" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/assets/<?php echo $_smarty_tpl->tpl_vars['banner']->value['image'];?>
.jpg')"></a>
      </div>

      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    <div class="dots">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['banners']->value, 'banner', false, 'id');
$_smarty_tpl->tpl_vars['banner']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['banner']->value) {
$_smarty_tpl->tpl_vars['banner']->do_else = false;
?>
  
      <div class="dot" onclick="currentSlide(<?php echo $_smarty_tpl->tpl_vars['id']->value+1;?>
)"></div>

      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    <div class="hp-actionBtn-wrap">
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/katalog" class="hp-actionBtn">Zobacz więcej</a>
    </div>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/js/slider.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'content'} */
}
