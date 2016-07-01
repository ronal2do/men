@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @include('painel.agenda.index')            
            @include('painel.agenda.tabela')

        </div>
    </div>
</div>
@endsection
