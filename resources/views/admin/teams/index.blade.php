@extends('layouts.Adminka')

@section('content')
<div class="container">
    <h1>Управление тренерами</h1>
    <a href="{{ route('teams.create') }}" class="btn btn-primary mb-3">Добавить тренера</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Фото</th>
                <th>ФИО</th>
                <th>Специализация</th>
                <th>Возраст</th>
                <th>Описание</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teams as $team)
            <tr>
                <td>{{ $team->id }}</td>
                <td><img src="{{ asset('img/'.$team->foto) }}" width="50" height="50" class="rounded-circle"></td>
                <td>{{ $team->FIO }}</td>
                <td>{{ $team->master }}</td>
                <td>{{ $team->age }} лет</td>
                <td>{{ Str::limit($team->description, 50) }}</td>
                <td>
                    <a href="{{ route('teams.edit', $team->id) }}" class="btn btn-sm btn-warning">Редактировать</a>
                    <form action="{{ route('teams.destroy', $team->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Удалить тренера?')">Удалить</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
