@extends('admin.layouts.user.app')
@section('title', 'Criar User')
@section('content')
    <p>Criar</p>
    <form action="{{route('user.store')}}" method="post">
        @csrf
        <input type="text" name="name" id="name">
        <input type="email" name="email" id="email">
        <input type="password" name="password" id="password">
        <button type="submit">Salvar</button>
    </form>
@endsection

