@extends('admin.parts.layout')
@section('title', 'Пользователи')
@section('content')
<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>#</th>
            <th>FIO</th>
            <th>Email</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($user_list as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{{ route('admin.user.show', $user->id) }}">Посмотреть</a> 
                <br>
                <a href="{{ route('admin.user.edit', $user->id) }}">Изменить</a> 
                <br>
                <a href="{{ route('admin.user.delete', $user->id) }}">Удалить</a>
            </td>
        </tr>            
        @endforeach
    </tbody>
</table>
@endsection