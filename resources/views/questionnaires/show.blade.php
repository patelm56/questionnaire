@extends('shared.master')
@section('content')

<head> 
<h1> {{$questionnaire->title}}</h1>  
</head>



<body background="{{ asset('photos/bg4.png') }}" >
<p> {{$questionnaire->description}} </p>

<a href="{{ route('questions.show', $questionnaire->questions[0]) }}" class="btn btn-outline-primary">Start the questionnaire</a>

@endsection
