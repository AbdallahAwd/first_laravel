@extends('layout.app')

@section('title' , $post['title'])

@section('content')
    @if ($post['is_new'])
    <div>New Post yeaaey</div>
    @endif
    {{-- false options only --}}
    @unless ($post['is_new'])
    <div>Old post</div>
    @endunless


    <h1>{{ $post['title'] }}</h1>
    @isset($post['name'])
        <div>{{ $post['name'] }}</div>
    @endisset
    <p>{{ $post['content'] }}</p>
@endsection
