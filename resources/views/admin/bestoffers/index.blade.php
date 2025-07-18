@extends('layouts.Adminka')

@section('title', 'Список предложений')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Список предложений</h1>
            </div>
            <div class="col-sm-6">
                <a href="{{ route('bestoffers.create') }}" class="btn btn-primary float-right">Добавить предложение</a>
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
                        <h3 class="card-title">Список предложений</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Наименование</th>
                                    <th>Картинка</th>
                                    <th>Описание</th>
                                    <th>Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($bestOffers as $offer)
                                <tr>
                                    <td>{{ $offer->id }}</td>
                                    <td>{{ $offer->title }}</td>
                                    <td><img class="img-responsive" src="{{ asset('img/' . $offer->foto) }}" style="width: 100px"></td>
                                    <td>{{ $offer->description }}</td>
                                    <td>
                                        <a href="{{ route('bestoffers.edit', $offer->id) }}" class="btn btn-sm btn-primary">Редактировать</a>
                                        <form action="{{ route('bestoffers.destroy', $offer->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Удалить</button>
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
