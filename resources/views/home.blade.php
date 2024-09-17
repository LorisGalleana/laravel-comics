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

@section('social')
<div class="component-container-social">
    <div class="container-social" >
        <div class="sign-up">
            <a href="#">SIGN-UP NOW!</a>
        </div>
        <div class="social-icons">
            <div class="follow">
                <a href="#">FOLLOW US</a>
            </div>
            <div class="icons-container" >
                <div class="facebook" >
                    <a href="#">
                        <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="">
                    </a>
                </div>
                <div class="twitter" >
                    <a href="#">
                        <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="">
                    </a>
                </div>
                <div class="youtube" >
                    <a href="#">
                        <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="">
                    </a>
                </div>
                <div class="pinterest" >
                    <a href="#">
                        <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="">
                    </a>
                </div>
                <div class="find-us" >
                    <a href="#">
                        <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



@section('titlePage')
    home
@endsection
