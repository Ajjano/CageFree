@extends('admin.layout')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <p>Створення нової картки (батарейна система)</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    @if($action=='create')
                    <form action="{{route('battery-system.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Назва (title)</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Введіть назву картки">
                            <small id="titleHelp" class="form-text text-muted">Наприклад, жахлива тіснота</small>
                        </div>
                        <div class="form-group">
                            <label for="description">Опис</label>
                            <textarea  class="form-control" id="description" name="description"
                                       placeholder="Введіть опис картки" rows="3"></textarea>
                            <small id="descriptionHelp" class="form-text text-muted">Наприклад, Кури-несучки на
                                птахофермі, де використовується "батарейна система", в так званому "інтенсивному" або
                                "конвеєрному" режимі утримання, страждають від неймовірної тісноти. Вони знаходяться в
                                вузьких клітках, поставлених в ряди. Клітини мають розмір 30-45 сантиметрів, не містять
                                сідала і зроблені з крученого дроту, щоб послід провалювався крізь підлогу.
                            </small>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" checked class="form-check-input" id="status" name="status">
                            <label class="form-check-label" for="status">Активна картка</label>
                        </div>
                        <div class="form-group">
                            <label for="image">Завантажити фото для картки</label>
                            <input type="file" class="form-control-file" id="image" name="image">
                        </div>
                        <div class="btn-group " role="group" style="display: block; text-align: right;">
                            <button class="btn btn-primary pull-right" type="submit">Зберегти</button>
                            <a class="btn btn-danger pull-right" href="{{route('battery-system.index')}}">Відмінити</a></div>

                    </form>
                        @elseif($action=='edit')
                        <form action="{{route('battery-system.update', $cart->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="title">Назва (title)</label>
                                <input type="text" value="{{$cart->title}}" name="title" class="form-control" id="title" placeholder="Введіть назву картки">
                                <small id="titleHelp" class="form-text text-muted">Наприклад, жахлива тіснота</small>
                            </div>
                            <div class="form-group">
                                <label for="description">Опис</label>
                                <textarea  class="form-control" id="description" name="description"
                                           placeholder="Введіть опис картки" rows="3">{{$cart->description}}</textarea>
                                <small id="descriptionHelp" class="form-text text-muted">Наприклад, Кури-несучки на
                                    птахофермі, де використовується "батарейна система", в так званому "інтенсивному" або
                                    "конвеєрному" режимі утримання, страждають від неймовірної тісноти. Вони знаходяться в
                                    вузьких клітках, поставлених в ряди. Клітини мають розмір 30-45 сантиметрів, не містять
                                    сідала і зроблені з крученого дроту, щоб послід провалювався крізь підлогу.
                                </small>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" @if($cart->status==1) checked @endif class="form-check-input" id="status" name="status">
                                <label class="form-check-label" for="status">Активна картка</label>
                            </div>
                            <div class="form-group">
                                <label for="image">Фото</label>
                                <img src="{{$cart->getImage()}}" alt="" width="200">
                            </div>
                            <div class="form-group">
                                <label for="image">Завантажити фото для картки</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                            </div>
                            <div class="btn-group " role="group" style="display: block; text-align: right;">
                                <button class="btn btn-primary pull-right" type="submit">Зберегти</button>
                                <a class="btn btn-danger pull-right" href="{{route('battery-system.index')}}">Відмінити</a></div>

                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection