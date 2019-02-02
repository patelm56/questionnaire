<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Questionnaires</title>
</head>
<body>
    <div class="container">
        <div class="row">

            @foreach($questionnaires as $questionnaire)
                <div class="col-md-12">

                    <span>
                        <a href="{{route('questionnaires.show', $questionnaire)}}">{{$questionnaire->title}}</a>
                    </span>
                    <p>{{$questionnaire->description}}</p>
                <div>
            @endforeach

        </div>
    </div>
</body>
</html>