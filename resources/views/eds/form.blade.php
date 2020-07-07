@extends('layouts.app')

@section('content')
	<!-- В форме постоянно проводится проверка, были ли отправлены данные @data - update или 
	новая форма - create -->
<div class="row">
	<form method="post" class="col-4" id="main" action="{{route('eds.store')}}">
		@csrf

		<!-- Поле Владелец -->
		<div class="form-group">
			<label for="employee" class="asterisk">Владелец</label>
			@php $hasError = $errors->has('employee'); @endphp
			<div class="input-group input-group-sm">
				<!-- Если сотрудников нет то блокируем поле -->
				<select name="employee" {{$employees->isEmpty()?'disabled':''}}
					class="form-control form-control-sm {{$hasError ? 'is-invalid': ''}} no-icon">
					@foreach($employees as $employee)
						<option value="{{$employee->id}}" {{old('employee')==$employee->id?'selected':''}}>
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
            		Выберите или добавьте сотрудника.
        		</small>
			@endif
		</div>
		<!-- Конец поля Владелец -->
		
		<!-- Поле Назначение -->
		<div class="form-group">
			<label for="purpose" class="asterisk">Назначение</label>
			@php $hasError = $errors->has('purpose') @endphp
			<select name="purpose"
					class="form-control form-control-sm {{$hasError ? 'is-invalid': ''}} no-icon">
					<option hidden>Выберите назначение</option>
				@foreach($purposes as $index => $purpose)
					<!-- Вставляем old значение, если оно было -->
					<option value="{{ $index }}" {{old('purpose') == $index?'selected':''}}> 
						{{ $purpose }}
					</option>
				@endforeach
			</select>
			@if($hasError)
				<div class="invalid-feedback">
					{{$errors->first('purpose')}}
				</div>
			@endif
		</div>
		<!-- Конец поля Тип -->

		<!-- Поле Поставщик -->
		<div class="form-group">
			<label for="company" class="asterisk">Организация-поставщик</label>
			@php $hasError = $errors->has('company') @endphp
			<select name="company"
					class="form-control form-control-sm {{$hasError ? 'is-invalid': ''}} no-icon">
					<option hidden>Выберите организацию</option>
				@foreach($companies as $index => $company)
					<!-- Вставляем old значение, если оно было -->
					<option value="{{ $index }}" 
						{{old('company') == $index?'selected':''}}>{{ $company }}</option>
				@endforeach
			</select>
			@if($hasError)
				<div class="invalid-feedback">
					{{$errors->first('company')}}
				</div>
			@endif
		</div>
		<!-- Конец поля Поставщик -->

		<!-- Поле Дата начала действия -->
		<div class="form-group">
			<label for="created" class="asterisk">Дата начала действия</label>
			@php $hasError = $errors->has('created') @endphp
			<input type="date" name="created" value="{{old('created')}}"
			class="form-control form-control-sm {{$hasError ? 'is-invalid': ''}} no-icon">
            @if($hasError)
				<div class="invalid-feedback">
					{{$errors->first('created')}}
				</div>
			@else
				<small class="form-text text-muted">
            		Обязательно для заполнения.	
        		</small>
			@endif
		</div>
		<!-- Конец поля Дата начала действия -->

		<!-- Поле Дата окончания действия -->
		<div class="form-group">
			<label for="expired" class="asterisk">Дата окончания действия</label>
			@php $hasError = $errors->has('expired') @endphp
			<input type="date" name="expired" value="{{old('expired')}}"
			class="form-control form-control-sm {{$hasError ? 'is-invalid': ''}} no-icon">
            @if($hasError)
				<div class="invalid-feedback">
					{{$errors->first('expired')}}
				</div>
			@else
				<small class="form-text text-muted">
            		Обязательно для заполнения.	
        		</small>
			@endif
		</div>
		<!-- Конец поля Дата окончания действия -->

		<button type="submit" class="btn btn-success">Сохранить</button>
		<a href="{{route('eds.index')}}" class="btn btn-primary">Назад</a>
	</form>
		
@include('modals/addemployee')
@endsection