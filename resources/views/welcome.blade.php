<!DOCTYPE HTML>
<!--
    Mateus & Nathan
-->
<html>
    <head>
        <title>Mateus & Nathan</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="assets/css/album.css" />
        <link rel="stylesheet" href="assets/css/main.css" />

        <link rel="stylesheet" href="assets/css/sweetalert.css" />
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    </head>
@yield('content')
    <!-- Footer -->
        <footer id="footer">
            <ul class="icons">
                <li><a target="_blank" href="https://twitter.com/mateusnathanofi" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a target="_blank" href="https://www.facebook.com/MateuseNathanOficial/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a target="_blank" href="https://www.instagram.com/mateusenathanoficial/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a target="_blank" href="https://www.youtube.com/user/MateuseNathanOficial" class="icon fa-youtube"><span class="label">Youtube</span></a></li>
                <li><a target="_blank" href="#" class="icon fa-snapchat"><span class="label">Snapchat</span></a></li>
            </ul>
            <ul class="copyright">
                <li>&copy; Mateus & Nathan</li><!-- <li>Design: <a target="_blank" href="http://html5up.net">HTML5 UP</a></li> -->
            </ul>
        </footer>
        </div>
        <!-- Scripts -->
        <script src="assets/js/app.js"></script>
        <script src="assets/js/sweetalert.min.js"></script>
@yield('postscript')
<!-- Include this after the sweet alert js file -->
 @include('sweet::alert')
    </body>
</html>
