<!DOCTYPE html>
<html lang="en">
<head>
    @vite('resources/js/app.js')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
      <div class="container-fluid bg-primary">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="d-flex justify-content-end ">
                <p class="text-white mx-2 text-uppercase">dc power visa</p>
                <p class="text-white text-uppercase">additional dc sites</p>
              </div>
            </div>
          </div>

        </div>
      </div>
        <nav class="navbar bg-body-tertiary">
            <div class="container">
              <a class="navbar-brand" href="#">
                <img src="{{Vite::asset('resources/img/dc-logo.png')}}" >
              </a>
              <ul class="list-unstyled d-flex flex-wrap">
                <li class="mx-2 text-uppercase fw-semibold">
                  <a href="">Characters</a>
                </li>
                <li class="mx-2 text-uppercase fw-semibold">
                  <a href="">Comics</a>
                </li>
                <li class="mx-2 text-uppercase fw-semibold">
                  <a href="">Movies</a>
                </li>
                <li class="mx-2 text-uppercase fw-semibold">
                  <a href="">TV</a>
                </li>
                <li class="mx-2 text-uppercase fw-semibold">
                  <a href="">Games</a>
                </li>
                <li class="mx-2 text-uppercase fw-semibold">
                  <a href="">Collectibles</a>
                </li>
                <li class="mx-2 text-uppercase fw-semibold">
                  <a href="">Videos</a>
                </li>
                <li class="mx-2 text-uppercase fw-semibold">
                  <a href="">Fans</a>
                </li>
                <li class="mx-2 text-uppercase fw-semibold">
                  <a href="">News</a>
                </li>
                <li class="mx-2 text-uppercase fw-semibold">
                  <a href="">Shop</a>
                </li>
              </ul>
              <div class="search-box">
                <input type="text" class="input-search" placeholder="Search...">
              </div>
            </div>
          </nav>
    </header>
</body>
</html>