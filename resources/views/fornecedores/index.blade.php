@extends('layouts.app')
@section('content')

    <div class="container">
        <h2>Fornecedor</h2>
        <hr/>
        <a href="{{ url('fornecedores/create') }}" class="btn btn-success">Novo fornecedor +</a>
        <a href="{{ url('produtos') }}" class="btn btn-secondary">Produtos</a>
        <br><br>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">nome-fantasia</th>
                    <th scope="col">cnpj</th>
                    <th scope="col">estado</th>
                    <th scope="col">Opções</th>

                </tr>
            </thead>

            @foreach ($fornecedores as $fornecedor)
                <tbody>
                    <tr>
                        
                        <td>{{ $fornecedor->id }}</td>
                        <td>{{ $fornecedor->nome_fantasia }}</td>
                        <td>{{ $fornecedor->cnpj }}</td>
                        <td>{{ $fornecedor->estado }}</td>
                        <td>
                            <a href="{{ route('fornecedores.edit', $fornecedor->id) }}" class="btn btn-primary btn-sm">Editar</a>
                            <a href="{{ url('fornecedores/delete', ['id' => $fornecedor->id]) }}"
                                class="btn btn-danger btn-sm">Remover</a>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>

@endsection
