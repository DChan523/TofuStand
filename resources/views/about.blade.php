@extends('master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 id="potato">About Us</h1>
            </div>
            <div class="col">
                <p>maybe a image or something</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1>image</h1>
            </div>
            <div class="col">
                <p>some more text</p>
                <p>asdasd</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1 id="cow">COWSSSSSSS</h1>
            </div>
        </div>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://food.fnr.sndimg.com/content/dam/images/food/fullset/2011/8/29/1/FNM_100111-Poutine-002_s4x3.jpg.rend.hgtvcom.616.462.suffix/1383239551554.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://food.fnr.sndimg.com/content/dam/images/food/fullset/2011/8/29/1/FNM_100111-Poutine-002_s4x3.jpg.rend.hgtvcom.616.462.suffix/1383239551554.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://food.fnr.sndimg.com/content/dam/images/food/fullset/2011/8/29/1/FNM_100111-Poutine-002_s4x3.jpg.rend.hgtvcom.616.462.suffix/1383239551554.jpeg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
@endsection
