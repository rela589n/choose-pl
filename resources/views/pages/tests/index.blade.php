@extends('layouts.main')
@php
    /** @var \App\Models\Test[] $tests */
@endphp
@section('content')
    <ul>
        @foreach($tests as $test)
            <li><a href="{{ route('tests.show', $test->id) }}">{{ $test->name }}</a>
                (<a href="{{ route('tests.edit', $test) }}"><small>Редагувати</small></a>)
            </li>
        @endforeach
    </ul>
@endsection
