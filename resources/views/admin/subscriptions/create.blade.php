@extends('layouts.Adminka')

@section('title', 'Добавить абонемент')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Добавить абонемент</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('subscriptions.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="type">Тип</label>
                        <input type="text" name="type" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Описание</label>
                        <textarea name="description" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="price">Цена</label>
                        <input type="number" name="price" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="duration">Длительность (в днях)</label>
                        <input type="number" name="duration" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
