$(function()
{
	var objeto;
	$('#btn1').click(function(){

		//alert($('#usrname').val());
		//alert($('#psw').val());

		if ($('#usrname').val() != '' && ($('#psw').val()) != '') 
		{
			objeto=$('#frm1').serialize();

			$.ajax({
				type:'POST',
				url:$('#url').val() + 'login/login/Val_User',
				data:objeto,
				dataType:'json',
				success:function(res){
					console.log(res);
				}



			})

			//alert('Intentando logear');
		}
		else
		{
			alert('Todos los campos deben estar llenos');
		}
	})

	$("#")
	
})