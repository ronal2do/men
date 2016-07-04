<form class="form-horizontal" role="form" action="/criarcontato" method="POST">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label class="control-label col-sm-2" for="nome">Nome:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome que irá exibir">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10"> 
      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="telefone">Telefone:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Enviar</button>
    </div>
  </div>
</form>


@section('postscript')
@endsection