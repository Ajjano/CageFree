@extends('admin.layout')
@section('page_name') Картки (батарейна система) @endsection
@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <a class="btn btn-primary" href="{{route('battery-system.create')}}">Додати нову картку </a>
        </div>
       <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                <tr>
                    <th>№</th>
                    <th>Зображення</th>
                    <th>Назва (title)</th>
                    <th>Опис</th>
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
                @foreach($carts as $cart)
                    <tr>
                        <td>{{$cart->id}}</td>
                        <td><img src="{{$cart->getImage()}}" alt="" width="100"></td>
                        <td>{{$cart->title}}</td>
                        <td>{{$cart->description}}</td>
                        <td>{{$cart->getStatus()}}</td>
                        <td>
                            <a href="{{route('battery-system.edit', $cart->id)}}" class="btn">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <form action="{{route('battery-system.destroy', $cart->id)}}" method="post">
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