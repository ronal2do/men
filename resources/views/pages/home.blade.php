@extends('welcome')

@section('content')       
<body class="landing">
        <!-- Page Wrapper -->
            <div id="page-wrapper">
                <!-- Header -->

                 <header id="header" class="alt">
                        <h1><a href="/">Mateus <span class="Amarelo">&</span> Nathan</a></h1>
                         @include('includes.nav')
                    </header>

                <!-- Banner -->
                    <section id="banner">
                        <div class="inner">
                            <h2>Mateus <span class="Amarelo">&</span> Nathan</h2>
                            
                        </div>
                        <a href="#two" class="more scrolly">Conheça</a>
                    </section>


                <!-- One -->
                    
                    <section id="one" class="wrapper style1 special">
                        <div class="inner">
                            <header class="major">
<!--                                <h2>Arcu aliquet vel lobortis ata nisl</h2> -->
                                <p>
                                    Aliquam ut ex ut augue consectetur interdum. 
                                    165 mil seguidores
                                </p>
                            </header>
                            <ul class="icons major">
                                <li><span class="icon fa-facebook major style1"><span class="label">Facebook</span></span></li>
                                <li><span class="icon fa-instagram major style2"><span class="label">instagram</span></span></li>
                                <li><span class="icon fa-twitter major style3"><span class="label">twitter</span></span></li>
                                <li><span class="icon fa-snapchat major style4"><span class="label">snapchat</span></span></li>
                                <li><span class="icon fa-youtube major style5"><span class="label">youtube</span></span></li>
                            </ul>
                            <br>
                        </div>
                    </section>

                <!-- Two -->
                    <section id="two" class="wrapper alt style2">
                        <section class="spotlight">
                            <div class="image">
                                <img src="images/dupla2.jpg" alt="" />
                            </div>
                            <div class="content">
                                <h2 class="Titulo">A Dupla</h2>
                                <p>Com mais de 15 anos de trajetória a Dupla Mateus e Nathan marcam presença em todo território nacional, trazendo alegria ao seu público e levando o melhor do sertanejo.</p>
                            </div>
                        </section>
                        <section class="spotlight">
                            <div class="image"><img src="images/dupla.jpg" alt="" /></div><div class="content">
                                <h2 class="Titulo">Na sua festa</h2>
                                <p>A dupla garante um show animado e inusitado, reunindo um repertório repleto de sertanejo de raiz e também músicas atuais, com voz e violão.</p>
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
                                <p>Mais de 780 mil visualizações.</p>
                            </div>
                        </section>
                    </section>
    
                    <!-- Agenda -->
                    @include('includes.agenda')
                    <!-- Three -->              
                    <section id="one" class="wrapper style1 special">
                        
                            <div id="freewall" class="free-wall"></div>
                
                    </section>


                    <section id="three" class="wrapper style2 special">
                        <div class="inner">
                            <header class="major">
                                <h2 class="Titulo">CONTATO PARA SHOWS</h2>
                            </header>
                            <ul class="features">
                                
                                <li class="icon">
                                    <h3>Ronaldo</h3>
                                    <p class="mes">11 96057.8787 <br>contato@mateusenathan.com.br</p>
                                    <br>
                                </li>
                                <li class="icon">
                                    <h3>Ronaldo</h3>
                                    <p class="mes">11 96057.8787 <br>contato@mateusenathan.com.br</p>
                                    <br>
                                </li>
                                <li class="icon">
                                    <h3>Ronaldo</h3>
                                    <p class="mes">11 96057.8787 <br>contato@mateusenathan.com.br</p>
                                    <br>
                                </li>
                                <li class="icon">
                                    <h3>Ronaldo</h3>
                                    <p class="mes">11 96057.8787 <br>contato@mateusenathan.com.br</p>
                                    <br>
                                </li>
                            </ul>
                        </div>
                    </section>

                <!-- CTA -->
                    <section id="cta" class="wrapper style4">
                        <div class="inner">
                            <header>
                                <h2>Fique por dentro das novidades</h2>
                                <p class="news">Receba todas a novidades da dupla e descontos.</p>
                            </header>
                            <ul class="actions vertical">
                                <li><input type="text" name="" id="" placeholder="Seu e-mail aqui"></li>
                        <!--        <li><a href="#" class="button fit special">Área de fãns</a></li> -->
                                <li><a href="#" class="button fit">Participar</a></li>
                            </ul>
                        </div>
                    </section>
@endsection
