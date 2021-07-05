@extends('admin.layout')
@section('page_name') Пости @endsection
@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <a class="btn btn-primary" href="{{route('posts.create')}}">Додати новий пост </a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                <tr>
                    <th>№</th>
                    <th>Зображення</th>
                    <th>Назва (title)</th>
                    <th>Контент</th>
                    <th>Статус</th>
                    <th>Дії</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>№</th>
                    <th>Зображення</th>
                    <th>Назва (title)</th>
                    <th>Опис</th>
                    <th>Статус</th>
                    <th>Дії</th>
                </tr>
                </tfoot>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td><img src="{{$post->getImage()}}" alt="" width="100"></td>
                        <td><a target="_blank" href="{{route('post.show', $post->id)}}">{{$post->title}}</a></td>
                        <td>{{$post->getShortDescription()}}</td>
                        <td>{{$post->getStatus()}}</td>
                        <td>
                            <a href="{{route('posts.edit', $post->id)}}" class="btn">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <form action="{{route('posts.destroy', $post->id)}}" method="post">
                                @method('delete')
                                @csrf
                                <button onclick="return confirm('Ти впевнений?')" type="submit" class="btn">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
    @endsection
