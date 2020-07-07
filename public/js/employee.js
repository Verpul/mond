$(document).ready(function(){
	// Шаблоны для телефонов с плагином inputmask
	$('#work_phone').inputmask('99-99-99');
	$('#mob_phone').inputmask('8(999) 999-99-99')

	// Отключения подсказок заполнения полей
	$('input').attr('autocomplete', 'off');
});


