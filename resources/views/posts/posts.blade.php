@extends('layout.app')

@section('title' , 'All posts')

@section('content')
    @forelse ($posts as $key=> $post)
        <a href="/posts/{{ $key }}"><h1>{{ $key+1 }}. {{ $post['title'] }}</h1></a>
        {{-- <p>{{ $post['content'] }}</p> --}}
        {{-- <hr> --}}
    @empty
        <h1>No Posts found</h1>
    @endforelse
@endsection
