@extends('shared.master')
@section('content')

<head> 
<h1> {{$questionnaire->title}}</h1> 

<p> Dear Respondent,</p> 

<p> My name is Mital Patel and I am a Computing for Business student at Aston University. I am 
        conducting a study related to how e-commerce affects a user's buying behaviour and what impact is has on their online shopping experience. It would be highly appreciated if you could take a few minutes of your time to complete the following questionnaire. </p>
        
        <p>  Please note that the information collected will be used for academic research only and would be kept anonymous and confidential. Thank you in advance. </p> 
</head>



<body background="{{ asset('photos/bg4.png') }}" >
<p> {{$questionnaire->description}} </p>

<a href="{{ route('questions.show', $questionnaire->questions[0]) }}" class="btn btn-outline-primary">Start the questionnaire</a>

@endsection
