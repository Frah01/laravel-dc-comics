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

        return view('comics.index', compact('cards', 'icons', 'socials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        return view('comics.create', compact('icons', 'socials'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|max:50',
            'description' => 'required|max:200',
            'price' => 'required|max:10',
            'series' => 'required|max:50',
            'thumb' => 'required|max:100',
            'sale_date' => 'required|max:10',
            'type' => 'required|max:20',

        ]);

        $form_data = $request->all();

        $newComic = new Comic();
        $newComic->title = $form_data['title'];
        $newComic->description = $form_data['description'];
        $newComic->price = $form_data['price'];
        $newComic->series = $form_data['series'];
        $newComic->thumb = $form_data['thumb'];
        $newComic->sale_date = $form_data['sale_date'];
        $newComic->type = $form_data['type'];
        $newComic->save();
        // $newComic = Comic::create($form_data);
        // $newComic->fill($form_data);
        return redirect()->route('comics.show', ['comic' => $newComic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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

        $comics = Comic::find($id);
        if ($comics) {
            $data = [
                'comic' => $comics
            ];
        }

        return view('comics.show', $data, compact('socials', 'icons'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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

        $comic = Comic::find($id);
        if ($comic) {
            $data = [
                'comic' => $comic
            ];
            return view('comics.edit', $data, compact('socials', 'icons'));
        }
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


        $comic = Comic::findOrFail($id);
        $form_data = $this->validation($request->all());
        $comic->update($form_data);
        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
