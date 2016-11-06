@extends('welcome')
@section('content')
        <body>
        <!-- Page Wrapper -->
            <div id="page-wrapper">

                <!-- Header -->
                    <header id="header">
                     <h1><a href="/">
                            <img src="./images/logo2.svg" alt="" class="Bar-logo"></a></h1>
                           @include('includes.nav')
                    </header>

                    <article id="main">
                        <header class="release">
                            <h2>Na sua festa</h2>
                            <p>Surpreenda seus amigos e colaboradores</p>
                            <section class="wrapper" style="background: rgba(134, 25, 66, 0.84); text-transform: none;">
                                <div class="inner">
                                  <section style="text-align:left;">
                                    <div class="Flex">
                                      <span class="image"><img src="images/dupla2.jpg" alt="" /></span>

                                      <div class="Cinquenta">
                                        <h3 class="Titulo">DUPLA</h3 >

                                        <p style="text-transform:none;">
                                        A dupla promove um show animado e inusitado, reunindo um repertório repleto de sertanejo de raiz, além de músicas atuais, com voz e violão. É feita uma seleção de músicas específicas e personalizadas de acordo com a necessidade de cada evento, fazendo de cada apresentação única e especial.
                                        </p>
                                      </div>

                                    </div>

                                    <div style="clear:both;"></div>

                                    <div class="Flex">
                                      <div class="Cinquenta">
                                        <h3 class="Titulo">TRIO</h3>
                                        <p style="text-transform:none;">
                                          Neste formato, Mateus & Nathan cantam acompanhados de violões e sanfona. Show que vai dos clássicos ao Sertanejo Universitário.
                                        </p>
                                      </div>
                                      <span class="image"><img src="images/pic5.jpg" alt="" /></span>
                                    </div>

                                    <div class="Flex">
                                      <span class="image"><img src="images/pic5.jpg" alt="" /></span>

                                      <div class="Cinquenta">
                                        <h3 class="Titulo">BANDA COMPLETA </h3>
                                        <p style="text-transform:none;">
                                          Neste formato, todos sobem ao palco e dão ao público uma experiência ímpar, com homenagens a grandes nomes da música sertaneja. A dupla interage com o público e a banda garante que ninguém fique parado.
                                        </p>
                                      </div>
                                    </div>


                                    <br><br>
                                    </section>

                                </div>
                            </section>
                        </header>

                    </article>
@endsection
