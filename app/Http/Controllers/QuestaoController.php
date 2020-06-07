<?php

namespace App\Http\Controllers;

use App\Topico;
use App\Questao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestaoController extends Controller
{
    protected $questao;

    public function __construct(Questao $questao){
        $this->questao = $questao;
    }

    public function index(Request $request){
        $topicos = Topico::orderBy('titulo')->get();
        $query = $this->questao->orderBy('questao');
        if(!empty($request->topico_id)){
            $query->where('topico_id', $request->topico_id);
        }
        if(!empty($request->questao)){
            $query->where('questao', 'LIKE', '%'.$request->questao.'%');
        }
        $questoes = $query->paginate(30);
        return view('questao.index', compact(['questoes', 'topicos']));
    }

    public function create(){
        $topicos = Topico::orderBy('titulo')->get();
        return view('questao.dados', compact('topicos'));
    }

    public function store(Request $request){
        $questao = $this->questao;
        $topicos = Topico::orderBy('titulo')->get();
        DB::beginTransaction();
        try {
            $questao->topico_id = $request->topico_id;
            $questao->questao = $request->questao;
            $questao->resposta = $request->resposta;
            $questao->save();
            DB::commit();
            return redirect()->route('questao.edit', $questao)->with(['tipo'=>'success', 'mensagem'=>"Questão {$questao->questao} cadastrada com sucesso!", 'topicos'=>$topicos]);
        } catch (\Exception $e){
            DB::rollBack();
            return redirect()->back()->with(['tipo'=>'error', 'mensagem'=>$e->getMessage()]);
        }
    }

    public function edit(Questao $questao){
        $topicos = Topico::orderBy('titulo')->get();
        return view('questao.dados', compact(['questao', 'topicos']));
    }

    public function update(Request $request, Questao $questao){
        DB::beginTransaction();
        try {
            $questao->topico_id = $request->topico_id;
            $questao->questao = $request->questao;
            $questao->resposta = $request->resposta;
            $questao->save();
            DB::commit();
            return redirect()->back()->with(['tipo'=>'success', 'mensagem'=>"Questão {$questao->questao} atualizada com sucesso!"]);
        } catch (\Exception $e){
            DB::rollBack();
            return redirect()->back()->with(['tipo'=>'error', 'mensagem'=>$e->getMessage()]);
        }
    }

    public function delete(Questao $questao){
        DB::beginTransaction();
        try{
            $titulo = $questao->questao;
            $questao->delete();
            DB::commit();
            return redirect()->back()->with(['tipo'=>'success', 'mensagem'=>"Questão {$titulo} desativado com sucesso!"]);
        } catch (\Exception $e){
            DB::rollBack();
            return redirect()->back()->with(['tipo'=>'error', 'mensagem'=>$e->getMessage()]);
        }
    }
}
