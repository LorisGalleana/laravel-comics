{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('jumbo')
<div class="jumbotron">
    <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }} " alt="" >
</div>
@endsection

@section('content')
<div class="component-container">
    <div class="container-bis">
        <div class="current-series"><a href="#">CURRENT SERIES</a></div>
        <div class="comic-container">
            {{-- <ComicCard v-for="(comic,index) in comics" :key="index"
            :details="comic" /> --}}
        </div>
        <div class="more-content"><a href="#">LOAD MORE</a></div>
    </div>
</div>
@endsection

@section('purchase')
<div class="component-container-shop">
    <div class="purchase-container" >
        <div class="purchase">
            <a href="#" class="purchase-link"><div class="icon"><img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt=""></div> <div class="text">DIGITAL COMICS</div></a>
        </div>
        <div class="purchase">
            <a href="#" class="purchase-link"><div class="icon"><img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt=""></div> <div class="text">DC MERCHANDISE</div></a>
        </div>
        <div class="purchase">
            <a href="#" class="purchase-link"><div class="icon"><img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt=""></div> <div class="text">SUBSCRIPTION</div></a>
        </div>
        <div class="purchase">
            <a href="#" class="purchase-link"><div class="icon"><img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt=""></div> <div class="text">COMIC SHOP LOCATOR</div></a>
        </div>
        <div class="purchase">
            <a href="#" class="purchase-link"><div class="icon"><img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt=""></div> <div class="text">DC POWER VISA</div></a>
        </div>

    </div>
</div>
@endsection



@section('titlePage')
    home
@endsection
