$(function(){

var $modal = $('.modal');
var datable = false;
var id_resul = false;
$editorTitle = $('#editor-title');
$('.table').footable();


	$('.dates').datepicker({
        format: "yyyy-mm-dd",
        //todayBtn: true,
        language: "es",
        autoclose: true,
        todayHighlight: true,
        //clickInput:true,
        todayBtn: "linked"
    });

	$( ".caledad" ).change(function() {

		
		var fecha_naci = $(".caledad").val();
		var fechasn = fecha_naci.split('-');
		var ano = fechasn[0];
		var mes = fechasn[1];
		var dia = fechasn[2];

		var fecha_hoy = $(this).attr('date');
		var fechash = fecha_hoy.split('-');
		var Date_hoy = new Date(fechash[0],fechash[1],fechash[2]);

		ahora_ano = Date_hoy.getYear();
		ahora_mes = Date_hoy.getMonth();
		ahora_dia = Date_hoy.getDate();
	  	
	  	edad = (ahora_ano + 1900) - ano;
    
	    if ( ahora_mes < (mes - 1)){
	      edad--;
	    }
	    if (((mes - 1) == ahora_mes) && (ahora_dia < dia)){ 
	      edad--;
	    }
	    if (edad > 1900){
	        edad -= 1900;
	    }
 		$('.edad').val(edad)
	  	
	});


	//$( "#cod" ).keyup(function( event ) {
	$( "#buscButton" ).click(function() {
	  	var code = $(".code").val();
	  	$.ajax({
			type: "POST",
			url: "../LabTypetests/buscarexamen",
			dataType: "json",
			data: {data: {"code" : code}},
			success: function(datas, textStatus, jqXHR)
            {
                console.log(textStatus);
                console.log(datas);
                if(datas['labTypetest'] != null){
					//console.log("NO VACIO");
					datable = datas;
					//console.log(datas.name);
					$('#name').val(datas['labTypetest']['name']);

				}else{
					console.log("El Codigo No se encontro");
					$('#name').val("El Codigo No se encontro");
				}
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                console.log(textStatus);
            }
		});
	});

	$.fn.serializeObject = function()
	{
	   var o = {};
	   var a = this.serializeArray();
	   $.each(a, function() {
	       if (o[this.name]) {
	           if (!o[this.name].push) {
	               o[this.name] = [o[this.name]];
	           }
	           o[this.name].push(this.value || '');
	       } else {
	           o[this.name] = this.value || '';
	       }
	   });
	   return o;
	};

	$( ".print" ).click(function() {
	  	var id = $(this).attr('id');
	  	$.ajax({
			type: "POST",
			url: "../../Reports/pdfView",
			dataType: "json",
			data: {data: {"id" : id}},
			success: function(datas, textStatus, jqXHR)
            {
                console.log(textStatus);
                console.log(datas);
                /*if(datas['LabPatient'] != null){
					$('#tempnompacient').val(datas['LabPatient']['name']);
					$('.patient').val(datas['LabPatient']['id']);
				}else{
					console.log("El Paciente no Existe");
					$('#tempnompacient').val("El Paciente no Existe");
					$('.patient').val("");
				}*/
                
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                console.log(textStatus);
            }
		});
	});

});	
