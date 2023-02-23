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
<footer class="footer-background">
    <div class="container " >
      <div class="d-flex">
        <div class="col-50" >
          <ul class="list p-0 fw-semibold">
            <li>
              <h2>DC COMICS</h2>
            </li>
            <li>
              Characters
            </li>
            <li>
              Comics
            </li>
            <li>
              Movies
            </li>
            <li>
              TV
            </li>
            <li>
              Games
            </li>
            <li>
              Videos
            </li>
            <li>
              News
            </li>
            <li>
              <h2>SHOP</h2>
            </li>
            <li>
              Shop DC
            </li>
            <li>
              Shop DC Collectibles
            </li>
          </ul>
          <ul class="list fw-semibold">
            <li>
              <h2>DC</h2>
            </li>
            <li>
              Terms Of Use
            </li>
            <li>
              Privacy policy (New)
            </li>
            <li>
              Ad Choices
            </li>
            <li>
              Advertising
            </li>
            <li>
              Jobs
            </li>
            <li>
              Subscriptions
            </li>
            <li>
              Talent Workshops
            </li>
            <li>
              CPSC Certificates
            </li>
            <li>
              Ratings
            </li>
            <li>
              Shop Help
            </li>
            <li>
              Contact Us
            </li>
          </ul>
          <ul class="list p-0">
            <li>
              <h2>SITES</h2>
            </li>
            <li>
              DC
            </li>
            <li>
              MAD Magazine
            </li>
            <li>
              DC Kids
            </li>
            <li>
              DC Universe
            </li>
            <li>
              DC Power Visa
            </li>
          </ul>
        </div>
        <div class="col-50-dx">
          <div class="" >
            <img class="img-fluid" src="{{Vite::asset('../../resources/img/dc-logo-bg.png')}}" alt="">
          </div>
        </div>
      </div>
    </div>
</div>
</footer>
<div class="sing-up-footer">
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-between align-items-center py-3">
                <div>
                    <button class="footer-button text-white" >SING-UP NOW!</button>
                </div>
                <div>
                    <ul class="footer-list text-white d-flex align-items-center m-0">
                        <h4 class="text-uppercase m-0 mx-2">follow us</h4>
                        @foreach ($socials as $social)
                        <li class="mx-1">
                            <img src="{{asset(Vite::asset($social))}}" alt="">
                        </li>  
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
 
</body>
</html>