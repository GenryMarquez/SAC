$('document').ready(function(){
    $(".tilde").mouseover(function(){
		$(".tilde").css("cursor","pointer");    
    });
    
    $(".tilde").click(imgchange);
    
	function imgchange(){
	//console.log("entro");	
        $.ajaxSetup ({
            cache: false
        });
		var permisos  = $(this).attr("alt");
        var cargador = $(this).next();
		//$(cargador).css("display","inline");
		$(cargador).css("display","block");
		var texto = $(".texto");
		//var img = $(this);
		var i = $(this);
		//console.log(i);
		$(this).css("display","none");
		$.ajax({
			type: "POST",
			url: "../ajaxload",
			dataType: "json",
			data: (permisos),
			success: function(msg){
				//console.log(msg);
				$(cargador).css("display","none");
				//$(img).attr("alt",msg.permisos);
				//$(img).attr("src",msg.imagen);
				//$(img).parent().prev(".texto").text(msg.mensaje);
				//$(img).css("display","inline");

				$(i).attr("alt",msg.permisos);
				$(i).attr("class",msg.imagen);
				$(i).parent().prev(".texto").text(msg.mensaje);
				$(i).css("display","inline");
			}
		});	
	}
});

/*$(function()
{
   $("#accordion").accordion({collapsible: true},{clearStyle: true});
});*/




