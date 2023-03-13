{extends file="main.tpl"}

{block name=footer}Michał Pardon{/block}

{block name=content}

{include file='menu.tpl'}


<form id="search-form" onsubmit="ajaxPostForm('search-form','{$conf->action_url}showAllTable','table'); return false;" method="post" class="">  
    <ul class="actions">
        <li><input type="text" name="login" id="login" value="{if $filtr->login != ''}{$filtr->login}{/if}" {if $filtr->login == ''}placeholder="Login"{/if} /></li>
        <li><input type="submit" value="Wyszukaj" class="primary" /></li>
        <li><a href="{$conf->action_url}showAll" class="button"><i class="fa-solid fa-reply-all"></i> Reset</a></li>
    </ul>
</form>    
    
<div id="table">
{include file="ListTableView.tpl"}
</div>




{block name=messages}

{if $msgs->isMessage()}
<div class="messages bottom-margin">
	<ul>
	{foreach $msgs->getMessages() as $msg}
	{strip}
		<li class="msg {if $msg->isError()}error bottom-margin{/if} {if $msg->isWarning()}info bottom-margin{/if} {if $msg->isInfo()}info bottom-margin{/if}">{$msg->text}</li>
	{/strip}
	{/foreach}
	</ul>
</div>
{/if}

{/block}


{/block}
