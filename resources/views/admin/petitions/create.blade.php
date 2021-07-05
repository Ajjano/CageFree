@extends('admin.layout')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <p>Створення нової петиції</p>
            <a href="{{route('petitions.index')}}">Всі петиції</a></div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                @if($action=='create')
                    <form action="{{route('petitions.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Назва (title)</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Введіть назву петиції"
                                   value="{{old('title')}}">
                            <small id="titleHelp" class="form-text text-muted">Наприклад, Yum!, досить підтримувати жорстоке поводження с тваринами!
                              </small>
                        </div>
                        <div class="form-group">
                            <label for="content">Посилання</label>
                            <input  class="form-control" id="link" name="link"
                                       placeholder="Введіть лінк на петицію" value="{{old('link')}}" >
                        </div>

                        <div class="form-group">
                            <label for="image">Завантажити головне фото</label>
                            <input type="file" class="form-control-file" id="image" name="image">
                        </div>
                        <div class="btn-group " role="group" style="display: block; text-align: right;">
                            <button class="btn btn-primary pull-right" type="submit">Зберегти</button>
                            <a class="btn btn-danger pull-right" href="{{route('petitions.index')}}">Відмінити</a></div>

                    </form>
                @elseif($action=='edit')
                    <form action="{{route('petitions.update', $petition->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="title">Назва (title)</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Введіть назву петиції"
                                   value="{{$petition->title}}">
                            <small id="titleHelp" class="form-text text-muted">Наприклад, Yum!, досить підтримувати жорстоке поводження с тваринами!
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="content">Посилання</label>
                            <input  class="form-control" id="link" name="link"
                                    placeholder="Введіть лінк на петицію" value="{{$petition->link}}" >
                        </div>
                        <div class="form-group">
                            <label for="image">Фото</label>
                            <img src="{{$petition->getImage()}}" alt="" width="200">
                        </div>
                        <div class="form-group">
                            <label for="image">Завантажити головне фото</label>
                            <input type="file" class="form-control-file" id="image" name="image">
                        </div>
                        <div class="btn-group " role="group" style="display: block; text-align: right;">
                            <button class="btn btn-primary pull-right" type="submit">Зберегти</button>
                            <a class="btn btn-danger pull-right" href="{{route('petitions.index')}}">Відмінити</a></div>

                    </form>
                @endif
            </div>
        </div>
    </div>
    </div>
@endsection
