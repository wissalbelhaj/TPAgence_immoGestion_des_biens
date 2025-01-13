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
          background-color: #f8f9fa;
          margin: 0;
          padding: 0;
      }
  
      nav {
          border-bottom: 2px solid #007bff;
      }
  
      .navbar-brand {
          font-size: 1.5rem;
          font-weight: bold;
          text-decoration: none;
      }
  
      .navbar-toggler-icon {
          background-color: white;
      }
  
      .navbar-nav .nav-item {
          margin-right: 10px;
      }
  
      form {
          display: flex;
          align-items: center;
      }
  
      input[type="text"] {
          padding: 8px;
          border: 1px solid #007bff;
          border-radius: 5px;
          margin-right: 10px;
      }
  
      #button {
          padding: 8px 15px;
          background-color: #007bff;
          color: white;
          border: 1px solid transparent;
          border-radius: 5px;
          cursor: pointer;
      }
  
      .container {
          max-width: 960px;
          margin: 0 auto;
      }
  
      .card {
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
          transition: transform 0.3s ease-in-out;
      }
  
      .card:hover {
          transform: scale(1.05);
      }
  
      .card-img-top {
          object-fit: cover;
          height: 220px;
      }
  
      .card-body {
          padding: 15px;
      }
  
      .card-title {
          font-size: 1.2rem;
          margin-bottom: 10px;
      }
  
      h4 {
          color: #007bff;
          margin-top: 10px;
      }
  
      .mt-5 {
          margin-top: 5rem;
      }
  
      .flex-wrap {
          display: flex;
          flex-wrap: wrap;
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
              <a class="nav-link" href="/Biens" style="color: white">Nos biens</a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="container mt-5">
        <form action="{{ route('Recherche') }}" method="post">
            @csrf
            <input type="text" name="surface_mi" id="surface" placeholder=" Surface Minumum" >
            <input type="text" name="piece_mi" id="piece_m" placeholder=" Nombre du piece min" style="margin-left: 10px">
            <input type="text" name="budget_ma" id="budget_m" placeholder=" Badget Max" style="margin-left: 10px">
            <input type="text" name="clef_m" id="" placeholder=" Mot Clef" style="margin-left: 10px">
            <input type="submit"   value="Recherche" id="button" style="margin-left: 10px;background-color:  rgb(0, 162, 255); color: white;border: 1px solid transparent">
          </form>

      <div class="d-flex mt-5 flex-wrap ">


        @foreach ($biens as $bien)
        <div class="card mt-2" style="width: 15rem;margin-left: 18px">
            <img class="card-img-top" src="{{ asset('/storage/images/'.$bien->image) }}" alt="Card image cap" style="height: 220px">
            <div class="card-body">
              <a href="{{ route('Details',$bien->id) }}"><h5 class="card-title">{{ $bien->titre }}</h5></a>
              <p class="card-text">{{ $bien->surface }} m -{{ $bien->ville }} ({{ $bien->code_postal }}) </p>
              <h4 >{{ $bien->prix }} $ </h4>
            </div>
          </div>
        @endforeach
      </div>

</body>
</html>
