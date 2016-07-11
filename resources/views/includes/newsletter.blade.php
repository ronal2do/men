<section id="cta" class="wrapper style4">
    <div class="inner">
        <header>
            <h2><br>Fique por dentro das novidades</h2>
            <p class="news">Receba todas a novidades da dupla e descontos.</p>
        </header>
        <ul class="actions vertical">
            <form role="form" action="/newsletter" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <li><input type="text" name="email" id="" placeholder="Seu e-mail aqui"></li>
    <!--        <li><a href="#" class="button fit special">Área de fãns</a></li> -->
            <li><input type="submit" class="button fit" value="Participar"></li>
            </form>
        </ul>
    </div>
</section>