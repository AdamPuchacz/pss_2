{extends file="main.tpl"}
{block name=content}
    <div class="car_page_wrap">
        <h1>{$car['brand_name']} {$car['name']}</h1>
        <div class="wrap">
            <img class="car_image" src="{$conf->app_root}/assets/{$car['image']}.jpg" alt="{$car['name']}">
            <div class="details">
                <div class = "spec">
                    <h3>Producent : {$car['brand_name']}</h3>
                    <h3>Typ samochodu : {$car['type_name']}</h3>
                    <h3>Moc : {$car['horse_power']} KM</h3>
                    <h3>Prędkość maksymalna : {$car['v_max']} km/h</h3>
                    <h3>Pojemność silnika : {$car['engine']} l</h3>
                    <h3>Rodzaj paliwa : {$car['fuel']}</h3>
                    <h2>Cena za dzień : {$car['price']} zł</h2>
                </div>
                <a class="btn" href="{$conf->app_root}/rezerwacja?car={$car["car_id"]}">Rezerwuj</a>
            </div>
        </div>
    </div>
    

{/block}