@extends('layouts.app')
@section('content')

    <div class="container">
        <form id="frmfornecedores" name="frmfornecedores" action="{{ route('fornecedores.update', $fornecedores->id) }}"
            method="POST">
            @csrf
            @method('PUT')
            <h3>Editar</h3>
            <div class="form-group">
                <label for="nome_fantasia">nome fantasia</label>
                <input type="nome_fantasia" class="form-control" id="nome_fantasia" name="nome_fantasia"
                    value="{{ $fornecedores->nome_fantasia }}">
            </div>

            <div class="form-group">
                <label for="cnpj">cnpj</label>
                <input type="cnpj" class="form-control" id="cnpj" name="cnpj" value="{{ $fornecedores->cnpj }}">
            </div>

            <div class="form-group">
                <label for="estado">estado</label>
                <input type="estado" class="form-control" id="estado" name="estado" value="{{ $fornecedores->estado }}">
            </div>
            

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
