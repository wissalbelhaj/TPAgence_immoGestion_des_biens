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
    }
    
    h1 {
        color: #333;
    }
    
    label {
        font-weight: bold;
        margin-bottom: 5px;
    }
    
    input[type="text"],
    textarea,
    select {
        width: 100%;
        padding: 8px;
        margin: 5px 0 15px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    
    input[type="file"] {
        margin-top: 5px;
    }
    
    .stylish-button {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    
    .stylish-button:hover {
        background-color: #0056b3;
    }
    
    
</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="padding-left: 20px;background-color: rgb(8, 110, 150);">
        <a class="navbar-brand" href="" style="color: white">Agence</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('Admin.Biens') }}" style="color: white">Gerer Les biens</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('Admin.SelectOption') }}" style="color: white">Gerer Les options</a>
              </li>
          </ul>
        </div>
      </nav>
      <div class="container mt-5">
            <div class="d-flex justify-content-center">
                <div>
                    <h1>Ajouter Un Bien </h1>
                    <form action="{{ route('Ajouter') }}" method="post" enctype="multipart/form-data">
                        @csrf
                    <table>
                        <tr>
                            <td>
                                <label for="titre">Titre</label><br>
                                <input type="text" name="titre" id="titre" style="width: 400px">
                            </td>
                            <td >
                                <div style="margin-left: 20px">
                                    <label for="surface" >Surface</label><br>
                                    <input type="text" name="surface" id="surface" style="width: 200px;">
                                </div>
                            </td>
                            <td>
                                <div style="margin-left: -145px">
                                    <label for="prix">Prix</label><br>
                                    <input type="text" name="prix" id="prix" style="width: 200px">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <label for="description">Description</label><br>
                                <textarea name="description" id="description" cols="112" rows="3"  ></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                    <label for="piece">Piece</label><br>
                                    <input type="text" name="piece" id="piece" style="width: 267px">
                            </td>
                            <td>
                                <div style="margin-left: -110px">
                                    <label for="chambre">Chambres</label><br>
                                    <input type="text" name="chambre" id="chambre" style="width: 267px">
                                </div>
                            </td>
                            <td>
                                <div style="margin-left: -205px">
                                    <label for="etage">Etage</label><br>
                                    <input type="text" name="etage" id="etage" style="width: 264px">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="adresse">Adresse</label><br>
                                <input type="text" name="adresse" id="adresse" style="width: 267px">
                            </td>
                            <td>
                                <div style="margin-left: -110px">
                                    <label for="ville">Ville</label><br>
                                    <input type="text" name="ville" id="ville" style="width: 267px">
                                </div>
                            </td>
                            <td>
                                <div style="margin-left: -205px">
                                    <label for="code_postal">Code Postal</label><br>
                                    <input type="text" name="code_postal" id="code_postal"style="width: 264px">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="options">Options</label><br>
                                <select name="options" id="options" style="width: 400px;height: 35px">
                                    @foreach ($options as $option)
                                        <option value="{{ $option->nom }}">{{ $option->nom }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <div style="margin-left: 20px">
                                    <label for="image">Image</label><br>
                                    <input type="file" name="image" id="image"  >
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3"><input type="submit" value="Ajouter" class="stylish-button" class="mt-3"></td>
                        </tr>

                    </table>
                </form>
                </div>
            </div>
      </div>
</body>
</html>
