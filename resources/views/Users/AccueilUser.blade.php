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
          color: #333;
          margin: 0;
          padding: 0;
      }
  
      nav {
          background-color: rgb(8, 110, 150);
          padding: 20px;
          text-align: center;
      }
  
      nav a {
          color: white;
          text-decoration: none;
          margin-right: 20px;
          font-size: 18px;
      }
  
      .container {
          text-align: center;
          margin-top: 50px;
      }
  
      h1, h2 {
          color: #007bff;
      }
  
      p {
          font-size: 1.1rem;
          line-height: 1.6;
      }
  
      .card {
          display: inline-block;
          margin: 0 10px 20px;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
          width: 18rem;
      }
  
      .card img {
          height: 220px;
          object-fit: cover;
      }
  
      .card-body {
          padding: 20px;
      }
  
      .card-title {
          font-size: 1.5rem;
          margin-top: 10px;
      }
  
      .card-text {
          font-size: 1.2rem;
          color: #6c757d;
      }
  
      h4 {
          color: #28a745;
      }
  </style>
  
  </head>
<body>
    
      <nav class="navbar navbar-expand-lg " style="padding-left: 20px;background-color: rgb(8, 110, 150);">
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
      <div class="container mt-5 ">
            <div style="text-align: center">
                <h1 >Agence Lorem ipsum</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit sint cum, corporis sunt molestias magnam quisquam vitae perspiciatis soluta. Praesentium voluptatem itaque odit sunt non iste cumque. Tempore, possimus! Repudiandae.</p>
            </div>
            <div class="mt-5">
                <h2 style="margin-left: 18px">Les Derniers  biens</h2>
                <div class="d-flex">
                    @foreach ($biens as $bien)
                    <div class="card" style="width: 18rem;margin-left: 18px">
                        <img class="card-img-top" src="{{ asset('storage/images/'.$bien->image) }}" alt="Card image cap" style="height: 220px">
                        <div class="card-body">

                          <a href="{{ route('Details',$bien->id) }}"><h5 class="card-title">{{ $bien->titre }}</h5></a>
                          <p class="card-text">{{ $bien->surface }} m -{{ $bien->ville }} ({{ $bien->code_postal }}) </p>
                          <h4 >{{ $bien->prix }} $ </h4>
                        </div>
                      </div>
                    @endforeach
                </div>
            </div>
      </div>
</body>
</html>
