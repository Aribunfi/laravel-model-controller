
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
        <section class="title text-center">
          <h1>I migliori film</h1>
        </section>
        <section class="container d-flex flex-wrap justify-content-center">
          
          @foreach ($movies as $movie)
          <div class="grid column-gap-3">
            <div class="p-2 g-col-6">
                <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{$movie->title}}</h5>
                  <h6 class="card-subtitle mb-2 text-body-secondary">{{$movie->original_title}}</h6>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto illum provident, distinctio sequi ea suscipit itaque animi cumque facilis odit.</p>
                  <span>{{$movie->nationality}}</span>
                  <span>{{$movie->vote}}</span>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        
        </section>
      </main>
    
</body>
</html>