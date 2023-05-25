@extends('admin.parts.layout')
@section('title', 'Изменить категорию')
@section('content')
<form action="{{route('admin.category.update', $category_detail->id)}}"
    method="post"
    autocomplete="off">
    @csrf
    <div class="form-group">
        <label for="title">Название</label>
        <input type="text"
               name="title"
               id="title"
               value={{$category_detail->title}}
               class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Сохранить</button>
</form>

@endsection