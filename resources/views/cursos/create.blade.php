@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <h3>Novo Curso</h3>
        <form action={{ route('curso.store') }} method="post">
        @csrf
            <div>
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome">
            </div>

            <div>
                <label for="ano_oferta">Ano oferta</label>
                <input type="text" id="ano_oferta" name="ano_oferta">
            </div>
            
            <div>
                <label for="data_inicio">Data início</label>
                <input type="text" id="data_inicio" name="data_inicio">
            </div>

            <div>
                <label for="data_fim">Data fim</label>
                <input type="text" id="data_fim" name="data_fim">
            </div>

            <div>
                <label for="carga_horaria">Carga horária</label>
                <input type="text" id="carga_horaria" name="carga_horaria">
            </div>

            <div class="form-group">
                <input type="submit" name="save_curso" value="Salvar curso" class="btn btn-success">
                <input type="submit" name="cancel" value="Cancelar" class="btn btn-info">
            </div>

        <form>
    </div>
    </form>
</div>
@endsection