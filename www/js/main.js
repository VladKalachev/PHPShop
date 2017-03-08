
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
			
			if(data['success']){
				$('#cartCntItems').html(data['cntItems']);

				$('#addCart_' + itemId).show();
				$('#removeCart_'+ itemId).hide();
			}
		}
	});
	
}

/**
 * Подсчет стоимости купленного товара
 * 
 * @param integer itemId ID продукта
 * 
 */

function conversionPrive(itemId){
	
	var newCnt = $('#itemCnt_' + itemId).val();
	var itemPrice = $('#itemPrice_' + itemId).attr('value');
	var itemRealPrica = newCnt * itemPrice;

	$('#itemRealPrice_' + itemId).html(itemRealPrica);
}


 //Получение данных с формы (registerBox) 
function getData(obj_form){

	var hData = {}; 

	$('input, textarea, select', obj_form).each(function(){ 

		if(this.name && this.name!=''){ 

			hData[this.name]=this.value;

			//console.log('hData['+this.name+'] = '+hData[this.name]);

		} 
	});

	return hData; 
} 

/**
 * Регистрация нового пользователя
 * 
 */

 function registerNewUser(){

 	var postData = getData('#registerBox');
 	//console.log(postData);
 	$.ajax({
 		type: 'POST',
 		async: false,
 		url: "/user/register/",
 		data: postData,
 		dataType: 'json',
 		success: function(data){
 			console.log(data['success']);
 			if(data['success']){
 				alert('Регистрация прошла успешна');

 				//> блок в левом стоблце

 				$('#registerBox').hide();
 				/*$('#userLink').attr('href', '/user/');
 				$('#userLink').show();

 				$('#loginBox').hide();
 				$('#btnSaveOrder').show();*/

 			} else{
 				alert(data['message']);
 			}
 		}
 	});
 	
 	

 }
