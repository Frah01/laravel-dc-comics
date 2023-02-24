@extends('layouts.app')
    @section('content')
    <div class="container">
        <div class="row">
            <div class="offset-3 col-6">
                <div class="container" >
                    <div class="row">
                        <div class="col">
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <form class="p-3" action="{{route('comics.update', $comic->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label class="control-label"><p>Titolo</p></label>
                        <input type="text" name="title" class="form-control" placeholder="Inserisci il titolo" value="{{old('title') ?? $comic->title}}">   
                    </div>
                        <label for="floatingTextarea2">Descrizione</label>
                        <textarea name="description" class="form-control" placeholder="Descrizione"  rows="10">
                            {{old('description') ?? $comic->description}}
                        </textarea>
                    <div class="form-group">
                        <label class="control-label"><p>Thumbnail</p></label>
                        <input type="text" name="thumb" class="form-control" placeholder="Inserisci la thumbnail" value="{{old('thumb') ?? $comic->thumb}}">
                    </div>
                    <div class="form-group">
                        <label class="control-label"><p>Prezzo</p></label>
                        <input type="text" name="price" class="form-control" placeholder="Inserisci il Prezzo" value="{{old('price') ?? $comic->price}}">
                    </div>
                    <div class="form-group">
                        <label class="control-label"><p>Serie</p></label>
                        <input type="text" name="series" class="form-control" placeholder="Inserisci la Serie" value="{{old('series') ?? $comic->series}}">
                    </div>
                    <div class="form-group">
                        <label class="control-label"><p>Sale Date</p></label>
                        <input type="text" name="sale_date" class="form-control" placeholder="Inserisci la Data" value="{{old('sale_date') ?? $comic->sale_date}}">
                    </div>
                    <div class="form-group">
                        <label class="control-label"><p>Genere</p></label>
                        <input type="text" name="type" class="form-control" placeholder="Inserisci il Genere" value="{{old('type') ?? $comic->type}}">
                    </div>
                    <div class="form-group my-3">
                        <button type="submit" class="btn btn-success" class="form-control" >Salva le Modifiche</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection