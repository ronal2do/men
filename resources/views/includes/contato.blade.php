<section id="three" class="wrapper style2 special">
    <div class="inner">
        <header class="major">
            <h2 class="Titulo">CONTATO PARA SHOWS</h2>
        </header>
        <ul class="features">
            @forelse($contatos as $c)
            <li class="icon">
                <h3>{{$c->nome}}</h3>
                <p class="mes">{{$c->telefone}} <br>{{$c->email}}</p>
                <br>
            </li>
            @empty
             <li class="icon">
                <h3>Nenhum contato</h3>
            </li>
            @endforelse
          
        </ul>
    </div>
</section>