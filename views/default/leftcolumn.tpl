
    {* Левый стаблиц *}

<div id="leftColumn">
    <div id="leftMenu">
        <div class="menuCaption">Меня:</div>
           {foreach $rsCategories as $item}
           	<a href="/www/?controller=category&id={$item['id']}">{$item['name']}</a><br />

			{if isset($item['children'])}
				{foreach $item['children'] as $itemChild}
					--<a href="/www/?controller=category&id={$item['id']}">{$itemChild['name']}</a><br />	
				{/foreach}	
			{/if}

           {/foreach}
    </div>
</div>
