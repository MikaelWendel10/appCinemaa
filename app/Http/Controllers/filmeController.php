<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Filme;

class filmeController extends Controller
{
    //construimos o CRUD aqui

    public function buscaCadastroFilme(){
        return View('cadastroFilme');
    }

    public function cadastrarFilme(Request $request){
        $dadosFilme = $request->validate([
            'nomefilme' => 'string|required',
            'atoresfilme' => 'string|required',
            'datalancamentofilme' => 'string|required',
            'sinopsefilme' => 'string|required',
            'capafilme' => 'file|required'
        ]);
       // dd($dadosFilme);

        $file = $dadosFilme['capafilme'];
        $path = $file->store('capa','public');
        $dadosFilme['capafilme'] = $path;
        
        Filme::create($dadosFilme);

        return Redirect::route('home');
    }
    public function MostrarGerenciadorFilme(Request $request){
        $dadosFilme = Filme::all();
       // dd($dadosFilme);
       
        $dadosFilme = Filme::query();
        $dadosFilme->when($request->nomefilme,function($query,$nomefilme ){
            $query->where('nomefilme','like','%'.$nomefilme.'%');
        }); 

        $dadosFilme = $dadosFilme->get();

        return view('gerenciadorFilme',['dadosfilme'=>$dadosFilme]);
        
    }

    public function ApagarFilme(Filme  $registrosFilme){
        $registrosFilme->delete(); 
    
        return redirect ::route('gerenciar-filme');
         
           
     }
    
     public function MostrarRegistrosFilme(Filme $registrosFilme){
        return view('xxx',['registrosFilme'=>$registrosFilme]);
     }
    
     public function AlterarBancoFilme(Filme $registrosFilme, Request $request){
    
        $dadosFilme = $request->validate([
            'nomefilme'=> 'string | required',
            'atoresfilme'=> 'string | required',
            'datalancamentofilme'=> 'string | required',
            'sinopsefilme'=> 'string | required',
            'capafilme'=> 'string | required'
        ]); 
    
        $registrosFilme-fill($dadosFilme);
        $registrosFilme->save();
    
        return redirect ::route('gerenciar-filme');
    
    }
}
