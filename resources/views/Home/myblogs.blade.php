@extends('layouts.mainlayout')
@section('title', 'Weekly Blog')
@section('content')
@forelse($posts as $key=>$post)
    @include('partials.partial')
@empty
    <h1>No Blogs Found!</h1>
@endforelse
@endsection