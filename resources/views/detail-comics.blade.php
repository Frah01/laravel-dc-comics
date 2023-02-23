<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fumetto</title>
</head>
<body>
    @include('partials.header')
    @include('partials.jumbotron')
    <div class="container-fluid blue-bar position-relative">
        <div class="p-2 position-absolute">
            <div>
                <img class="thumbnail" src="{{$comic['thumb']}}" alt="">
            </div>
            <div>
            </div>
        </div>
    </div>
    <div class="container back-grey">
        <div class="row" >
            <div class="col-8">
                <div class="d-flex justify-content-center align-items-center">  
                    <div class="mt-3 mx-2">
                        <h2 class="p-2 text-uppercase title-comic">{{$comic['title']}}</h2>
                        <div class="price-bar d-flex justify-content-between align-items-center p-2 border">
                            <div class="d-flex align-items-center">
                                <h6 class="p-2">U.S PRICE </h6>
                                <span class="fw-bold text-white">{{$comic['price']}}</span>
                            </div>
                            <div>
                                <h6 class="mx-3">Available</h6>
                            </div>
                        </div>
                        <p class="p-2 fw-semibold">{{$comic['description']}}</p>
                    </div>
                </div> 
            </div>
            <div class="col-4">
                <div class="mt-5">
                    <img class="img-adv" src="{{Vite::asset('../resources/img/adv.jpg')}}" alt="">
                </div>
            </div>
        </div>
        <div class="row fw-semibold mt-5">
            <div class="col-6" >
                <div>  
                    <h3>Talent</h3>
                </div>
                <hr>
                <div class="d-flex">
                    <div class="col-2">
                        <p class="fw-bold">Art by:</p>
                    </div>
                    <div class="col-8 d-flex flex-wrap">
                        <p>{{$comic['artists']}}</a>    
                    </div>
                </div>
                <hr>
                <div class="d-flex">
                    <div class="col-2">
                        <p class="fw-bold">Written by:</p>
                    </div>
                    <div class="col-8 d-flex flex-wrap">
                        <p>{{$comic['writers']}}</p>   
                    </div>
                </div>
               
                <hr>
            </div>
            <div class="col-6" >
                <div>
                    <h3>Specs</h3>
                </div>
                <hr>
                <div class="d-flex">
                    <div class="col-2">
                        <p >Series:</p>
                    </div>
                    <div class="col-8">
                        <a class="thumb-color"  href="">{{$comic['series']}}</a>
                    </div>
                </div>
                <hr>
                <div class="d-flex">
                    <div class="col-2">
                        <p >U.S Price:</p>
                    </div>
                    <div class="col-8">
                        <p>{{$comic['price']}}</a>
                    </div>
                </div>
                <hr>
                <div class="d-flex">
                    <div class="col-2">
                        <p >On Sale Date:</p>
                    </div>
                    <div class="col-8">
                        <p>{{$comic['sale_date']}}</a>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row pt-3">
            <div class="col-3 border">
                <div class="d-flex justify-content-between mt-2">
                    <p class="text-uppercase fw-semibold color-grey">Digital Comics</p>
                    <img class="merch-icons color-grey" src="{{Vite::asset('../resources/img/buy-comics-subscriptions.png')}}" alt="">
                </div>
            </div>
            <div class="col-3 border">
                <div class="d-flex justify-content-between mt-2">
                    <p class="text-uppercase fw-semibold color-grey">Shop DC</p>
                    <img class="merch-icons color-grey" src="{{Vite::asset('../resources/img/buy-comics-digital-comics.png')}}" alt="">
                </div>
            </div>
            <div class="col-3 border">
                <div class="d-flex justify-content-between mt-2">
                    <p class="text-uppercase fw-semibold color-grey">Comic Shop Locator</p>
                    <img class="merch-icons color-grey" src="{{Vite::asset('../resources/img/buy-comics-shop-locator.png')}}" alt="">
                </div>
            </div>
            <div class="col-3 border">
                <div class="d-flex justify-content-between mt-2">
                    <p class="text-uppercase fw-semibold color-grey">Subscriptions</p>
                    <img class="merch-icons color-grey" src="{{Vite::asset('../resources/img/buy-comics-merchandise.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
</body>
</html>