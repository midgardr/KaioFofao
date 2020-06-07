@extends('template')
@section('conteudo')
    <!-- Breadcrumb-->
    <div class="row pt-2 pb-2">
        <div class="col-sm-9">
            <h4 class="page-title">Questões</h4>
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
                    <form action="{{route('questao.index')}}" method="get" class="form-inline">
                        <input type="hidden" name="pesquisa" value="true">
                        <div class="col-md-3">
                            <div class="form-group">
                                <select name="topico_id" class="form-control single-select">
                                    <option value="">Por tópico</option>
                                    @foreach($topicos as $topico)
                                        <option value="{{$topico->id}}"{{(isset($_GET['topico_id']) and $topico->id == $_GET['topico_id'])?' selected':''}}>{{$topico->codigo. ' / ' . $topico->titulo}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <input type="text" class="form-control col-md-12" id="questao" name="questao" value="{{isset($_GET['questao'])?$_GET['questao']:''}}" placeholder="Pesquisar por questão">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary" title="Pesquisar"><i class="fa fa-search fa-lg"></i></button>
                            <a href="{{route('questao.index')}}" class="btn btn-warning" title="Resetar pesquisa"><i class="fa fa-eraser fa-lg"></i></a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <a href="{{route('questao.create')}}" class="btn btn-success" title="Cadastrar nova questão"><i class="fa fa-plus fal-lg"></i></a><br><br>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                            <tr>
                                <th class="text-center" style="width: 10%;">#</th>
                                <th style="width: 30%;">Tópico</th>
                                <th style="width: 60%;">Questão</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($questoes as $questao)
                                <tr>
                                    <td>
                                        <a href="{{route('questao.delete', $questao)}}" class="btn btn-danger" title="Remover questão"><i class="fa fa-ban fa-lg"></i></a>
                                        <a href="{{route('questao.edit', $questao)}}" class="btn btn-info" title="Editar questão"><i class="fa fa-edit fa-lg"></i></a>
                                    </td>
                                    <td>{{$questao->topico->codigo}} / {{ $questao->topico->titulo }}</td>
                                    <td>{{$questao->questao}}</td>
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
                                        {{ $questoes->appends($_GET)->links() }}
                                    @else
                                        {{ $questoes->links() }}
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
