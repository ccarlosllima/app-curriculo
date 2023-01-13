
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Editar Curriculo') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form class="row g-3" method="POST" action="{{route('curriculo.update', ['curriculo' => $curriculo->id])}}">
                            @csrf
                            @method('PUT')

                            <div class="col-12">
                                <label for="nome" class="form-label">Nome Completo</label>
                                <input type="text" value="{{$curriculo->nome}}" name="nome" class="form-control" id="NomeComleto">
                                {{$errors->has('nome') ? $errors->first('nome'): ''}}
                              
                            </div>

                            <div class="col-12">
                                <label for="nome_mae" class="form-label">Nome da Mãe</label>
                                <input type="text" value="{{$curriculo->nome_mae}}" name="nome_mae" class="form-control" id="NomeMae">
                                {{$errors->has('nome_mae') ? $errors->first('nome_mae'): ''}}
                                
                            </div>

                            <div class="col-12">
                                <label for="nome_pai" class="form-label">Nome do Pai</label>
                                <input type="text" value="{{$curriculo->nome_pai}}" name="nome_pai" class="form-control" id="NomePai">
                                {{$errors->has('nome_pai') ? $errors->first('nome_pai'): ''}}
                                
                            </div>

                            <div class="col-md-4">
                                <label for="cpf" class="form-label">CPF</label>
                                <input type="text" value="{{$curriculo->cpf}}" name="cpf" class="form-control" id="cpf">
                                {{$errors->has('cpf') ? $errors->first('cpf'): ''}}
                                
                            </div>

                            <div class="col-md-4">
                                <label for="date_nascimento" class="form-label">Data nascimento</label>
                                <input type="date" value="{{$curriculo->date_nascimento}}" name="date_nascimento" class="form-control" id="date_nascimento">
                                {{$errors->has('date_nascimento') ? $errors->first('date_nascimento'): ''}}
                            </div>
                            
                            <div class="col-md-4">
                                <label for="telefone" class="form-label">Telefone</label>
                                <input type="text" value="{{$curriculo->telefone}}" name="telefone" class="form-control" name="date" id="telefone">
                                {{$errors->has('telefone') ? $errors->first('telefone'): ''}}
                                
                            </div>


                            <hr>

                            <div class="col-md-4">
                                <label for="cep" class="form-label">CEP</label>
                                <input type="text" value="{{$curriculo->cep}}" name="cep" class="form-control" name="cep" id="cep ">
                                {{$errors->has('cep') ? $errors->first('cep'): ''}}
                                
                            </div>

                            <div class="col-md-4">
                                <label for="cidade" class="form-label">Cidade</label>
                                <input type="text" value="{{$curriculo->cidade}}" name="cidade" class="form-control" id="cidade">
                                {{$errors->has('cidade') ? $errors->first('cidade'): ''}}
                            </div>

                            <div class="col-md-4">
                                <label for="bairro" class="form-label">Bairro</label>
                                <input type="text" value="{{$curriculo->bairro}}" name="bairro" class="form-control" id="bairro">
                                {{$errors->has('bairro') ? $errors->first('bairro'): ''}}
                                
                            </div>

                            <div class="col-md-4">
                                <label for="logradouro" class="form-label">Logradouro</label>
                                <input type="text" value="{{$curriculo->logradouro}}" name="logradouro" class="form-control" id="logradouro">
                                {{$errors->has('logradouro') ? $errors->first('logradouro'): ''}}

                                   </div>

                            <div class="col-12">
                                <input type="submit" class="btn btn-primary" value="Atualizar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
