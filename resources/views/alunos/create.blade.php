@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <h3>Novo Aluno</h3>
        <form action={{ route('aluno.store') }} method="post">
        @csrf
            <div>
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome">
            </div>

            <div>
                <label for="cpf">CPF</label>
                <input type="text" id="cpf" name="cpf">
            </div>

            <div>
                <label for="endereco">Endereço</label>
                <input type="text" id="endereco" name="endereco">
            </div>
            
            <div>
                <label for="cidade">Cidade</label>
                <input type="text" id="cidade" name="cidade">
            </div>

            <div>
                <label for="telefone">Telefone</label>
                <input type="text" id="telefone" name="telefone">
            </div>

            <div>
                <label for="sexo">Sexo</label>
                <input type="text" id="sexo" name="sexo">
            </div>

            <div>
                <label for="data_nascimento">Data Nascimento</label>
                <input type="text" id="data_nascimento" name="data_nascimento">
            </div>

            <div>
                <label for="matricula">Matrícula</label>
                <input type="text" id="matricula" name="matricula">
            </div>

            <div>
                <label for="data_matricula">Data Matrícula</label>
                <input type="text" id="data_matricula" name="data_matricula">
            </div>

            <div class="form-group">
                <input type="submit" name="save_aluno" value="Salvar aluno" class="btn btn-success">
                <input type="submit" name="cancel" value="Cancelar" class="btn btn-info">
            </div>

        <form>
    </div>
    </form>
</div>
@endsection