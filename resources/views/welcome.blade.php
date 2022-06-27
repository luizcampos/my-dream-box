@extends('layouts.main')
@section('title', 'myDreamBox')

@section('content')

    <h1>Olá!</h1>

    @if(10 >5)
        <p>A condição é true</p>
    @endif

    @php
        $name = "Luiz";
        echo $name;
    @endphp

@endsection