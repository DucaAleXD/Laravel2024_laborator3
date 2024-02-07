
@extends('layouts.app')

@section('title','Users')
@section('content')
    <div class="container">
        <h4>Users</h4>
            <a href="{{route('users.create')}}">Adauga</a>
            <hr>
@forelse ( $users as $user )
    <div>
        <b>Name</b>
        {{$user->name}}<br>
        <b>Email</b>
        {{$user->email}}
        <p>------------</p>
    </div>
        @empty
    <p>Nu sunt utilizatori</p>
    @endforelse
    {{$users->links()}}
</div>
    