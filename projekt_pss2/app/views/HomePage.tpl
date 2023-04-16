{extends file="main.tpl"}
{block name=content}

    <h1>Nasza oferta</h1>
    <div class="banner-wrap">
      {foreach $banners as $banner}

      <div class="mySlides fade">
        <a href="{$conf->app_root}/car/{$banner['car_id']}" style="background-image: url('{$conf->app_root}/assets/{$banner['image']}.jpg')"></a>
      </div>

      {/foreach}
    </div>
    <div class="dots">
      {foreach $banners key=$id item=$banner}
  
      <div class="dot" onclick="currentSlide({$id+1})"></div>

      {/foreach}
    </div>
    <div class="hp-actionBtn-wrap">
        <a href="{$conf->app_root}/katalog" class="hp-actionBtn">Zobacz więcej</a>
    </div>
    <script src="{$conf->app_root}/js/slider.js"></script>
{/block}