<?php
/* Smarty version 4.1.0, created on 2023-04-16 19:34:12
  from 'D:\xampp\htdocs\project\app\views\Rezerwacja.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_643c319489f0a4_53039516',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d436749d5d8a0c90b251af60071e100a96db078' => 
    array (
      0 => 'D:\\xampp\\htdocs\\project\\app\\views\\Rezerwacja.tpl',
      1 => 1674849759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643c319489f0a4_53039516 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104882215643c31948981c4_42783655', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_104882215643c31948981c4_42783655 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_104882215643c31948981c4_42783655',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h1>Rezerwacja</h1>
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/rezerwacja/rezerwuj" method="post" id="reservationForm" onsubmit="return validate()">
        <div id="carDetails">
            <input type="hidden" id="car_id" name="car_id" value="<?php echo $_smarty_tpl->tpl_vars['car']->value["car_id"];?>
">
            <input type="hidden" id="car_name" name="car_name" value="<?php echo $_smarty_tpl->tpl_vars['car']->value["name"];?>
">
            <input type="hidden" id="car_price" name="car_price" value="<?php echo $_smarty_tpl->tpl_vars['car']->value["price"];?>
"/>
            <h2><?php echo $_smarty_tpl->tpl_vars['car']->value["brand_name"];?>
 <?php echo $_smarty_tpl->tpl_vars['car']->value["name"];?>
</h2>
        </div>
        <div id="selectTime">
            <label for="city">Miejscowość:</label>
            <input type="text" id="city" name="city">

            <label for="collectDate">Data odbioru:</label>
            <input type="date" id="collectDate" name="collectDate">

            <label for="returnDate">Data zwrotu:</label>
            <input type="date" id="returnDate" name="returnDate">

            <input type="button" id="findBtn" value="Szukaj" />
        </div>
        <div id="enterData">
            <h3>Cena za <span id="days"></span> dni <span id="totalPrice"></span>zł</h3>
            <label for="name">imię i nazwisko:</label>
            <input type="text" id="name" name="name">

            <label for="phone">Telefon:</label>
            <input type="number" id="phone" name="phone">

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email">

            <label>Metoda płatności:</label>
            <label for="payment1">
                <input type="radio" id="payment1" name="payment" value="online" checked>
                Online
            </label>
            <label for="payment2">
                <input type="radio" id="payment2" name="payment" value="cash">
                Przy odbiorze
            </label>
            <label for="payment3">
                <input type="radio" id="payment3" name="payment" value="prepayment">
                Przelew Tradycyjny
            </label>
            <input type="button" id="backBtn" value="Wstecz" />
            <input type="submit" value="Rezerwuj" />
        </div>
    </form>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/js/reservation.js"><?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'content'} */
}
