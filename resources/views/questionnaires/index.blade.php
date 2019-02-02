@extends('shared.master')
@section('content')

<h1>Questionnaires</h1>
<hr />

@foreach($questionnaires as $questionnaire)

<span>
    <a href="{{route('questionnaires.show', $questionnaire)}}">{{$questionnaire->title}}</a>
</span>
<hr />

<p>{{$questionnaire->description}}</p>

@endforeach

@endsection
