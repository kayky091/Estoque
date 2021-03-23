<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\fornecedores;

use App\Http\Requests\fornecedoresRequest;


class FornecedorController extends Controller
{
   
    public function index()
    {
        $fornecedores =  fornecedores::all();
        return view('fornecedores.create', compact('fornecedores'));
    }

    
    public function create()
    {
        //criar registros
        $fornecedores = new fornecedores();
        $fornecedores->nome_fantasia = $request->input('nome_fan');
        $fornecedores->cnpj = $request->input('cnpj');
        $fornecedores->estado = $request->input('estado');
         
        $fornecedores->save();
        return redirect()->route('fornecedores.index', compact('fornecedores'));

    }

   
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $fornecedores = Fornecefores::find($id);
        if(isset($fornecedores)){
            return view('fornecedores.edit', compact('fornecedores'));

        }
        return view('fornecedores.index');
    }

    
    public function update(Request $request, $id)
    {
        $fornecedores = $fornecedores::find($id);
        if(isset($fornecedores)){  

          $fornecedores->descricao =  $request->input('nome_fan');
          $fornecedores->complemento =  $request->input('cnpj');
          $fornecedores->quantidade =  $request->input('estado');
          $fornecedores->save();
      } 
      return redirect()->route('fornecedores.index', compact('fornecedores'));
    }

    public function destroy($id)
    {
        $fornecedores = Fornecedores::find($id);
        if(isset($fornecedores)){
            $fornecedores->delete();
        }
        return redirect()->route('fornecedores.index');
    }
}