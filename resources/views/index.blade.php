@extends('layout.main')

@php 
  $data = config('pasta')
@endphp 

@section('title')
    Home
@endsection


@section('main')
      
        <main>
          <div class="container">
                <section>
                      <h3>LE LUNGHE</h3>
                      <ul>               
                          @foreach ($data as $d)
                              @if ($d["tipo"] == "lunga")
                                  <li>
                                      <img src="{{$d['src']}}" alt=""> 
                                  </li>
                              @endif
                          @endforeach                    
                      </ul>
                </section>

                <section>
                  <h3>LE CORTE</h3>
                  <ul>               
                      @foreach ($data as $d)
                          @if ($d["tipo"] == "corta")
                              <li>
                                  <img src="{{$d['src']}}" alt=""> 
                              </li>
                          @endif
                      @endforeach                    
                  </ul>
            </section>

            <section>
              <h3>LE CORTISSIME</h3>
              <ul>               
                  @foreach ($data as $d)
                      @if ($d["tipo"] == "cortissima")
                          <li>
                              <img src="{{$d['src']}}" alt=""> 
                          </li>
                      @endif
                  @endforeach                    
              </ul>
            </section>
          </div>
        </main>

@endsection
    {{-- /main --}}


