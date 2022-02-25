@extends('layouts.mainlayout')
@section(title, 'Weekly Blog')
@section('content')
@if(count($posts))
    @foreach($posts as $key=>$post)

        <h1>{{ $key . '. ' . $post['BlogTitle'] }}</h1>
        <hr />
        <sub>{{ $post['Subtitle'] }}</sub><br>
        <p>{{ $post['Date'] }}</p><br>
        <p>{{ $post['Content'] }}</p><br>
        
    @endforeach
@else
    <h1>No Blogs Found!</h1>
@endsection