@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <h3>Alterando Aluno</h3>
        <form action={{ route('aluno.update', [$aluno->id]) }} method="post">

        @csrf

        <div>
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" value="{{ $aluno->nome}}">
            @if ($errors->has('nome'))
	            <li>{{ $errors->first('nome') }}</li>
	        @endif
        </div>

        <div>
            <label for="cpf">CPF</label>
            <input type="text" id="cpf" name="cpf" value="{{ $aluno->cpf}}">
            @if ($errors->has('cpf'))
	            <li>{{ $errors->first('cpf') }}</li>
	        @endif
        </div>

        <div>
            <label for="endereco">Endereço</label>
            <input type="text" id="endereco" name="endereco" value="{{ $aluno->endereco}}">
            @if ($errors->has('endereco'))
	            <li>{{ $errors->first('endereco') }}</li>
	        @endif
        </div>

        <div>
            <label for="cidade">Cidade</label>
            <input type="text" id="cidade" name="cidade" value="{{ $aluno->cidade}}">
            @if ($errors->has('cidade'))
                <li>{{ $errors->first('cidade') }}</li>
	        @endif
        </div>

        <div>
            <label for="telefone">Telefone</label>
            <input type="text" id="telefone" name="telefone" value="{{ $aluno->telefone}}">
            @if ($errors->has('telefone'))
                <li>{{ $errors->first('telefone') }}</li>
	        @endif
        </div>

        <div>
            <label for="sexo">Sexo</label>
            <input type="text" id="sexo" name="sexo" value="{{ $aluno->sexo}}">
            @if ($errors->has('sexo'))
                <li>{{ $errors->first('sexo') }}</li>
	        @endif
        </div>

        <div>
            <label for="data_nascimento">Data Nascimento</label>
            <input type="text" id="data_nascimento" name="data_nascimento" value="{{ $aluno->data_nascimento}}">
            @if ($errors->has('data_nascimento'))
                <li>{{ $errors->first('data_nascimento') }}</li>
	        @endif
        </div>

        <div>
            <label for="matricula">Matrícula</label>
            <input type="text" id="matricula" name="matricula" value="{{ $aluno->matricula}}">
            @if ($errors->has('matricula'))
                <li>{{ $errors->first('matricula') }}</li>
	        @endif
        </div>

        <div>
            <label for="data_matricula">Data Matrícula</label>
            <input type="text" id="data_matricula" name="data_matricula" value="{{ $aluno->data_matricula}}">
            @if ($errors->has('data_matricula'))
                <li>{{ $errors->first('data_matricula') }}</li>
	        @endif
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