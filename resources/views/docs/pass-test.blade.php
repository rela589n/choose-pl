@extends('layouts.main')

@section('content')
    <h4>
        Щоб пройти тест, потрібно перейти на <a href="{{route('tests.index')}}">/tests</a>
    </h4>

    <img class="border border-primary" width="400" src="{{ asset('storage/docs/tests.index.png') }}" alt="">

    <h4>
        Та обираєте тест зі списку для проходження.
    </h4>

    <h4>
        Буде створено нову сесію, в якій зберігаються питання, та розпочато опитування:
    </h4>

    <img class="border border-primary" width="400" src="{{ asset('storage/docs/test-start-question.png') }}" alt="">

    <h4>
        Буде задано ряд запитань, після чого виведено результат:
    </h4>

    <img class="border border-primary" width="400" src="{{ asset('storage/docs/test-result.png') }}" alt="">

@endsection
