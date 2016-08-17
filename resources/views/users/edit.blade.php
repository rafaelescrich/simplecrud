@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Editar usuário</div>

                <div class="panel-body">
                    
                    {!! Form::model($user,array('route'=>['user.update', $user->id], 'method'=>'PUT')) !!}
                        <div class="form-group">
                            {{ Form::label('username', 'Username') }}
                            {{ Form::text('username', null, ['class'=>'form-control']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('password', 'Senha') }}
                            {{ Form::text('password', null, ['class'=>'form-control']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('email', 'Email') }}
                            {{ Form::text('email', null, ['class'=>'form-control']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('phone', 'Telefone') }}
                            {{ Form::text('phone', null, ['class'=>'form-control']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('name', 'Nome') }}
                            {{ Form::text('name', null, ['class'=>'form-control']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('cpf', 'CPF') }}
                            {{ Form::text('cpf', null, ['class'=>'form-control']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('rg', 'RG') }}
                            {{ Form::text('rg', null, ['class'=>'form-control']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::button('Editar', ['type'=>'submit', 'class'=>'btn btn-primary']) }}
                        </div>
                    {!! Form::close() !!}

                </div>
            </div>
            
            @if($errors->has())
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

        </div>
    </div>
</div>
@endsection