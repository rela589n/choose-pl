@extends('layouts.main')
@php
    /** @var \App\Models\Question $question */
@endphp
@section('content')
    <p>{{ $question->text }}</p>
    <form action="{{ route('questions.answer', ['question'=> $question->id]) }}"
          method="post">
        @csrf

        @foreach($question->answerOptions as $answerOption)
            <label><input type="radio" name="answer" value="{{ $answerOption->id }}">{{ $answerOption->content }}
            </label><br><br>
        @endforeach
        <input type="hidden" name="sid" value="{{ $testSessionId }}">
        <button type="submit" class="btn btn-primary">Далі</button>
    </form>
@endsection
