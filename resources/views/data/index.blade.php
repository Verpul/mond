@extends('layouts.app')

@section('content')
<!-- Форма показа таблицы -->
<div class="form-row col-sm-12">
  <a href="{{route('data.create')}}" class="btn btn-primary mb-3">Добавить</a>
  <div class="mx-auto">
    <!-- Страницы -->
    @if(isset($search))
      {{$data->appends(['search' => $search])->links()}}
    @else
      {{$data->links()}}
    @endif
  </div>
  <form action="{{route('data.view')}}" method="get">
    <div class="form-check">
      <!-- Значение кнопки просмотра и имя в зависимости от переменной в сессии -->
      @php $showText = session('showAll') ? 'Постраничный просмотр' : 'Показать все' @endphp
        <button class="btn btn-info" id="show">{{ $showText }}</button> 
    </div> 
  </form> 
</div>
<!-- Конец формы показа таблицы -->
<table class="col-sm-12 table-striped table-bordered text-center fixed">
  <thead>
      <tr>
        <th scope="col" class="w-3">#</th>
        <th scope="col" class="w-20">Назначение</th>
        <th scope="col" class="w-20">Логин</th>
        <th scope="col" class="w-20">Пароль</th>
        <th scope="col" class="w-30">Комментарий</th>
        <th scope="col" class="w-7" colspan="2"></th>
      </tr>
  </thead>
  <tbody class="word-slice">
    <!-- Запомнимаем первое значение на странице для счетчика -->
    @php $counter = $data->firstItem() @endphp
    <!-- Рисуем поле поиска на первой строке таблицы -->
    <!-- Если было значение поиска или есть данные на странице то отображаем поле поиска -->
    @if(isset($search) || $counter)
      <tr>
        <form action="{{route('data.search')}}" method="get">
          <td colspan="7">
            <div class="form-row">
              <div class="input-group input-group-sm w-50 m-auto" >
                <input type="text" name="search" class="form-control shadow-none" placeholder="Поиск..." 
                      value="{{isset($search) ? $search:''}}">
                @if(isset($search))
                  <div class="input-group-append">
                    <a href="{{route('data.clear')}}" class="btn btn-secondary shadow-none" id="clear">
                      <i class="fas fa-ban"></i>
                    </a>
                  </div>
                @endif
                <div class="input-group-append">
                  <button class="btn input-group-text shadow-none" id="search">Найти</button>
                </div>
              </div>
            </div>
          </td>
        </form>
      </tr>
    @endif
    <!-- Заканчивается поле поиска -->
    <!-- Проверка, есть ли какие-либо данные для отображения -->
    @if(!$counter)
      <tr>
        <td colspan="7" class="pt-2"><h5>Нет данных для отображения</h4></td>
      </tr>
    @else
      @foreach($data as $d)
        <tr>
          <th scope="row">{{$counter++}}</th>
          <!-- Отображать ссылку, если адрес начинается на http -->
          @if(strpos($d->purpose,'http') !== false)
            <td><a href="{{$d->purpose}}">{{$d->purpose}}</a></td>
          @else
            <td>{{$d->purpose}}</td>
          @endif
          <td>{{$d->login}}</td>
          <td>
            <div class="input-group input-group-sm">
              <input type="password" value="{{$d->password}}" name="password" disabled 
                class="border-0 text-center bg-transparent form-control p-0">
              <div class="input-group-append">
                <button class="btn btn-sm shadow-none">
                  <i class="toggle-password far fa-eye"></i>
                </button>
              </div>
           </div>
          </td>
          <td class="truncate">{!! nl2br(e($d->comment)) !!}</td>
          <td>
            <a href="{{route('data.edit', $d->id)}}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
          </td>
          <td>
            <form action="{{route('data.destroy', $d->id)}}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm" 
                onclick="return confirm('Удалить данные ?')">
                  <i class="fas fa-minus-circle"></i>
              </button>
            </form>
          </td>
        </tr>
      @endforeach
    @endif
  </tbody>
</table>
@endsection
