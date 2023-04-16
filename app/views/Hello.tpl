{extends file="main.tpl"}
{block name=content}

    <p>My value: {$value}</p>

    {if $msgs->isInfo()}
        <ul>
            {foreach $msgs->getMessages() as $msg}
                <li>{$msg->text}</li>
            {/foreach}
        </ul>
    {/if}

{/block}