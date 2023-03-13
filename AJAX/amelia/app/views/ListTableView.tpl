   <div class="table-wrapper">
    <table class="alt">
            <thead>
                    <tr>
                            <th>Login</th>
                            <th>Data utworzenia</th>
                            <th>Rola</th>
                            <th>Aktywność</th>
                            <th>Data deaktywowania</th>
                            <th></th>
                    </tr>
            </thead>
            <tbody> 
                    {foreach $view as $user}
                    {strip}
                    <tr>
                            <td>{$user["login"]}</td>
                            <td>{$user["creatAt"]}</td>
                            <td>{$user["roleName"]}</td>
                            <td>{if $user["isActive"] == 1} Aktywne {/if}{if $user["isActive"] == 0} Nieaktywne {/if}</td>
                            <td>{$user["deleteAt"]}</td>
                            <td>{if $user["idRoles"] == 2}<a href="{$conf->action_url}addAdmin/{$user["idUser"]}" class="button small">Nadaj admina</a>{/if}
                            {if $user["isActive"] == 1}&nbsp<a onclick="confirmLink('{$conf->action_url}roleInactive/{$user["idUser_has_role"]}','Czy na pewno deaktywować rolę?')" class="button small">Deaktywuj rolę</a>{/if}
                            &nbsp<a onclick="confirmLink('{$conf->action_url}userDelete/{$user["idUser"]}','Czy na pewno usunąć użytkownika?')" class="button primary small">Usuń użytkownika</a></td>
                    </tr>
                    {/strip}
                    {/foreach}
            </tbody>
    </table>
    <center> 
    {if $pagination->page > 1}
        <button onclick="ajaxPostForm('search-form','{$conf->action_url}showAllTable/{$pagination->page - 1}{if $filtr->login != ''}/{$filtr->login}{/if}','table'); " class="button small"><<</button>
    {/if}
        {for $i = 0 to ($pagination->max - 1)}
            {if $pagination->page - 1 == $i}
                <button onclick="ajaxPostForm('search-form','{$conf->action_url}showAllTable/{$i+1}{if $filtr->login != ''}/{$filtr->login}{/if}','table'); "  class="button primary small">{$i+1}</button>
            {else}
                <button onclick="ajaxPostForm('search-form','{$conf->action_url}showAllTable/{$i+1}{if $filtr->login != ''}/{$filtr->login}{/if}','table'); "  class="button small">{$i+1}</button> 
            {/if}
        {/for}
    {if $pagination->page < $pagination->max}
        <button onclick="ajaxPostForm('search-form','{$conf->action_url}showAllTable/{$pagination->page + 1}{if $filtr->login != ''}/{$filtr->login}{/if}','table');" class="button small">>></a>
    {/if}
    </center>  
</div>
