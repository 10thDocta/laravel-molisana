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

    @if ($id >0)
        <a href="{{route('dettaglio-prodotto', $id - 1)}} "> Prev </a>  
    @endif

    @if ($id < $length - 1)
        <a href="{{route('dettaglio-prodotto', $id + 1)}} "> Next </a>
    @endif




</main>
@endsection