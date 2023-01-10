{extends file="main.tpl"}
{block name=content}

    <h1>Rezerwacja</h1>
    <form action="{$conf->app_root}/rezerwacja/rezerwuj" method="post" id="reservationForm" onsubmit="return validate()">
        <div id="carDetails">
            <input type="hidden" id="car_id" name="car_id" value="{$car["car_id"]}">
            <input type="hidden" id="car_name" name="car_name" value="{$car["name"]}">
            <h2>{$car["name"]}</h2>
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

    <script src="{$conf->app_root}/js/reservation.js"></script>

{/block}