@extends('layouts.master')

@section('title', 'Test Page')

@section('css')
    @include('layouts.css')
@endsection

@section('content')
    <h1>This is My Test Page</h1>
    @if(session()->has('status'))
        {{ session('status') }}
    @endif

    @if(count($Beatles) > 0)
        @foreach($Beatles as $Beatle)
            {{ $Beatle }} <br>
        @endforeach
    @else
        <h1> Sorry, nothing to show… </h1>
    @endif

    @section('scripts')
        @include('layouts.scripts')
    @endsection
@endsection