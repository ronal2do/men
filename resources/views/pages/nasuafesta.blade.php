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
                        <header>
                            <h2>Na sua festa</h2>
                            <p>Surpreenda seus amigos e funcionários com ... </p>
                        </header>
                        <section class="wrapper style5">
                            <div class="inner">
                                <section style="text-align:center;">
                                    <p><!-- <span class="image left"><img src="images/dupla2.jpg" alt="" /></span> -->
                                    <h3>DUPLA</h3 <br>
                                    A dupla promove um show animado e inusitado, reunindo um repertório repleto de sertanejo de raiz, além de músicas atuais, com voz e violão. É feita uma seleção de músicas específicas e personalizadas de acordo com a necessidade de cada evento, fazendo de cada apresentação única e especial.
                                    </p>
                                   <!-- <span class="image right"><img src="images/pic5.jpg" alt="" /></span> -->
                                    <h3>BANDA COMPLETA </h3>
                                    <p>Neste formato, todos sobem ao palco e dão ao público uma experiência ímpar, com homenagens a grandes nomes da música sertaneja. A dupla interage com o público e a banda garante que ninguém fique parado.  </p>
                                    
                                </section>
                                <section style="text-align:center;">
                                    <p><!-- <span class="image left"><img src="images/pic4.jpg" alt="" /></span> -->
                                    <h3>CLIPAGEM</h3><br>
                                    Principais Apresentações <br>
                                    Programa Raul Gil (SBT) <br>
                                    Programa Legendários (Rede Record) <br>
                                    Programa Melhor Do Brasil (Rede Record) <br>
                                    Programa Domingo Da Gente com Latino (Rede Record) <br>
                                    Programa Amor E Sexo (Rede Globo) <br>
                                    Programa Justus + (Rede Record) <br>
                                    Programa Domingo Da Gente Apresentação 
                                    Wanessa Camargo (Rede Record) <br>
                                    Mix TV Club Sertão Caipira. <br>
                                    Entre outros... <br>
                                    Alguns Links <br>
                                    </p>

                                    <p>
                                    Vídeos do youtube ou conheça nosso canal no youtube.
                                    </p>
                              
                                </section>
                                            
                            </div>
                        </section>
                    </article>        
                    <section id="one" class="style1 special">
                        
                        @include('includes.galeria2')
                
                    </section>
@endsection
