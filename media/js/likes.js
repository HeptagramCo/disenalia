(function(){
   $(".like_post").click(function(e){
      e.preventDefault();
      puerto = window.location.port;
      ruta = "http://" + window.location.hostname + ":" + puerto;
      id = $(this).attr("href");
      $etiqueta = $(this).find("p");
      $corazon = $(this).find("span");
      $.ajax({
      	type: "POST",
         url: ruta + "/home/like",
         data:{
      	   id : id
      	},
      	async: true,
      	dataType: 'json',
      }).done(function(data){
         for(i in data){
            $etiqueta.html(data[i].likes_post);
            $corazon.css("color","#cd3737");
            localStorage.setItem("ip", data[i].likes_post);
         }
      })
   });
})()
