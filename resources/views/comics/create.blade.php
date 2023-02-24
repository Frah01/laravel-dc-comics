@extends('layouts.app')
    @section('content')
    <div class="container">
        <div class="row">
            <div class="offset-3 col-6">
                <div class="container" >
                    <div class="row">
                        <div class="col">
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </div>
                    </div>
                </div>
                <form class="p-3" action="{{route('comics.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="control-label"><p>Titolo</p></label>
                        <input type="text" name="title" class="form-control" placeholder="Inserisci il titolo">
                    </div>
                    <div class="form-floating py-2">
                        <textarea name="description" class="form-control" placeholder="Descrizione" id="floatingTextarea2"></textarea>
                        <label for="floatingTextarea2">Descrizione</label>
                      </div>
                    <div class="form-group">
                        <label class="control-label"><p>Thumbnail</p></label>
                        <input type="text" name="thumb" class="form-control" placeholder="Inserisci la thumbnail">
                    </div>
                    <div class="form-group">
                        <label class="control-label"><p>Prezzo</p></label>
                        <input type="text" name="price" class="form-control" placeholder="Inserisci il Prezzo">
                    </div>
                    <div class="form-group">
                        <label class="control-label"><p>Serie</p></label>
                        <input type="text" name="series" class="form-control" placeholder="Inserisci la Serie">
                    </div>
                    <div class="form-group">
                        <label class="control-label"><p>Sale Date</p></label>
                        <input type="text" name="sale_date" class="form-control" placeholder="Inserisci la Data">
                    </div>
                    <div class="form-group">
                        <label class="control-label"><p>Genere</p></label>
                        <input type="text" name="type" class="form-control" placeholder="Inserisci il Genere">
                    </div>
                    <div class="form-group my-3">
                        <button type="submit" class="form-control" >Salva Il Nuovo Fumetto</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection