@extends('layouts.app')
@section('content')

    <div class="container">
        <form action="store">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input type="nome" class="form-control" id="descricao" placeholder="Informe a descrição">
            </div>

            <div class="form-group">
                <label for="complemento">Complemento</label>
                <input type="sobrenome" class="form-control" id="complemento" placeholder="Informe o complemento">
            </div>

            <div class="form-group">
                <label for="quantidade">Quantidade</label>
                <input type="telefone" class="form-control" id="quantidade" placeholder="Informe a quantidade">
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>

@endsection