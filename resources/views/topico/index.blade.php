@extends('template')
@section('conteudo')
    <!-- Breadcrumb-->
    <div class="row pt-2 pb-2">
        <div class="col-sm-9">
            <h4 class="page-title">Tópicos</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item" active aria-current="page">Listagem</li>
            </ol>
        </div>
    </div>
    <!-- End Breadcrumb-->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6>Filtrar...</h6>
                    <form action="{{route('topico.index')}}" method="get" class="form-inline">
                        <input type="hidden" name="pesquisa" value="true">
                        <div class="col-md-10">
                            <div class="form-group">
                                <input type="text" class="form-control col-md-12" id="titulo" name="titulo" value="{{isset($_GET['titulo'])?$_GET['titulo']:''}}" placeholder="Título" autofocus>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary" title="Pesquisar"><i class="fa fa-search  fa-lg"></i></button>
                            <a href="{{route('topico.index')}}" class="btn btn-warning" title="Resetar pesquisa"><i class="fa fa-eraser  fa-lg"></i></a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <a href="{{route('topico.create')}}" class="btn btn-success" title="Cadastrar novo tópico"><i class="fa fa-plus fa-lg"></i></a><br><br>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                            <tr>
                                <th class="text-center" style="width: 10%;">#</th>
                                <th style="width: 30%;">Código</th>
                                <th style="width: 60%;">Título</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($topicos as $topico)
                                <tr>
                                    <td>
                                        <a href="{{route('topico.delete', $topico)}}" class="btn btn-danger" title="Excluir tópico"><i class="fa fa-trash  fa-lg"></i></a>
                                        <a href="{{route('topico.edit', $topico)}}" class="btn btn-info" title="Editar tópico"><i class="fa fa-edit fa-lg"></i></a>
                                        <a href="{{$topico->qtd_questoes > 0?route('questao.index')."?pesquisa=true&topico_id={$topico->id}":'#'}}" class="btn btn-primary" title="Existem {{$topico->qtd_questoes}} questões asociados a este tópico"><i class="fa fa-language"></i></a>
                                        <a href="{{route('topico.simular', $topico)}}" class="btn btn-success" title="Simular tópico"><i class="fa fa-file-text-o fa-lg"></i></a>
                                    </td>
                                    <td>{{$topico->codigo}}</td>
                                    <td>{{$topico->titulo}}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">Nenhum registro para exibir</td>
                                </tr>
                            @endforelse
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="3">
                                    @if(isset($_GET['pesquisa']))
                                        {{ $topicos->appends($_GET)->links() }}
                                    @else
                                        {{ $topicos->links() }}
                                    @endif
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
