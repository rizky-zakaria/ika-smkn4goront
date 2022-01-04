@extends('layouts/app')

@section('konten')
<div class="box" style="margin-left: 12px; margin-right: 5px;">
    <div class="row mt-3">
        <div class="col-9">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('layout/img/smkn4a.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('layout/img/smkn4a.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('layout/img/smkn4a.png') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="container text-center mt-4">
                <h2>IKATAN ALUMNI SMKN 4 GORONTALO</h2>
                <span>Selamat Datang Di Official Web IKA-SMKN 4 Gorontalo</span>
            </div>
        </div>
        <div class="col-3">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="row">
                        <div class="col-5">
                            <img src="{{ asset('layout/img/smkn4a.png') }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                height="120px" width="120px">
                        </div>
                        <div class="col-7">
                            <div class="card-body">
                                <p class="card-title">Card title for this news</p>
                                <button class="btn btn-primary">read more</button>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="row">
                        <div class="col-5">
                            <img src="{{ asset('layout/img/smkn4a.png') }}"
                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" height="120px" width="120px">
                        </div>
                        <div class="col-7">
                            <div class="card-body">
                                <p class="card-title">Card title for this news</p>
                                <button class="btn btn-primary">read more</button>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="row">
                        <div class="col-5">
                            <img src="{{ asset('layout/img/smkn4a.png') }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                height="120px" width="120px">
                        </div>
                        <div class="col-7">
                            <div class="card-body">
                                <p class="card-title">Card title for this news</p>
                                <button class="btn btn-primary">read more</button>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="row">
                        <div class="col-5">
                            <img src="{{ asset('layout/img/smkn4a.png') }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                height="120px" width="120px">
                        </div>
                        <div class="col-7">
                            <div class="card-body">
                                <p class="card-title">Card title for this news</p>
                                <button class="btn btn-primary">read more</button>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="row">
                        <div class="col-5">
                            <img src="{{ asset('layout/img/smkn4a.png') }}"
                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" height="120px" width="120px">
                        </div>
                        <div class="col-7">
                            <div class="card-body">
                                <p class="card-title">Card title for this news</p>
                                <button class="btn btn-primary">read more</button>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="box mt-5">
    <div class="container">
        <div class="row row-cols-3">
            <img src="{{ asset('layout/img/smkn4a.png') }}" class="img-thumbnail">
            <img src="{{ asset('layout/img/smkn4a.png') }}" class="img-thumbnail">
            <img src="{{ asset('layout/img/smkn4a.png') }}" class="img-thumbnail">
            <img src="{{ asset('layout/img/smkn4a.png') }}" class="img-thumbnail">
            <img src="{{ asset('layout/img/smkn4a.png') }}" class="img-thumbnail">
            <img src="{{ asset('layout/img/smkn4a.png') }}" class="img-thumbnail">
        </div>
    </div>
</div>

<div class="box text-center p-4 mt-2 mb-2" style="background-color: #73c4fd">
    <span class="text-light">VIDEO</span>
</div>
<div class="container text-center">
    <iframe width="700" height="350" src="https://www.youtube.com/embed/5dRfxmKOqr8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

<div class="box bg-primary mt-5 p-3 text-light">Copyright © 2021 SMKN 4 GORONTALO. All Rights Reserved.</div>

@endsection
