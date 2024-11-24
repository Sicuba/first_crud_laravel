@extends('admin.layouts.user.app')
@section('title', 'Listae User')
@section('content')
    <p>Usuarios</p>
    <a href="{{route('user.create')}}">Novo User</a>
    @forelse ($users as $user)
        <p>{{ $user->name }} - {{ $user->email }}</p>
    @empty
        <p>Dont have data</p>
    @endforelse
@endsection
