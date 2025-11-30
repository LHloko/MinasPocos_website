<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    /**
     * Realiza o upload de uma imagem enviada pelo usuário,
     * valida o arquivo, salva no storage público e retorna
     * o caminho para uso no frontend.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function upload(Request $request){
        // Validacao da img enviada 
        // - required -> campo obrigatorio 
        // - image -> precisa ser reconhecida como imagem 
        // - mime -> formatos permitidos 
        // - max -> tamanho maximo 
        $request->validate(['imagem' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048']);

        // Gerar um nome unico para o arquivo novo upado
        $nomeArquivo = uniqid() . '.' . $request->imagem->extension();

        // Armazena o arquivo em storage/app/public/uploads
        $request->imagem->storeAs('uploads',$nomeArquivo,'public');

        // Retorna para a pagina anterior com aviso de sucesso ou falha
        return back()
            ->with('sucesso','Upload feito!')
            ->with('Arquivo', "/storage/uploads/$nomeArquivo");

    }
}
