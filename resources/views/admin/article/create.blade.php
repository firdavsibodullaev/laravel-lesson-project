@extends('admin.parts.layout')
@section('title', 'Maqolalar')
@section('content')


@if($errors->any())
@foreach($errors->all() as $error)
<div class="alert alert-default-danger">{{$error}}</div>
@endforeach
@endif


<form action="{{route('admin.article.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title">Sarlavha</label>
        <input type="text"
               class="form-control"
               name="title"
               id="title"
               placeholder="Sarlavhani kiriting"
               value="{{old('title')}}">
    </div>
    <div class="form-group">
        <label for="short_description">Qisqa mazmuni</label>
        <textarea name="short_description"
                  class="form-control"
                  id="short_description"
                  
                  rows="5">{{old('short_description')}}</textarea>
    </div>
    <div class="form-group">
        <label for="category_id">Kategoriya</label>
        <select name="category_id" id="category_id" class="custom-select">
            @foreach($categories as $category)
            <option {{old('category_id') == $category->id ? 'selected' : ''}}
            value="{{$category->id}}">{{$category->title}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="image">Rasm</label>
        <input type="file"
               name="image"
               id="image"
               class="form-control-file"
               >
    </div>
    <div class="form-group">
        <label for="published_at">Nashr sanasi</label>
        <input type="datetime-local" 
               name="published_at"
               class="form-control"
               id="published_at"
               value="{{old('published_at')}}">
    </div>
    <div class="row">
        <div class="col-4">
            <div class="form-group">
                <label for="is_actual">Dolzarb</label>
                <input type="checkbox" 
                       id="is_actual"
                       {{old('is_actual') ? 'checked' : ''}}
                       name="is_actual">
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="edition_choice">Muharrir tanlovi</label>
                <input type="checkbox" 
                       id="edition_choice"
                       name="edition_choice"
                       {{old('edition_choice') ? 'checked' : ''}}>
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="is_carousel">Karusel</label>
                <input type="checkbox" 
                       id="is_carousel"
                       name="is_carousel"
                       {{old('is_carousel') ? 'checked' : ''}}>
            </div>
        </div>
    </div>
    <div class="form-group">
        <textarea name="body" id="body">{{old('body')}}</textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Saqlash</button>
    </div>
</form>
@endsection

@push('script')
<script src="/assets/ckeditor5/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
    
@endpush