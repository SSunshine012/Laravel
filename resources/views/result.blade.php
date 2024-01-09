<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multiplication Result</title>
</head>

<body>
    <div class="box">
        @if (!empty($number))
            @for ($i = 1; $i <= 24; $i++)
                 {{$number}} x {{$i}} = {{$number*$i}} </br>
            @endfor
        @endif    
    </div>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            width: 100%;
            height: 90vh;
            display: flex;
            align-items: center;
            flex-direction: column;
            background-color: pink;
        }

        .box {
            width: 300px;
            height: 400px;
            overflow-y: scroll;
            font-size: 25px;
            background-color: whitesmoke;
            margin-top: 13vh;
            border-radius: 25px;
            padding: 20px;
        }

        .box:hover {
            background-color: white;
        }

        </body></html>
