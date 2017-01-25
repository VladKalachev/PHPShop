    {* Страница продукта *}

<h3>{$rsProduct['name']}</h3>

<img src="../www/images/products/{$rsProduct['image']}" width="575">
Стоимость: {$rsProduct['price']}

<a href="#" id="addCart_{$rsProduct['id']}" onclick="addToCart({$rsProduct['id']}); return false;" alt='Добавить в корзину'>Добавить в корзину</a>
<p> Описание <br />{$rsProduct['description']}</p>