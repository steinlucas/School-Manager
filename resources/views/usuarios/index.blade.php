@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4"> <h3>Listagem de Usuarios</h3> </div>
    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            @foreach($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->nome }}</td>
                    <td>{{ $usuario->endereco }}</td>
                    <td>{{ $usuario->telefone }}</td>
                    <td>
                        <ul class="list-inline">
                            <li> <a href="{{ route('usuario.edit', ['id' => $usuario->id]) }}">Editar</a> </li>
                            <li> <a href="{{ route('usuario.destroy', ['id' => $usuario->id]) }}">Deletar</a>  </li>
                        </ul>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    @if(Session::has('message'))
    <div class="alert alert-sucess alert-dismissible show" role="alert">
            <strong> {!! session()->get('message') !!}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="$('.alert').alert('close')">
            <span aria-hidden="true">×</span>
            </button>
    </div>
    @endif
    <div class="col-md-8"> <a href="{{ route('usuario.create') }}" class="btn btn-primary">Incluir Usuário</a> </div>
</div>
@endsection

