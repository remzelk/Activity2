@extends('layouts.mainlayout')
@section(title, 'Weekly Blog')
@section('content')
@if(count($posts))
<?php $i = 0; ?>
    @foreach($posts as $key=>$post)

        <h1>{{ $key . '. ' . $post['BlogTitle'] }}</h1>
        <hr />
        <sub>{{ $post['Subtitle'] }}</sub><br>
        <p>Content: {{ $post['Content'] }}</p><br>
        <?php echo 'Date:' . date($day[$i]); ?>
        <?php $i++; ?>
    @endforeach
@else
    <h1>No Blogs Found!</h1>
@endsection