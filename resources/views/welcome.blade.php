@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Bem-vindo</div>

                <div class="panel-body">
                    <div class="row">
                        <h3 class="text-center">Clique no link abaixo para visualizar a lista de usuários.</h3>
                    </div>
                    <div class="row">
                        <h4 class="text-center">{{ link_to_route('user.index', 'Lista de usuários', null) }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection