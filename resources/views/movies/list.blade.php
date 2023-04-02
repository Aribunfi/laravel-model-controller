



<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{env('APP_NAME')}} - Lista film</title>
@vite('resources/js/app.js')
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">{{env('APP_NAME')}}</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Movie List</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <main>
        <section class="container">
          <h1>I migliori film</h1>
          <div class="row">
            @forelse ($movies as $movie)
                <div class="col-3">
                  <h5>{{$movies.title}}</h5>
                </div>
            @empty
            <div class="col-12">
              <h5>Nessun film trovato, sorry!</h5>
            </div>
                
            @endforelse
          </div>
        </section>
      </main>
    
</body>
</html>