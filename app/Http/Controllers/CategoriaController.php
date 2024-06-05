<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CategoriaController extends Controller
{

    public function index()
    {
        $cat = Categoria::all();
        return view('categoria',[
            'categoria' => $cat
        ]);
    }

    public function show($slug)
    {
        $categoria = Categoria::where('slug', $slug)->firstOrFail();
        $pdfs = Pdf::where('categoria_id', $categoria->id)->get();
        return view('categorias.show', compact('categoria', 'pdfs'));
    }


    public function cadastrar(Request $request)
    {
        $validacao = $request->validate([
            'categoria' => 'required',
            'capa' => 'required|image|max:2048'
        ],[
            'categoria.required' => "Categoria e campo obrigatorio",
            'capa.required' => 'O campo Capa é obrigatório.',
            'capa.image' => 'O arquivo da capa deve ser uma imagem.',
            'capa.max' => 'O tamanho máximo da capa é 2 MB.'
        ]);

        if($request->file('capa')->isValid()) {
            $capaPath = $request->file('capa')->store('categorias','public');
            $cat = new Categoria();
            $cat->nome = $request->categoria;
            $cat->capa = $capaPath;
            $cat->slug = Str::slug($request->categoria);
            $cat->save();
        }

        return redirect()->route('categoria.index');
    }

    public function destroy($id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();

        return redirect()->route('categoria.index')->with('success', 'Categoria deletada com sucesso!');
    }





}
