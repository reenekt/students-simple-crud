@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center">Студенты</h2>
                    <h3 class="text-center">Изменение</h3>

                    <form action="{{route('students.update', ['student' => $student])}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="second_name">
                                Фамилия
                            </label>
                            <input value="{{ $student->second_name }}" class="form-control" name="second_name" type="text">
                        </div>
                        <div class="form-group">
                            <label for="first_name">
                                Имя
                            </label>
                            <input value="{{ $student->first_name }}" class="form-control" name="first_name" type="text">
                        </div>
                        <div class="form-group">
                            <label for="third_name">
                                Имя
                            </label>
                            <input value="{{ $student->third_name }}" class="form-control" name="third_name" type="text">
                        </div>
                        <div class="form-group">
                            <label for="email">
                                e-mail
                            </label>
                            <input value="{{ $student->email }}" class="form-control" name="email" type="text">
                        </div>
                        <button type="submit" class="btn btn-success">
                            Сохранить
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
