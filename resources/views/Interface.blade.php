<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f7f7f7;
        margin: 0;
        padding: 0;
    }

    h1 {
        color: #333;
    }

    .button-container {
        text-align: center;
        margin-top: 30px;
    }

    .stylish-button,
    .btn2 {
        display: inline-block;
        padding: 10px 20px;
        margin: 10px;
        text-decoration: none;
        color: #fff;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .stylish-button {
        background-color: #3498db;
        border: 1px solid #3498db;
    }

    .stylish-button:hover {
        background-color: #217dbb;
    }

    .btn2 {
        background-color: #e74c3c;
        border: 1px solid #e74c3c;
    }

    .btn2:hover {
        background-color: #c0392b;
    }

    </style>
</head>
<body>
    <div style="text-align: center;margin-top: 30px">
        <h1>Bienvenue </h1>
        <div style="margin-top: 30px">
            <a href="/User" class="stylish-button" >User</a>
            <a href="/GestionBiens" class="btn2">Admin</a>
        </div>
    </div>
</body>
</html>
