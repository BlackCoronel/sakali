<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">

    <title>Homepage</title>
    <link rel="icon" href="favicon.png" type="image/png">
    <link rel="shortcut icon" href="favicon.ico" type="img/x-icon">

    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>
    <!-- CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <link href="/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="/css/responsive.css" rel="stylesheet" type="text/css">
    <link href="/css/animate.css" rel="stylesheet" type="text/css">
    <!-- links Javascript -->
    <script type="text/javascript" src="/js/jquery.1.8.3.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.js"></script>
    <script type="text/javascript" src="/js/jquery-scrolltofixed.js"></script>
    <script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="/js/jquery.isotope.js"></script>
    <script type="text/javascript" src="/js/wow.js"></script>
    <script type="text/javascript" src="/js/classie.js"></script>
    <script src="/contactform/contactform.js"></script>

    <!-- =======================================================
    Theme Name: Knight
    Theme URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
    ======================================================= -->

</head>

<body>
<nav class="main-nav-outer" id="test">
    <!--main-nav-start-->
    <div class="container">
        <ul class="main-nav">
            <li>
                <a href="/home"><i class="fa fa-home" style="margin-right: 10px;"></i>Inicio</a>
            </li>
            <li>
                <a href="/productos"><i class="fa fa-archive" style="margin-right: 10px;"></i>Productos</a>
            </li>
            <li class="small-logo">
                <a href="/"><img src="/img/logo.jpg" alt="" width="70%"></a>
            </li>
            <li>
                <a href="/team"><i class="fa fa-users" style="margin-right: 10px;"></i>Equipo</a>
            </li>
            <li>
                <a href="/contact"><i class="fa fa-phone" style="margin-right: 10px;"></i>Contacta</a>
            </li>
        </ul>
        <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
    </div>
</nav>

@yield('content')


<!--main-nav-end-->
<!--<section class="main-section team" id="equipo">
    <div class="container">
        <h2>team</h2>
        <h6>Eche un vistazo a nuesto equipo</h6>
       <div class="team-leader-block clearfix">
            <div class="team-leader-box">
                <div class="team-leader wow fadeInDown delay-03s">
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="img/team-leader-pic1.jpg" alt="">
                    <ul>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-pinterest"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-03s">Walter White</h3>
                <span class="wow fadeInDown delay-03s">Chief Executive Officer</span>
                <p class="wow fadeInDown delay-03s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
            </div>
            <div class="team-leader-box">
                <div class="team-leader  wow fadeInDown delay-06s">
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="img/team-leader-pic2.jpg" alt="">
                    <ul>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-pinterest"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-06s">Jesse Pinkman</h3>
                <span class="wow fadeInDown delay-06s">Product Manager</span>
                <p class="wow fadeInDown delay-06s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
            </div>
            <div class="team-leader-box">
                <div class="team-leader wow fadeInDown delay-09s">
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="img/team-leader-pic3.jpg" alt="">
                    <ul>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-pinterest"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-09s">Skyler white</h3>
                <span class="wow fadeInDown delay-09s">Accountant</span>
                <p class="wow fadeInDown delay-09s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
            </div>
        </div>
    </div>
</section>-->
<!--business-talking-end-->
<footer class="footer">
    <div class="container">
        <div class="footer-logo"><a href="#"><img src="img/logo.jpg" alt=""></a></div>
        <span class="copyright">@lang('validation.attributes.copy')</span>
    </div>
</footer>
</body>
<script type="text/javascript">
    $(document).ready(function(e) {

        $('#test').scrollToFixed();
        $('.res-nav_click').click(function() {
            $('.main-nav').slideToggle();
            return false

        });

        $('.Portfolio-box').magnificPopup({
            delegate: 'a',
            type: 'image'
        });

    });
</script>

<script>
    wow = new WOW({
        animateClass: 'animated',
        offset: 100
    });
    wow.init();
</script>


<script type="text/javascript">
    $(window).load(function() {

        $('.main-nav li a, .servicelink').bind('click', function(event) {
            var $anchor = $(this);

            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 102
            }, 1500, 'easeInOutExpo');
            /*
            if you don't want to use the easing effects:
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top
            }, 1000);
            */
            if ($(window).width() < 768) {
                $('.main-nav').hide();
            }
            event.preventDefault();
        });
    })
</script>

<script type="text/javascript">
    $(window).load(function() {


        var $container = $('.portfolioContainer'),
            $body = $('body'),
            colW = 375,
            columns = null;


        $container.isotope({
            // disable window resizing
            resizable: true,
            masonry: {
                columnWidth: colW
            }
        });

        $(window).smartresize(function() {
            // check if columns has changed
            var currentColumns = Math.floor(($body.width() - 30) / colW);
            if (currentColumns !== columns) {
                // set new column count
                columns = currentColumns;
                // apply width to container manually, then trigger relayout
                $container.width(columns * colW)
                    .isotope('reLayout');
            }

        }).smartresize(); // trigger resize to set container width
        $('.portfolioFilter a').click(function() {
            $('.portfolioFilter .current').removeClass('current');
            $(this).addClass('current');

            var selector = $(this).attr('data-filter');
            $container.isotope({

                filter: selector,
            });
            return false;
        });

    });
</script>

</html>
