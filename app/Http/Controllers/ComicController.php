<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cards = Comic::all();

        $menu = [

            'Characters',
            'Comics',
            'Movies',
            'TV',
            'GAMES',
            'Collectibles',
            'Videos',
            'Fans',
            'News',
            'Shop'
        ];

        $icons = [
            [
                'nome' => 'Digital Comics',
                'img' => '../resources/img/buy-comics-digital-comics.png'
            ],
            [
                'nome' => 'DC Merchandise',
                'img' => '../resources/img/buy-comics-merchandise.png'
            ],
            [
                'nome' => 'Subscription',
                'img' => '../resources/img/buy-comics-subscriptions.png'
            ],
            [
                'nome' => 'Comic Shop Locator',
                'img' => '../resources/img/buy-comics-shop-locator.png'
            ],
            [
                'nome' => 'CD Power Visa',
                'img' => '../resources/img/buy-dc-power-visa.svg'
            ]
        ];

        $socials = [
            'facebook' => '../resources/img/footer-facebook.png',
            'twitter' => '../resources/img/footer-twitter.png',
            'youtube' => '../resources/img/footer-youtube.png',
            'pinterest' => '../resources/img/footer-pinterest.png',
            'periscope' => '../resources/img/footer-periscope.png',
        ];
        return view('home', compact('socials', 'icons', 'cards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
