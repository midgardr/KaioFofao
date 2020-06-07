@extends('template')
@section('conteudo')
    <!-- Breadcrumb-->
    <div class="row pt-2 pb-2">
        <div class="col-sm-9">
            <h4 class="page-title">Tópicos</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page">{{ $topico->codigo }} / {{ $topico->titulo }}</li>
                <li class="breadcrumb-item" active aria-current="page">Simular</li>
            </ol>
        </div>
    </div>
    <!-- End Breadcrumb-->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-uppercase">
                  {{ $topico->codigo }} / {{ $topico->titulo }}
                </div>
                <div class="card-body">
                   <form id="basic-form" action="#">
                      <div id="sessao">
                          @foreach($topico->questoes as $k=>$questao)
                            <h3>questão:</h3>
                            <section>
                                <h5>{{ $questao->questao }}</h5>
                                <br>
                                <div class="form-group">
                                    <button type="button" id="certo{{$k}}" class="btn btn-success" resposta="Certo" sessao="{{$k}}">Certo</button>
                                    <button type="button" id="errado{{$k}}" class="btn btn-danger" resposta="Errado" sessao="{{$k}}">Errado</button>
                                    <input type="hidden" id="resposta{{$k}}" value="{{ $questao->resposta }}">
                                </div>
                                <div class="alert alert-icon-success alert-dismissible" role="alert" id="alert{{ $k }}">
                                    <div class="alert-icon icon-part-success" id="alertIcon{{ $k }}">
                                    <i class="fa fa-check" id="icon{{ $k }}"></i>
                                    </div>
                                    <div class="alert-message">
                                    <span><strong id="mensagem{{$k}}"></strong></span>
                                    </div>
                                </div>
                            </section>
                          @endforeach
                      </div>
                  </form>
                </div>
              </div>
        </div>
    </div>
@endsection
