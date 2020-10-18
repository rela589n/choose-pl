@extends('layouts.main')

@php
    /** @var \App\Models\Question $question */
@endphp

@section('content')
    <form action="{{ route('questions.update', $question) }}" method="post">
        @csrf
        @method('put')
        <label class="d-block">
            <h3>Питання:</h3>
            <textarea name="q[text]" class="d-block">{{ $question->text }}</textarea>
        </label>
        <br>
        <label>
            Значимість на загальному фоні питань:
            <input type="text" name="q[significance]" value="{{ $question->significance }}">
            (Average: {{ $averageSignificance }})
        </label>

        <br>
        <br>
        <div>
            <h5>Варіанти відповідей:</h5>
            <ul class="answerOptions">
                @foreach($question->answerOptions as $option)
                    <li>
                        <input name="ans_opt[{{$option->id}}][content]" type="text" value="{{ $option->content }}">
                        <h5>Обраний варіант відповіді призводить до питань:</h5>
                        <select name="ans_opt[{{$option->id}}][leads_to][]" multiple>
                            @foreach($questionsToFollow as $question)
                                <option
                                    value="{{ $question->id }}"
                                @if($option->leadsToQuestion->contains('id', $question->id)) selected @endif
                                >
                                    {{ $question->text }}
                                </option>
                            @endforeach
                        </select>

                        <p>На скільки сильно поточного варіанта відповіді впливає на відповідний результат:</p>
                        <ul>
                            @foreach($option->results  as $result)
                                <li>
                                    <label>
                                        <input type="number"
                                               name="ans_opt[{{$option->id}}][res][{{$result->id}}]"
                                               min="0"
                                               value="{{ $result->pivot->significance }}">

                                        {{ $result->lang_name }}
                                    </label>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ul>
        </div>

        <button class="btn btn-secondary mb-4">Зберегти</button>
    </form>
@endsection
