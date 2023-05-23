@extends('layout.app')

@section('content')

    <section class="bg-dark">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 row-cols-xl-6 g-4">
                @foreach($comics as $comic)

                <div class="col ">
                    <div class="card border-0">
                        <img class="img card-img-top" src="{{$comic['thumb']}}" alt="{{ $comic['title'] }}">
                        <div class="card-body bg-dark ">
                            <h6 class="card-title text-white text-uppercase align-items-start">
                                {{ $comic['title'] }}
                            </h6>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>



@endsection