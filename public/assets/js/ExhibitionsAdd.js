
$(document).ready(function(){

	if( window.FormData === undefined ){
		alert("El navegador no soporta la subida de archivos. Actualizar el navegador o usar uno de verdad.");
	}

	$('#search-films').on('keyup', function(event) {
		var val = $(this).val();

		$.ajax({
			dataType: 'json',
			type: 'post',
			url: $(this).data('url'),
			data: { title: $(this).val()},
			success: function(json){
				var $ul = $('<ul></ul>');

				$.each(json,function(index,data){
					var $li = $('<li></li>');
					var $a = $('<a></a>');
					$a.attr('data-id', data['Film']['id']);
					$a.html(data['Film']['título']);
					$li.append($a);
					$ul.append($li);
				});

				$('#films-list').html('').append($ul);
			},
			error: function(){
				alert('Error de comunicación.');
			}
		});
	}).keyup();

	$('#films-list').on('click','a',function(){
		var $div = $('<div></div>');
		var $spanName = $('<span></span>',{"class" : "selected-film-title"});
		var $spanRemove = $('<div></div>',{"class" : "remove"});

		$('#film_id').val($(this).data('id'));
		$spanName.html( $(this).html() );
		
		$('#selected-film')
			.html('')
			.append($spanName)
			.append($spanRemove);
	});

	$('#selected-film').on('click','.remove',function(){
		$('#film_id').val(-1);
		$(this).parent().html('Ninguna película seleccionada.');
	});

	$('#ExhibitionAddForm').on('submit',function(event){
		if( $('#film_id').val() == -1 ){
			event.preventDefault();
			alert('No se a seleccionado ninguna película.')
		}
	});

	var index = 1;

	$('#add-new-timetable').on('click', function(event) {
		event.preventDefault();

		var $month = $('#Timetable0FechaMonth').clone();
		var $day = $('#Timetable0FechaDay').clone();
		var $year = $('#Timetable0FechaYear').clone();
		var $hour = $('#Timetable0HoraHour').clone();
		var $min = $('#Timetable0HoraMin').clone();
		var $meridian = $('#Timetable0HoraMeridian').clone();

		var inputField = $('<div></div>', {"class": 'field-input'});
		var inputFieldHora = inputField.clone();
		var a = new Array('month', 'day', 'year');
		var $a = new Array($month, $day, $year);
		var b = new Array('hour', 'min', 'meridian');
		var $b = new Array($hour, $min, $meridian);

		inputField.append('<label>Fecha</label>', {"for": 'Timetable' + index + 'FechaMonth'})
		inputFieldHora.append('<label>Hora</label>', {"for": 'TimeTable' + index + 'HoraHour'});

		for (var i = 0; i < 3; i++) {
			$a[i].attr({
				id: 'Timetable' + index + 'fecha' + a[i],
				name: 'data[Timetable][' + index + '][fecha][' + a[i] + ']',
			}).appendTo(inputField);


			$b[i].attr({
				id: 'Timetable' + index + 'hora' + b[i],
				name: 'data[Timetable][' + index + '][hora][' + b[i] + ']',
			}).appendTo(inputFieldHora);
			if (i < 2) {
				inputField.append('-');
				inputFieldHora.append(':');
			}
		}

		var $last = $('#ExhibitionAddForm').find('.field-input:last');
		$last.after(inputFieldHora);
		$last.after(inputField);
	});

	$('#film-add-link').fancybox({
		afterShow: function(){
			$('#FilmAddForm').validate({
				rules: {
					'data[Film][título]': 'required',
					'data[Film][género]': 'required',
					'data[Film][director]': 'required',
					'data[Film][duración]': 'required',
					'data[Film][año]': 'required',
				}
			});
			$('#FilmAddForm').ajaxForm({
				target: '.fancybox-outer',	
				success: function(){
					$('.close',this).click(function(){
						$('.fancybox-overlay').click();
					})
				}
			});
		}
	});
});

	