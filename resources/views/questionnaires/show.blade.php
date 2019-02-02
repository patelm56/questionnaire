@extends('shared.master')
@section('content')
<h1> {{$questionnaire->title}}</h1>

<p> {{$questionnaire->description }} </p>

<a href="{{ route('questions.show', $questionnaire->questions[0]) }}" class="btn btn-outline-primary">Start the questionnaire</a>

@endsection
