
    {* Левый стаблиц *}

<div id="leftColumn">
    <div id="leftMenu">
        <div class="menuCaption">Меня:</div>
           {foreach $rsCategories as $item}
           	<a href="?controller=category&id={$item['id']}">{$item['name']}</a><br />

			{if isset($item['children'])}
				{foreach $item['children'] as $itemChild}
					--<a href="?controller=category&id={$itemChild['id']}">{$itemChild['name']}</a><br />	
				{/foreach}	
			{/if}

           {/foreach}
    </div>

    <div class="menuCaption">Карзина</div>
    <a href="/cart/" title="Перейти в карзину">В карзину</a>
    <span id="cartCntItems">
      {if $cartCntItems > 0}{$cartCntItems}{else} пустой {/if}
    </span>


</div>
