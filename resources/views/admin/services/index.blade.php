@extends('layouts.Adminka')

@section('title', 'Список услуг')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Список услуг</h1>
            </div>
            <div class="col-sm-6">
                <a href="{{ route('admin.ourService.create') }}" class="btn btn-primary float-right">Добавить услугу</a>
            </div>
        </div>
        @if (session('success'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
        </div>
        @endif
    </div>
</div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Все услуги</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Название</th>
                                    <th>Изображения</th>
                                    <th>Описание</th>
                                    <th>Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($services as $service)
                                <tr>
                                    <td>{{ $service->id }}</td>
                                    <td>{{ $service->title }}</td>
                                    <td>
                                        @if($service->foto)
                                            <img src="{{ asset('img/' . $service->foto) }}" alt="{{ $service->title }}" style="max-width: 100px; max-height: 100px;">
                                        @else
                                            Нет изображения
                                        @endif
                                    </td>
                                    <td>{{ $service->description }}</td>
                                    <td>
                                        <a href="{{ route('ourService.edit', $service->id) }}" class="btn btn-sm btn-primary">
                                            <i class="fas fa-edit"></i> Редактировать
                                        </a>
                                        <form action="{{ route('ourService.destroy', $service->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Вы уверены?')">
                                                <i class="fas fa-trash"></i> Удалить
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
