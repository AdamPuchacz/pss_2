{extends file="main.tpl"}
{block name=content}

    <h1>Dziekujemy za rezerwacje !</h1>
    <div>
        <p>Data odbioru: {$res["collectDate"]}</p>
        <p>Miejsce odbioru: {$res["city"]}</p>
        <p>Data zwrotu: {$res["returnDate"]}</p>
        <p>Miejsce zwrotu: {$res["city"]}</p>
        <p>Cena za {$days} dni {$res["total_price"]}zł</p>
        <p>Imię i nazwisko: {$res["name"]}</p>
        <p>Telefon: {$res["phone"]}</p>
        <p>Email: {$res["email"]}</p>
        <p>Płatność: {$res["payment"]}</p>

        <p>Pojazd: {$res["brand_name"]} {$res["car_name"]}</p>
    </div>


{/block}