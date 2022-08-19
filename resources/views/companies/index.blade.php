<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 <h1>Companies</h1>
 <br>
    <table border="1">
        <thead>
        <tr>
            <td>T/R</td>
            <td>Name</td>
            <td>title</td>
            <td>text</td>
        </tr>
        </thead>
        <tbody>
        @foreach($companies as $company)
            <tr>
                <td>{{$company->id}}</td>
                <td>{{$company->name}}</td>
                <td>{{$company->title}}</td>
                <td>{{$company->text}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
