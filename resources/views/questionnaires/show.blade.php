@extends('shared.master')
@section('content')
<h1> {{$questionnaire->title}}</h1>

<p> {{$questionnaire->description }} </p>

<button class="btn btn-outline-primary">Start the questionnaire</button>

@endsection
