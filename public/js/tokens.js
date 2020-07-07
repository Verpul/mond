$(document).ready(function() {
  //Добавляем Назначения для фильтра select purpose-filter
  var serials = [];
  $('.serial').each(function(){
    serials.push($(this).text());
  });

  var uniqueSerials = serials.filter(function(elem, index, self){
    return index === self.indexOf(elem);
  });

  $.each(uniqueSerials, function(key, value){
    $('#serial-filter').append($("<option></option>").text(value));
  });

  //Добавляем ФИО для фильтра select employee-filter
  var employees = [];
  $('.employee').each(function(){
    employees.push($(this).text());
  });

  var uniqueEmployees = employees.filter(function(elem, index, self){
    return index === self.indexOf(elem);
  });

  $.each(uniqueEmployees, function(key, value){
    $('#employee-filter').append($("<option></option>").text(value));
  });

  //Добавляем Организации для фильтра select company-filter
  var types = [];
  $('.type').each(function(){
    types.push($(this).text());
  });

  var uniqueTypes = types.filter(function(elem, index, self){
    return index === self.indexOf(elem);
  });

  $.each(uniqueTypes, function(key, value){
    $('#type-filter').append($("<option></option>").text(value));
  });

  //Фильтр по колонкам
  $(".filter").change(function(){
    //Оменяем все прошлые фильтры
    $("table tbody tr").show();
    //Отображаем кнопку сброса фильтров
    $('#clear-filter').attr('hidden', false);

    var filter = {};
    filter['serial'] = $('#serial-filter').val();
    filter['employee'] = $('#employee-filter').val();
    filter['type'] = $('#type-filter').val();

    $.each(filter, function(index, value){
      $("table tbody tr").find("td."+index+":not(:contains('"+value+"'))").parent().hide();
    });

    var i = 1;
    $('table tbody tr .counter:visible').each(function(){
      $(this).html(i++);
    });
  }); 
});