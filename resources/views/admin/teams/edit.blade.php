@extends('layouts.Adminka')

@section('content')
<div class="container">
    <h1>Редактировать тренера</h1>

    <form action="{{ route('teams.update', $team->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="FIO">ФИО тренера</label>
            <input type="text" class="form-control" id="FIO" name="FIO" value="{{ $team->FIO }}" required>
        </div>

        <div class="form-group">
            <label for="master">Специализация</label>
            <input type="text" class="form-control" id="master" name="master" value="{{ $team->master }}" required>
        </div>

        <div class="form-group">
            <label for="age">Возраст (лет)</label>
            <input type="number" class="form-control" id="age" name="age" value="{{ $team->age }}" required>
        </div>

        <div class="form-group">
            <label for="description">Описание</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ $team->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="foto">Фотография</label>
            <input type="file" class="form-control-file" id="foto" name="foto">
            <small>Текущее фото:</small>
            <img src="{{ asset('img/'.$team->foto) }}" width="100" class="mt-2">
        </div>

        <button type="submit" class="btn btn-primary">Обновить</button>
        <a href="{{ route('teams.index') }}" class="btn btn-secondary">Отмена</a>
    </form>
</div>
@endsection
