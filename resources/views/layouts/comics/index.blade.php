@extends('layouts.app')
    @section('content')
    <div class="container-fluid background-cards">
        <div class="row">
            <div class="offset-1 col-10 d-flex justify-content-center flex-wrap flex-wrap g-3">
                @foreach($cards as $comic)
                <div class="card bg-transparent card-cont text-center border-0 text-white m-2">
                    <img class="thumbs"  src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                    <div class="card-body">
                        <a class="fw-bold" href="{{route('detail-comics',['slug' => $comic['slug']])}}">{{$comic['title']}}</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col 12">
                <div class="d-flex justify-content-center pb-5">
                    <button class="film-button text-uppercase text-white" >Load More</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-primary">
        <div class="row">
            <div class="offset-2 col-8">
                <ul class="d-flex flex-wrap list-unstyled justify-content-between py-5 text-light ">
                    @foreach ($icons as $icon)
                    <li class="d-flex align-items-center fw-bold">
                        <div>
                            <img class="merch-icons" src="{{asset(Vite::asset($icon['img']))}}" alt="{{$icon['nome']}}">
                        </div>
                        <p class="my-0 mx-2">{{$icon['nome']}}</p>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    @endsection
