@extends('welcome')

@section('content')
<body class="landing">
<!-- Page Wrapper -->
    <div id="page-wrapper">
        <!-- Header -->

            <header id="header" class="alt">
                <h1><a href="/">
                    <img src="./images/logo2.svg" alt="" class="Bar-logo"></a></h1>
                    @include('includes.nav')
            </header>

        <!-- Banner -->
            <section id="banner">
                <div class="inner">
                    <h2>
                    <img src="./images/logo2.svg" alt=""></h2>
                </div>
                <a href="#one" class="more scrolly">

                    <div>
                    Conheça</div>
                        
                </a>
                    <div class="social-scrolly">
                        <a href="https://www.facebook.com/MateuseNathanOficial/" target="_blank"><i class="fa fa-facebook fa-2x"></i> </a>
                        <a href="https://www.instagram.com/mateusenathanoficial/" target="_blank"><i class="fa fa-instagram fa-2x"></i> </a>
                        <a href="https://www.youtube.com/user/MateuseNathanOficial" target="_blank"><i class="fa fa-youtube fa-2x"></i> </a>
                        <a href="https://open.spotify.com/artist/69Se3xEfSdjFJaKJMm4fGv" target="_blank"><i class="fa fa-spotify fa-2x"></i> </a>
                    </div>
            </section>
        <!-- One -->

        @include('includes.ep')
        @include('includes.video')
        <!-- Two -->
        <section id="two" class="wrapper alt style2">
            
            <section class="spotlight">

                <div class="wrap">

                    <div class="image"><img src="images/dupla2.jpg" alt="" /></div>
                    
                    <div class="content">
                        <h2 class="Titulo">A Dupla</h2>
                        <p style="max-width: 570px; text-align: justify;">
                            Com mais de 15 anos de trajetória, a dupla Mateus & Nathan é considerada a nova revelação do momento, levando o melhor da música sertaneja ao seu público.
                            Com talento promissor e base musical influenciada pela música sertaneja de raiz, a dupla se destaca na versatilidade em transitar dos hits consagrados ao Sertanejo Universitário.
                        </p>
                        <a href="/release"><h4 class="">Confira o release <i class="fa fa-plus"></i></h4></a>
                    </div>

                </div>

            </section>
            
            <section class="spotlight segundo">

                <div class="wrap" style="flex-direction: row-reverse;">
                    <div class="content">
                        <h2 class="Titulo">no seu evento</h2>
                        <p  style="max-width: 570px; text-align: right;">
                            A dupla garante um show animado e inusitado, reunindo um repertório repleto de sertanejo de raiz e também músicas atuais, com voz e violão.
                        </p>
                        <a href="/nasuafesta"><h4 class="">COMO CONTRATAR <i class="fa fa-plus"></i></h4></a>                        
                    </div>
                    <div class="image">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/x9wzEC9rcdo" frameborder="0" allowfullscreen></iframe>
                    </div>

                </div>

            </section>

        </section>

        <!-- Agenda -->
        @include('includes.agenda')
        <!-- Three -->
        <section id="one" class="style1 special">
        @include('includes.galeria')
        </section>

        <!-- Contato -->
        @include('includes.contato')

        <!-- Newslleter -->
        @include('includes.newsletter')


@endsection
