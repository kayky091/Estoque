@extends('layouts.app')
@section('content')

<div class="container">
<h2>Estoque</h2>
<hr/>
<a href="{{url('produtos/create')}}" class="btn btn-success">Novo produto</a>
<br><br>
  <table class="table">
     <thead class="thead-dark">
       <tr>
          
          <th scope="col">Descrição</th>
          <th scope="col">Complemento</th>
          <th scope="col">Quantidade</th>
          
       </tr>
    </thead>

    <tbody>
        <tr>
          <th >Air jordan</th>
          <td>tamanho: 41</td>
          <td>100</td>
          <td></td>
       </tr>
     </tbody>
  </table>
</div>

@endsection