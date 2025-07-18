@extends('layouts.Adminka')

@section('content')
<div class="container">
    <h1>Просмотр контакта</h1>

    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label>Имя</label>
                <p class="form-control-plaintext">{{ $contact->name }}</p>
            </div>

            <div class="form-group">
                <label>Email</label>
                <p class="form-control-plaintext">{{ $contact->email }}</p>
            </div>

            <div class="form-group">
                <label>Сообщение</label>
                <div class="form-control-plaintext" style="white-space: pre-wrap;">{{ $contact->message }}</div>
            </div>

            <div class="form-group">
                <label>Дата создания</label>
                <p class="form-control-plaintext">{{ $contact->created_at->format('d.m.Y H:i') }}</p>
            </div>

            <div class="form-group">
                <label>Дата обновления</label>
                <p class="form-control-plaintext">{{ $contact->updated_at->format('d.m.Y H:i') }}</p>
            </div>

            <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Назад</a>
        </div>
    </div>
</div>
@endsection
