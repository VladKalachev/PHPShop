<div id="blockNewCategory">
	Новая категория:
	<input type="text" name="newCategoryName" id="newCategoryName" value="" />
	<br />

	Является подкатегорией для
	<select name="generalCartId">
		<option value="0"> Главная категория
		{foreach $rsCategories as $item}
			<option value="{$item['id']}">{$item['name']}
		{/foreach}
	</select>
	<br />

	<input type="button" onclick="newCtegory();" value="Добавить категорию" />
</div>