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

        .navbar {
            background-color: #3498db;
            color: white;
        }

        .navbar-brand {
            color: white;
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            color: white;
        }

        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        h1 {
            color: #333;
        }

        form table {
            width: 100%;
            margin-top: 20px;
        }

        table tr td {
            padding: 10px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        select,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .stylish-button {
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .stylish-button:hover {
            background-color: #217dbb;
        }

        img {
            height: 350px;
            width: 300px;
            margin-top: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
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
                    <h1>Editer {{ $bien->titre }}</h1>
                    <form action="{{ route('Admin.Modifier',$bien->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                    <table>

                        <tr>
                            <td>
                                <label for="titre">Titre</label><br>
                                <input type="text" name="titre" id="titre" style="width: 400px" value="{{ $bien->titre }}">
                            </td>
                            <td >
                                <div style="margin-left: 20px">
                                    <label for="surface" >Surface</label><br>
                                    <input type="text" name="surface" id="surface" style="width: 200px;" value="{{ $bien->surface }}" >
                                </div>
                            </td>
                            <td>
                                <div style="margin-left: -145px">
                                    <label for="prix">Prix</label><br>
                                    <input type="text" name="prix" id="prix" style="width: 200px"  value="{{ $bien->prix }}">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <label for="description">Description</label><br>
                                <textarea name="description" id="description" cols="112" rows="3"  > {{ $bien->description }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                    <label for="piece">Piece</label><br>
                                    <input type="text" name="piece" id="piece" style="width: 267px"  value="{{ $bien->piece }}">
                            </td>
                            <td>
                                <div style="margin-left: -110px">
                                    <label for="chambre">Chambres</label><br>
                                    <input type="text" name="chambre" id="chambre" style="width: 267px"  value="{{ $bien->chambre }}">
                                </div>
                            </td>
                            <td>
                                <div style="margin-left: -205px">
                                    <label for="etage">Etage</label><br>
                                    <input type="text" name="etage" id="etage" style="width: 264px"  value="{{ $bien->etage }}">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="adresse">Adresse</label><br>
                                <input type="text" name="adresse" id="adresse" style="width: 267px"  value="{{ $bien->adresse }}">
                            </td>
                            <td>
                                <div style="margin-left: -110px">
                                    <label for="ville">Ville</label><br>
                                    <input type="text" name="ville" id="ville" style="width: 267px"  value="{{ $bien->ville }}">
                                </div>
                            </td>
                            <td>
                                <div style="margin-left: -205px">
                                    <label for="code_postal">Code Postal</label><br>
                                    <input type="text" name="code_postal" id="code_postal"style="width: 264px"  value="{{ $bien->code_postal }}">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="options">Options</label><br>
                                <select name="options" id="options" style="width: 400px;height: 35px"  value="{{ $bien->options }}">
                                        @foreach ($option as $o)
                                             <option value="{{ $o->nom }}">{{ $o->nom }}</option>
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
                            <td colspan="3"><input type="submit" value="Modifier" class="stylish-button" class="mt-3"></td>
                        </tr>
                    </table>
                </form>
                </div>
                <div style="margin-top: 90px;margin-left: 20px"><img src="{{ asset('storage/images/'.$bien->image) }}" alt="" style="height: 350px;width: 300px"></div>
            </div>
      </div>
</body>
</html>
