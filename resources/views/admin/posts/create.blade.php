@extends('admin.layout')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <p>Створення нового посту</p>
            <a href="{{route('posts.index')}}">Всі пости</a></div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    @if($action=='create')
                        <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Назва (title)</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Введіть назву посту">
                                <small id="titleHelp" class="form-text text-muted">Наприклад, жахлива тіснота</small>
                            </div>
                            <div class="form-group">
                                <label for="content">Контент</label>
                                <textarea  class="form-control" id="content" name="content"
                                           placeholder="Введіть текст посту" rows="3"></textarea>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" checked class="form-check-input" id="status" name="status">
                                <label class="form-check-label" for="status">
                                    Опублікувати <span class="form-text text-muted">(інакше пост не буде опублікований та матиме статус чернетки)</span></label>
                            </div>
                            <div class="form-group">
                                <label for="image">Завантажити головне фото</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                            </div>
                            <div class="btn-group " role="group" style="display: block; text-align: right;">
                                <button class="btn btn-primary pull-right" type="submit">Зберегти</button>
                                <a class="btn btn-danger pull-right" href="{{route('posts.index')}}">Відмінити</a></div>

                        </form>
                    @elseif($action=='edit')
                        <form action="{{route('posts.update', $post->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="title">Назва (title)</label>
                                <input type="text" value="{{$post->title}}" name="title" class="form-control" id="title" placeholder="Введіть назву картки">
                                <small id="titleHelp" class="form-text text-muted">Наприклад, жахлива тіснота</small>
                            </div>
                            <div class="form-group">
                                <label for="content">Контент</label>
                                <textarea  class="form-control" id="content" name="content"
                                           placeholder="Введіть опис картки" rows="3">{{$post->content}}</textarea>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" @if($post->status==1) checked @endif class="form-check-input" id="status" name="status">
                                <label class="form-check-label" for="status">
                                    Опублікувати <span class="form-text text-muted">(інакше пост не буде опублікований та матиме статус чернетки)</span></label>
                            </div>
                            <div class="form-group">
                                <label for="image">Фото</label>
                                <img src="{{$post->getImage()}}" alt="" width="200">
                            </div>
                            <div class="form-group">
                                <label for="image">Завантажити нове головне фото</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                            </div>
                            <div class="btn-group " role="group" style="display: block; text-align: right;">
                                <button class="btn btn-primary pull-right" type="submit">Зберегти</button>
                                <a class="btn btn-danger pull-right" href="{{route('posts.index')}}">Відмінити</a></div>

                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection