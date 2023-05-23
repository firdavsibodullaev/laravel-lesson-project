@extends('admin.parts.layout')
@section('title', 'Категории')
@section('content')
<div class="mt-3">
    <a href="{{route('admin.category.create')}}" class="btn btn-success">Создать</a>
    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th>#</th>
                <th>Название</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->title}}</td>
                <td>
                    <a href="{{route('admin.category.edit', $category->id)}}">Изменить</a>
                </td>
            </tr>
            @endforeach        
        </tbody>
    </table>
</div>
@endsection