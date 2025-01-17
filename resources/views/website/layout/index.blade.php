<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <!-- Site Title-->
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css"
        href="//fonts.googleapis.com/css?family=Kanit:300,400,500,500i,600,900%7CRoboto:400,900">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
    <style>
    .ie-panel {
        display: none;
        background: #212121;
        padding: 10px 0;
        box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
        clear: both;
        text-align: center;
        position: relative;
        z-index: 1;
    }

    html.ie-10 .ie-panel,
    html.lt-ie-10 .ie-panel {
        display: block;
    }
    </style>
</head>

<body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img
                src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820"
                alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
    </div>
    <div class="preloader">
        <div class="preloader-body">
            <div class="preloader-item"></div>
        </div>
    </div>
    <!-- Page-->
    <div class="page"><a class="d-none d-xl-block"
            href="https://www.templatemonster.com/website-templates/allstar-multi-sports-website-template-63853.html"
            target="blank"><img class="d-block w-100" src="images/banner-free-01.jpg" alt=""></a>
        <!-- Page Header-->
        <header class="section page-header rd-navbar-dark">
            @include ('website.component.header')
        </header>
        <section>

            @yield ('content')

        </section>
        <footer class="section footer-classic footer-classic-dark context-dark">
            @include ('website.component.footer')
        </footer>

        <!-- Modal Video-->
        <div class="modal modal-video fade" id="modal1" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="560" height="315"
                                data-src="https://www.youtube.com/embed/uSzNA2_y46c"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>