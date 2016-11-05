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
                        <a href="#two" class="more scrolly">Conheça</a>
                    </section>


                <!-- One -->

                @include('includes.ep')

                <!-- Two -->
                    <section id="two" class="wrapper alt style2">
                        <section class="spotlight">
                            <div class="image">
                                <img src="images/dupla.jpg" alt="" />
                            </div>
                            <div class="content">
                                <h2 class="Titulo">A Dupla</h2>
                                <p>
                                  Com mais de 15 anos de trajetória, a dupla Mateus & Nathan é considerada a nova revelação do momento, levando o melhor da música sertaneja ao seu público.
                                  Com talento promissor e base musical influenciada pela música sertaneja de raiz, a dupla se destaca na versatilidade em transitar dos hits consagrados ao Sertanejo Universitário.
                                </p>
                                <a href="/release"><h4 class="">Confira o release <i class="fa fa-plus"></i></h4></a>

                            </div>
                        </section>
                        <section class="spotlight">
                            <div class="image"><img src="images/dupla2.jpg" alt="" /></div><div class="content">
                                <h2 class="Titulo">na sua festa</h2>
                                <p>
                                  A dupla garante um show animado e inusitado, reunindo um repertório repleto de sertanejo de raiz e também músicas atuais, com voz e violão.
                                </p>
                                <a href=""><h4 class="">COMO CONTRATAR <i class="fa fa-plus"></i></h4></a>
                            </div>
                        </section>
                        <section class="spotlight">
                        <style>
                            iframe {
                                float: left;
                                width: 100%;
                                height: 471px;
                                border: none;
                                padding: 2em;
                            }

                        </style>
                            <div class="image"><iframe src="https://www.youtube.com/embed/Ki2TPyihBe8?autoplay=0&amp;rel=0&amp;loop=1&amp;showinfo=0&amp;disablekb=1&amp;controls=0" class="youtube"></iframe></div><div class="content">
                                <h2 class="Titulo">MAtEUS E NATHAN no youtube</h2>
                                <p>Mais de 800 mil visualizações.</p>
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
