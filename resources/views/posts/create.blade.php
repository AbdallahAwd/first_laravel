@extends('layout.app')

@section('title' , 'Dashboard')

@section('content')
    <form action="{{ route('posts.store') }}" method="GET">
        <input type="text" name="title"><br><br>
        <textarea name="content" ></textarea><br>
        <input type="submit" value="Create">
    </form>
@endsection
