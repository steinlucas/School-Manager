@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row">
        <h3>Novo Professor</h3>
        <form action={{ route('professor.store') }} method="post">
        @csrf
            <div>
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome">
            </div>

            <div>
                <label for="registro">Registro</label>
                <input type="text" id="registro" name="registro">
            </div>
            
            <div>
                <label for="cpf">CPF</label>
                <input type="text" id="cpf" name="cpf">
            </div>

            <div>
                <label for="formacao">Formação</label>
                <input type="text" id="formacao" name="formacao">
            </div>

            <div>
                <label for="cidade">Cidade</label>
                <input type="text" id="cidade" name="cidade">
            </div>

            <div>
                <label for="telefone">Telefone</label>
                <input type="text" id="telefone" name="telefone">
            </div>

            <div class="form-group">
                    <input type="submit" name="save_professor" value="Salvar professor" class="btn btn-success">
                    <input type="submit" name="cancel" value="Cancelar" class="btn btn-info">
            </div>

        <form>
    </div>
    </form>
</div>
@endsection
