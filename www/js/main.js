
/**
 * Функция добавления товара в корзину 
 * @param integer itemId ID продукта
 * return в случае успеха обновляет данный корзины на строницы 
 */

function addToCart(itemId){
	console.log('js-addToCart()');
	$.ajax({
		type: 'POST',
		async: false,
		url: "/cart/addtocart/" + itemId +'/',
		dataType: 'json',
		success: function(data){
			console.log(data['success']);
			if(data['success']){
				$('#cartCntItems').html(data['cntItems']);

				$('#addCart_' + itemId).hide();
				$('#removeCart_'+ itemId).show();
			}
		}
	});
	
}

/**
 * Удаление продукта из корзины
 * 
 * @param integer itemId ID продукта
 * @return в случае успеха обновляем данные корзыны из страницы
 */
function removeFromCart(itemId){
	console.log("js-removeFromCart("+ itemId + ")");
	$.ajax({
		type: 'POST',
		async: false,
		url: "/cart/removefromcart/" + itemId +'/',
		dataType: 'json',
		success: function(data){
			console.log(data['success']);
			if(data['success']){
				$('#cartCntItems').html(data['cntItems']);

				$('#addCart_' + itemId).show();
				$('#removeCart_'+ itemId).hide();
			}
		}
	});
	
}

