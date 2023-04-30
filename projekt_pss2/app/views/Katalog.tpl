{extends file="main.tpl"}
{block name=content}
    <h1>Katalog</h1>

    <div class="filtr">
        <p>Typ samochodu : </p>
        <form action="#" method="GET" id="filters" >
            {foreach $car_types as $type}
                <label>
                    <input type="radio" name="type" value="{$type['type_name']}" />
                    {$type['type_name']}
                </label>
            {/foreach}
            <input type="button" value="Szukaj" onclick="ajaxPostForm('{$conf->action_root}api_listing'); return false;"/>
        </form>
    </div>
    <div id="listing">
    
    </div>

    <div id="pagination">

    </div>

    <script type="text/javascript" src="{$conf->app_url}/js/listing.js"></script>
    <script>
        ajaxPostForm('{$conf->action_root}api_listing');
    </script>

{/block}