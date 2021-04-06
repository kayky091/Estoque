@extends('layouts.app')
@section('content')

    <div class="container">
        <form  id="frmprodutos" name="frmprodutos" action="{{url('produtos')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Informe a descrição">
            </div>

            <div class="form-group">
                <label for="complemento">Complemento</label>
                <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Informe o complemento">
            </div>

            <div class="form-group">
                <label for="quantidade">Quantidade</label>
                <input type="text" class="form-control" id="quantidade" name="quantidade" placeholder="Informe a quantidade">
            </div>
            <div class="form-group">
                <label for="image">Foto</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <div class="form-group col-6">
                <label for="forn_id">forn_id</label>
                <select class="form-control" name="forn_id" id="forn_id">
                    <option value="">selecione:</option>
                    @foreach ($fornecedores as $fornecedor)
                        <option value="{{ $fornecedor->id }}"> {{ $fornecedor->nome_fantasia }}</option>
                    @endforeach

                </select>
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>

@endsection