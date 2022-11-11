@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row">
        <h3>Alterando Professor</h3>
        <form action={{ route('professor.update', [$usuario->id]) }} method="post">
        @csrf
        <div>
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" value="{{ $usuario->nome}}">
           @if ($errors->has('nome'))
	      <li>{{ $errors->first('nome') }}</li>
	   @endif
        </div>
        <div>
            <label for="modelo">Endereço</label>
            <input type="text" id="endereco" name="endereco" value="{{ $usuario->endereco}}">
           @if ($errors->has('endereco'))
	      <li>{{ $errors->first('endereco') }}</li>
	   @endif
        </div>
        <div>
            <label for="fabricante">Telefone</label>
            <input type="text" id="telefone" name="telefone" value="{{ $usuario->telefone}}">
           @if ($errors->has('telefone'))
	      <li>{{ $errors->first('telefone') }}</li>
	   @endif
        </div>
        <div class="form-group">
                <input type="submit" name="save_usuario" value="Salvar usuário" class="btn btn-success">
                <input type="submit" name="cancel" value="Cancelar" class="btn btn-info">
            </div>

        <form>
    </div>
    </form>
</div>
@endsection


