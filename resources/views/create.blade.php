<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/create" method="POST">
        <input type="text" name="title">
        <input type="text" name="barcode">
        <input type="submit" value="Submit">
        @csrf
    </form>
</body>
</html>