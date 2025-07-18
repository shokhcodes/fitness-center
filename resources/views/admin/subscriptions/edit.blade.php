@extends('layouts.Adminka')

@section('title', 'Редактировать предложение')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Редактировать предложение</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('subscriptions.update', $subscription->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="type">Тип</label>
                        <input type="text" name="type" class="form-control" value="{{ $subscription->type }}" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Описание</label>
                        <textarea name="description" class="form-control" required>{{ $subscription->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="price">Цена</label>
                        <input type="number" name="price" class="form-control" value="{{ $subscription->price }}" required>
                    </div>
                    <div class="form-group">
                        <label for="duration">Длительность (в днях)</label>
                        <input type="number" name="duration" class="form-control" value="{{ $subscription->duration }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
