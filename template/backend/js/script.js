// JavaScript Document
function submitFormID(form_id)

{
	$('#'+form_id).submit();

}
$(document).ready(function(){
   $.ajax({
       type : 'POST',
       url : 'http://webshop.local/admin/select_all_language',
       success : function (respone){
          var LANG = JSON.parse(respone);
          console.log(LANG);
       }
   }); 
});


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