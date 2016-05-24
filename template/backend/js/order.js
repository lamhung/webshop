// JavaScript Document

function ajax_order_search(url,name)
{
	$.ajax({
		type : 'POST',
		url : url,
		data : "name = "+name,
		success : function(html){
			$('#order_search').html(html);
		}
		
	});
}