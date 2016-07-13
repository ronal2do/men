<section id="secAgenda" class="wrapper special section-agenda">
    <div class="inner">
        <header class="major">
            <h2 class="Titulo"><br>AGENDA DE SHOWS</h2>
        
        </header>
    </div>
    <div class="area-data-agenda conteudo_2 flex">
        @forelse ($agendas as $a)
            <a href="{{ $a->url }}" title="{{ $a->nome }}" class="Agenda-Item" target="_blank">
              <div class="cada-data clearfix fade-left animated fadeInLeft">
                  <div class="data">
                      <h1 class="dia">{{ date('d ', strtotime($a->data)) }}
                      </h1>
                      <p class="mes">
                          @if ( date('m ',strtotime($a->data)) == 1)
                             Janeiro
                          @elseif ( date('m ',strtotime($a->data)) == 2)
                             Fevereiro
                          @elseif ( date('m ',strtotime($a->data)) == 3)
                             Março
                          @elseif ( date('m ',strtotime($a->data)) == 4)
                             Abril
                          @elseif ( date('m ',strtotime($a->data)) == 5)
                             Maio
                          @elseif ( date('m ',strtotime($a->data)) == 6)
                             Junho
                          @elseif ( date('m ',strtotime($a->data)) == 7)
                             Julho
                          @elseif ( date('m ',strtotime($a->data)) == 8)
                             Agosto
                          @elseif ( date('m ',strtotime($a->data)) == 9)
                             Setembro
                          @elseif ( date('m ',strtotime($a->data)) == 10)
                             Outubro                 
                          @elseif ( date('m ',strtotime($a->data)) == 11)
                             Novembro
                          @else
                              Dezembro
                          @endif
                      </p>
                  </div>

                  <div class="cidade-local">
                      <p class="local">{{ $a->nome }}</p>
                      @if( $a->url != '')
                          <p class="local"><i class="fa fa-facebook-official"></i></p>
                      @endif
                  </div>
              </div>
          </a>
        @empty    
          <div class="cada-data clearfix fade-left animated fadeInLeft">
              Nenhum evento
          </div>
        @endforelse         
            
    </div>
</section>