<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
        <div>
            <div>
                <p>Tengo una nota no la toca ni beethoven<p>
            </div>

            @foreach($arrteachers as $teacher)
                <div>
                    {{ $loop->index }} - {{$teacher['teaFirstName']}} - {{$teacher['teaLastName']}}                 
                </div>
            @endforeach
            @foreach($arrteachers as $teacher)
                <div>
                    {{ $teacher['teaOrigin'] }}
                </div>
            @endforeach
        </div>
    </body>
</html>
