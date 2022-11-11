<?php

namespace App\Http\Controllers;

Use Exception;
use Illuminate\Http\Request;
use App\Models\Professor;

class ProfessoresController extends Controller
{
    public function index()
    {
        $professores = Professor::all();
        return view('professores.index', compact('professores') );
    }

    public function create()
    {
        return view('professores.create');
    }

    public function store(Request $request)
    {
        if (! $request->has('cancel') ){
            try {
                $professor = new Professor();
                $professor->nome = $request->nome;
                $professor->registro = $request->registro;
                $professor->cpf = $request->cpf;
                $professor->formacao = $request->formacao;
                $professor->cidade = $request->cidade;
                $professor->telefone = $request->telefone;

                $professor = $professor->save();
    
                $request->session()->flash('message', 'Professor cadastrado com sucesso');
            } catch (Exception $e) {
                $request->session()->flash('message', 'Erro ao cadastrar novo professor! ');
            }
        }
        else
        { 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
        return redirect()->to(route('professor.index'));
    }

    public function update(Request $request, $id)
    {

        if (! $request->has('cancel') ){
            $request->validate([
                'nome' => 'required',
                'registro' => 'required',
                'cpf' => 'required',
                'formacao' => 'required',
                'cidade' => 'required',
                'telefone' => 'required'
            ]);
            $professor = Professor::find($id);
            $professor->nome = $request->nome;
            $professor->registro = $request->registro;
            $professor->cpf = $request->cpf;
            $professor->formacao = $request->formacao;
            $professor->cidade = $request->cidade;
            $professor->telefone = $request->telefone;

            $professor->save();
            $request->session()->flash('message', 'Professor alterado com sucesso');
        }
        else
        { 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
       
        return redirect()->to(route('usuario.index'));
    }

    public function destroy($id)
    {
        $professor = Professor::find($id);
        $professor->delete();
        return redirect()->route('professor.index')->with('message','Professor deletado com sucesso!');
    }
}
