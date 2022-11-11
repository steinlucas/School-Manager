@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4"> <h3>Listagem de Cursos</h3> </div>
    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Ano oferta</th>
                    <th>Data início</th>
                    <th>Data fim</th>
                    <th>Carga horária</th>
                </tr>
            </thead>
            <tbody>
            @foreach($cursos as $curso)
                <tr>
                    <td>{{ $curso->id }}</td>
                    <td>{{ $curso->nome }}</td>
                    <td>{{ $curso->ano_oferta }}</td>
                    <td>{{ $curso->data_inicio }}</td>
                    <td>{{ $curso->data_fim }}</td>
                    <td>{{ $curso->carga_horaria }}</td>
                    <td>
                        <ul class="list-inline">
                            <li> <a href="{{ route('curso.edit', ['id' => $curso->id]) }}">Editar</a> </li>
                            <li> <a href="{{ route('curso.destroy', ['id' => $curso->id]) }}">Deletar</a>  </li>
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
    <div class="col-md-8"> <a href="{{ route('curso.create') }}" class="btn btn-primary">Incluir Curso</a> </div>
</div>
@endsection