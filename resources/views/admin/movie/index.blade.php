@extends('layout.app')
    <h2>
        Movie
    </h2>

    <ul>
       
    </ul>
    <section>
        <div class="container">
            <div class="row">
                <div class="row row-cols-md-3 row-cols-xl-4 g-3">
                    <div class="col">
                        @foreach ($movies as $movie )
                            <div class="card">
                                <div class="card-body">
                                    <h3>
                                        {{ $movie -> title }}
                                    </h3>
                
                                </div>
                
                            </div>
                        
                        
                        @endforeach
                        

                    </div>

                </div>

            </div>

        </div>
    </section>

@section('main-content')

@endsection