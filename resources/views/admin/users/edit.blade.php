@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Редактирование пользователя @endslot
            @slot('parent') Главная @endslot
            @slot('active') Пользователи @endslot
        @endcomponent

        <hr>
        <form class="form-horizontal" action="{{route('admin.user.update', $user)}}" method="POST">
            {{method_field('PUT')}}
            {{csrf_field()}}
            {{--Form include--}}
            @include('admin.users.partials.form')

        </form>

    </div>
@endsection
