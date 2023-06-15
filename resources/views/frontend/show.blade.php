@extends('frontend.parts.layout')
@section('content')
<article class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
    <figure class="animate-box">
        <img src="/storage/{{$article->image}}" alt="Image" class="img-responsive">
    </figure>
    <span class="fh5co-meta animate-box"><a href="single.html">{{$article->category->title}}</a></span>
    <h2 class="fh5co-article-title animate-box"><a href="single.html">{{$article->title}}</a></h2>
    <span class="fh5co-meta fh5co-date animate-box">{{$article->published_at}}</span>
    
    <div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-left content-article">
        <div class="ck-content">
            {!! $article->body !!}
        </div>
    </div>
</article>
@endsection

@push('script')
<script src="/assets/ckeditor5/ckeditor.js"></script>    
@endpush