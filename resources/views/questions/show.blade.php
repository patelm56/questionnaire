@extends('shared.master')
@section('content')

    <form class="form-group" action="{{ route('questions.store')}}" method="POST">
        @csrf

        <label>question</label>
        <input class="form-control" type="text" name="description" value="{{$question->description}}" readonly/>

        <label>answer</label>
        <textarea class="form-control" type="text" name="answer"> {{  $question->answer }} </textarea>

        <button type="submit" class=" form-control btn btn-primary">save</button>
    </form>
@endsection