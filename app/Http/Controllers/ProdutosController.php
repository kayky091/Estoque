<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\produtos;

use App\Models\fornecedores;

use App\Http\Requests\produtosrequest;



class ProdutosController extends Controller
{
    
    public function index()
    {
        $fornecedores = fornecedores::all();
        $produtos =  produtos::all();
        return view('produtos.index', compact('produtos', 'fornecedores'));
    }

    
    public function create()
    {
        $fornecedores = fornecedores::all();
        $produtos =  produtos::all();
        return view('produtos.create', compact('produtos', 'fornecedores'));
    }

    
    public function store(produtosrequest $request)
    {
        $produtos = new produtos();
        $produtos->descricao =  $request->input('descricao');
        $produtos->complemento =  $request->input('complemento');
        $produtos->quantidade =  $request->input('quantidade');
        $produtos->forn_id = $request->input('forn_id');

        //upload imagem
        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName());

            $requestImage->move(public_path('img/fotos'), $imageName);

            $produtos->image = $imageName;

        }
        $produtos->save();
        return redirect()->route('produtos.index' , compact('produtos'));
    }

    
    public function show($id)
    {
        //
    }


    public function edit($id)
    { 
        $fornecedores = fornecedores::all();
        $produtos = Produtos::find($id);
        if(isset($produtos)){
            return view('produtos.edit', compact('produtos','fornecedores'));
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
            $produtos->forn_id = $request->input('forn_id');
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
