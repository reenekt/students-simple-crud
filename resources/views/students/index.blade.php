@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center">Студенты</h2>
                    <h2 class="text-center">Главная</h2>
                    <a href="{{ route('students.create') }}" class="btn btn-success mb-4">Добавить</a>
                    <table class="table table-hover">
                        <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Фамилия</th>
                            <th>Имя</th>
                            <th>Имя</th>
                            <th>e-mail</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->second_name }}</td>
                            <td>{{ $student->first_name }}</td>
                            <td>{{ $student->third_name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <form action="{{ route('students.destroy', ['student' => $student]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-danger" type="submit">Удалить</button>
                                    </form>
                                    <a href="{{ route('students.edit', ['$student' => $student]) }}" class="btn btn-outline-info">Изменить</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
