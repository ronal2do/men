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
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="assets/css/agenda.css" />
        <link rel="stylesheet" href="assets/css/fotos.css" />
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
        <style>
            .Amarelo{
                color: #c59305;
                font-family: initial;
                font-size: 0.5em;
                top: -0.3em;
                position: relative;
                letter-spacing: .02em;
                z-index: 2;
                text-shadow:
                   -1px -1px 0 #2e3842,  
                    1px -1px 0 #2e3842,
                    -1px 1px 0 #2e3842,
                     1px 1px 0 #2e3842;

            }
            .Amarelo:before{
                    content: "M";
                    position: relative;
                    top: -0.2em;
                    font-family: "CCSentinel W00 Regular";
                    font-size: 2em;
                
            }
            .Amarelo:after{
                content: "N";
                right: 0;    
                position: relative;
                top: 0.5em;
                font-family: "CCSentinel W00 Regular";
                font-size: 2em;
            }
            .Titulo{
                position: absolute;
                font-size: 2em;
            }
            .Titulo:after {
                -moz-transition: width 0.85s ease;
                -webkit-transition: width 0.85s ease;
                -ms-transition: width 0.85s ease;
                transition: width 0.85s ease;
                -moz-transition-delay: 0.25s;
                -webkit-transition-delay: 0.25s;
                -ms-transition-delay: 0.25s;
                transition-delay: 0.25s;
                background: #fff;
                content: '';
                display: block;
                height: 2px;
                position: absolute;
                width: 100%;
            }
            #one.wrapper {
                padding: 1em 0 1em 0;
            }
            .free-wall {
                margin: 15px;
            }

        </style>
    </head>


@yield('content')

                <!-- Footer -->
                    <footer id="footer">
                        <ul class="icons">
                            <li><a href="https://twitter.com/mateusnathanofi" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                            <li><a href="https://www.facebook.com/MateuseNathanOficial/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                            <li><a href="https://www.youtube.com/user/MateuseNathanOficial" class="icon fa-youtube"><span class="label">Dribbble</span></a></li>
                            <li><a href="#" class="icon fa-snapchat"><span class="label">Email</span></a></li>
                        </ul>
                        <ul class="copyright">
                            <li>&copy; Mateus & Nathan</li><!-- <li>Design: <a href="http://html5up.net">HTML5 UP</a></li> -->
                        </ul>
                    </footer>

            </div>

        <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrollex.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
            <script src="assets/js/main.js"></script>
            <script src="http://vnjs.net/www/project/freewall/freewall.js"></script>
            <script src="assets/js/fotos.js"></script>

    </body>
</html>