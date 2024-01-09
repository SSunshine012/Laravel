<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication</title>
</head>
<body>
    <div class="bg"></div>
    <form action="/multiplication" method="POST">
        @csrf
        <input type="number" name = "number" required>
        <button type="submit" name = "submit" >ค้นหา</button>
    </form>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 14vh;
            background: pink;
            position: relative;
        }
        input{
            width: 220px;
        }
    </style>
</body>
</html>
