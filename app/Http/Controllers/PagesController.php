<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class PagesController extends Controller

{
    public function index()
    {

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
        return view('home', compact('socials', 'icons'));
    }
}
