<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- My Css -->
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contatti">Contatti</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/chi-siamo">Chi Siamo</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <h1 class="wraptitle text-center">I CONTATTI A CUI PUOI FARE AFFIDAMENTO:</h1>
    <div class="container">
        <div class="row justify-content-evenly">
            <div class="col-3 ">
                <h2 class="text-center">Nuovi Admin</h2>
                @foreach($contatti as $contatto)
                <div class="card my-4  " style="width: 18rem;">
                <img src="{{ $contatto['img'] }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$contatto['name']}} {{$contatto['surname']}} </h5>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">NEW</span>
                    <p class="card-text">Età {{$contatto['age']}}</p>
                    <div class="card-footer">
                        <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div>
                    
                </div>
                </div>
                @endforeach
            </div>
            <div class="col-3">
                <h2 class="text-center">Admin di Default</h2>
                @foreach($contatti2 as $contatto2)
                <div class="card my-4" style="width: 18rem;">
                <img src="{{ $contatto2['img'] }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$contatto2['name']}} {{$contatto2['surname']}} </h5>
                    <p class="card-text"> Età {{$contatto['age']}}</p>
                    
                </div>
                </div>
                @endforeach
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>