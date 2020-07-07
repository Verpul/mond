<div class="modal fade" id="addModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
		<form method="post" action="{{route('employees.store')}}">
			@csrf
		    <div class="modal-header">
		        <h5 class="modal-title">Добавить сотрудника</h5>
		    </div>
		    <div class="modal-body">
	       	<!-- Поле Фамилия -->
	        <div class="form-group">
				<label for="surname" class="asterisk">Фамилия</label>
				@php $hasError = $errors->has('surname') @endphp
				<input type="text" name="surname" value = "{{old('surname')}}"
					class="form-control form-control-sm  {{$hasError ? 'is-invalid': ''}} no-icon">
				@if($hasError)
					<div class="invalid-feedback">
						{{$errors->first('surname')}}
					</div>
				@else
					<small class="form-text text-muted">
	            		Обязательно для заполнения. От 3 до 20 букв.
	        		</small>
				@endif
			</div>
			<!-- Конец поля Фамилия -->

			<!-- Поле Имя -->
	        <div class="form-group">
				<label for="first_name" class="asterisk">Имя</label>
				@php $hasError = $errors->has('first_name') @endphp
				<input type="text" name="first_name" value = "{{old('first_name')}}"
					class="form-control form-control-sm  {{$hasError ? 'is-invalid': ''}} no-icon">
				@if($hasError)
					<div class="invalid-feedback">
						{{$errors->first('first_name')}}
					</div>
				@else
					<small class="form-text text-muted">
	            		Обязательно для заполнения. От 3 до 20 букв.
	        		</small>
				@endif
			</div>
			<!-- Конец поля Имя -->

			<!-- Поле Отчество -->
	        <div class="form-group">
				<label for="patronymic" class="asterisk">Отчество</label>
				@php $hasError = $errors->has('patronymic') @endphp
				<input type="text" name="patronymic" value = "{{old('patronymic')}}"
					class="form-control form-control-sm  {{$hasError ? 'is-invalid': ''}} no-icon">
				@if($hasError)
					<div class="invalid-feedback">
						{{$errors->first('patronymic')}}
					</div>
				@else
					<small class="form-text text-muted">
	            		Обязательно для заполнения. От 3 до 20 букв.
	        		</small>
				@endif
			</div>
			<!-- Конец поля Отчество -->

			<!-- Поле Должность -->
	        <div class="form-group">
				<label for="position">Должность</label>
				@php $hasError = $errors->has('position') @endphp
				<input type="text" name="position" value = "{{old('position')}}"
					class="form-control form-control-sm  {{$hasError ? 'is-invalid': ''}} no-icon">
				@if($hasError)
					<div class="invalid-feedback">
						{{$errors->first('position')}}
					</div>
				@else
					<small class="form-text text-muted">
	            		Основная должность. От 3 до 80 букв.
	        		</small>
				@endif
			</div>
			<!-- Конец поля Должность -->

			<!-- Поле E-mail -->
	        <div class="form-group">
				<label for="email">E-mail</label>
				@php $hasError = $errors->has('email') @endphp
				<input type="text" name="email" value = "{{old('email')}}"
					class="form-control form-control-sm  {{$hasError ? 'is-invalid': ''}} no-icon">
				@if($hasError)
					<div class="invalid-feedback">
						{{$errors->first('email')}}
					</div>
				@endif
			</div>
			<!-- Конец поля E-mail -->

			<!-- Поле Рабочий телефон -->
	        <div class="form-group">
				<label for="work_phone">Рабочий телефон </label>
				@php $hasError = $errors->has('work_phone') @endphp
				<input type="text" name="work_phone" value = "{{old('work_phone')}}" id="work_phone"
					class="form-control form-control-sm  {{$hasError ? 'is-invalid': ''}} no-icon">
				@if($hasError)
					<div class="invalid-feedback">
						{{$errors->first('work_phone')}}
					</div>
				@endif
			</div>
			<!-- Конец поля Рабочий телефон -->

			<!-- Поле Мобильный телефон -->
	        <div class="form-group">
				<label for="mob_phone">Мобильный телефон</label>
				@php $hasError = $errors->has('mob_phone') @endphp
				<input type="text" name="mob_phone" value = "{{old('mob_phone')}}" id="mob_phone"
					class="form-control form-control-sm  {{$hasError ? 'is-invalid': ''}} no-icon">
				@if($hasError)
					<div class="invalid-feedback">
						{{$errors->first('mob_phone')}}
					</div>
				@endif
			</div>
			<!-- Конец поля Мобильный телефон -->

			<!-- Поле ЭЦП -->
			<div class="form-check">
			  <input class="form-check-input" type="checkbox" value="1" name="eds" id="eds"
			  {{old('eds')?'checked':''}}>
			  <label class="form-check-label" for="eds">
			    Работа с ЭЦП
			  </label>
			</div>
			<!-- Конец поля ЭЦП -->

	      </div>
	      <div class="modal-footer">
	        <button type="submit" class="btn btn-success">Сохранить</button>
	        <button type="button" class="btn btn-primary" data-dismiss="modal">Отмена</button>
	      </div>
      </form>
    </div>
  </div>
</div>

<!-- Если есть ошибки в модальном окне, то открыть его -->
@if($errors->has('surname') || $errors->has('first_name') || $errors->has('patronymic')
 || $errors->has('position') || $errors->has('email') || $errors->has('work_phone')
  || $errors->has('mob_phone'))
	@push('scripts')
		<script src="{{ asset('js/modal.js') }}" defer></script>
	@endpush
@endif

@push('scripts')
	<script src="{{ asset('js/jquery.inputmask.min.js') }}" defer></script>
	<script src="{{ asset('js/employee.js') }}" defer></script>
@endpush