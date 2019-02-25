function load(page){
		var parametros = {"action":"ajax","page":page};
		$("#loader").fadeIn('slow');
		$.ajax({
			url:'preguntas_ajax.php',
			data: parametros,
			 beforeSend: function(objeto){
			$("#loader").html("");
			},
			success:function(data){
				$(".outer_div").html(data).fadeIn('slow');
				$("#loader").html("");
			}
		})
	}
 
		$('#dataUpdate').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id = button.data('id') // Extraer la información de atributos de datos
		  var pregunta = button.data('pregunta') // Extraer la información de atributos de datos
		  var a = button.data('a') // Extraer la información de atributos de datos
		  var b = button.data('b') // Extraer la información de atributos de datos
		  var c = button.data('c') // Extraer la información de atributos de datos
		  var d = button.data('d') // Extraer la información de atributos de datos
		  
		  var modal = $(this)
		  modal.find('.modal-title').text('Modificar pregunta: '+pregunta)
		  modal.find('.modal-body #id').val(id)
		  modal.find('.modal-body #pregunta').val(pregunta)
		  modal.find('.modal-body #a').val(a)
		  modal.find('.modal-body #b').val(b)
		  modal.find('.modal-body #c').val(c)
		  modal.find('.modal-body #d').val(d)
		  $('.alert').hide();//Oculto alert
		})
		
		$('#dataDelete').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id = button.data('id') // Extraer la información de atributos de datos
		  var modal = $(this)
		  modal.find('#id').val(id)
		})
 
	$( "#actualidarDatos" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "modificar.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#datos_ajax").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#datos_ajax").html(datos);
					
					load(1);
				  }
			});
		  event.preventDefault();
		});
		
		$( "#guardarDatos" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "agregar.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#datos_ajax_register").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#datos_ajax_register").html(datos);
					
					load(1);
				  }
			});
		  event.preventDefault();
		});
		
		$( "#eliminarDatos" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "eliminar.php",
					data: parametros,
					 beforeSend: function(objeto){
						$(".datos_ajax_delete").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$(".datos_ajax_delete").html(datos);
					
					$('#dataDelete').modal('hide');
					load(1);
				  }
			});
		  event.preventDefault();
		});