@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

        @if(Session::has('message'))
            <div class="alert alert-success">{{ Session::get('message') }}
            </div>
        @endif

            <div class="panel panel-default">
                <div class="panel-heading">Usuários</div>

                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>RG</th>
                            <th>Ações</th>
                        </tr>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->cpf }}</td>
                                <td>{{ $user->rg }}</td>
                                <td>
                                    {!! Form::open(array('route'=>['user.destroy', $user->id], 'method'=>'DELETE')) !!}


                                        {{ link_to_route('user.edit', 'Editar', [$user->id], ['class'=>'btn btn-warning']) }}
                                        {{ Form::button('Apagar', ['type'=>'submit', 'class'=>'btn btn-danger']) }}
                                    
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            {{ link_to_route('user.create', 'Adicione novo usuário', null, ['class'=>'btn btn-primary']) }}
        </div>
    </div>
</div>
@endsection