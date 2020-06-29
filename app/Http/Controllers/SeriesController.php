<?php

namespace App\Http\Controllers;

use App\Models\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
{

    public function renderIndex( Request $request ){

        $series = Series::all();

        return view('admin.pages.series.index', compact('series'));

    }

    public function renderCreate( Request $request ){

        return view('admin.pages.series.form');

    }

    public function store( Request $request ){

        $nome = $request->nome;
        $serie = new Series();
        $serie->nome = $nome;
        $serie->save();

        return redirect(route('series.list'))->with('message', 'Cadastro realizado com sucesso.');

    }

}
