
    {* Левый стаблиц *}

<div id="leftColumn">
    <div id="leftMenu">
        <div class="menuCaption">Меня:</div>
           {foreach $rsCategories as $item}
           	<a href="#">{$item['name']}</a><br />
           {/foreach}
    </div>
</div>
