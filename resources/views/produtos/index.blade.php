@extends('layouts.app')
@section('content')

    <div class="container">
        <h2>Estoque</h2>
        <hr />
        <a href="{{ url('produtos/create') }}" class="btn btn-success">Novo produto</a>
        <a href="{{ url('fornecedores') }}" class="btn btn-secondary">Fornecedores</a>
        <br><br>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    
                    <th scope="col">foto</th>
                    <th scope="col">ID</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Complemento</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Fornecedor</th>
                    <th scope="col">Opções</th>

                </tr>
            </thead>

            @foreach ($produtos as $produto)
                <tbody>
                    <tr>
                        <td><img src="/img/fotos/{{ $produto->image}}" alt="" style="width:120px; height:100px; border: 1px solid black; "></td>
                        <td>{{ $produto->id }}</td>
                        <td>{{ $produto->descricao }}</td>
                        <td>{{ $produto->quantidade }}</td>
                        <td>{{ $produto->complemento }}</td>
                        @foreach ($fornecedores as $fornecedor) @endforeach
                        <td>{{ $fornecedor->nome_fantasia }}</td>

                        <td>
                            <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-primary btn-sm">Editar</a>
                            <a href="{{ url('produtos/delete', ['id' => $produto->id]) }}"
                                class="btn btn-danger btn-sm">Remover</a>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>

@endsection
