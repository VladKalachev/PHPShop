{* шаблон главной страницы *}

{foreach $rsProducts as $item name=products}
	<div style="float: left; padding: 0px 30px 40px 0px">

		<a href="/www/prduct/{$item['id']}">
			<img src="/www/images/products/{$item['image']}" alt="" width="100">
		</a>
		<br />
		<a href="/www/product/{$item['id']}/">{$item['name']}</a>
		</div>
		{if $smarty.foreach.products.iteration mod 3 == 0}
			<div style="clear: both;"></div>
		{/if}

	
{/foreach}
