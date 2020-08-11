@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Категориц 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Материалов 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Посетителей 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Сегодня 0</span></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <a href="#" class="btn btn-block btn-default">Создать категорию</a>
                <a class="list-group-item" href="#">
                    <h4 class="list-group-item-primary">Категория первая</h4>
                    <p class="list-group-item-info">
                        Количество материалов
                    </p>
                </a>
            </div>
            <div class="col-sm-6">
                <a href="#" class="btn btn-block btn-default">Создать материал</a>
                <a class="list-group-item" href="#">
                    <h4 class="list-group-item-primary">Материал первый</h4>
                    <p class="list-group-item-info">
                        Категория
                    </p>
                </a>
            </div>
        </div>
    </div>
@endsection()
