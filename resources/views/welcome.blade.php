@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Bem-vindo</div>

                <div class="panel-body">
                    <h3>Clique no link abaixo para visualizar a lista de usuários.</h3>

                    <div class="btn btn-primary text-center">{{ link_to_route('user.index', 'Lista de usuários', null, ['class'=>'btn btn-primary']) }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
