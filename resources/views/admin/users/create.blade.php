@extends('layouts.Adminka')

@section('title', 'Создание пользователя')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Создание пользователя</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Форма создания пользователя</h3>
                    </div>
                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Имя</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Введите имя" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Введите email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Пароль</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Введите пароль" required>
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Подтверждение пароля</label>
                                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Подтвердите пароль" required>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="is_admin" class="form-check-input" id="is_admin">
                                <label class="form-check-label" for="is_admin">Администратор</label>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Создать</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
