<?php

namespace App\Http\Controllers;
Use Exception;
use Illuminate\Http\Request;
use App\Models\Usuario;
class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index', compact('usuarios') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (! $request->has('cancel') ){
            try {
                $usuario = new Usuario();
                $usuario->nome = $request->nome;
                $usuario->endereco = $request->endereco;
                $usuario->telefone = $request->telefone;
    
                $usuario = $usuario->save();
    
                $request->session()->flash('message', 'Usuário cadastrado com sucesso');
            } catch (Exception $e) {
                $request->session()->flash('message', 'Erro ao cadastrar novo usuário! ');
            }
        }
        else
        { 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
        return redirect()->to(route('usuario.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = Usuario::find($id);
        return view('usuarios.edit',compact('usuario'));
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        if (! $request->has('cancel') ){
            $request->validate([
                'nome' => 'required',
                'endereco' => 'required',
                'telefone' => 'required',
            ]);
            $usuario = Usuario::find($id);
            $usuario->nome = $request->nome;
            $usuario->endereco = $request->endereco;
            $usuario->telefone = $request->telefone;
            $usuario->save();
            $request->session()->flash('message', 'Usuário alterado com sucesso');
        }
        else
        { 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
       
        return redirect()->to(route('usuario.index'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        return redirect()->route('usuario.index')->with('message','Usuario deletado com sucesso!');
    }

}
