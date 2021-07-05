<!DOCTYPE html>
<html lang="en">
<head>
    <title>Розпахнуті крила - кампанія за звільнення курей від кліток</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link data-n-head="ssr" rel="icon" type="image/x-icon" href="/images/chicken.png">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/css/animate.css">

    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">

    <link rel="stylesheet" href="/css/aos.css">

    <link rel="stylesheet" href="/css/ionicons.min.css">

    <link rel="stylesheet" href="/css/flaticon.css">
    <link rel="stylesheet" href="/css/icomoon.css">
    <link rel="stylesheet" href="/css/style.css">
    <style>
        #button {
            display: inline-block;
            background-color: #5fb481;
            width: 50px;
            height: 50px;
            text-align: center;
            border-radius: 4px;
            position: fixed;
            bottom: 30px;
            right: 30px;
            transition: background-color .3s, opacity .5s, visibility .5s;
            opacity: 0;
            visibility: hidden;
            z-index: 1000;
        }

        #button::after {
            content: "\f077";
            font-family: FontAwesome;
            font-weight: normal;
            font-style: normal;
            font-size: 2em;
            line-height: 50px;
            color: #fff;
        }

        #button:hover {
            cursor: pointer;
            background-color: #333;
        }

        #button:active {
            background-color: #555;
        }

        #button.show {
            opacity: 1;
            visibility: visible;
        }
    </style>
</head>
<body>
{{--{{dd($content)}}--}}
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="#"><span>Розпахнуті крила</span></a>
        <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse"
                data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Меню
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
                <li class="nav-item"><a href="#" class="nav-link"
                                        data-nav-section="home"><span>{{$content->main__title}}</span></a></li>
                <li class="nav-item"><a href="#" class="nav-link"
                                        data-nav-section="about"><span>{{$content->about_us__name}}</span></a></li>
                <li class="nav-item"><a href="#" class="nav-link"
                                        data-nav-section="projects"><span>{{$content->battery_system__name}}</span></a>
                <li class="nav-item"><a href="#" class="nav-link"
                                        data-nav-section="petitions"><span>{{$content->petitions__name}}</span></a>
                </li>
                <li class="nav-item"><a href="#" class="nav-link"
                                        data-nav-section="blog1"><span>{{$content->blog__name}}</span></a></li>
                <li class="nav-item"><a href="#" class="nav-link"
                                        data-nav-section="contact"><span>{{$content->contacts__name}}</span></a></li>
            </ul>
        </div>
    </div>
</nav>
<a id="button"></a>
<section class="hero-wrap js-fullheight" style="        background-image: url('/images/cage-free-slider1-1.jpg');"
         data-section="home">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
             data-scrollax-parent="true">
            <div class="col-md-8 ftco-animate mt-5" data-scrollax=" properties: { translateY: '70%' }">

                <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                    {{$content->main__subtitle}}
                </h1>
                <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                    {{$content->main__description}}
                </p>
            </div>
        </div>
    </div>
</section>


