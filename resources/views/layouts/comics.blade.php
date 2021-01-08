@extends('app')

@section('title', strtoupper($comic['series']) . ' | DC')

@section('content')
    <section id="hero">
    </section>

    <section id="comic-description">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 cover">
                    <div class="wrapper">
                        <a href="#">
                            <img src=" {{ $comic['thumb'] }} " alt=" {{ $comic['title'] }} ">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-lg">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="text-uppercase mb-4"> {{ $comic['title'] }} </h2>

                    <div class="row comic-status">
                        <div class="col-lg-8 d-flex justify-content-between">
                            <div class="py-3">
                                <span class="text-uppercase">us price:</span>
                                <span> {{ $comic['price'] }} </span>
                            </div>
                            <span class="avaiabiable text-uppercase py-3">avaiable</span>
                        </div>

                        <div class="col-lg-4 text-center py-3">
                            <a href="#" class="text-uppercase d-flex">check avaiability
                                <span class="fas fa-sort-down align-self-start ml-2"></span>
                            </a>
                        </div>
                    </div>

                    <p class="py-5"> {{ $comic['description'] }} </p>
                </div>

                <div class="col-lg-4">
                    <a href="#">
                        <img src=" {{ asset('images/dc-power-visa.png') }} " alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="comic-details-info">
        <div class="container-lg">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="text-uppercase py-3">talent</h3>
                    <div class="row">
                        <div class="col-lg-12 d-flex grid">
                            <h4 class="key">Artists:</h4>
                            <div class="value">
                                @foreach ($comic['artists'] as $artist)
                                    <p class="highlight"> {{ $artist }} </p>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-12 d-flex grid">
                            <h4 class="key">Writers:</h4>
                            <div class="value">
                                @foreach ($comic['writers'] as $writer)
                                    <p class="highlight"> {{ $writer }} </p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <h3 class="text-uppercase py-3">specs</h3>
                    <div class="row">
                        <div class="col-lg-12 d-flex grid">
                            <h4 class="key">Series:</h4>
                            <p class="value highlight text-uppercase"> {{ $comic['series'] }} </p>
                        </div>
                        <div class="col-lg-12 d-flex grid">
                            <h4 class="key">US Price:</h4>
                            <p class="value"> {{ $comic['price'] }} </p>
                        </div>
                        <div class="col-lg-12 d-flex grid">
                            <h4 class="key">On Sale Date:</h4>
                            <p id="sale_date" class="value"> {{ $comic['sale_date'] }} </p>
                        </div>
                        <div class="col-lg-12 d-flex grid">
                            <h4 class="key">Type:</h4>
                            <p class="value"> {{ $comic['type'] }} </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="filter-merchandise">
        <div class="container-lg">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-between">
                    <a href="#">
                        <span class="text-uppercase">digital comics</span>
                        <img src=" {{ asset('images/buy-comics-digital-comics.png') }} " alt="digital comics">
                    </a>

                    <a href="#">
                        <span class="text-uppercase">dc merchandise</span>
                        <img src=" {{ asset('images/buy-comics-merchandise.png') }} " alt="comics merchandise">
                    </a>

                    <a href="#">
                        <span class="text-uppercase">subscription</span>
                        <img src=" {{ asset('images/buy-comics-subscriptions.png') }} " alt="comics subscriptions">
                    </a>

                    <a href="#">
                        <span class="text-uppercase">comic shop locator</span>
                        <img src=" {{ asset('images/buy-comics-shop-locator.png') }} " alt="comics shop locator">
                    </a>

                    <a href="#">
                        <span class="text-uppercase">dc power visa</span>
                        <img src=" {{ asset('images/buy-dc-power-visa.svg') }} " alt="comics power visa">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="social-icons">
        <div>
            <a href="#">
                <span class="fab fa-facebook-f"></span>
            </a>
            <a href="#">
                <span class="fab fa-twitter"></span>
            </a>

            <a href="#">
                <span class="fab fa-pinterest-p"></span>
            </a>
            <a href="#">
                <span class="fas fa-plus"></span>
            </a>
        </div>
    </section>
@endsection
