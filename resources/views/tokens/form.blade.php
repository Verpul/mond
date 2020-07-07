@extends('layouts.app')

@section('content')
	<!-- В форме постоянно проводится проверка, были ли отправлены данные - update или 
	новая форма - create -->
<div class="row">
	<form method="post" class="col-4" id="main"
		action="{{isset($data)? route('tokens.update', $data->id) : route('tokens.store')}}">
		@csrf
		@if(isset($data))
			@method('PATCH')
		@endif

		<!-- Поле Сотрудник -->
		<div class="form-group">
			<label for="employee" class="asterisk">Сотрудник</label>
			<!-- @id - если действие update то берем id из данных базы -->
			@php 
				$hasError = $errors->has('employee'); 
				$id = isset($data)?$data->employee_id:old('employee');
			@endphp
			<div class="input-group input-group-sm">
				<!-- Если сотрудников нет то блокируем поле -->
				<select name="employee" {{$employees->isEmpty()?'disabled':''}}
					class="form-control form-control-sm {{$hasError ? 'is-invalid': ''}} no-icon">
					@foreach($employees as $employee)
						<option value="{{$employee->id}}" {{$id == $employee->id?'selected':''}}>
							{{$employee->full_name}}
						</option>
					@endforeach
				</select>
				<a class="btn btn-sm btn-info" data-toggle="modal" data-target="#addModal">
	          		<i class="fas fa-plus"></i>
	       		</a>
	       		@if($hasError)
					<div class="invalid-feedback">
						{{$errors->first('employee')}}
					</div>
				@endif
       		</div>
			@if(!$hasError)
				<small class="form-text text-muted">
            		Выберите или добавьте владельца.
        		</small>
			@endif
		</div>
		<!-- Конец поля Сотрудник -->
		
		<!-- Поле Тип -->
		<div class="form-group">
			<label for="type" class="asterisk">Тип</label>
			@php $hasError = $errors->has('type') @endphp
			<select name="type" {{isset($data)?'disabled':''}} 
					class="form-control form-control-sm {{$hasError ? 'is-invalid': ''}} no-icon">
				<!-- Если не update то значение не может меняться и опция всего одна -->
				@if(!isset($data))
					@foreach($tokens as $index => $token)
						<!-- Вставляем old значение, если оно было -->
						<option value="{{ $index }}" 
							{{old('token') == $index?'selected':''}}>{{ $token }}</option>
					@endforeach
				@else
					<option value="{{ $data->type }}">{{ $data->token_type }}</option>
				@endif
			</select>
			@if($hasError)
				<div class="invalid-feedback">
					{{$errors->first('type')}}
				</div>
			@else
				<small class="form-text text-muted">
            		Выберите тип.
        		</small>
			@endif
		</div>
		<!-- Конец поля Тип -->

		<!-- Поле Серийный номер -->
		<div class="form-group">
			<label for="serial" class="asterisk">Серийный номер</label>
			@php $hasError = $errors->has('serial') @endphp
			<input type="text" name="serial" value = "{{isset($data)?$data->serial:old('serial')}}"
			class="form-control form-control-sm {{$hasError ? 'is-invalid': ''}} no-icon"
			{{isset($data)?'disabled':''}} >
            @if($hasError)
				<div class="invalid-feedback">
					{{$errors->first('serial')}}
				</div>
			@else
				<small class="form-text text-muted">
            		Обязательно для заполнения. В случае записи в Реестр ввести имя ПК.
            		От 3 до 15 символов.	
        		</small>
			@endif
		</div>
		<!-- Конец поля Серийный номер -->

		<button type="submit" class="btn btn-success">Сохранить</button>
		<a href="{{route('tokens.index')}}" class="btn btn-primary">Назад</a>
	</form>

	<!-- Таблица ЭЦП -->
	<div class="col">
		<table class="table-striped table-bordered text-center fixed mb-3 col-7">
			<thead>
				<tr>
					<td class="w-10"></td>
					<td class="w-30">Назначение</td>
					<td class="w-30">Владелец</td>
					<td class="w-30">Действует до</td>		
				</tr>
			<tbody>
			<!-- Если Update, то показываем текущие ЭЦП на токене -->
			@if(isset($data) && count($data->eds) != 0)
				<tr>
					<td colspan="4">Текущие ЭЦП на носителе</td>
				</tr>
				@foreach($data->eds as $eds_token)
					<tr class="{{$eds_token->status?'':'color-expired'}}">
						<td>
							<input type="checkbox" name="edscheckbox[]" value="{{$eds_token->id}}" form="main" checked>
						</td>
						<td>{{$eds_token->purposes}}</td>
						<td>{{$eds_token->employees->surname}}</td>
						<td>{{$eds_token->formatDate($eds_token->expired)}}</td>
					</tr>
				@endforeach
			@endif
			<!-- Конец ЭЦП на токене -->
			<tr>
				<td colspan="4">Доступные ЭЦП</td>
			</tr>
				@if(!($eds->isEmpty()))
					@foreach($eds as $e)
						@if(!in_array($e->id, isset($data)? $data->eds->modelKeys() : []))
							<tr>
								<td><input type="checkbox" name="edscheckbox[]" value="{{$e->id}}" form="main"
									{{(is_array(old('edscheckbox')) && in_array($e->id, old('edscheckbox')))?'checked':''}}>
								</td>
								<td>{{$e->purposes}}</td>
								<td>{{$e->employees->surname}}</td>
								<td>{{$e->formatDate($e->expired)}}</td>
							</tr>
						@endif
					@endforeach
				@else
					<tr>
						<td colspan="4">Нет данных для отображения</td>
					</tr>	
				@endif
			</tbody>
		</table>
	</div>	
	<!-- Конец таблицы ЭЦП -->
</div>
		
@include('modals/addemployee')
@endsection
