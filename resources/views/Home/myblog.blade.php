@extends('layouts.mainlayout')
@section('title', $post['BlogTitle'])
@section('content')
    <h1>{{ $post['BlogTitle'] }}</h1>
    <sub>{{ $post['Subtitle'] }}</sub><br>
    <hr />
    <p>Content: {{ $post['Content'] }}</p><br>
    <p>Date: {{ $post['Date'] }}</p><br>
@endsection