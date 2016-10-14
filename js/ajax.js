$(function(){
	$('#search_form').submit(function(e){
		e.preventDefault();
	})

	$('#search').keyup(function(){
		var envio = $('#search').val();

		$('#resultados').html('<h2 align="center"><img src="imagenes/C.Cargando.gif" /></h2>');

		$.ajax({
			type: 'POST',
			url: 'php/buscador.php',
			data: ('search='+envio),
			success: function(respuesta){
				if (respuesta!=""){
					$('#resultados').html(respuesta);
				}
			}
		})
	})
})