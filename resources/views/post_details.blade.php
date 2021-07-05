<!DOCTYPE html>
<html lang="en">
<head>
    <title>Розпахнуті крила - кампанія за звільнення курей від кліток</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link data-n-head="ssr" rel="icon" type="image/x-icon" href="/images/chicken.png">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
            crossorigin="anonymous"></script>

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
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/"><span>Розпахнуті крила</span></a>
        {{--<button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">--}}
        {{--<span class="oi oi-menu"></span> Меню--}}
        {{--</button>--}}


    </div>
</nav>

<section class="hero-wrap hero-wrap-2" style="        background-image: url('{{$post->getImage()}}');"
         data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <p class="subheading">{{$post->getDate()}}</p>
                <h1 class="mb-3 bread">{{$post->title}}</h1>
                <p class="breadcrumbs">
                <span class="mr-2">
                        <a href="{{route('main')}}">
                        Головна
                        <i class="ion-ios-arrow-forward"></i>
                            </a>
                    {{--<a href="{{route('blog.show')}}">--}}
                        {{--Блог--}}
                        {{--<i class="ion-ios-arrow-forward"></i>--}}
                            {{--</a>--}}
                        </span>
                </p>

            </div>
        </div>
    </div>
</section>


<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 order-lg-last ftco-animate">
                {!! $post->content !!}

            </div> <!-- .col-md-8 -->


        </div>
    </div>
</section> <!-- .section -->
<section class="ftco-section contact-section ftco-no-pb" data-section="contact">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">{{$content->contacts__name}}</span>
                <h2 class="mb-4">{{$content->contacts__title}}</h2>
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
                    <p>
                        <a target="_blank" href="https://www.instagram.com/alliance4animals_kr/">
                            &#64;alliance4animals_kr
                        </a>
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>


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
        $("img").addClass('img-fluid');
        $("iframe").addClass('embed-responsive embed-responsive-16by9');
        $("img").removeAttr('style');

    });

</script>
</body>
</html>
