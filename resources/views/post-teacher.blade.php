<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">
        <title>Laravel</title>

    </head>
    <body>
    <div id="div-wrapping-form-teacher">
        <form action="{{ url('post-teacher') }}" class="form-for-teacher" method="POST">
            @csrf
            <div class="divs-inside-form-teacher">
                <label for="">Teacher Name</label>
                <input type="text" name="fName">
            </div>
            <div class="divs-inside-form-teacher">
                <label for="">Teacher Last Name</label>
                <input type="text" name="lName">
            </div> 
            <div class="divs-inside-form-teacher">
                <label for="gender">Gender</label>
                <select name="gender">
                <option value="F">Female</option>
                <option value="M">Male</option>
                </select>
            </div>
            <div class="divs-inside-form-teacher">
                <label for="">Surname</label>
                <input type="text" name="sName">            
            </div>
            <div class="divs-inside-form-teacher">
                <p>Origin of surname?</p>
                <label for=""></label>
                <textarea name="txtbxOrigin" type="text" rows="5" cols="40"></textarea>
            </div>
            <div class="divs-inside-form-teacher">
            <label for="section">Section</label>
                <select name="section">
                @foreach($arrSections as $section)
                <option value={{ $section['idSection'] }} > {{ $section['secName']}} </option>
                @endforeach
                </select>
            </div>
            <div class="divs-inside-form-teacher">
                <button type="submit">Submit</button>
            </div>
    </div>

    </body>
</html>
