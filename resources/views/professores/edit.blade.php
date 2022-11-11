@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row">
        <h3>Alterando Professor</h3>
        <form action={{ route('professor.update', [$professor->id]) }} method="post">
        @csrf
        <div>
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" value="{{ $professor->nome}}">
           @if ($errors->has('nome'))
	      <li>{{ $errors->first('nome') }}</li>
	       @endif
        </div>
        <div>
            <label for="registro">Registro</label>
            <input type="text" id="registro" name="registro" value="{{ $professor->registro}}">
           @if ($errors->has('registro'))
	      <li>{{ $errors->first('registro') }}</li>
	       @endif
        </div>
        <div>
            <label for="cpf">CPF</label>
            <input type="text" id="cpf" name="cpf" value="{{ $professor->cpf}}">
           @if ($errors->has('cpf'))
	      <li>{{ $errors->first('cpf') }}</li>
	       @endif
        </div>
        <div>
            <label for="formacao">Formação</label>
            <input type="text" id="formacao" name="formacao" value="{{ $professor->formacao}}">
           @if ($errors->has('formacao'))
	      <li>{{ $errors->first('formacao') }}</li>
	       @endif
        </div>
        <div>
            <label for="cidade">Cidade</label>
            <input type="text" id="cidade" name="cidade" value="{{ $professor->cidade}}">
           @if ($errors->has('cidade'))
	      <li>{{ $errors->first('cidade') }}</li>
	       @endif
        </div>
        <div>
            <label for="telefone">Telefone</label>
            <input type="text" id="telefone" name="telefone" value="{{ $professor->telefone}}">
           @if ($errors->has('telefone'))
	      <li>{{ $errors->first('telefone') }}</li>
	       @endif
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