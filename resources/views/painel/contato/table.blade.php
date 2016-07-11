 <style>
   .Telefone:nth-child(2n){
      color: red;
   }
 </style>
 <table class="table table-condensed table-striped table-hovered">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Email</th>
        <th>#</th>
      </tr>
    </thead>
    <tbody>
      @foreach($contatos as $c)
      <tr>
        <td class="Telefone">{{ $c->nome }}</td>     
        <td>{{ $c->telefone }}</td>
        <td>{{ $c->email }}</td>
     
        <td><a href="/{{ $c->id }}/cdeletar"><i class="glyphicon glyphicon-trash"></i></a>
          </td>
   
      </tr>
      @endforeach
    </tbody>
  </table>