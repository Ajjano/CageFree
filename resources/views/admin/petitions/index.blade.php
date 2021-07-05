@extends('admin.layout')
@section('page_name') Петиції @endsection
@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <a class="btn btn-primary" href="{{route('petitions.create')}}">Додати нову петицію </a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                <tr>
                    <th>№</th>
                    <th>Зображення</th>
                    <th>Назва (title)</th>
                    <th>Посилання</th>
                    <th>Дії</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>№</th>
                    <th>Зображення</th>
                    <th>Назва (title)</th>
                    <th>Посилання</th>
                    <th>Дії</th>
                </tr>
                </tfoot>
                <tbody>
                @foreach($petitions as $petition)
                    <tr>
                        <td>{{$petition->id}}</td>
                        <td><img src="{{$petition->getImage()}}" alt="" width="100"></td>
                        <td>{{$petition->title}}</td>
                        <td><a target="_blank" href="{{$petition->link}}">{{$petition->link}}</a></td>
                        <td>
                            <a href="{{route('petitions.edit', $petition->id)}}" class="btn">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <form action="{{route('petitions.destroy', $petition->id)}}" method="post">
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
