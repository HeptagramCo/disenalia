$(".button-new-post").click(function(){
		$(".form-add-post").slideToggle();
});
$(".form-add-post .cerrar").click(function(){
	$(".form-add-post").slideToggle()
})

$(".button-new-category").click(function(){
		$(".form-add-category").show();
});
$(".form-add-category .cerrar").click(function(){
	$(".form-add-category").hide()
})

$("#control-account").click(function(){
	$(".show-content-user").slideToggle()
})

$(".post-first").hover(function(){
	$(this).find(".data h1").toggle()
})

var click = 0
$(".full").click(function(e){
	e.preventDefault();
	if(click === 0){
		$(".form-add-post").css({"max-width":"1500px","max-height":"600px"})
		click = 1
	}else{
		$(".form-add-post").css({"max-width":"400px","max-height":"500px"})
		click = 0
	}
})

function Validate(id){
	var validate = confirm("Seguro que deseas eliminar el post, Piensalo bien Martin.");
	if(validate == true){
		location.href='/post/delete/?d='+id;
	}
	return false;
}