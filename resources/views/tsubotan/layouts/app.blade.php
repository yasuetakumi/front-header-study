<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" id="html" class="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body data-hasqtip="0" data-new-gr-c-s-check-loaded="14.1083.0" data-gr-ext-installed="">
    <header id="header" class="">
        <div class="nav-sp container">
            <nav class="row fixed open-fixed">
                <div class="col-5 col-sm-8 col-md-3 text-left col-logo">
                    <h1><a href="https://tsubotan.net"><img class="img-logo dark-logo" src="https://tsubotan.net/imgs/logo.svg" alt="坪単(つぼたん)"><img class="img-logo white-logo" src="https://tsubotan.net/imgs/logo-white.svg" alt="坪単(つぼたん)"></a></h1>
                </div>
                <div class="col-7 col-sm-4 sp-only wrapp-btn-sp">
                    <div class="contact-box">
                        <a href="tel:05058072335" class="tel-icon"><img src="https://tsubotan.net/imgs/icon-phone.svg"></a>
                        <div class="box-tel">
                            <a class="border-bottom-sp" href="tel:05058072335">
                                <p class="text">お気軽にお電話下さい</p>
                                <p class="tel">050-5807-2335</p>
                            </a>
                        </div>
                    </div>
                    <div id="menu-bar" class="navbar-toggler">
                        <div class="navbar-toggler-icon"><span></span><span></span><span></span></div>
                    </div>
                </div>
                <div id="navbarNav0" class="col-md-9">
                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item ">
                            <a class="nav-link" href="https://tsubotan.net/service">サービスについて</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="https://tsubotan.net/faq">よくあるご質問</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="https://tsubotan.net/gallery">実績</a>
                        </li>

                        <li class="nav-item d-block d-md-none ">
                            <a class="nav-link" href="https://tsubotan.net/contractor-application">協力業者募集</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="https://tsubotan.net/smoking-space">喫煙ブース設置</a>
                        </li>
                        <li class="nav-item d-block d-md-none ">
                            <a class="nav-link" href="https://tsubotan.net/utilities">お役立ち情報</a>
                        </li>

                        <li class="nav-item btn-main-contact item-button ">
                            <a class="nav-link contact-link" href="https://tsubotan.net/contact">お問合わせ</a>
                        </li>
                        <li class="nav-item item-button">
                            <a class="nav-link contact-link" href="tel:05058072335"><img class="small-icon" src="https://tsubotan.net/imgs/icon-phone.svg" alt="icon-phone">050-5807-2335</a>
                            {{-- <img class="small-icon hover" src="https://tsubotan.net/imgs/icon-phone-blue.svg" alt="icon-phone-blue">  --}}
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    @yield('content')

    <footer>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script>
        $(function (){
            $("#menu-bar").on("click", function(){
                let openExist = $("#header").hasClass("open");

                if (openExist){
                    $("#header").removeClass("open");
                    $("#menu-bar").removeClass("open");
                    $("#navbarNav0").removeClass("display-block");
                    $(".header-cp").removeClass("display-block");
                    $("#html").removeClass("barger-menu");
                } else {
                    $("#header").addClass("open");
                    $("#menu-bar").addClass("open");
                    $("#navbarNav0").addClass("display-block");
                    $(".header-cp").addClass("display-block");
                    $("#html").addClass("barger-menu");
                }
            });
        });
    </script>
</body>
</html>
