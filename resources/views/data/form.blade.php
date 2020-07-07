@extends('layouts.app')

@section('content')
	<form method="post" class="col-4"
		action="{{isset($data)? route('data.update', $data->id) : route('data.store')}}">
		@csrf
		@if(isset($data))
			@method('PATCH')
		@endif
		<div class="form-group">
			<label for="purpose" class="asterisk">Назначение</label>
			@php $hasError = $errors->has('purpose') @endphp
			<input type="text" name="purpose" value ="{{isset($data)?$data->purpose:old('purpose')}}" {{isset($data)?'readonly':''}} 
			class="form-control form-control-sm  {{$hasError ? 'is-invalid': ''}} no-icon">
			@if($hasError)
				<div class="invalid-feedback">
					{{$errors->first('purpose')}}
				</div>
			@else
				<small class="form-text text-muted">
            		Обязательно для заполнения. Минимум 3 символа.
        		</small>
			@endif
		</div>
		<div class="form-group">
			<label for="login" class="asterisk">Логин</label>
			@php $hasError = $errors->has('login') @endphp
			<input type="text" name="login" value = "{{isset($data)?$data->login:old('login')}}"
			class="form-control form-control-sm {{$hasError ? 'is-invalid': ''}} no-icon">
            @if($hasError)
				<div class="invalid-feedback">
					{{$errors->first('login')}}
				</div>
			@else
				<small class="form-text text-muted">
            		Обязательно для заполнения. Минимум 3 символа.
        		</small>
			@endif
		</div>
		<div class="form-group">
			<label for="password"  class="asterisk">Пароль</label>
			@php $hasError = $errors->has('password') @endphp
			<div class="input-group input-group-sm">
				<input type="password" name="password" value="{{isset($data)?$data->password:''}}"
				class="form-control form-control-sm {{$hasError ? 'is-invalid': ''}} no-icon">
                <div class="btn btn-sm border-0">
                  <i class="toggle-password far fa-eye fa-fw"></i>
                </div>
                @if($hasError)
					<div class="invalid-feedback">
						{{$errors->first('password')}}
					</div>
				@endif     	
          	</div>
			@if(!$hasError)
				<small class="form-text text-muted">
            		Обязательно для заполнения. Минимум 3 символа.
        		</small>
			@endif
		</div>
		<div class="form-group">
			<label for="comment">Комментарий</label>
			<textarea name="comment" class="form-control form-control-sm" rows='10'>{{isset($data)?$data->comment:old('comment')}}</textarea>
		</div>
		<button type="submit" class="btn btn-success" >Сохранить</button>
		<!-- Если в сессии не сохранены значения предыдущей страницы, то показываем главную -->
		<a href="{{session('previousUrl')?session('previousUrl'):'/'}}" class="btn btn-primary">Отмена</a>
	</form>
@endsection
