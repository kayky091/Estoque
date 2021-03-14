<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\produtos;

use App\Http\Requests\produtosrequest;

class ProdutosController extends Controller
{
    
    public function index()
    {
        $produtos =  produtos::all();
        return view('produtos.index', compact('produtos'));
    }

    
    public function create()
    {
        $produtos =  produtos::all();
        return view('produtos.create', compact('produtos'));
    }

    
    public function store(produtosrequest $request)
    {
        $produtos = new produtos();
        $produtos->descricao =  $request->input('descricao');
        $produtos->complemento =  $request->input('complemento');
        $produtos->quantidade =  $request->input('quantidade');
        $produtos->save();
        return redirect()->route('produtos.index' , compact('produtos'));
    }

    
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $produtos = Produtos::find($id);
        if(isset($produtos)){
            return view('produtos.edit', compact('produtos'));
        }
            return view('produtos.index');
    }

   
    public function update(produtosrequest $request, $id)
    {
        $produtos = Produtos::find($id);
          if(isset($produtos)){  

            $produtos->descricao =  $request->input('descricao');
            $produtos->complemento =  $request->input('complemento');
            $produtos->quantidade =  $request->input('quantidade');
            $produtos->save();
        } 
        return redirect()->route('produtos.index', compact('produtos'));
    }

 
    public function destroy($id)
    {
        $produtos = Produtos::find($id);
       if(isset($produtos)){
           $produtos->delete();
       }
       return redirect()->route('produtos.index');
    }
}
