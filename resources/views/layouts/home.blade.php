@extends('app')

@section('title', 'DC | Welcome to DC')

@section('content')
    <section id="hero">
    </section>

    <section id="current-series">
        <div class="container-lg">
            <div class="row">
                <div class="col-lg-12 tiles-container">
                    <h2 class="text-uppercase">current series</h2>
                    @foreach ($comics as $comic)
                        <div class="tile">
                            <a href="#">
                                <img src=" {{ $comic['thumb'] }}" alt=" {{ $comic['title'] }} ">
                            </a>
                            <a class="text-uppercase pt-3" href="#">{{ $comic['series'] }}</a>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <a class="text-uppercase more-comics" href="#">load more</a>
                </div>
            </div>
        </div>
    </section>
@endsection
