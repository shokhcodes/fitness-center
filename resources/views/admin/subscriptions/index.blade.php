@extends('layouts.Adminka')

@section('title', 'Все предложения')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Все абонементы</h1>
            </div>
            <div class="col-sm-6">
                <a href="{{ route('subscriptions.create') }}" class="btn btn-primary float-right">Абонементы</a>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="card">
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th>Тип</th>
                            <th>Цена</th>
                            <th>Длительность</th>
                            <th>Действия</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($subscriptions as $subscription)
                            <tr>
                                <td>{{ $subscription->type }}</td>
                                <td>{{ $subscription->price }} ₽</td>
                                <td>{{ $subscription->duration }} дней</td>
                                <td>
                                    <a href="{{ route('subscriptions.edit', $subscription->id) }}" class="btn btn-info btn-sm">Редактировать</a>
                                    <form action="{{ route('subscriptions.destroy', $subscription->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Удалить</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {{ $subscriptions->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
