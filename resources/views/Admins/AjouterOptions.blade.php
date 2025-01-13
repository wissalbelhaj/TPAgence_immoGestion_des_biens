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
  
  input[type="text"] {
      width: 100%;
      padding: 8px;
      margin-bottom: 15px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
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
                    <h1>Ajouter Option </h1>
                    <form action="{{ route('AjouterOption') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <table class="mt-3">
                        <tr>
                            <td>
                                <label for="nom">Le Nom De option</label><br>
                                <input type="text" name="nom" id="nom" style="width: 400px">
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
