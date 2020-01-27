@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Listagem de Clientes  
                     <div class="novocliente">
                        <a class="btn btn-primary" href="{{ url('clientes/novo') }}">Novo cliente</a>
                    </div>
                </div>   
                
                  <div class="panel-body">
                    @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-success">
                            {{ Session::get('mensagem_sucesso') }}
                        </div>
                    @endif
                      
                      <table class="table">
                          <th>Nome</th>
                          <th>Endereço</th>
                          <th>Número</th>
                          <th>Ações</th>
                          <tbody>
                              @foreach($clientes as $cliente)
                              <tr>
                                  <td>{{ $cliente->nome }}</td>
                                  <td>{{ $cliente->endereco }}</td>
                                  <td>{{ $cliente->numero }}</td>
                                  <td>
                                      <a href="clientes/{{ $cliente->id }}/editar" class="btn btn-outline-dark">Editar</a>
                                      {!! Form::open(['method' => 'DELETE', 'url' => '/clientes/'.$cliente->id, 'style' => 'display: inline;' ]) !!}
                                      <button type ="submit" class="btn btn-outline-dark">Excluir</button>
                                      {!! Form::close() !!}
                                  </td>
                              </tr>
                              @endforeach
                          </tbody>
                      </table>
                   </div>
                </div>
            </div>
        </div>
    </div>
@endsection