<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\Curso;

class CursosController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function index()
    {
        $cursos = Curso::all();
        return view('cursos.index', compact('cursos') );
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(Request $request)
    {
        if (! $request->has('cancel') ){
            try {
                $curso = new Curso();
                $curso->nome = $request->nome;
                $curso->ano_oferta = $request->ano_oferta;
                $curso->data_inicio = $request->data_inicio;
                $curso->data_fim = $request->data_fim;
                $curso->carga_horaria = $request->carga_horaria;

                $curso = $curso->save();
    
                $request->session()->flash('message', 'Curso cadastrado com sucesso');
            } catch (Exception $e) {
                $request->session()->flash('message', 'Erro ao cadastrar novo curso!');
            }
        }
        else
        { 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
        return redirect()->to(route('curso.index'));
    }

    public function update(Request $request, $id)
    {

        if (! $request->has('cancel') ){
            $request->validate([
                'nome' => 'required',
                'ano_oferta' => 'required',
                'data_inicio' => 'required',
                'data_fim' => 'required',
                'cidade' => 'required',
                'carga_horaria' => 'required'
            ]);
            
            $curso = Curso::find($id);
            $curso->nome = $request->nome;
            $curso->ano_oferta = $request->ano_oferta;
            $curso->data_inicio = $request->data_inicio;
            $curso->data_fim = $request->data_fim;
            $curso->carga_horaria = $request->carga_horaria;

            $curso->save();
            $request->session()->flash('message', 'Curso alterado com sucesso');
        }
        else
        { 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
       
        return redirect()->to(route('curso.index'));
    }

    public function destroy($id)
    {
        $curso = Curso::find($id);
        $curso->delete();
        return redirect()->route('curso.index')->with('message','Curso deletado com sucesso!');
    }

    public function edit($id)
    {
        $curso = Curso::find($id);
        return view('cursos.edit',compact('curso'));
    }
}