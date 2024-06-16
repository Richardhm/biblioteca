<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class PdfController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        return view('pdf',[
            "categorias" => $categorias
        ]);
    }

    public function upload(Request $request)
    {
        $validacao = $request->validate([
            'pdf' => 'required|mimes:pdf',
            'categoria_id' => 'required|exists:categorias,id',
            'titulo' => 'required|min:3',
            'descricao' => 'required|min:3|max:300'
        ],[
            'pdf.required' => 'O campo PDF é obrigatório.',
            'pdf.mimes' => 'O arquivo deve ser um PDF.',
            'pdf.max' => 'O tamanho máximo do PDF é 2 MB.',
            'categoria_id.required' => 'A categoria é obrigatória.',
            'categoria_id.exists' => 'A categoria selecionada não existe.',
            'titulo.required' => 'O campo título é obrigatório.',
            'titulo.min' => 'O título deve ter pelo menos 3 caracteres.',
            'descricao.required' => 'O campo descrição é obrigatório.',
            'descricao.min' => 'A descrição deve ter pelo menos 3 caracteres.',
            'descricao.max' => 'A descrição não pode ter mais de 300 caracteres.',
        ]);

        if ($request->file('pdf')->isValid()) {
            $pdfPath = $request->file('pdf')->store('pdfs','public');
            $pdf = new Pdf();
            $pdf->categoria_id = $request->categoria_id;
            $pdf->titulo = $request->titulo;
            $pdf->descricao = $request->descricao;
            $pdf->pdf = $pdfPath;
            $pdf->save();

            return redirect()->route('pdf')->with('url', Storage::url($pdfPath));
        }



        //return response()->json(['error' => 'Erro ao fazer upload do PDF'], 400);
    }
}
