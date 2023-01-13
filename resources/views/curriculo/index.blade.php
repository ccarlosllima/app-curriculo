@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <div class="row">
                    <div class="col-6">
                      Curriculos Criados
                    </div>
                    
                  </div>
                </div> 

                <div class="card-body">
                  <div>
                    <a href="{{route('curriculo.create')}}" class="btn btn-primary">novo</a>
                  </div>
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Data Cadastro</th>
                            <th scope="col">Cidade</th>
                            <th></th>
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          
                            @foreach ($curriculos as $t)
                              <tr>
                 
                                <td>{{$t['nome']}}</td>   
                                <td>{{date('d/m/Y',strtotime($t['created_at']))}}</td>
                                <td>{{$t['cidade']}}</td> 

                                <td><a href="{{route('curriculo.edit',$t->id)}}" class="btn btn-primary btn-sm">Editar</a></td>
                                <td>
                                  <form id="form_{{$t['id']}}" method="post" action="{{route('curriculo.destroy',['curriculo'=> $t['id']])}}">
                                    @method('DELETE')
                                    @csrf
                                  </form>
                                  <a href="#" class="btn btn-danger btn-sm" onclick="document.getElementById('form_{{$t['id']}}').submit()">Excluir</a>
                                </td>
                                <td>
                                  <a href="{{route('curriculo.show',$t->id)}}" class="btn btn-success btn-sm">visualizar</a>
                                </td>
                              </tr>
                            @endforeach
                        </tbody>
                      </table>
                      {{-- <nav>
                        <ul class="pagination">
                          <li class="page-item"><a class="page-link" href="{{$tarefas->previousPageUrl()}}">Voltar</a></li>
                          
                          @for ($i = 1; $i <= $tarefas->lastPage(); $i++)
                            <li class="page-item {{$tarefas->currentPage() == $i ? 'active':''}}" >
                              <a class="page-link" href="{{$tarefas->url($i)}}">{{$i}}</a>
                            </li>
                          @endfor

                          <li class="page-item"><a class="page-link" href="{{$tarefas->nextPageUrl()}}"">Avançar</a></li>
                        </ul>
                      </nav> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection