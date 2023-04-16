<?php
/* Smarty version 4.1.0, created on 2023-04-15 17:05:43
  from 'D:\xampp\htdocs\project\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_643abd4799d8f5_70250365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '818e7c4933e99fb55ef9a1ffa31792520dbfc060' => 
    array (
      0 => 'D:\\xampp\\htdocs\\project\\app\\views\\templates\\main.tpl',
      1 => 1678559952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643abd4799d8f5_70250365 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="PL-pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wypozyczalnia</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/style.css">
</head>

<body>
    <header>
        <div class="header-wrap">
            <div class="logo-wrap">
                
                <h1><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/"><img class="banner" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/assets/logo-header.png" alt="banner"/>Wypożyczalnia samochodowa</a></h1>
            </div>
        </div>
    </header>
    <div class="main-wrap">
        <div class="content-wrap">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1759213840643abd47998008_11494051', 'content');
?>

        </div>
        <nav class="sidebar-wrap">
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/katalog">Katalog</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/kontakt">Kontakt</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/about">O nas</a>
            <?php if (\core\RoleUtils::inRole('loggedIn')) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/wyloguj">Wyloguj się</a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/rezerwacje">Moje rezerwacje</a>
                <?php if (\core\RoleUtils::inRole('isAdmin')) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/wszystkierezerwacje">Wszystkie rezerwacje</a>
                <?php }?>
            <?php } else { ?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/logowanie">Zaloguj się</a>
            <?php }?>
        </nav>
    </div>
    <footer>
        <p>Copyright 2023 Wypożyczalnia samochodowa. Wszelkie prawa zastrzeżone.</p>
    </footer>
</body>

</html><?php }
/* {block 'content'} */
class Block_1759213840643abd47998008_11494051 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1759213840643abd47998008_11494051',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'content'} */
}
