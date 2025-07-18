@extends('layouts.Adminka')

@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Абонементы пользователей</h6>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Пользователь</th>
                            <th>Тип</th>
                            <th>Цена</th>
                            <th>Дата покупки</th>
                            <th>Дата окончания</th>
                            <th>Статус</th>
                            <th>Действия</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($subscriptions as $subscription)
                        <tr>
                            <td>{{ $subscription->id }}</td>
                            <td>{{ $subscription->user ? $subscription->user->name : 'Пользователь не найден' }}</td>
                            <td>{{ $subscription->type }}</td>
                            <td>{{ $subscription->price }} руб.</td>
                            <td>{{ $subscription->created_at->format('d.m.Y H:i') }}</td>
                            <td>
                                @if($subscription->created_at && $subscription->duration)
                                    {{ $subscription->created_at->addDays($subscription->duration)->format('d.m.Y') }}
                                @else
                                    {{ $subscription->end_date ? $subscription->end_date->format('d.m.Y') : 'Не указана' }}
                                @endif
                            </td>
                            <td>
                                <span class="badge badge-{{ $subscription->status === 'active' ? 'success' : 'secondary' }}">
                                    {{ $subscription->status === 'active' ? 'Активен' : 'Неактивен' }}
                                </span>
                            </td>
                            <td>
                                <form action="{{ route('admin.subscriptions.user.destroy', $subscription) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Вы уверены, что хотите удалить этот абонемент?')">
                                        Удалить
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $subscriptions->links('vendor.pagination.custom') }}
        </div>
    </div>
</div>
@endsection
