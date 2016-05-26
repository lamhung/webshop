// JavaScript Document
function submitFormID(form_id)

{
	$('#'+form_id).submit();

}
//$(document).ready(function(){
function select_language(key_lang)
{
   $.ajax({
       type : 'POST',
       url : 'http://webshop.local/admin/select_all_language',
       data : {key_lang : key_lang},
       success : function (respone){
           var LANG = JSON.parse(respone);
           alert(LANG.msg);
           
          console.log(LANG.msg);
       }
   });
   
};

//});
/*var LANG = {
    delete_product : 'test',
    test2 : 'test2'
};
console.log(LANG);*/

function change_language(lang)
{
    $.ajax({
        type: 'POST',
        url: 'http://webshop.local/admin/language',
        data: {language: lang},
        success: function () {
            location.reload();
        }
    });

}