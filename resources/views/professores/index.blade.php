@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4"> <h3>Listagem de Professores</h3> </div>
    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Registro</th>
                    <th>CPF</th>
                    <th>Formação</th>
                    <th>Cidade</th>
                    <th>Telefone</th>
                </tr>
            </thead>
            <tbody>
            @foreach($professores as $professor)
                <tr>
                    <td>{{ $professor->id }}</td>
                    <td>{{ $professor->nome }}</td>
                    <td>{{ $professor->registro }}</td>
                    <td>{{ $professor->cpf }}</td>
                    <td>{{ $professor->formacao }}</td>
                    <td>{{ $professor->cidade }}</td>
                    <td>{{ $professor->telefone }}</td>
                    <td>
                        <ul class="list-inline">
                            <li> <a href="{{ route('professor.edit', ['id' => $professor->id]) }}">Editar</a> </li>
                            <li> <a href="{{ route('professor.destroy', ['id' => $professor->id]) }}">Deletar</a>  </li>
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
    <div class="col-md-8"> <a href="{{ route('professor.create') }}" class="btn btn-primary">Incluir Professor</a> </div>
</div>
@endsection