<section style="margin-top:50px" class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="section-counter"
         data-section="about">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 col-lg-4 d-flex">
                <div class="img d-flex align-self-stretch align-items-center"
                     style="        background-image: url('{{$content->getImageAboutUs()}}');">

                </div>
            </div>
            <div class="col-md-6 col-lg-8 pl-lg-5 py-5">
                <div class="row justify-content-start pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <span class="subheading">{{$content->about_us__name}}</span>
                        <h2 class="mb-4">{{$content->about_us__title}}</h2>
                        <p id="about_us__description">
                            {{$content->about_us__description}}                        </p>
                        <h2 id="about_us__our_activity__title"  class="mb-4">{{$content->about_us__our_activity__title}}   </h2>
                        <div id="our_activities_div">
                            {!! $content->about_us__our_activity__description !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<section class="ftco-section bg-light" data-section="projects">
    <div class="container">
        <div class="row no-gutters justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">{{$content->battery_system__name}}  </span>
                <h2 class="mb-4">{{$content->battery_system__title}}</h2>
            </div>
        </div>
        <div class="row no-gutters">
            @foreach($batterySystems as $batterySystem)
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                 style="background-image: url('{{$batterySystem->getImage()}}');"></div>
                        </div>
                        <div class="text d-flex align-items-center pt-3 text-center" style="cursor:default">
                            <div>
                                <span class="position mb-2">{{$batterySystem->title}}</span>
                                <div class="faded">
                                    <p style="font-size:14px">
                                        {{$batterySystem->description}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="ftco-section " data-section="petitions">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span id="petitions__name"  class="subheading">{{$content->petitions__name}}</span>
                <h2 id="petitions__title"  class="mb-4">{{$content->petitions__title}}</h2>
            </div>
        </div>

        <div class="row d-flex">
            @foreach($petitions as $petition)
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="{{$petition->link}}" class="block-20"
                           style="        background-image: url('{{$petition->getImage()}}'); background-size: auto;
                               background-repeat: repeat;">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <h3 class="heading"><a href="{{$petition->link}}">
                                    {{$petition->title}}</a>
                            </h3>
                            <div class="d-flex align-items-center mt-4 meta">
                                <p class="mb-0"><a href="{{$petition->link}}" target="_blank" class="btn btn-secondary">Підтримати<span
                                            class="ion-ios-arrow-round-forward"></span></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>


<section class="ftco-section bg-light" data-section="blog1">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">{{$content->blog__name}}</span>
                <h2 class="mb-4">{{$content->blog__title}}</h2>
            </div>
        </div>
        <div class="row d-flex">
            {{--<div class="sidebar-box">--}}
            {{--<form action="#" class="search-form">--}}
            {{--<div class="form-group">--}}
            {{--<span class="icon icon-search"></span>--}}
            {{--<input type="text" class="form-control" placeholder="Type a keyword and hit enter">--}}
            {{--</div>--}}
            {{--</form>--}}
            {{--</div>--}}
            @foreach($posts as $post)
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="{{route('post.show', $post->id)}}" class="block-20"
                           style="        background-image: url('{{$post->getImage()}}');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center pt-2 mb-4 topp" style="        background: #f8f9fa
">
                                <div class="one mr-3">
                                    <span class="day">{{$post->getDay()}}</span>
                                </div>
                                <div class="two">
                                    <span class="mos">{{$post->getMonth()}}</span>
                                    <span class="yr">{{$post->getYear()}}</span>

                                </div>
                            </div>
                            <h3 class="heading"><a href="{{route('post.show', $post->id)}}">
                                    {{$post->title}}</a>
                            </h3>
                            <div class="d-flex align-items-center mt-4 meta">
                                <p class="mb-0"><a href="{{route('post.show', $post->id)}}" class="btn btn-secondary">Переглянути<span
                                            class="ion-ios-arrow-round-forward"></span></a></p>
                                <!--<p class="ml-auto mb-0">
                                    <a href="#" class="mr-2">Admin</a>-->
                                <!--</p>-->
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</section>


<section class="ftco-section contact-section ftco-no-pb" data-section="contact">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">{{$content->contacts__name}}</span>
                <h2 class="mb-4">{{$content->contacts__title}}</h2>
                <p>
                    {{$content->contacts__description}}

                </p>
            </div>
        </div>

    </div>
</section>

<section class="ftco-section contact-section" style="padding-top:0px">
    <div class="container">
        <div class="row d-flex contact-info">
            <div class="col-md-4 col-lg-4 d-flex">
                <div class="align-self-stretch box p-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-mail_outline"></span>
                    </div>
                    <h3 class="mb-4">Email</h3>
                    <p><a target="_blank" href="mailto:allianceforanimals.kr@gmail.com">allianceforanimals.kr@gmail
                            .com</a></p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 d-flex">
                <div class="align-self-stretch box p-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-facebook"></span>
                    </div>
                    <h3 class="mb-4">Facebook</h3>
                    <p><a target="_blank"
                          href="https://www.facebook.com/allianceforanimals.kr/">/allianceforanimals.kr/</a></p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 d-flex">
                <div class="align-self-stretch box p-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-instagram"></span>
                    </div>
                    <h3 class="mb-4">Instagram</h3>
                    <p><a target="_blank" href="https://www.instagram.com/alliance4animals_kr/">&#64;alliance4animals_kr
                        </a></p>
                </div>
            </div>
        </div>

    </div>
</section>
<div class="row">
    <div class="col-md-12 text-center">

        <p>
            ©
            <script>document.write(new Date().getFullYear());</script>
            Альянс Захисників Тварин <i class="fas fa-paw"></i>
        </p>
    </div>
</div>

<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00"/>
    </svg>
</div>


<script src="/js/jquery.min.js"></script>
<script src="/js/jquery-migrate-3.0.1.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.easing.1.3.js"></script>
<script src="/js/jquery.waypoints.min.js"></script>
<script src="/js/jquery.stellar.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/jquery.magnific-popup.min.js"></script>
<script src="/js/aos.js"></script>
<script src="/js/jquery.animateNumber.min.js"></script>
<script src="/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="/js/google-map.js"></script>
<script src="/js/main.js"></script>

<script>

    $(document).ready(function () {
        $("#our_activities_div>h2").addClass('subheading');
    });

    var btn = $('#button');

    $(window).scroll(function () {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({scrollTop: 0}, '300');
    });
</script>

</body>
</html>
