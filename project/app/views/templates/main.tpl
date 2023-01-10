<!DOCTYPE html>
<html lang="PL-pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{$conf->app_root}/style.css">
</head>

<body>
    <script src="{$conf->app_root}/js/main.js"></script>
    <header>
        <div class="header-wrap">
            <div class="logo-wrap">
                <img src="#" />
                <h1><a href="{$conf->app_root}/">Nazwa Here</a></h1>
            </div>
        </div>
    </header>
    <div class="main-wrap">
        <div class="content-wrap">
            {block name=content} {/block}
        </div>
        <nav class="sidebar-wrap">
            <a href="{$conf->app_root}/katalog">Katalog</a>
            <a href="{$conf->app_root}/vouchery">Vouchery</a>
            <a href="{$conf->app_root}/koszyk">Koszyk</a>
            <a href="{$conf->app_root}/kontakt">Kontakt</a>
            <a href="{$conf->app_root}/about">O nas</a>
            {if \core\RoleUtils::inRole('loggedIn')}
                <a href="{$conf->app_root}/wyloguj">Wyloguj się</a>
                <a href="{$conf->app_root}/rezerwacje">Moje rezerwacje</a>
            {else}
                <a href="{$conf->app_root}/logowanie">Zaloguj się</a>
            {/if}
        </nav>
    </div>
    <footer>
        <h3>Footer</h3>
    </footer>
</body>

</html>