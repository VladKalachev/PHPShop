
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
			console.log('hData['+this.name+'] = '+hData[this.name]);

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
 			if(data['success']){
 				alert('Регистрация прошла успешна');

 				//> блок в левом стоблце
 				console.log(data['userName']);
 				$('#registerBox').hide();

 				$('#userLink').attr('href', '/user/');
 				$('#userLink').html(data['userName']);
				$('#userBox').show();

 				// $('#userLink').show();

 				// $('#loginBox').hide();
 				// $('#btnSaveOrder').show();

 			} else{
 				alert(data['message']);
 			}
 		}
 	});
 	
 	

 }

function logout() {
    console.log('Logout');
    $.ajax({
        type: 'POST',
        url: '/user/logout/',
        success: function() {
            console.log('user logged out');
            $('#registerBox').show();
            $('#userBox').hide();
        }
    });
}

/**
 * Авторизация пользователя
 * 
 */

 function login(){
 	var email = $('#loginEmail').val();
 	var pwd = $('#loginPwd').val();

 	var postData = "email=" + email + "&pwd=" + pwd;

 	$.ajax({
        type: 'POST',
        async: false,        
        url: '/user/login/',
        data: postData,
        dataType: 'json',
        success: function(data) {

            if (data['success']){
            	$('#registerBox').hide();
            	$('#loginBox').hide();

            	$('#userLink').attr('href', '/user/');
            	$('#userLink').html(data['displayName']);
            	$('#userBox').show();

            	// заполняем поля на странице заказа
            	$('#name').val(data['name']);
            	$('#phone').val(data['phone']);
            	$('#adress').val(data['adress']);

            	$('#btnSaveOrder').show();

            } else {
            	alert(data['message']);
            }
        }
    });
 	
 	

 }


/**
 * Показать или прятать форму регистрации
 * 
 */

function showRegisterBox(){
	if( $('#registerBoxHidden').css('display') != 'block'){
		$('#registerBoxHidden').show();
	} else {
		$('#registerBoxHidden').hide();
	}
}

/**
 * Обновление данных пользователя
 * 
 */

 function updateUserData(){

 	console.log("js - updateUserData()");
 	var phone = $('#newPhone').val();
 	var adress = $('#newAdress').val();
 	var pwd1 = $('#newPwd1').val();
 	var pwd2 = $('#newPwd2').val();
 	var curPwd = $('#curPwd').val();
 	var name = $('#newName').val();

 	var postData = {
 		phone: phone,
 		adress: adress,
 		pwd1: pwd1,
 		pwd2: pwd2,
 		curPwd: curPwd,
 		name: name };


 	$.ajax({
        type: 'POST',
        async: false,        
        url: '/user/update/',
        data: postData,
        dataType: 'json',
        success: function(data) {
            if (data['success']){

            	$('#userLink').html(data['userName']);
            	alert(data['message']);

            } else {
            	alert(data['message']);
            }
        }
    });

 }


/**
 * Сохранение заказа
 * 
 */

 function saveOrder(){

 	var postData = getData('form');
 	$.ajax({
        type: 'POST',
        async: false,        
        url: '/cart/saveorder/',
        data: postData,
        dataType: 'json',
        success: function(data) {
            if (data['success']){
				alert(data['message']);
            	document.location = '/';
            } else {
            	alert(data['message']);
            }
        }
    });

 }


