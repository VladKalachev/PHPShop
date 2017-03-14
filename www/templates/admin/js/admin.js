 
 //Получение данных с формы 
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


// добавление новой категории

function newCtegory(){
    
    var postData = getData('#blockNewCategory');

    $.ajax({
        type: 'POST',
        async: false,        
        url: '/admin/addnewcat/',
        data: postData,
        dataType: 'json',
        success: function(data) {

            if (data['success']){
               alert(data['message']);
               $('#newCategoryName').val('');

            } else {
                alert(data['message']);
            }
        }
    });

}


// обновление данных категории

function updateCat(itemId){

    var parentId = $('#parentId_' + itemId).val();
    var newName = $('#itemName_' + itemId).val();
    var postData = { itemId: itemId, parentId: parentId, newName: newName};

    $.ajax({
            type: 'POST',
            async: false,        
            url: '/admin/updatecategory/',
            data: postData,
            dataType: 'json',
            success: function(data) {
                if (data['success']){
                   alert(data['message']);
                }
            }
    });

}