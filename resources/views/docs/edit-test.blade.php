@extends('layouts.main')

@section('content')
    <h4>
        Щоб перейти на редактор, на <a href="{{route('tests.index')}}">головній</a> навпроти теста натискаємо відповідну кнопку "Редагувати":
    </h4>

    <img class="border border-primary" width="400" src="{{ asset('storage/docs/tests.index.png') }}" alt="">
    <br>
    <h4>
        На наступній сторінці бачимо список запитань
    </h4>

    <img class="border border-primary" width="400" src="{{ asset('storage/docs/test-edit.png') }}" alt="">

    <h4>Натиснувши на кнопку "Create new", буде створено нове:</h4>

    <img class="border border-primary" width="400" src="{{ asset('storage/docs/create-new-question.png') }}" alt="">


    <h4>Перейшовши в нього, можемо відредагувати інформацію:</h4>

    <img class="border border-primary" width="400" src="{{ asset('storage/docs/question-go-to.png') }}" alt="">

    <br>
    <br>
    <img class="border border-primary" width="400" src="{{ asset('storage/docs/question-edit-text.png') }}" alt="">

    <h4>Заповнюємо коефіцієнти для кожного варіанта:</h4>

    <img class="border border-primary" width="400" src="{{ asset('storage/docs/coefs.png') }}" alt="">

    <h4>При потребі, заповнюємо блок залежностей:</h4>

    <img class="border border-primary" width="400" src="{{ asset('storage/docs/dependencies.png') }}" alt="">

    <h4>Після всіх виконаних дій, не забуваємо зберегтись</h4>

    <img class="border border-primary" height="200" src="{{ asset('storage/docs/save-quest.png') }}" alt="">
@endsection
