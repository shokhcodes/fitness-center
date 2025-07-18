@extends('layouts.Adminka')

@section('title', 'Редактировать услугу')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Редактировать услугу</h1>
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
                    <form action="{{ route('ourService.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Название услуги</label>
                                <input type="text" name="title" class="form-control" id="title" value="{{ old('title', $service->title) }}" placeholder="Введите название" required>
                                @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <label for="foto">Изображение</label>
                                <input type="file" name="foto" class="form-control" id="foto" accept="image/*" value="{{ old('foto') }}">
                                @if($service->foto)
                                <div class="mt-2">
                                    <img src="{{ asset('img/' . $service->foto) }}" alt="Текущее изображение" style="max-width: 150px; max-height: 150px;">
                                </div>
                                @endif
                                @error('foto')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                {{-- Удалено поле иконки, так как оно больше не нужно --}}
                                <label for="description">Описание</label>
                                <textarea name="description" class="form-control" id="description" rows="3" placeholder="Введите описание" required>{{ old('description', $service->description) }}</textarea>
                                @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Сохранить изменения</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
