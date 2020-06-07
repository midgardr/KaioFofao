<?php

namespace App\Http\Controllers;

use App\Topico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopicoController extends Controller
{
    protected $topico;

    public function __construct(Topico $topico){
        $this->topico = $topico;
    }

    public function index(Request $request){
        $query = $this->topico->orderBy('titulo');
        if(!empty($request->titulo)){
            $query->where('titulo', 'LIKE', '%'.$request->titulo.'%');
        }
        $topicos = $query->paginate(30);
        return view('topico.index', compact('topicos'));
    }

    public function create(){
        return view('topico.dados');
    }

    public function store(Request $request){
        $topico = $this->topico;
        DB::beginTransaction();
        try {
            $topico->codigo = $request->codigo;
            $topico->titulo = $request->titulo;
            $topico->save();
            DB::commit();
            return redirect()->route('topico.edit', $topico)->with(['tipo'=>'success', 'mensagem'=>"Tópico {$topico->titulo} cadastrado com sucesso!"]);
        } catch (\Exception $e){
            DB::rollBack();
            return redirect()->back()->with(['tipo'=>'error', 'mensagem'=>$e->getMessage()]);
        }
    }

    public function edit(Topico $topico){
        return view('topico.dados', compact('topico'));
    }

    public function update(Request $request, Topico $topico){
        DB::beginTransaction();
        try {
            $topico->codigo = $request->codigo;
            $topico->titulo = $request->titulo;
            $topico->save();
            DB::commit();
            return redirect()->back()->with(['tipo'=>'success', 'mensagem'=>"Tópico {$topico->titulo} atualizado com sucesso!"]);
        } catch (\Exception $e){
            DB::rollBack();
            return redirect()->back()->with(['tipo'=>'error', 'mensagem'=>$e->getMessage()]);
        }
    }

    public function delete(Topico $topico){
        DB::beginTransaction();
        try{
            $titulo = $topico->titulo;
            $topico->delete();
            DB::commit();
            return redirect()->back()->with(['tipo'=>'success', 'mensagem'=>"Tópico {$titulo} removido com sucesso!"]);
        } catch (\Exception $e){
            DB::rollBack();
            return redirect()->back()->with(['tipo'=>'error', 'mensagem'=>$e->getMessage()]);
        }
    }
    public function simular(Topico $topico){
        return view('topico.simular', compact('topico'));
    }

    public function questoes(Topico $topico){
        return redirect()->route('questao.index', "pesquisa=true&topico_id={$topico->id}");
    }
}
