@extends('layouts.Adminka')

@section('content')
<div class="container">
    <h1>Добавить нового тренера</h1>

    <form action="{{ route('teams.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="FIO">ФИО тренера</label>
            <input type="text" class="form-control" id="FIO" name="FIO" required>
        </div>

        <div class="form-group">
            <label for="master">Специализация</label>
            <input type="text" class="form-control" id="master" name="master" required>
        </div>

        <div class="form-group">
            <label for="age">Возраст (лет)</label>
            <input type="number" class="form-control" id="age" name="age" required>
        </div>

        <div class="form-group">
            <label for="description">Описание</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>

        <div class="form-group">
            <label for="foto">Фотография</label>
            <input type="file" class="form-control-file" id="foto" name="foto" required>
        </div>

        <button type="submit" class="btn btn-primary">Сохранить</button>
        <a href="{{ route('teams.index') }}" class="btn btn-secondary">Отмена</a>
    </form>
</div>
@endsection
