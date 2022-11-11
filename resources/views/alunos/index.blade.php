@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4"> <h3>Listagem de Alunos</h3> </div>
    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Cidade</th>
                    <th>Telefone</th>
                    <th>Sexo</th>
                    <th>Data nascimento</th>
                    <th>Matricula</th>
                    <th>Data matrícula</th>
                </tr>
            </thead>
            <tbody>
            @foreach($alunos as $aluno)
                <tr>
                    <td>{{ $aluno->id }}</td>
                    <td>{{ $aluno->nome }}</td>
                    <td>{{ $aluno->registro }}</td>
                    <td>{{ $aluno->cpf }}</td>
                    <td>{{ $aluno->formacao }}</td>
                    <td>{{ $aluno->cidade }}</td>
                    <td>{{ $aluno->telefone }}</td>
                    <td>
                        <ul class="list-inline">
                            <li> <a href="{{ route('aluno.edit', ['id' => $aluno->id]) }}">Editar</a> </li>
                            <li> <a href="{{ route('aluno.destroy', ['id' => $aluno->id]) }}">Deletar</a>  </li>
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
    <div class="col-md-8"> <a href="{{ route('aluno.create') }}" class="btn btn-primary">Incluir Professor</a> </div>
</div>
@endsection

