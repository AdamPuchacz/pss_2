{extends file="main.tpl"}
{block name=content}

    <h1>Vouchery</h1>
    {foreach $vouchers as $v}
        <div>
            <p id="name_{$v['voucher_id']}">{$v["name"]}</p>
            <p id="price_{$v['voucher_id']}">{$v["price"]}</p>
            <button id="btnAddToBasket_{$v['voucher_id']}" onClick="addToBasket({$v['voucher_id']})">
                Dodaj do koszyka
            </button>
        </div>
    {/foreach}

    <script src="{$conf->app_root}/js/addToBasket.js"></script>

{/block}