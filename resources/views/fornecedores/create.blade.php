@extends('layouts.app')
@section('content')

    <div class="container">
        <form id="frmfornecedores" name="frmfornecedores" action="{{ url('fornecedores') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome_fantasia">Nome fantasia</label>
                <input type="text" class="form-control" id="nome_fantasia" name="nome_fantasia"
                    placeholder="Informe o nome fantasia">
            </div>

            <div class="form-group">
                <label for="cnpj">cnpj</label>
                <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="Informe o cnpj">
            </div>

            <div class="form-group">
                <label for="estado">estado</label>
                <input type="text" class="form-control" id="estado" name="estado" placeholder="Informe a quantidade">
            </div>
            

            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>

@endsection
