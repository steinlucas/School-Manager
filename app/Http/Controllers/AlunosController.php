<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunosController extends Controller
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
        $alunos = Aluno::all();
        return view('alunos.index', compact('alunos') );
    }

    public function create()
    {
        return view('alunos.create');
    }

    public function store(Request $request)
    {
        if (! $request->has('cancel') ){
            try {
                $aluno = new Aluno();
                $aluno->nome = $request->nome;
                $aluno->cpf = $request->cpf;
                $aluno->endereco = $request->endereco;
                $aluno->cidade = $request->cidade;
                $aluno->telefone = $request->telefone;
                $aluno->sexo = $request->sexo;
                $aluno->data_nascimento = $request->data_nascimento;
                $aluno->matricula = $request->matricula;
                $aluno->data_matricula = $request->data_matricula;

                $aluno = $aluno->save();
    
                $request->session()->flash('message', 'Aluno cadastrado com sucesso');
            } catch (Exception $e) {
                $request->session()->flash('message', 'Erro ao cadastrar novo Aluno! ');
            }
        }
        else
        { 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
        return redirect()->to(route('aluno.index'));
    }

    public function update(Request $request, $id)
    {

        if (! $request->has('cancel') ){
            $request->validate([
                'nome' => 'required',
                'cpf' => 'required',
                'endereco' => 'required',
                'cidade' => 'required',
                'telefone' => 'required',
                'sexo' => 'required',
                'data_nascimento' => 'required',
                'matricula' => 'required',
                'data_matricula' => 'required',
            ]);

            $aluno = Aluno::find($id);
            $aluno->nome = $request->nome;
            $aluno->cpf = $request->cpf;
            $aluno->endereco = $request->endereco;
            $aluno->cidade = $request->cidade;
            $aluno->telefone = $request->telefone;
            $aluno->sexo = $request->sexo;
            $aluno->data_nascimento = $request->data_nascimento;
            $aluno->matricula = $request->matricula;
            $aluno->data_matricula = $request->data_matricula;

            $aluno->save();
            $request->session()->flash('message', 'Aluno alterado com sucesso');
        }
        else
        { 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
       
        return redirect()->to(route('aluno.index'));
    }

    public function destroy($id)
    {
        $aluno = Aluno::find($id);
        $aluno->delete();
        return redirect()->route('aluno.index')->with('message','Aluno deletado com sucesso!');
    }

    public function edit($id)
    {
        $aluno = Aluno::find($id);
        return view('alunos.edit',compact('aluno'));
    }
}