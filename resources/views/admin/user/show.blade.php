@extends('admin.parts.layout')
@section('title', $user->name)
@section('content')
<div class="mt-3">
    <div class="row">
        <div class="col-6"><h6>Name</h6></div>
        <div class="col-6">{{$user->name}}</div>
    </div>
    <hr>
    <div class="row">
        <div class="col-6"><h6>Email</h6></div>
        <div class="col-6">{{$user->email}}</div>
    </div>
    <hr>    
</div>
@endsection