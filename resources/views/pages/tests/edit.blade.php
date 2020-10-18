@extends('layouts.main')

@section('content')
    <ul>
        @foreach($test->questions as $question)
            <li>{{ $question->text }} <a href="{{ route('questions.edit', $question) }}">редаг</a></li>
        @endforeach
    </ul>
@endsection
