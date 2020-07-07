//Управление видимостью пароля
$(".toggle-password").click(function() {
	$(this).toggleClass("fa-eye-slash");
	var input = $(this).closest('.input-group').find('input');
	if(input.attr('type') == 'password'){
		input.attr("type", "text");
	} else {
		input.attr("type", "password");
	}
});

//Управление видимостью строк в столбце "Комментарий"
$(document).ready(function() {
  	//Максимальное количество символов
    var showChar = 145;
    var ellipsestext = "...";

    //Обходим все поля комментариев и смотрим где количество символов превышает допустимое значение
    $(".truncate").each(function() {
      var fullText = $(this).html();
      if (fullText.length > showChar) {
        var visibleText = fullText.substr(0, showChar);
        var html =
          '<div class="truncate-text" style="display:block">' +
          visibleText +
          '<span class="">' +
          ellipsestext +
          '&nbsp;&nbsp;<br><a href="" class="moreless more text-right"><i class="fas fa-arrow-circle-down"></i></i></a></span></span></div><div class="truncate-text" style="display:none">' +
          fullText +
          '<br><a href="" class="moreless less"><i class="fas fa-arrow-alt-circle-up"></i></i></a></span></div>';

        $(this).html(html);
      }
    });

    //Переключатель видимости всего комментария
    $(".moreless").click(function() {
      var thisElement = $(this);
      var cT = thisElement.closest(".truncate-text");
      var tX = ".truncate-text";

      if (thisElement.hasClass("less")) {
        cT.prev(tX).toggle();
        cT.slideToggle();
      } else {
        cT.toggle();
        cT.next(tX).slideToggle();
      }
      return false;
    });
});
