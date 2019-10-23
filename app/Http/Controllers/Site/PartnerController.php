<?php

namespace App\Http\Controllers\Site;

use App\Models\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Partner::orderby('nome', 'ASC')->paginate();
        return view('sections.partners.index', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sections.partners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Partner $partner)
    {

        $extension = $request->imagem->getClientOriginalExtension();
        $name = uniqid();
        $nameFile = "{$name}.{$extension}";
        $upload = $request->imagem->storeAs('public', $nameFile);
        $partner->create([
            'nome' => $request->nome,
            'link' => $request->link,
            'imagem' => $nameFile
        ]);
        return redirect()->route('partners.index')->withStatus('Cadastro realizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Partner $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        $imagem = Storage::delete('public/' . $partner->imagem);
        if ($imagem) {
            $rs = $partner->delete();
            return redirect()->route('partners.index')->withStatus('Cadastro excluído com sucesso.');
        }
    }
}
