@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">

                        <div class="col-12">
                            <label for="NomeComleto" class="form-label">Nome Completo</label>
                            <h1>{{ $curriculo->nome }}</h1>
                        </div>

                        <div class="col-12">
                            <label class="col-4" for="NomeMae" class="form-label">Nome da Mãe</label>
                            <h3 class="col-8">{{ $curriculo->nome_mae }}</h3>
                        </div>

                        <div class="col-12">
                            <label for="NomePai" class="form-label">Nome do Pai</label>
                            <h3>{{ $curriculo->nome_pai }}</h3>
                        </div>

                        <div class="col-md-4">
                            <label for="cpf" class="form-label">CPF</label>
                            <h3>{{ $curriculo->cpf }}</h3>
                        </div>

                        <div class="col-md-4">
                            <label for="dataNascimento" class="form-label">Data nascimento</label>
                            <h3>{{ date('d/m/Y',strtotime($curriculo->date_nascimento))}}</h3>
                        </div>

                        <div class="col-md-4">
                            <label for="telefone" class="form-label">Telefone</label>
                            <h3>{{ $curriculo->telefone }}</h3>
                            
                        </div>


                        <div class="col-md-4">
                            <label for="cep" class="form-label">CEP</label>
                            <h3> {{$curriculo->cpf}}</h3>
                        </div>

                        <div class="col-md-4">
                            <label for="cidade" class="form-label">Cidade</label>
                            <h3>{{ $curriculo->cidade }}</h3>
                           
                        </div>

                        <div class="col-md-4">
                            <label for="bairro" class="form-label">Bairro</label>
                            <h3>{{ $curriculo->bairro }}</h3>
                            
                        </div>

                        <div class="col-md-4">
                            <label for="logradouro" class="form-label">Logradouro</label>
                            <h3>{{ $curriculo->logradouro }}</h3>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
