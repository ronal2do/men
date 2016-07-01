 
 <table class="table table-condensed table-striped table-hovered">
    <thead>
      <tr>
        <th>Data</th>
        <th>Titulo</th>
        <th>#</th>
      </tr>
    </thead>
    <tbody>
      @foreach($agendas as $a)
      <tr>
        <td>{{ date('d/m ', strtotime($a->data)) }}</td>
        <td>{{ $a->nome }}</td>     
<!--         <td>{{ $a->url }}</td>
 -->     
        <td><a href="/{{ $a->id }}/deletar"><i class="glyphicon glyphicon-trash"></i></a>
          </td>
   
      </tr>
      @endforeach
    </tbody>
  </table>