<h2>Товар</h2>
<table border="1" cellpadding="1" cellspacing="1" >
	<caption>Добавить продукт</caption>
	<tr>
		<th>Название</th>
		<th>Цена</th>
		<th>Категории</th>
		<th>Описание</th>
		<th>Сохранить</th>
	</tr>

	<tr>
		<td>
			<input type="edit" id="newItemName" value="" />
		</td>
		<td>
			<input type="edit" id="newItemPrice" value="" />
		</td>
		<td>
			<select id="newItemCatId">
				<option value="0">Главная категория
					{foreach $rsCategories as $itemCat}
						<option value="{$itemCat['id']}">{$itemCat['name']}
					{/foreach}	
				</option>
			</select>
		</td>
		<td>
			<textarea id="newItemDesc"></textarea>
		</td>
		<td>
			<input type="button" value="Сохранить" onclick="addProduct();">
		</td>
	</tr>
	

	
</table>