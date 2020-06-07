@extends('template')
@section('conteudo')
    <!-- Breadcrumb-->
    <div class="row pt-2 pb-2">
        <div class="col-sm-9">
            <h4 class="page-title">{{isset($topico)?'Atualizar dados do tópico':'Cadastrar novo tópico'}}</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('topico.index')}}">Tópicos</a></li>
                <li class="breadcrumb-item" active aria-current="page">Dados do tópico</li>
            </ol>
        </div>
    </div>
    <!-- End Breadcrumb-->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{isset($topico)?route('topico.update', $topico):route('topico.store')}}" method="post" enctype="application/x-www-form-urlencoded">
                        @csrf
                        @if(isset($topico))
                            @method('put')
                        @endif
                        <div class="form-group">
                            <label for="cnpj">*Código</label>
                            <input type="tel" class="form-control" id="codigo" name="codigo" value="{{isset($topico)?$topico->codigo:''}}" placeholder="Código do tópico" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="titulo">*Título</label>
                            <input type="text" class="form-control" id="titulo" name="titulo" value="{{isset($topico)?$topico->titulo:''}}" placeholder="Título do tópico" required>
                        </div>
                        <div class="form-group">
                            <a href="{{route('topico.index')}}" class="btn btn-secondary px-5"><i class="fa fa-arrow-left"></i> Voltar</a>
                            <button type="submit" class="btn btn-primary px-5"><i class="fa fa-save"></i> Salvar</button>
                            <a href="{{route('topico.create')}}" class="btn btn-success px-5"><i class="fa fa-plus"></i> Novo</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
