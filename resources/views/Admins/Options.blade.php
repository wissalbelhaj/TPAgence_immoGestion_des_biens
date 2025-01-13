
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
    background-color: #f4f4f4;
}

.container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
}

h1 {
    color: #333;
}

.navbar {
    background-color: #007bff;
}

.navbar-brand {
    color: #fff;
}

.navbar-nav .nav-link {
    color: #fff;
}

.stylish-button {
    background-color: #007bff;
    color: #fff;
    padding: 8px 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-right: 8px;
}

.stylish-button:hover {
    background-color: #0056b3;
}

.table th, .table td {
    text-align: center;
}

.action-buttons {
    text-align: end;
}

.btn-danger {
    background-color: #dc3545;
}

.btn-danger:hover {
    background-color: #c82333;
}

    </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg" style="padding-left: 20px;background-color: rgb(8, 110, 150);">
    <a class="nav-link navbar-brand" href="{{ route('Interface') }}" style="color: white">Agence</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('Admin.Biens') }}">Gerer Les biens</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Gerer Les options</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div style="text-align: end;">
            <a href="/AjouterOption"><button type="button" class="stylish-button">Ajouter Un Option</button></a>
        </div>
        <div>
            <h1 class="mb-2">Les biens</h1>
            <table class="table table-striped">
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col" class="action-buttons">Actions</th>
                </tr>
                @foreach ($options as $option)
                    <tr>
                        <td>{{ $option->nom }}</td>
                        <td class="action-buttons">
                            <a href="{{ route('Admin.PModifierO', $option->id) }}"><button type="button" class="stylish-button">Editer</button></a>
                            <a href="{{ route('Admin.SupprimerOption', $option->id) }}"><button type="button" class="stylish-button btn btn-danger">Supprimer</button></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>
