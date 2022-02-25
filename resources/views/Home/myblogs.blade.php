@extends('layouts.mainlayout')
@section('title', 'Weekly Blog')
@section('content')
@forelse($posts as $key=>$post)
    <h1>{{ $key . '. ' . $post['BlogTitle'] }}</h1>
    <sub>{{ $post['Subtitle'] }}</sub><br>
    <hr />
    <p>Content: {{ $post['Content'] }}</p><br>
    <p>Date: {{ $post['Date'] }}</p><br>
@empty
    <h1>No Blogs Found!</h1>
@endforelse
@endsection