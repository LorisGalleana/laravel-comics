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
                <div class="comic-card">
                    <img src="https://www.coverbrowser.com/image/action-comics/1-1.jpg" alt="">
                    <h3>Action Comics</h3>
                </div>
                <div class="comic-card">
                    <img src="https://www.panini.it/media/catalog/product/cache/a5b5dd3adfe0d321084804c738f29601/M/1/M1BLLA015ISBN_0.jpg" alt="">
                    <h3>American Vampire 1976</h3>
                </div>
                <div class="comic-card">
                    <img src="https://media.wired.com/photos/593384dad80dd005b42b2817/master/w_2560%2Cc_limit/Aquaman-16.jpg" alt="">
                    <h3>Aquaman</h3>
                </div>
                <div class="comic-card">
                    <img src="https://d29xot63vimef3.cloudfront.net/image/batgirl/1-1.jpg" alt="">
                    <h3>Batgirl</h3>
                </div>
                <div class="comic-card">
                    <img src="https://static.posters.cz/image/750/locandine-film-in-plexiglass-batman-prowl-comic-cover-i69653.jpg" alt="">
                    <h3>Batman</h3>
                </div>
                <div class="comic-card">
                    <img src="https://static.wikia.nocookie.net/marvel_dc/images/5/50/Batman_Beyond_v.1_1.jpg" alt="">
                    <h3>Batman Beyond</h3>
                </div>
                <div class="comic-card">
                    <img src="https://static.wikia.nocookie.net/marvel_dc/images/0/0d/Batman_Superman_Vol_1_1.jpg" alt="">
                    <h3>Batman/Superman</h3>
                </div>
                <div class="comic-card">
                    <img src="https://static.wikia.nocookie.net/marvel_dc/images/c/cf/Batman_Superman_Annual_Vol_2_1.jpg" alt="">
                    <h3>Batman/Superman Annual</h3>
                </div>
                <div class="comic-card">
                    <img src="https://static.wikia.nocookie.net/marvel_dc/images/5/54/Batman_The_Joker_War_Zone_Vol_1_1.jpg" alt="">
                    <h3>Batman: The Joker War Zone</h3>
                </div>
                <div class="comic-card">
                    <img src="https://static.wikia.nocookie.net/marvel_dc/images/6/64/Batman_Three_Jokers_Collected.jpg" alt="">
                    <h3>Batman: Three Jokers</h3>
                </div>
                <div class="comic-card">
                    <img src="https://static.wikia.nocookie.net/marvel_dc/images/f/f8/Batman_White_Knight_Presents_Harley_Quinn_Vol_1_1.jpg" alt="">
                    <h3>Batman: White Knight Presents: Harley Quinn</h3>
                </div>
                <div class="comic-card">
                    <img src="https://static.wikia.nocookie.net/marvel_dc/images/c/c8/Catwoman_Vol_2_1.jpg" alt="">
                    <h3>Catwoman</h3>
                </div>
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

@endsection
