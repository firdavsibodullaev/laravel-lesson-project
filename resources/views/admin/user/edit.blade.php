@extends('admin.parts.layout')
@section('title', 'Изменить пользователя')
@section('content')
<form action="{{ route('admin.user.update', $user_detail->id) }}"
      method="post"
      autocomplete="off">
    @csrf
    <div class="form-group">
        <label for="name">FIO</label>
        <input type="text"
               id="name"
               name="name"
               value="{{ $user_detail->name }}"
               class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text"
               id="email"
               name="email"
               value="{{ $user_detail->email }}"
               class="form-control">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="text"
               id="password"
               name="password"
               placeholder="Enter password"
               class="form-control">
    </div>

    <button class="btn btn-primary" type="submit">Сохранить</button>
</form>
@endsection