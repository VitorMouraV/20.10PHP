<?php

namespace App\Http\Controllers;

use Illuminate\support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Caminhao;

class CaminhaoController extends Controller
{
    public function FormularioCadastro(){
        return view('cadastrarCaminhao');
    }

    public function MostrarEditarCaminhao(){

        $dadosCaminhao = Caminhao::all();
        return view('editarCaminhao',[
            'registrosCaminhao' => $dadosCaminhao
        ]);
    }
    

    public function SalvarBanco(Request $request){
        $dadosCaminhao = $request->validate([
            'modelos' => 'string|required',
            'marca' => 'string|required',
            'ano' => 'string|required',
            'cor' => 'string|required',
            'valor' => 'string|required'
        ]);
        
        Caminhao::create($dadosCaminhao);

        return Redirect::route('home');
    }

        public function ApagarBancoCaminhao(Caminhao $registrosCaminhao){
            $registrosCaminhao-> delete();
         
            return Redirect::route('editar-caminhao');           
               
        }
        public function MostrarAlterarCaminhao(Caminhao $registrosCaminhao){
            return view('alterarCaminhao',['registrosCaminhoes' => registrosCaminhoes]);
        }
}
