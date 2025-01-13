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
        }
    
        nav {
            padding-left: 20px;
            background-color: rgb(8, 110, 150);
        }
    
        nav a {
            color: white;
            text-decoration: none;
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
            margin-left: 18px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    
        .card-img-top {
            object-fit: cover;
            height: 220px;
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
    <nav class="navbar navbar-expand-lg  " style="padding-left: 20px;background-color: rgb(8, 110, 150);">
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

    <div class="container mt-3">
            <div class="d-flex justify-content-center ">
                <img src="{{ asset('/storage/images/'.$bien->image) }}" alt="photo" style="width: 500px;height: 450px;">
                <div style="margin-left: 80px">
                    <h1>{{ $bien->titre }}</h1>
                    <h3> {{ $bien->piece }} piece - {{ $bien->surface }} m </h3>
                    <h1>{{ $bien->prix }} $</h1>
                    <hr>
                    <h4>Intercer par ce Bien ?</h4>
                    <form action="" >
                        <div class="d-flex">
                            <div>
                                <label for="prenom">Prenom</label><br>
                                <input type="text" name="prenom" id="prenom">
                            </div>
                            <div style="margin-left: 10px">
                                <label for="nom">Nom</label><br>
                                <input type="text" name="nom" id="nom">
                            </div>
                        </div>

                        <div class="d-flex">
                            <div>
                                <label for="tele">Telephone</label><br>
                                <input type="text" name="tele" id="tele">
                            </div>
                            <div style="margin-left: 10px">
                                <label for="email">Email</label><br>
                                <input type="email" name="email" id="email">
                            </div>
                        </div>
                        <div>
                            <label for="message">Message</label>
                            <br>
                            <textarea name="message" id="message" cols="50" rows="3"></textarea>
                        </div>
                        <div>
                            <input type="submit" value="Nous Contacter"  style="background-color:  rgb(0, 162, 255);color: white;border: 1px solid transparent">
                        </div>
                    </form>

                </div>
        </div>
        <div class="d-flex justify-content-and">
            <div style="margin-left: 60px;margin-top: 20px">
                <p >{{ $bien->description }}</p>
            </div>

        </div>
        <div class="d-flex justify-content-center " >
            <div class="mt-2">
                <h3 >Caracteristique</h3>
                <table class="table table-striped" style="width: 570px;">
                    <tr>
                        <td>Surface Abbitable</td>
                        <td>{{ $bien->surface }}</td>
                    </tr>
                    <tr>
                        <td>Piece</td>
                        <td>{{ $bien->piece }}</td>
                    </tr>
                    <tr>
                        <td>Chambre</td>
                        <td>{{ $bien->chambre }}</td>
                    </tr>
                    <tr>
                        <td>Etage</td>
                        <td>{{ $bien->etage }}</td>
                    </tr>
                </table>
            </div>

            <div  class="mt-2" style="margin-left: 40px">
                <h3>Specifique</h3>
                    @php
                        $optionsS = $bien->options;
                        $optionsArray = explode(',', $optionsS);
                    @endphp
                <table class="table" style="width: 400px">
                        @foreach($optionsArray as $option)
                            <tr>
                                <td>{{ trim($option) }}</td>
                            </tr>
                        @endforeach
                  </table>
            </div>
        </div>
    </div>

</body>
</html>
