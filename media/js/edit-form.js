$(function(){
	$(".edit").click(function(e){
		e.preventDefault();
		puerto = window.location.port;
		ruta = "http://" + window.location.hostname + ":" + puerto;
		var user=$(this).parent().parent().attr("id");
		getUser(user);
		$(".cortina-dialog").show(400);
		$("#form-edit").show(400);
	});

	$("#cancelar").click(function(){
		$("#id").val("");
		$("#name").val("");
		$("#facebook").val("");
		$("#twitter").val("");
		$("#email").val("");
		$("#form-edit").hide(500);
		$(".cortina-dialog").hide(400);
	});

});


function getUser(user){
	puerto = window.location.port;
	ruta = "http://" + window.location.hostname + ":" + puerto;
	$.ajax(
		{
			type: "POST",
	        url: ruta + "/user/edit/",
	        data:{
	        	name : user
	        },
	        async: true,
	        dataType: 'json',
		}
	)
	.done(function(data){
			$("#id").val(data[0].id_user);
			$("#real_name").val(data[0].real_name_user);
			$("#name").val(data[0].name_user);
			$("#facebook").val(data[0].facebook_user);
			$("#twitter").val(data[0].twitter_user);
			$("#email").val(data[0].email_user);
			$("#actualname").val(data[0].name_user);
			$("#actualemail").val(data[0].email_user);
		}
	)
	.error(function(){alert("Error")});
}
