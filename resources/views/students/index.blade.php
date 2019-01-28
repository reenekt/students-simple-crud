@extends('layouts.app')

@section('content')
@php
/** @var \App\Student $students */
@endphp
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center">Студенты</h2>
                    <h2 class="text-center">Главная</h2>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <a href="{{ route('students.create') }}" class="btn btn-success mr-5">Добавить</a>
                        <form action="{{ route('students.search') }}" class="form-inline" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="mr-3">Поиск по </label>
                                <select class="form-control mr-1" name="attributeName" id="attributeName">
                                    <option value="second_name">Фамилия</option>
                                    <option value="first_name">Имя</option>
                                    <option value="third_name">Отчество</option>
                                    <option value="email">E-mail</option>
                                </select>
                                <input placeholder="Искомое значение" class="form-control mr-1" type="text" name="searchInput">
                                <button class="btn btn-info" type="submit">Искать</button>
                            </div>
                        </form>
                        <a href="{{ route('students.index') }}" class="btn btn-light ml-5">Показать все</a>
                    </div>

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
                                        <button class="btn btn-outline-danger mr-1" type="submit">Удалить</button>
                                    </form>
                                    <a href="{{ route('students.edit', ['$student' => $student]) }}" class="btn btn-outline-info">Изменить</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="6">Количество записей: {{ $students->count() }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
