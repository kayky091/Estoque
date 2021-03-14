@extends('layouts.app')
@section('content')

    <div class="container">
        <form  id="frmprodutos" name="frmprodutos" action="{{url('produtos')}}" method="POST">
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

            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>

@endsection