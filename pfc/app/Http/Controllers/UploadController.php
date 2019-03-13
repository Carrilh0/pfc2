<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Documento;

use App\Models\Funcionario;

use Illuminate\Support\Str;

class UploadController extends Controller
{
    public function formularioDocumento(){

        return view('upload');
    }

    public function upload(Request $request){

        if (empty($request->file)):
            abort(400, 'Nenhum arquivo foi enviado.');
        endif;

        if ($request->hasFile('file')):
            
            //Cadastro funcionario
            $funcionario = Funcionario::create([

                'nome'  => $request->nome,
                'setor' => $request->setor,
            ]);

            //Formatar nome arquivo nome-nome
            $nomeFile = Str::kebab("$request->arquivo");

            //Pega extensão arquivo
            $ext = $request->file->extension();
            
            //Array contendo nome do arquivo e id do usuário
            $nomeFile = [            

                'nome'           => "$nomeFile.$ext",
                'funcionario_id' => $funcionario->id,
            ]; 

            //Cadastra documento no banco
            $funcionario->documento()->create($nomeFile);

            //Move arquivo /tmp => public/storage/documento
            $request->file->storeAs('documento', $nomeFile['nome']);

        endif;

    }
}
