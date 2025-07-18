@extends('layouts.Adminka')

@section('title', 'Просмотр отзыва #' . $review->id)

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Просмотр отзыва #{{ $review->id }}</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Детали отзыва</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Пользователь:</strong> {{ $review->user->name }}</p>
                                <p><strong>Дата:</strong> {{ $review->created_at->format('d.m.Y H:i') }}</p>
                                <p><strong>Статус:</strong>
                                    @switch($review->status)
                                        @case('pending') <span class="badge bg-warning">На модерации</span> @break
                                        @case('approved') <span class="badge bg-success">Одобрено</span> @break
                                        @case('rejected') <span class="badge bg-danger">Отклонено</span> @break
                                    @endswitch
                                </p>
                                <p><strong>Оценка:</strong>
                                    @for($i = 1; $i <= 5; $i++)
                                        <i class="fas fa-star" style="color: {{ $i <= $review->rating ? '#ffc107' : '#e4e7ea' }}"></i>
                                    @endfor
                                </p>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12">
                                <p><strong>Текст отзыва:</strong></p>
                                <div class="p-3 bg-light rounded">
                                    {{ $review->text }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('reviews.edit', $review) }}" class="btn btn-primary">
                            <i class="fas fa-edit"></i> Редактировать
                        </a>
                        <form action="{{ route('reviews.destroy', $review) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Удалить отзыв?')">
                                <i class="fas fa-trash"></i> Удалить
                            </button>
                        </form>
                        <a href="{{ route('reviews.index') }}" class="btn btn-default float-right">
                            <i class="fas fa-arrow-left"></i> Назад
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
