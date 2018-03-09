@extends('laravel/app')

@section('content')

    <h1>POSTS PAGE</h1>

    @if(count($people))
        <ul>
            @foreach($people as $person)
                <li>{{$person}}</li>
            @endforeach
        </ul>
    @endif

@stop

@section('footer')

    <script>alert('Hello Jessie')</script>

@stop