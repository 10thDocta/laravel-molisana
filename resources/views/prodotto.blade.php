@extends('layout.main')

@section('title')
    {{ $prodotto['titolo'] }}
@endsection

@section('main')
<main>
    <img class="img-hero" src="{{ $prodotto['src-h'] }}" alt=""> 
    <img class="img-hero" src="{{ $prodotto['src-p'] }}" alt="">
    
    <div class="descrizione">
        <p class="descrizione__text">{!!$prodotto['descrizione']!!}</p>
    </div>
</main>
@endsection