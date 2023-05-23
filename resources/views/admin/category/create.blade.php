@extends('admin.parts.layout')
@section('title','Новая категория')
@section('content')
<div class="mt-3">
    <form action="{{route('admin.category.store')}}" autocomplete="off" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Название</label>
            <input type="text"
                   name="title"
                   class="form-control"
                   id="title">
        </div>
        <button class="btn btn-primary" type="submit">Сохранить</button>
    </form>
</div>
@endsection