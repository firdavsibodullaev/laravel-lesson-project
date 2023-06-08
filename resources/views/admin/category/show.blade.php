@extends('admin.parts.layout')
@section('title', 'Категории')
@section('content')
<div class="mt-3">
    <h4>{{$category->title}}</h4>
    <hr>
    @foreach($category->articles as $article)
    <p>
        <a href="{{route('admin.article.show', $article->id)}}">
            {{$article->title}}
        </a>
        <br>
        {{$article->short_description}}
    </p>
    @endforeach
</div>
@endsection