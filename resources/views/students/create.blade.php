@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center">Студенты</h2>
                    <h2 class="text-center">Добавление</h2>

                    <form action="{{route('students.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="second_name">
                                Фамилия
                            </label>
                            <input class="form-control" name="second_name" type="text">
                        </div>
                        <div class="form-group">
                            <label for="first_name">
                                Имя
                            </label>
                            <input class="form-control" name="first_name" type="text">
                        </div>
                        <div class="form-group">
                            <label for="third_name">
                                Имя
                            </label>
                            <input class="form-control" name="third_name" type="text">
                        </div>
                        <div class="form-group">
                            <label for="email">
                                e-mail
                            </label>
                            <input class="form-control" name="email" type="text">
                        </div>
                        <button type="submit" class="btn btn-success">
                            Добавить
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
