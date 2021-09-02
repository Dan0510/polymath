//$('#letterify').click(function() {
function faker(method){

	data = $("#textarea-input").val();

	if(data != null && data.trim() != ""){
		$.ajax({
			url: 'main.php',
			type: 'POST',
			data: {data: data, method: method},
			error: function(jqXHR, textStatus, errorThrown) {
				
			},
			success: function(response) {
				$("#textarea-output").text(response);
			},
			complete:function(){
				$("#loading").css("display","none");
				//$('.spinner').addClass('hidden');
			}
		});

	}
	else{
		alert("Por favor ingrese datos");
	}

}
//});