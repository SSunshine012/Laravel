<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Multiplication</title>
</head>

<body>
    <div class="container-fluid d-flex flex-column justify-content-center align-items-center vh-100">
        <div class="input-group mb-3 w-25 p-3 d-flex gap-1">
            <input type="text" id="value" class="form-control rounded mt-n1" placeholder="ใส่ตัวเลข"
                aria-label="" aria-describedby="basic-addon1">
            <button class="btn btn-primary" id="button">คำนวน</button>
        </div>
        <div>
            <p id="text"></p>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#button").click(function() {
                const p = $("#text");
                const value = parseInt($("#value").val());
                let result = "";
                for (let i = 1; i <= 12; i++) {
                    result += `${value} x ${i} = ${value * i}<br>`;
                }
                p.html(result);
            });
        });
    </script>
    <style>
        body{
            background-color: pink;
        }
    </style>
</body>
</html>