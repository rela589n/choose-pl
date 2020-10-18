@extends('layouts.main')

@section('content')
    <ul>
        @foreach($test->questions as $question)
            <li>{{ $question->text }} <a href="{{ route('questions.edit', $question) }}">редаг</a> | <a href="{{ route('questions.delete', $question) }}">видал</a> </li>
        @endforeach
    </ul>
    <form action="{{ route('questions.create-empty') }}" method="post">
        @csrf
        <input type="hidden" name="test_id" value="{{ $test->id  }}">
        <button class="btn btn-primary">Create new</button>
    </form>
@endsection
