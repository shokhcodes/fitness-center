@extends('layouts.Adminka')

@section('title', 'Редактирование отзыва #' . $review->id)

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Редактирование отзыва #{{ $review->id }}</h1>
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
                        <h3 class="card-title">Форма редактирования</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('reviews.update', $review) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label>Статус отзыва</label>
                                <select name="status" class="form-control" required>
                                    <option value="" disabled>Выберите статус</option>
                                    <option value="pending" {{ $review->status == 'pending' ? 'selected' : '' }}>На модерации</option>
                                    <option value="approved" {{ $review->status == 'approved' ? 'selected' : '' }}>Одобрено</option>
                                    <option value="rejected" {{ $review->status == 'rejected' ? 'selected' : '' }}>Отклонено</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="review-text">Текст отзыва</label>
                                <textarea id="review-text" name="text" class="form-control" rows="5" required>{{ $review->text }}</textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> Сохранить изменения
                                </button>
                                <a href="{{ route('reviews.index') }}" class="btn btn-default">
                                    <i class="fas fa-arrow-left"></i> Назад
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
