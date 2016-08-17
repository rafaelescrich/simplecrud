@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Usuários</div>

                <div class="panel-body">
                    @foreach($users as $user)
                        {{ $user->username }} <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection