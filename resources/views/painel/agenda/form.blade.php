<form class="form-horizontal" role="form" action="/criaragenda" method="POST">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label class="control-label col-sm-2" for="nome">Nome:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Titulo do evento">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="url">Link:</label>
    <div class="col-sm-10"> 
      <input type="url" class="form-control" id="url" name="url" placeholder="link do evento">
    </div>
  </div>
  <div class="form-group">
  <label class="control-label col-sm-2" for="pwd">Data:</label>
 	<div class="col-sm-10">	
		<div class="input-group date">
		  <input id="data" type="text" class="form-control" name="data"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
		</div>
	</div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Enviar</button>
    </div>
  </div>
</form>


@section('postscript')
<script src="./assets/locales/bootstrap-datepicker.pt-BR.min.js" charset="UTF-8"></script>
<script>
$('#data').datepicker({
	format: "yyyy-mm-dd",
    language: "pt-BR",
    todayHighlight: true
});
</script>
@endsection