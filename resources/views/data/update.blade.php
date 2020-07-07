@extends('layouts.app')

@section('content')
	<form action="{{route('data.update', $data->id)}}" method="post">
		@csrf
		@method('PATCH')
		<div class="form-group">
			<label for="purpose">Назначение:</label>
			<input type="text" name="purpose" class="form-control form-control-sm col-3"
				 value="{{$data->purpose}}">
			@if($errors->has('purpose'))
				<div class="alert alert-danger col-3">
					{{$errors->first('purpose')}}
				</div>	
			@endif
		</div>
		<div class="form-group">
			<label for="login">Логин:</label>
			<input type="text" name="login" class="form-control form-control-sm col-3"
				value="{{$data->login}}">
			@if($errors->has('login'))
				<div class="alert alert-danger col-3">
					{{$errors->first('login')}}
				</div>	
			@endif
		</div>
		<div class="form-group">
			<label for="password">Пароль:</label>
			<input type="text" name="password" class="form-control form-control-sm col-3"
				value="{{$data->password}}">
			@if($errors->has('password'))
				<div class="alert alert-danger col-3">
					{{$errors->first('password')}}
				</div>	
			@endif
		</div>
		<div class="form-group">
			<label for="comment">Комментарий:</label>
			<textarea name="comment" class="form-control col-3" rows='10'>{{$data->comment}}</textarea>
		</div>
		@php $my_url = url()->previous() @endphp
		<button type="submit" class="btn btn-success">Сохранить</button>
		<a href="{{url()->previous()}}" class="btn btn-primary">Отмена</a>
	</form>
@endsection