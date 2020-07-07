@extends('layouts.app')

@section('content')
<!-- Форма показа таблицы -->
<div class="form-row col-sm-12">
  <a href="{{route('eds.create')}}" class="btn btn-primary mb-3">Добавить</a>

  <form action="{{route('eds.view')}}" method="get" class="ml-auto">
      <div class="form-check">
        <!-- Значение кнопки просмотра и имя в зависимости от переменной в сессии -->
        @php $showText = session('onlyActive') ? 'Только действующие' : 'Показать все' @endphp
          <button class="btn btn-info" id="show">{{ $showText }}</button> 
      </div> 
  </form>
</div> 
<!-- Конец формы показа таблицы -->
<table class="col-sm-12 table-bordered table-striped text-center fixed word-slice">
  <thead>
      <tr>
        <th scope="col" class="w-3">#</th>
        <th scope="col" class="w-10">Назначение</th>
        <th scope="col" class="w-20">ФИО владельца</th>
        <th scope="col" class="w-10">Организация-поставщик</th>
        <th scope="col" class="w-10">Дата начала действия</th>
        <th scope="col" class="w-10">Дата окончания действия</th> 
        <th scope="col" class="w-30">Информация о носителе</th>
        <th scope="col" class="w-7" colspan="2"></th>
      </tr>
      <!-- Начало строка фильтров -->
      <!-- Проверка, есть ли какие-либо данные для отображения -->
      @if(!count($data) == 0)
        <tr>
          <th></th>
          <th>
            <select id="purpose-filter" class="form-control form-control-sm input-td filter">
              <option selected></option>
            </select>
          </th>
          <th>
            <select id="employee-filter" class="form-control form-control-sm input-td filter">
              <option selected></option>
            </select>
          </th>
          <th>
            <select id="company-filter" class="form-control form-control-sm input-td filter">
              <option selected></option>
            </select>
          </th>
          <th colspan="5"></th>
        </tr>
        <!-- Конец строка фильтров -->
      @endif
  </thead>
  <tbody>
    <!-- Проверка, есть ли какие-либо данные для отображения -->
    @if(count($data) == 0)
      <tr>
          <td colspan="12" class="pt-2"><h5>Нет данных для отображения</h4></td>
      </tr>
    @else
      @foreach($data as $index => $d)
      <tr>         
        <th class="counter">{{++$index}}</th>
        <td class="purpose">{{$d->purposes}}</td>
        <td class="employee">{{$d->employees->full_name}}</td>
        <td class="company">{{$d->companies}}</td>
        <td>{{$d->formatDate($d->created)}}</td>
        <td class="{{strtotime($d->expired.'-2 months') < strtotime('now') && $d->status?'color-near-expired':''}}">
          {{$d->formatDate($d->expired)}}
        </td>
        <td class="pb-0">
            <table class="col-sm-12 table-borderless fixed">
              @foreach($d->tokens as $token)
                <tr class="border-bottom">
                  <td class="w-30">{{$token->token_type}}</td>
                  <td class="w-30">{{$token->serial}}</td>
                  <td class="w-30">{{$token->employees->surname}}</td>
                </tr>
              @endforeach
            </table>
          </td>
        <td>
          <form action="{{route('eds.update', $d->id)}}" method="post">
            @csrf
            @method('PATCH')
            <button type="submit" class="btn btn-{{$d->status?'success':'dark'}} btn-sm" 
              name="status" value="{{$d->status}}" 
              onclick="return confirm('Изменить статус ЭЦП ?')">
              <i class="{{$d->status?'fas fa-check':'fas fa-stop-circle'}}"></i>
            </button>
          </form>
        </td>
        <td>
            <form action="{{route('eds.destroy', $d->id)}}" method="post">
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

@push('scripts')
    <script src="{{ asset('js/eds.js') }}" defer></script>
@endpush