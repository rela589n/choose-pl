@extends('layouts.main')
@php
    /** @var \App\Models\TestSessionResult[] $topScores */
@endphp
@section('content')
    <h1>Ваш ідеальний вибір це - {{ \Arr::first($topScores)->result->lang_name }}</h1>

    <h2>Також, інші можливі варіанти:</h2>
    <ul>
        @foreach($topScores as $score)
            <li>{{ $score->result->lang_name }}</li>
        @endforeach
    </ul>
@endsection
