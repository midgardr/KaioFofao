@extends('template')
@section('conteudo')
    <!-- Breadcrumb-->
    <div class="row pt-2 pb-2">
        <div class="col-sm-9">
            <h4 class="page-title">{{isset($questao)?'Atualizar dados da questão':'Cadastrar nova questão'}}</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('questao.index')}}">Questão</a></li>
                <li class="breadcrumb-item" active aria-current="page">Dados da questão</li>
            </ol>
        </div>
    </div>
    <!-- End Breadcrumb-->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{isset($questao)?route('questao.update', $questao):route('questao.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($questao))
                            @method('put')
                        @endif
                        <div class="form-group">
                            <label for="topico_id">Tópico</label>
                            <select name="topico_id" class="form-control single-select" required>
                                @foreach($topicos as $topico)
                                    <option value="{{$topico->id}}"{{(isset($questao) and $topico->id == $questao->topico_id)?' selected':''}}>{{$topico->codigo. ' / ' . $topico->titulo}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="questao">*Questão</label>
                            <input type="text" class="form-control" id="questao" name="questao" value="{{isset($questao)?$questao->questao:''}}" placeholder="Questão" required>
                        </div>
                        <div class="form-group">
                            <label for="resposta">*Resposta</label>
                            <select name="resposta" class="form-control single-select" required>
                                <option value="Certo"{{ (isset($questao) and $questao->resposta == 'Certo')?' selected="selected"':'' }}>Certo</option>
                                <option value="Errado"{{ (isset($questao) and $questao->resposta == 'Errado')?' selected="selected"':'' }}>Errado</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="comentario">Comentário</label>
                            <textarea name="comentario" id="comentario" class="form-control">{{isset($questao)?$questao->comentario:''}}</textarea>
                        </div>
                        <div class="form-group">
                            <a href="{{route('questao.index')}}" class="btn btn-secondary px-5"><i class="fa fa-arrow-left"></i> Voltar</a>
                            <button type="submit" class="btn btn-primary px-5"><i class="fa fa-save"></i> Salvar</button>
                            <a href="{{route('questao.create')}}" class="btn btn-success px-5"><i class="fa fa-plus"></i> Novo</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
