 <table class="table table-condensed table-striped table-hovered">
    <thead>
      <tr>
        <th>Email</th>
        <th>#</th>
      </tr>
    </thead>
    <tbody>
      @foreach($newsletters as $n)
      <tr>
        <td>{{ $n->email }}</td>
     
        <td><a href="/{{ $n->id }}/ndeletar"><i class="glyphicon glyphicon-trash"></i></a>
          </td>
   
      </tr>
      @endforeach
    </tbody>
  </table>