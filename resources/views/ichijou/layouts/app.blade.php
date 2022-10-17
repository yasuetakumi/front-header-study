<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" id="html" class="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <header id="header" class="">
        <div class="banner-fixed-right">
            <a href="https://ichijou.gruneasia.info/reform/contact" class="url-1" style="text-decoration: none;">
                        <span class="border-x">
                            <span class="red"></span>
                            <span class="green"></span>
                        </span>
                <span class="text">お<br />問<br />い<br />合<br />わ<br />せ<br /></span>
                <i class="fa fa-angle-right"></i>
            </a>
            <a href="https://ichijou.gruneasia.info" class="url-2" style="text-decoration: none;">
                <span>新<br />築<br /></span>
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
        <div class="navbars">
            <div class="container-full">
                <div class="row">
                    <div class="col-9 col-lg-6 side-left">
                        <h1 style="margin: 0;font-size: 0;line-height: 0;">
                            <a href="https://ichijou.gruneasia.info/reform" class="logo-top">
                                <img src="https://ichijou.gruneasia.info/wp/wp-content/themes/ichijou/reform/assets/images/other/logo_main.png" class="main-logo" alt="仙台・宮城の住宅・宅地・ハウスメーカー">
                            </a>
                            <a href="https://ichijou.gruneasia.info/reform" class="logo-top">
                                <img src="https://ichijou.gruneasia.info/wp/wp-content/themes/ichijou/reform/assets/images/other/reform.png" class="reform-logo" alt="リフォーム">
                            </a>
                        </h1>
                    </div>
                    <div class="col-3 col-lg-6 side-right">
                        <ul class="menu-list d-none d-lg-flex">
                            <li><a href="https://ichijou.gruneasia.info/works" class="icon-header"><i class="fa-solid fa-camera"></i><span>施工実例</span></a></li>
                            <li><a href="https://ichijou.gruneasia.info/reform/plan"  class="icon-header"><i class="fa-solid fa-book-open"></i><span>プラン</span></a></li>
                        </ul>
                        <a  id="bargar-icon" href="javascript:void(0)" class="menu-bar">
                            <span class="bars"></span>
                            <span class="bars"></span>
                            <span class="bars"></span>
                            <span class="title">Menu</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="bargar" class="navbar-menu pe-auto">
            <img src="https://ichijou.gruneasia.info/wp/wp-content/themes/ichijou/reform/assets/images/other/logo-menu-navbar.png" class="logo-menu-sidebar" alt="Logo">
            <a class="menu-grand-top d-none d-lg-block h-100">
                <img src="https://ichijou.gruneasia.info/wp/wp-content/themes/ichijou/reform/assets/images/other/grand-top.png" alt="" class="bg">
            </a>
            <div id="bargar-icon2" class="sidebar-menu">
                <div class="menu-close">
                    <img src="https://ichijou.gruneasia.info/wp/wp-content/themes/ichijou/reform/assets/images/other/logo-menu-navbar-sp.png" alt="" class="d-block d-lg-none logo-sp-sidebar">
                    <a href="javascript:void(0)" class="position-relative">
                        <span class="d-flex justify-content-center">Close</span>
                        <img src="https://ichijou.gruneasia.info/wp/wp-content/themes/ichijou/reform/assets/images/other/close-menu.svg" alt="">
                    </a>
                </div>
                <ul class="menu-list">
                    <li id="menu-item-1801" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-1801 active "><a href="https://ichijou.gruneasia.info/reform/" aria-current="page">ホーム</a></li>
                    <li id="menu-item-1802" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1802"><a href="https://ichijou.gruneasia.info/works/">施工実例</a></li>
                    <li id="menu-item-1803" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1803"><a href="https://ichijou.gruneasia.info/reform/characteristic/">一条工務店のリフォームの特徴</a></li>
                    <li id="menu-item-1804" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1804"><a href="https://ichijou.gruneasia.info/reform/plan/">一条のリフォームプラン</a></li>
                    <li id="menu-item-1805" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1805"><a href="https://ichijou.gruneasia.info/reform/flow/">リフォーム工事の流れ</a></li>
                    <li id="menu-item-1806" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1806"><a href="https://ichijou.gruneasia.info/reform/staff/">社員紹介</a></li>
                    <li id="menu-item-1807" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1807"><a href="https://ichijou.gruneasia.info/reform/company/">会社概要</a></li>
                    <li id="menu-item-1808" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1808"><a href="https://ichijou.gruneasia.info/reform/news/">お知らせ</a></li>
                    <li id="menu-item-1809" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1809"><a href="https://ichijou.gruneasia.info/reform/contact/">お問い合わせ</a></li>
                </ul>
                <div class="menu-grand-top-sp d-block d-lg-none">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <a href="" class="box-img">
                                    <img src="https://ichijou.gruneasia.info/wp/wp-content/themes/ichijou/reform/assets/images/other/grand-top.png" class="w-100 img-box" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-ig">
                    <a href="https://ichijou.gruneasia.info" class="btn btn-wide btn-contruction caret">
                        <span>新築</span>
                    </a>
                </div>
                <span class="copyright">©ICHIJO MIYAGI CO.,LTD All Right Reserved.</span>
            </div>
        </div>
    </header>

    @yield('content')

    <footer>
    </footer>

    <script src="https://kit.fontawesome.com/0605bc24a8.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script>
        $(function (){
            $("#bargar-icon").click(function(){
                let openExists = $("#bargar").hasClass("menu-show");

                if(openExists){
                    $("#bargar").removeClass("menu-show");
                } else {
                    $("#bargar").addClass("menu-show");
                }
            });

            $("#bargar-icon2").click(function(){
                let openExists = $("#bargar").hasClass("menu-show");

                if(openExists){
                    $("#bargar").removeClass("menu-show");
                } else {
                    $("#bargar").addClass("menu-show");
                }
            });
        });
    </script>
</body>
</html>
