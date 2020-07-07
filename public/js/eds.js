$(document).ready(function() {
  //Добавляем Назначения для фильтра select purpose-filter
  var purposes = [];
  $('.purpose').each(function(){
    purposes.push($(this).text());
  });

  var uniquePurposes = purposes.filter(function(elem, index, self){
    return index === self.indexOf(elem);
  });

  $.each(uniquePurposes, function(key, value){
    $('#purpose-filter').append($("<option></option>").text(value));
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

  //Добавляем Организации для фильтра company-filter
  var companies = [];
  $('.company').each(function(){
    companies.push($(this).text());
  });

  var uniqueCompany = companies.filter(function(elem, index, self){
    return index === self.indexOf(elem);
  });

  $.each(uniqueCompany, function(key, value){
    $('#company-filter').append($("<option></option>").text(value));
  });

  //Фильтр по колонкам
  $(".filter").change(function(){
    //Оменяем все прошлые фильтры
    $("table tbody tr").show();
    //Отображаем кнопку сброса фильтров
    $('#clear-filter').attr('hidden', false);

    var filter = {};
    filter['purpose'] = $('#purpose-filter').val();
    filter['employee'] = $('#employee-filter').val();
    filter['company'] = $('#company-filter').val();

    $.each(filter, function(index, value){
      $("table tbody tr").find("td."+index+":not(:contains('"+value+"'))").parent().hide();
    });

    var i = 1;
    $('table tbody tr .counter:visible').each(function(){
      $(this).html(i++);
    }); 
  });
});