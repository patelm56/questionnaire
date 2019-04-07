@extends('shared.master')
@section('content')

<head> 
<h1> {{$questionnaire->title}}</h1> 

<p> Dear Sir/Madam,</p> 

<p> My name is Mital Patel and I’m a Computing for Business student in my final year at Aston University, Birmingham. I’m carrying out a research study for my dissertation which is looking at how price and sense of bargain impact consumers’ decisions to trust e-Commerce vendors.  The results from this study will inform better e-Commerce website design.  I would like to invite you to participate in this study by completing this questionnaire which will ask some background information about your online shopping experience, and will seek your opinions on the perceived trustworthiness of a range of e-Commerce websites. </p>
        
        <p>   Be assured that all answers you provide will be kept anonymous and confidential and will only be used for the purpose of my project.  This questionnaire should take you approximately 15-20 minutes to complete.

By clicking on the continue button below, you consent to participate in this study and for the data you provide to be used for the purposes stated above. </p> 
</head>



<body background="{{ asset('photos/bg4.png') }}" >
<p> {{$questionnaire->description}} </p>

<a href="{{ route('questions.show', $questionnaire->questions[0]) }}" class="btn btn-outline-primary">Start the questionnaire</a>

@endsection
