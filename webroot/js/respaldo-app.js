$('document').ready(function(){
var $modal = $('.modal');
var datable = false;
$editorTitle = $('#editor-title');
$('.table').footable();
/*$editor = $('#editor');
$editorTitle = $('#editor-title');
var x = $("tbody tr").length + 1;
$("#agree").click(add);
	function add(){
		console.log("entro");
		$modal.removeData('row');
		$editor[0].reset();
		$editorTitle.text('Agregar Caracteriaticas del Examen');
		$modal.modal('show');	
	}
	$("#save").click(addrow);
	function addrow(){
		console.log("entroxxx");
        //$("tbody").append('<tr><td>Caracteristicas</td><td>Ref.Inferior</td><td>Ref.Superior</td><td>Unidad</td><div class="btn btn-default btn-flat fa fa-trash-o"></div></td></tr>');
        var row = $modal.data('row'),
			values = {
				caract: $editor.find('#txtNombre').val(),
				inferior: $editor.find('#txtInferior').val(),
				superior: $editor.find('#txtSuperoir').val(),
				unidad: $editor.find('#txtUnidad').val(),
				orden: $editor.find('#txtOrden').val(),
			};
		$("tbody").append('<tr><td>'+values.caract+'<input type="hidden" name="country" value="'+values.caract+'"></td><td>Ref.Inferior</td><td>Ref.Superior</td><td>Unidad</td><td><div class="btn btn-default btn-flat fa fa-trash-o dele" title="Eliminar"></div></td></tr>');
		x++;
		console.log(values);	
	}

	$( ".btn.btn-default.btn-flat.fa.fa-trash-o.dele" ).click(function() {
	  alert( "Handler for .click() called." );
	});*/

	/*$( ".dview" ).click(function() {

		var ids = $(this).attr('id');
		//var datos = {data: [{"id" : ids}]};
		//var aux = $(this).attr('id').split('_');
		//var id = aux[1];
		$.ajax({
			type: "POST",
			url: "../../labTypetestsInfos/view",
			dataType: "json",
			data: {data: {"id" : ids}},
			success: function(datas){
				$editorTitle.text('Caracteristicas del Examen de '+datas['labTypetestsInfo']['name']);
				$("#txtNombre").text(datas['labTypetestsInfo']['name']);
				$("#txtSuperoir").text(datas['labTypetestsInfo']['upper']);
				$("#txtInferior").text(datas['labTypetestsInfo']['lower']);
				$("#txtUnidad").text(datas['labTypetestsInfo']['unit']);
				$("#txtOrden").text(datas['labTypetestsInfo']['testorder']);

				$("#txtResultado1").text(datas['labTypetestsInfo']['result1']);
				$("#txtResultado2").text(datas['labTypetestsInfo']['result2']);
				$("#txtResultado3").text(datas['labTypetestsInfo']['result3']);
				$("#txtResultado4").text(datas['labTypetestsInfo']['result4']);
				$("#txtResultado5").text(datas['labTypetestsInfo']['result5']);
				$("#txtResultado6").text(datas['labTypetestsInfo']['result6']);
				$("#txtResultado7").text(datas['labTypetestsInfo']['result7']);
				$("#txtResultado8").text(datas['labTypetestsInfo']['result8']);
				$("#txtResultado9").text(datas['labTypetestsInfo']['result9']);
				$("#txtResultado10").text(datas['labTypetestsInfo']['result0']);

				$("#txtReferencia1").text(datas['labTypetestsInfo']['reference1']);
				$("#txtReferencia2").text(datas['labTypetestsInfo']['reference2']);

				//console.log(datas);
				$modal.modal('show');
				//$("#output").text(id);
			}
		});

	  	//alert( id );

	});*/

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


	/*****************************************************************************************************************************/

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

	$( ".addButton" ).click(function() {
		//console.log(datable);
		 //$("#formodal").trigger('reset'); //jquery
		 //$( "#getCode" ).empty();
		if(datable['labTypetest'] != null){
			//var dataString = $('#formexamen').serialize();
			var invoice = $("#invoice").val();
			var patient_id = $("#patient-id").val();
			var emission = $("#emission").val();
			var datetest = $("#datetest").val();
			var hourtest = $("#hourtest").val();
			var price = $("#price").val();
			var bioanalyst_id = $("#bioanalyst-id").val();
			$('.titleexamen').text(datable['labTypetest']['name']);
			var datos = {data: {"invoice" : invoice,"patient_id": patient_id,"emission": emission,"datetest": datetest,"hourtest":hourtest,"price":price,"bioanalyst_id":bioanalyst_id}};
			
			//console.log(datos);
			//$modal.modal('show');
			/*var filas = $("#tabla1 tbody tr").length;
			console.log(datable.lab_typetests_infos);
		    //get the footable object
		    var footable = $('#tabla1').data('footable');
		    var footable2 = $('#tabla2').data('footable');
		    //build up the row we are wanting to add
		    var newRow = '<tr><td>'+ nFilas++ +'</td><td>'+datable.code+'</td><td>'+datable.name+'</td><td class="footable-editing"><div role="group" class="btn-group"><button type="button" class="btn btn-default removeButton"><i class="fa fa-minus"></i></button></div></td></tr>';
		    //add it
		    $.each(datable.lab_typetests_infos, function(i, item) {
		
			});
		    footable.appendRow(newRow);
		    datable = null
		    $('.code').val("");
		    $('#name').val("");*/


			$.ajax({
				type: "POST",
				url: "../LabResultests/saveexamen",
				dataType: "json",
				data: datos,
				success: function(datas, textStatus, jqXHR)
	            {
	                console.log(textStatus);
	                console.log(datas.text);
	                console.log(datas.idres);
	                if(datas.text == 1){
	                	$.each(datable['labTypetest']['lab_typetests_infos'], function(i, item) {
							console.log(item['name']);
							$(fresulexa).append('<div class="row">'+
								'<div class="col-md-5">'+
									'<div class="form-group">'+
										'<label for="textinput">Nombre</label>'+
										'<input name="lab_resultests_infos['+i+'][name]" value="'+item['name']+'" class="form-control" id="lab-resultests-infos-'+i+'-name" type="text" readonly>'+
									'</div>'+
								'</div>'+
								'<div class="col-md-3">'+
									'<div class="form-group">'+
										'<label for="textinput">Resultado</label>'+
										'<input name="lab_resultests_infos['+i+'][result]" class="form-control" id="lab-resultests-infos-'+i+'-result" type="text">'+
									'</div>'+
								'</div>'+
								'<div class="col-md-2">'+
									'<div class="form-group">'+
										'<label for="textinput">Superior</label>'+
										'<input name="lab_resultests_infos['+i+'][upper]" value="'+item['upper']+'" class="form-control" id="lab-resultests-infos-'+i+'-upper" type="text" readonly>'+
									'</div>'+
								'</div>'+
								'<div class="col-md-2">'+
									'<div class="form-group">'+
										'<label for="textinput">Inferior</label>'+
										'<input name="lab_resultests_infos['+i+'][lower]" value="'+item['lower']+'" class="form-control" id="lab-resultests-infos-'+i+'-lower" type="text" readonly>'+
									'</div>'+
								'</div>'+
								'<input name="lab_resultests_infos['+i+'][code]" value="'+datable['labTypetest']['code']+'" class="form-control" id="lab-resultests-infos-'+i+'-code" type="hidden" readonly>'+
								'<input name="lab_resultests_infos['+i+'][unit]" value="'+item['unit']+'" class="form-control" id="lab-resultests-infos-'+i+'-unit" type="hidden" readonly>'+
								'<input name="lab_resultests_infos['+i+'][testorder]" value="'+item['testorder']+'" class="form-control" id="lab-resultests-infos-'+i+'-testorder" type="hidden" readonly>'+
								'<input name="lab_resultests_infos['+i+'][refer1]" value="'+item['refer1']+'" class="form-control" id="lab-resultests-infos-'+i+'-refer1" type="hidden" readonly>'+
								'<input name="lab_resultests_infos['+i+'][refer2]" value="'+item['refer2']+'" class="form-control" id="lab-resultests-infos-'+i+'-refer2" type="hidden" readonly>'+
								'<input name="lab_resultests_infos['+i+'][typetests_id]" value="'+datable['labTypetest']['id']+'" class="form-control" id="lab-resultests-infos-'+i+'-typetests_id" type="hidden" readonly>'+
								'<input name="lab_resultests_infos['+i+'][resultests_id]" value="'+datas.idres+'" class="form-control" id="lab-resultests-infos-'+i+'-resultests_id" type="hidden" readonly>'+
							'</div>'
							);
						});
						$modal.modal('show');
	                }else if(datas.text == 0){
	                	console.log("Error no se Guardo");
	                }
	                
	            },
	            error: function (jqXHR, textStatus, errorThrown)
	            {
	                console.log(textStatus);
	            }
			});

		}else{

			alert("Selecione un Nuevo Examen");
		}
	    
	});



	$( "#saveButton" ).click(function() {
		var datamodalString = $('#formodal').serialize();
		var datamodalJSON= $("#formodal").serializeObject();
		console.log(datamodalJSON);
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

});	


/*APP*****************************/

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

	$( ".addButton" ).click(function() {
		id_resul = $(this).attr('id');
		console.log(id_resul);
		if(id_resul > 0){
			console.log(datable);
			if(datable != null){
				$.each(datable['labTypetest']['lab_typetests_infos'], function(i, item) {
					//console.log(item['name']);
					$(fresulexa).append('<div class="row">'+
						'<div class="col-md-5">'+
							'<div class="form-group">'+
								'<label for="textinput">Nombre</label>'+
								'<input name="lab_resultests_infos['+i+'][name]" value="'+item['name']+'" class="form-control" id="lab-resultests-infos.'+i+'.name" type="text" readonly>'+
							'</div>'+
						'</div>'+
						'<div class="col-md-3">'+
							'<div class="form-group">'+
								'<label for="textinput">Resultado</label>'+
								'<input name="lab_resultests_infos['+i+'][result]" class="form-control" id="lab-resultests-infos.'+i+'.result" type="text">'+
							'</div>'+
						'</div>'+
						'<div class="col-md-2">'+
							'<div class="form-group">'+
								'<label for="textinput">Superior</label>'+
								'<input name="lab_resultests_infos['+i+'][upper]" value="'+item['upper']+'" class="form-control" id="lab-resultests-infos.'+i+'.upper" type="text" readonly>'+
							'</div>'+
						'</div>'+
						'<div class="col-md-2">'+
							'<div class="form-group">'+
								'<label for="textinput">Inferior</label>'+
								'<input name="lab_resultests_infos['+i+'][lower]" value="'+item['lower']+'" class="form-control" id="lab-resultests-infos.'+i+'.lower" type="text" readonly>'+
							'</div>'+
						'</div>'+
						'<input name="lab_resultests_infos['+i+'][code]" value="'+datable['labTypetest']['code']+'" class="form-control" id="lab-resultests-infos.'+i+'.code" type="hidden" readonly>'+
						'<input name="lab_resultests_infos['+i+'][unit]" value="'+item['unit']+'" class="form-control" id="lab-resultests-infos.'+i+'.unit" type="hidden" readonly>'+
						'<input name="lab_resultests_infos['+i+'][testorder]" value="'+item['testorder']+'" class="form-control" id="lab-resultests-infos.'+i+'.testorder" type="hidden" readonly>'+
						'<input name="lab_resultests_infos['+i+'][refer1]" value="'+item['refer1']+'" class="form-control" id="lab-resultests-infos.'+i+'.refer1" type="hidden" readonly>'+
						'<input name="lab_resultests_infos['+i+'][refer2]" value="'+item['refer2']+'" class="form-control" id="lab-resultests-infos.'+i+'.refer2" type="hidden" readonly>'+
						'<input name="lab_resultests_infos['+i+'][typetests_id]" value="'+datable['labTypetest']['id']+'" class="form-control" id="lab-resultests-infos.'+i+'.typetests_id" type="hidden" readonly>'+
						'<input name="lab_resultests_infos['+i+'][resultests_id]" value="'+id_resul+'" class="form-control" id="lab-resultests-infos.'+i+'.resultests_id" type="hidden" readonly>'+
					'</div>'
					);
				});
				$modal.modal('show');

			}else{

				alert("Selecione un Nuevo Examen");
			}
		}else if(id_resul == 0){
			alert("Debes Guardar Primero el Examen");
		}
	    
	});

	$( ".saveButton" ).click(function() {
		var datamodalString = $('#formodal').serialize();
		var datamodalJSON= $("#formodal").serializeObject();
		console.log(datamodalJSON);
		//$( "#fresulexa" ).empty();
		$.ajax({
			type: "POST",
			url: "../LabResultests/saveexamendetail",
			dataType: "json",
			data: datamodalJSON,
			success: function(datas, textStatus, jqXHR)
            {
                console.log(textStatus);
                console.log(datas.text);
                console.log(datable);
                if(datas.text == 1){
                	if(datable != null){
	                	var filas = $("#tabla1 tbody tr").length;
					    //get the footable object
					    var footable = $('table').data('footable');
					    //build up the row we are wanting to add
					    //var newRow = '<tr id="'+datable['labTypetest']['id']+'" class="trromo"><td>'+ filas +'</td><td>'+datable['labTypetest']['code']+'</td><td>'+datable['labTypetest']['name']+'</td><td class="footable-editing"><div role="group" class="btn-group"><button type="button" class="btn btn-default removeButton" onClick="printea('+datable['labTypetest']['id']+');"><i class="fa fa-minus"></i></button></div></td></tr>';
					    //add it
					    var newRow = '<tr resul="'+id_resul+'" exam="'+datable['labTypetest']['id']+'" class="trromo"><td>'+ filas +'</td><td>'+datable['labTypetest']['code']+'</td><td>'+datable['labTypetest']['name']+'</td><td class="footable-editing"><div role="group" class="btn-group"><button type="button" class="btn btn-default removeButton"><i class="fa fa-minus"></i></button></div></td></tr>';

					    footable.appendRow(newRow);  
					    datable = null
					    $('.code').val("");
					    $('#name').val("");
					    $modal.modal('hide');
					    $( "#fresulexa" ).empty();
					}
                }
                
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                console.log(textStatus);
            }
		});
    });

    $( "#closeButton").click(function() {
		$( "#fresulexa" ).empty();
    });
    $( '.close').click(function() {
		$( "#fresulexa" ).empty();
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


	$(document).on("click",".removeButton",function(e){
		e.preventDefault();
		//get the footable object
	    var footable = $('table').data('footable');
	    //get the row we are wanting to delete
	    var row = $(this).parents('tr:first');
    //delete the row
    //$( ".removeButton").click(function() {
    //$('table').footable().on('click', '.removeButton', function(e) {	
       var id_resul = $('.trromo').attr('resul'); 
       var id_exam = $('.trromo').attr('exam'); 
       console.log(id_resul);
       console.log(id_exam);
       $.ajax({
            type: "POST",
            //url: '<?= $this->Url->build(["controller" => "LabResultests","action" => "delexamendetail"]); ?>',
            url: "../LabResultests/delexamendetail",
            dataType: "json",
            data: {data: {"id_resul" : id_resul, "id_exam" : id_exam}},
            success: function(datas, textStatus, jqXHR)
            {
                console.log(textStatus);
                console.log(datas.text);
                if(datas.text == 1){
			        footable.removeRow(row);
                }
                
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                console.log(textStatus);
            }
        });
    });

	$( "#CedButton" ).click(function() {
	  	var cedula = $("#Cedula").val();
	  	$.ajax({
			type: "POST",
			url: "../LabPatients/buscarpaciete",
			dataType: "json",
			data: {data: {"cedula" : cedula}},
			success: function(datas, textStatus, jqXHR)
            {
                console.log(textStatus);
                console.log(datas);
                if(datas['LabPatient'] != null){
					$('#tempnompacient').val(datas['LabPatient']['name']);
					$('.patient').val(datas['LabPatient']['id']);
				}else{
					console.log("El Paciente no Existe");
					$('#tempnompacient').val("El Paciente no Existe");
					$('.patient').val("");
				}
                
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                console.log(textStatus);
            }
		});
	});

});	

