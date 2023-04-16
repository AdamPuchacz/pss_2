<!DOCTYPE html>
<html lang="PL-pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wypozyczalnia</title>
    <link rel="stylesheet" href="{$conf->app_root}/style.css">
</head>

<body>
    <header>
        <div class="header-wrap">
            <div class="logo-wrap">
                
                <h1><a href="{$conf->app_root}/"><img class="banner" src="{$conf->app_root}/assets/logo-header.png" alt="banner"/>Wypożyczalnia samochodowa</a></h1>
            </div>
        </div>
    </header>
    <div class="main-wrap">
        <div class="content-wrap">
            {block name=content} {/block}
        </div>
        <nav class="sidebar-wrap">
            <a href="{$conf->app_root}/katalog">Katalog</a>
            <a href="{$conf->app_root}/kontakt">Kontakt</a>
            <a href="{$conf->app_root}/about">O nas</a>
            {if \core\RoleUtils::inRole('loggedIn')}
                <a href="{$conf->app_root}/wyloguj">Wyloguj się</a>
                <a href="{$conf->app_root}/rezerwacje">Moje rezerwacje</a>
                {if \core\RoleUtils::inRole('isAdmin')}
                <a href="{$conf->app_root}/wszystkierezerwacje">Wszystkie rezerwacje</a>
                {/if}
            {else}
                <a href="{$conf->app_root}/logowanie">Zaloguj się</a>
            {/if}
        </nav>
    </div>
    <footer>
        <p>Copyright 2023 Wypożyczalnia samochodowa. Wszelkie prawa zastrzeżone.</p>
    </footer>
</body>

</html>