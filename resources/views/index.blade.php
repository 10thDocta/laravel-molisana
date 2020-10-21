@extends('layout.main')

@php 
@endphp 

@section('title')
    Home
@endsection


@section('main')
      
    <main>
        <div class="container">
            <section>
               @if (!empty($paste))

               @foreach ($paste as $key => $tipopasta)
               <h2>{{$key}} </h2>    
               <ul>

                @foreach ($tipopasta as $prodotto)
                    <li>
                        <img src="{{$prodotto["src"]}} " alt="">
                    <a href="prodotti/show/{{$prodotto["id"]}}"> <h3> {{$prodotto["id"]}} </h3>  </a>
                    </li>
                @endforeach

               </ul>


               @endforeach

                   
               @endif     
            </section>
        </div>
    </main>

@endsection
    {{-- /main --}}


