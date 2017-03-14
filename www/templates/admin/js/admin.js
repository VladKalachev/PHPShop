 
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