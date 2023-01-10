{extends file="main.tpl"}
{block name=content}

    <h1>TYP</h1>
    <div>
        <p>Data odbioru: {$res["collectDate"]}</p>
        <p>Miejsce odbioru: {$res["city"]}</p>
        <p>Data zwrotu: {$res["returnDate"]}</p>
        <p>Miejsce zwrotu: {$res["city"]}</p>
        <p>Liczba dni: {$days}</p>
        <p>Imię i nazwisko: {$res["name"]}</p>
        <p>Telefon: {$res["phone"]}</p>
        <p>Email: {$res["email"]}</p>
        <p>Płatność: {$res["payment"]}</p>

        <p>Pojazd: {$res["car_name"]}</p>
        <p>{$res["car_id"]}</p>
    </div>


{/block}