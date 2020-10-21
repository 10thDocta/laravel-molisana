@extends('layout.main')

@section('title')
    Home
@endsection


@section('main')
      
    <main>
        <div class="container">
            <div class="bg-img">
                <section>
                @if (!empty($paste))

                @foreach ($paste as $key => $tipopasta)
                <h2>{{$key}} </h2>    
                <ul class="pasta-list">
                        @foreach ($tipopasta as $prodotto)
                            <li class="pasta-list__item">
                                <img class="img-bg" src="{{$prodotto["src"]}} " alt="">
                            {{-- <a href="prodotti/show/{{$prodotto["id"]}}"> <h3> {{$prodotto["id"]}} </h3>  </a> --}}
                            </li>
                        @endforeach

                </ul>


                @endforeach

                    
                @endif     
                </section>
            </div>
        </div>
    </main>

@endsection
    {{-- /main --}}


