@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Informe abaixo os dados do cliente                                        
                     <div class="listagemclientes">
                       <a class="btn btn-outline-secondary" href="{{ url('clientes') }} ">Ver Listagem</a>
                    </div>
                </div>

                <div class="panel-body">
                    @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-success">
                            {{ Session::get('mensagem_sucesso') }}
                        </div>
                    @endif
                
                    @if(Request::is('*/editar'))
                      {!! Form::model($cliente, ['method' => 'PATCH', 'url' => 'clientes/'.$cliente->id]) !!}
                    @else
                       {!! Form::open(['url' => 'clientes/salvar']) !!}
                    @endif                                       

                    {!! Form::label('nome', 'Nome:') !!}
                    {!! Form::input('text', 'nome', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome', 'required' ]) !!}
                    
                    {!! Form::label('endereco', 'Endereço:') !!}
                    {!! Form::input('text', 'endereco', null, ['class' => 'form-control', '', 'placeholder' => 'Endereço', 'required' ]) !!}
                    
                    {!! Form::label('numero', 'Número:') !!}
                    {!! Form::input('text', 'numero', null, ['class' => 'form-control', '', 'placeholder' => 'Número', 'required' ]) !!}
                    <br/>
                    
                    <div class="salvarcliente">
                        {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
                    </div>
                    
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection