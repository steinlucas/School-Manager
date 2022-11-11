@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <h3>Alterando Curso</h3>
        <form action={{ route('curso.update', [$curso->id]) }} method="post">

        @csrf

        <div>
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" value="{{ $curso->nome}}">
             @if ($errors->has('nome'))
	            <li>{{ $errors->first('nome') }}</li>
	         @endif
        </div>

        <div>
            <label for="ano_oferta">Ano oferta</label>
            <input type="text" id="ano_oferta" name="ano_oferta" value="{{ $curso->ano_oferta}}">
             @if ($errors->has('ano_oferta'))
	            <li>{{ $errors->first('ano_oferta') }}</li>
	        @endif
        </div>

        <div>
            <label for="data_inicio">Data início</label>
            <input type="text" id="data_inicio" name="data_inicio" value="{{ $curso->data_inicio}}">
            @if ($errors->has('data_inicio'))
	            <li>{{ $errors->first('data_inicio') }}</li>
	         @endif
        </div>

        <div>
            <label for="data_fim">Data fim</label>
            <input type="text" id="data_fim" name="data_fim" value="{{ $curso->data_fim}}">
            @if ($errors->has('data_fim'))
	            <li>{{ $errors->first('data_fim') }}</li>
	         @endif
        </div>

        <div>
            <label for="carga_horaria">Carga horária</label>
            <input type="text" id="carga_horaria" name="carga_horaria" value="{{ $curso->carga_horaria}}">
            @if ($errors->has('carga_horaria'))
	            <li>{{ $errors->first('carga_horaria') }}</li>
	        @endif
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