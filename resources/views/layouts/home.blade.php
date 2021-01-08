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
                    @foreach ($comics as $key => $comic)
                        <div class="tile">
                            <a href=" {{ route('comic-single-page', ['id' => $key]) }} ">
                                <img src=" {{ $comic['thumb'] }}" alt=" {{ $comic['title'] }} ">
                            </a>
                            <a class="text-uppercase pt-3" href=" {{ route('comic-single-page', ['id' => $key]) }} ">{{ $comic['series'] }}</a>
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

    <section class="merchandise">
        <div class="container-lg">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-between">
                    <a href="#">
                        <img src=" {{ asset('images/buy-comics-digital-comics.png') }} " alt="digital comics">
                        <span class="text-uppercase">digital comics</span>
                    </a>

                    <a href="#">
                        <img src=" {{ asset('images/buy-comics-merchandise.png') }} " alt="comics merchandise">
                        <span class="text-uppercase">dc merchandise</span>
                    </a>

                    <a href="#">
                        <img src=" {{ asset('images/buy-comics-subscriptions.png') }} " alt="comics subscriptions">
                        <span class="text-uppercase">subscription</span>
                    </a>

                    <a href="#">
                        <img src=" {{ asset('images/buy-comics-shop-locator.png') }} " alt="comics shop locator">
                        <span class="text-uppercase">comic shop locator</span>
                    </a>

                    <a href="#">
                        <img src=" {{ asset('images/buy-dc-power-visa.svg') }} " alt="comics power visa">
                        <span class="text-uppercase">dc power visa</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
