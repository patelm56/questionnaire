@extends('shared.master')
@section('content')

    <h1>Question  {{ $question->id }} </h1>
    <hr />

    <img src="{{ asset("photos/{$question->photo}") }}" />

    <form class="form-group" action="{{ route('questions.store')}}" method="POST">
        @csrf

       <b> <div class="mb-2"> {{$question->description}} </div>

        <textarea class="form-control" type="text" name="answer"> {{  $question->answer }} </textarea>
        <input type="hidden" name="question_id" value="{{ $question->id }}" />
        <input type="hidden" name="questionnaire_id" value="{{ $question->questionnaire->id }}" />
        <button type="submit" class=" form-control btn btn-primary mt-2">save</button>
    </form>
   
@endsection