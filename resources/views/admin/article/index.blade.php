@extends('admin.parts.layout')
@section('title', 'Maqolalar')
@section('content')
<a href="{{route('admin.article.create')}}" class="btn btn-primary">Новая статья</a>
<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>#</th>
            <th>Sarlavha</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($articles as $article)
        <tr>
            <td>{{$article->id}}</td>
            <td>{{$article->title}}</td>
            <td>
                <a href="{{route('admin.article.show', $article->id)}}">Batafsil</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection