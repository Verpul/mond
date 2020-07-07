@extends('layouts.app')

@section('content')
<!-- Форма показа таблицы -->
<div class="form-row col-sm-12">
  <a href="{{route('tokens.create')}}" class="btn btn-primary mb-3">Добавить</a>
</div>
<!-- Конец формы показа таблицы -->
<table class="col-sm-12 table-striped table-bordered text-center fixed">
  <thead>
      <tr>
        <th scope="col" class="w-3">#</th>
        <th scope="col" class="w-10">Тип</th>
        <th scope="col" class="w-20">Серийный номер</th>
        <th scope="col" class="w-20">Ответственный</th>
        <th scope="col" class="w-40">ЭЦП</th>
        <th scope="col" class="w-7" colspan="2"></th>
      </tr>
      <!-- Начало строка фильтров -->
      <!-- Проверка, есть ли какие-либо данные для отображения -->
      @if(!count($data) == 0)
        <tr>
          <th></th>
          <th>
            <select id="type-filter" class="form-control form-control-sm input-td filter">
              <option selected></option>
            </select>
          </th>
          <th>
            <select id="serial-filter" class="form-control form-control-sm input-td filter">
              <option selected></option>
            </select>
          </th>
          <th>
            <select id="employee-filter" class="form-control form-control-sm input-td filter">
              <option selected></option>
            </select>
          </th>
          <th colspan="5"></th>
       	</tr>
       @endif
        <!-- Конец строка фильтров -->
  </thead>
  <tbody class="word-slice">
    <!-- Проверка, есть ли какие-либо данные для отображения -->
    @if(count($data) == 0)
    	<tr>
        	<td colspan="7" class="pt-2"><h5>Нет данных для отображения</h4></td>
        </tr>
    @else
	    @foreach($data as $index => $d)
		    <tr>
		    	<th class="counter">{{ ++$index }}</th>
		    	<td class="type">{{ $d->token_type }}</td>
		    	<td class="serial">{{ $d->serial }}</td>
		    	<td class="employee">{{ $d->employees->full_name }}</td>
		    	<!-- Идем по спику всех привязанных ЭЦП -->
		    	<td class="pb-0">
		    		<table class="col-sm-12 table-borderless fixed">
				    	@foreach($d->eds as $eds)
					    	<tr class="{{$eds->status?'':'color-expired'}} border-bottom">
					    		<td class="w-30">{{$eds->purposes}}</td>
				    			<td class="w-30">{{$eds->employees->surname}}</td>
				    			<td class="w-40">{{$eds->formatDate($eds->expired)}}</td>
				    		</tr>
				    	@endforeach
		    		</table>
		    	</td>
	    		<!-- Конец списка ЭЦП -->
		    	<td>
	            <a href="{{route('tokens.edit', $d->id)}}" class="btn btn-warning btn-sm">
	            	<i class="fas fa-edit"></i>
	            </a>
		        </td>
		        <td>
		            <form action="{{route('tokens.destroy', $d->id)}}" method="post">
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
    <script src="{{ asset('js/tokens.js') }}" defer></script>
@endpush