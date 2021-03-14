@extends('layouts.app')
@section('content')

    <div class="container">
        <form  id="frmprodutos" name="frmprodutos"  action="{{ route('produtos.update', $produtos->id)}}" method="POST">
            @csrf
            @method('PUT')
            <h3>Editar</h3>
            <div class="form-group">
                <label for="descricao">descrição</label>
                <input type="descricao" class="form-control" id="descricao" name="descricao" value="{{ $produtos->descricao }}"  >
            </div>

            <div class="form-group">
                <label for="quantidade">quantidade</label>
                <input type="quantidade" class="form-control" id="quantidade" name="quantidade" value="{{ $produtos->quantidade }}">
            </div>

            <div class="form-group">
                <label for="complemento">complemento</label>
                <input type="complemento" class="form-control" id="complemento" name="complemento" value="{{ $produtos->complemento }}" >
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
