@extends('frontend.parts.layout')
@section('content')
@foreach($articles as $article)
<article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">
    <figure>
        <a href="{{route('frontend.show', $article->id)}}"><img src="/storage/{{$article->image}}" alt="Image" class="img-responsive"></a>
    </figure>
    <span class="fh5co-meta"><a href="{{route('frontend.show', $article->id)}}">{{$article->category->title}}</a></span>
    <h2 class="fh5co-article-title"><a href="{{route('frontend.show', $article->id)}}">{{$article->title}}</a></h2>
    <span class="fh5co-meta fh5co-date">{{$article->published_at}}</span>
    {{-- <span class="fh5co-meta fh5co-date">March 6th, 2016</span> --}}
</article>
@if ($loop->iteration % 2 == 0)
<div class="clearfix visible-xs-block"></div>
@endif
@endforeach
@endsection