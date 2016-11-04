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
                            <h2>Release</h2>
                        </header>
                        <section class="wrapper">
                            <div class="inner">

                                <section>
                                    <p>
                                   Ainda na infância, os irmãos tomaram conhecimento e gosto pela música sertaneja. Durante boa parte da vida, trilharam caminhos profissionais diferentes, até que o destino os uniu para que fossem não apenas irmãos, mas, sim, uma dupla de cantores sertanejos. Foi quando surgiu Mateus & Nathan.

                                    <br><br>

                                    Hoje, com mais de 15 anos de trajetória, eles marcam presença em todo o território nacional, trazendo alegria ao seu público com o melhor do sertanejo.<br><br>

                                    Tendo sua base musical influenciada pela música sertaneja de vanguarda, a dupla se destaca pela versatilidade ao transitar do sertanejo de raiz ao sertanejo universitário.   <br><br>

                                    Em seus shows, eles apresentam um repertório com grandes hits da música sertaneja, composições inéditas e parcerias.
                                      </p>


                                    <div class="box alt">
                                        <div class="row uniform 50%">
                                            <div class="12u"><span class="image fit"><img src="images/banner.jpg" alt="" /></span></div>
                                        </div>
                                    </div>
                                </section>

                            </div>
                        </section>
                    </article>
@endsection
