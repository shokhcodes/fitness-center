@extends('layouts.Adminka')

@section('title', 'Управление отзывами')

@section('content')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Управление отзывами</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Фильтр отзывов</h3>
                    </div>
                    <div class="card-body">
                        <form method="GET" action="{{ route('reviews.index') }}" class="form-inline">
                            <div class="form-group mb-2">
                                <select name="status" class="form-control" onchange="this.form.submit()">
                                    <option value="">Все статусы</option>
                                    <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>На модерации</option>
                                    <option value="approved" {{ request('status') == 'approved' ? 'selected' : '' }}>Одобрено</option>
                                    <option value="rejected" {{ request('status') == 'rejected' ? 'selected' : '' }}>Отклонено</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Пользователь</th>
                                    <th>Текст</th>
                                    <th>Оценка</th>
                                    <th>Статус</th>
                                    <th>Дата</th>
                                    <th>Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($reviews as $review)
                                <tr>
                                    <td>{{ $review->id }}</td>
                                    <td>{{ $review->user->name }}</td>
                                    <td>{{ Str::limit($review->text, 50) }}</td>
                                    <td>
                                        @for($i = 1; $i <= 5; $i++)
                                            <i class="fas fa-star" style="color: {{ $i <= $review->rating ? '#ffc107' : '#e4e7ea' }}"></i>
                                        @endfor
                                    </td>
                                    <td>
                                        @switch($review->status)
                                            @case('pending') <span class="badge bg-warning">На модерации</span> @break
                                            @case('approved') <span class="badge bg-success">Одобрено</span> @break
                                            @case('rejected') <span class="badge bg-danger">Отклонено</span> @break
                                        @endswitch
                                    </td>
                                    <td>{{ $review->created_at->format('d.m.Y H:i') }}</td>
                                    <td>
                                        <a href="{{ route('reviews.show', $review) }}" class="btn btn-sm btn-info">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('reviews.edit', $review) }}" class="btn btn-sm btn-primary">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('reviews.destroy', $review) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Удалить отзыв?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer clearfix">
                        {{ $reviews->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
